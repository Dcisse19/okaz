<?php
require_once "MainModel.php";
require_once "User.php";
require_once dirname(__DIR__) . "/utils/utils.php";

class UserModel extends MainModel
{

    /**
     * Méthode pour enregistrer un utilisateur
     */
    public function setupUser()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $data = [
                "firstname" => "",
                "lastname" => "",
                "email" => "",
                "address" => "",
                "postal_code" => "",
                "city" => "",
                "telephone" => "",
                "errorEmail" => "",
                "errorTelephone" => "",
                "errorPostal_code" => "",
                "errorConfirm" => "",
                "errorEmail_exist" => "",
            ];

            // On stock chacun de nos inputs dans une variable
            $firstname = $_POST["firstname"];
            $data["firstname"] = $firstname;

            $lastname = $_POST["lastname"];
            $data["lastname"] = $lastname;

            $email = $_POST["email_signup"];
            $data["email"] = $email;

            $address = $_POST["address"];
            $data["address"] = $address;

            $postal_code = $_POST["postal_code"];
            $data["postal_code"] = $postal_code;

            $city = $_POST["city"];
            $data["city"] = $city;

            $telephone = $_POST["telephone"];
            $data["telephone"] = $telephone;

            $password = $_POST["password_signup"];
            $confirm = $_POST["confirm"];

            $query = $this->pdo->query("SELECT * FROM `dda_users` WHERE email = '$email'");
            $query->setFetchMode(PDO::FETCH_CLASS, "User");
            $user = $query->fetch();

            if($user){
                $data["errorEmail_exist"] = "Il semble que vous soyez déjà inscrit sur OKAZ";
            }
    

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $data["errorEmail"] = "Merci de remplir un email valide";
            }

            if (!filter_var($telephone, FILTER_VALIDATE_FLOAT)) {
                $data["errorTelephone"] = "Merci de remplir un numéro de téléphone valide";
            }
            if (!filter_var($postal_code, FILTER_VALIDATE_FLOAT)) {
                $data["errorPostal_code"] = "Merci de remplir un code postal valide";
            }
            // if (gettype($telephone) !== "integer") {
            //     $data["errorTelephone"] = "Merci de remplir un numéro de téléphone valide";
            // }

            if ($password !== $confirm) {
                $data["errorConfirm"] = "Les mots de passe ne correspondent pas";
            }


            
            if (!empty($data["errorEmail"]) || !empty($data["errorTelephone"]) || !empty($data["errorConfirm"]) || !empty($data["errorPostal_code"]) || !empty($data["errorEmail_exist"])) {
                return $data;
              }
        
            // Si nous n'avons pas d'erreurs, nous pouvons traiter les données.
            // $firstname = htmlspecialchars($firstname); => filtrer les strings sous PHP8
            $firstname = htmlspecialchars($firstname);
            $lastname = htmlspecialchars($lastname);
            $telephone = filter_var($telephone, FILTER_SANITIZE_NUMBER_INT);
            $email = filter_var($email, FILTER_SANITIZE_EMAIL);
            $address = htmlspecialchars($address);
            $postal_code = htmlspecialchars($postal_code);
            $city = htmlspecialchars($city);

            // On veut hasher le mot de passe
            $password = password_hash($password, PASSWORD_DEFAULT);

            // On prépare notre requête SQL
            $query = $this->pdo->prepare("
        INSERT INTO `dda_users` (firstname, lastname, telephone, email, address, postal_code, city, password)
        VALUES (:firstname, :lastname, :telephone, :email, :address, :postal_code, :city, :password);
      ");

            // On remplace les placeholders (optionnellement avec bindParam)
            $success = $query->execute([
                ":firstname" => $firstname,
                ":lastname" => $lastname,
                ":telephone" => $telephone,
                ":email" => $email,
                ":address" => $address,
                ":postal_code" => $postal_code,
                ":city" => $city,
                ":password" => $password,
            ]);

            // if ($success) => if ($success === true)
            // if (!$success) => if ($success === false)
            if($success){
                $this->redirect("login.php");
            } 
           
            // if ($success) {
            //     dump("Enregistrement reussi");
            // } else {
            //     dump("Enregistrement échoué");
            // }
        }
    }
}
