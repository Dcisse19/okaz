<?php
require_once "MainModel.php";
require_once "Category.php";

class CategoryModel extends MainModel
{
    public function getAllCategories()
    {
        $stmt = $this->pdo->query("SELECT * FROM `dda_product_category`");
        return $stmt->fetchAll(PDO::FETCH_CLASS, "Category");
    }

    public function getOneCategory()
    {
        $id = $this->checkQueryId();
        $query = $this->pdo->query("SELECT * FROM `dda_product_category` WHERE `id` = $id");
        $query->setFetchMode(PDO::FETCH_CLASS, "Category");
        $category = $query->fetch();

        if (!$category) {
            $this->redirect();
        }
        return $category;
    }

    // Cette méthode vérifie l'ID en query string et nous retourne cet ID
    private function checkQueryId()
    {
        // Nous vérifions si notre query ID existe bien, et a une valeur numéric
        if (!isset($_GET["id"]) || !is_numeric($_GET["id"])) {
            $this->redirect();
        }
        return (int)$_GET["id"];
    }
}
