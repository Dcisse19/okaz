<?php
require_once "MainModel.php";
require_once "Product.php";
require_once dirname(__DIR__) . "/utils/utils.php";

class ProductModel extends MainModel
{
    public function getProductsByCategory()
    {
        $CategoryId = checkQueryId();
        $availability = 1;
        $query = $this->pdo->query("SELECT * FROM `dda_product` WHERE (`id_dda_product_category` = $CategoryId AND `availability`= $availability )");
        $products = $query->fetchAll(PDO::FETCH_CLASS, "Product");

        if (!$products) {
            redirect();
        }
        return $products;
    }

    public function getOneProduct(){

        $ProductId = checkQueryId();
        $query = $this->pdo->query("SELECT * FROM `dda_product` WHERE `id` = $ProductId");
        $query->setFetchMode(PDO::FETCH_CLASS, "Product");
        $product = $query->fetch();

        if (!$product) {
            redirect();
        }
        return $product;
    }

    public function getOneProductById($id)
    {
      // On effectue notre query SQL pour retourner une donnée unique
      $query = $this->pdo->query("SELECT * FROM dda_product WHERE id = $id");
      $query->setFetchMode(PDO::FETCH_CLASS, "Product");
      $product = $query->fetch();
      return $product;
    }
}
