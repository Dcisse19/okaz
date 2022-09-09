<?php
require_once 'MainModel.php';
require_once 'ProductModel.php';
require_once 'UserModel.php';
require_once 'CartModel.php';


class OrderModel extends MainModel
{
    /**
     * Méthode pour récupérer les élements du panier au moment de la validation
     */

    public function insertOrderInfo()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {


            $card = $_POST["card_number"];
            $card_last_numbers = substr($card, -4);
            $card_number = "XXXX XXXX XXXX " . $card_last_numbers;

            $usermodel = new UserModel();
            $user = $usermodel->getUser();
            $userAddress =  $user["address"] . ", " . $user["postal_code"] . " " . $user["city"];

            $cartmodel = new CartModel();
            $cart = $cartmodel->getCart();
            $payment_amount = $cartmodel->getFullPrice($cart);
            $cart_id = $cartmodel->getCartById();



            $query = $this->pdo->prepare("INSERT INTO dda_order (payment_amount, payment_type, delivery_address, cart_id, id_dda_users) 
            VALUES (:payment_amount, :payment_type, :delivery_address, :cart_id, :id_user)");
            $query->execute([
                ":payment_amount" => $payment_amount,
                ":payment_type" => $card_number,
                ":delivery_address" => $userAddress,
                ":cart_id" => $cart_id["id"],
                ":id_user" => $user["id"]
            ]);

            $this->redirect("recap.php");
        } else {
            dump("Erreur de logique");
        }
    }
    public function getOrderInfoByCart()
    {

        $cartmodel = new CartModel();
        $cart_id = $cartmodel->getCartById();
        $query = $this->pdo->query("SELECT * FROM dda_order WHERE cart_id =" . $cart_id["id"]);
        $orderInfo = $query->fetch(PDO::FETCH_ASSOC);

        return $orderInfo;
    }

    /**
     * Méthode pour retourner notre commande
     */
    public function getOrder()
    {
        $bm = new ProductModel();
        $cartmodel = new CartModel();
        $cart_id = $cartmodel->getCartById();

        $query = $this->pdo->query("
        SELECT `id_dda_users`, `product_id`, `order_id` FROM `dda_order`
        JOIN `dda_order_products` ON `dda_order_products`.`order_id` = `dda_order`.`id`
        WHERE `cart_id` = " . $cart_id["id"]
      );
        $formatedOrder = [];
        $order = $query->fetchAll(PDO::FETCH_ASSOC);
        foreach ($order as $product) {
            $newOrder = $bm->getOneProductById($product["product_id"]);
            $formatedOrder[] = $newOrder;
        }
        return $formatedOrder;
        // voir le panier même si aucun livre n'a été ajouté.
    }

    public function getOrderInfo() {

        $cartmodel = new CartModel();
        $cart_id = $cartmodel->getCartById();
        $query = $this->pdo->query("SELECT * FROM dda_order WHERE cart_id =" . $cart_id["id"]);
        $orderInfo = $query->fetch(PDO::FETCH_ASSOC);
        return $orderInfo;
    }

    public function transferCartToOrder()
    {

        $orderInfo = $this->getOrderInfoByCart();
        $orderId = $orderInfo["id"];

        $cartmodel = new CartModel();
        $cart_id = $cartmodel->getCartById();
        // dd($cart_id);

        $query = $this->pdo->query("SELECT * FROM dda_cart_products WHERE cart_id =" . $cart_id["id"]);
        $cart = $query->fetchAll(PDO::FETCH_ASSOC);

        // dd($cart);
        // $products_id = [];
        foreach ($cart as $product) {
            $query = $this->pdo->prepare("INSERT INTO dda_order_products (order_id, product_id) VALUES (:order_id, :product_id)");
            $query->execute([":order_id" => $orderId, "product_id" => $product["product_id"]]);
            // $products_id[] = $product["product_id"];
        }
        // On supprime les articles du panier et le panier ainsi que le produit (unique) dans la table produits
        $availability = 0;
        foreach ($cart as $product) {
            $query = $this->pdo->query("DELETE FROM dda_cart_products WHERE product_id = " . $product["product_id"]);
            $query = $this->pdo->prepare("UPDATE dda_product SET availability = :availability WHERE id = " . $product["product_id"]);
            $query->execute([":availability" => $availability]);
        }
        $query = $this->pdo->query("DELETE FROM dda_cart WHERE id =" . $cart_id["id"]);
    }
}
