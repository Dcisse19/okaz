<?php
session_start();
require_once dirname(__DIR__) . "/utils/utils.php";
require_once dirname(__DIR__) .'/vendor/autoload.php';
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();
$user = getLoggedUser();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../CSS/font-awesome.css">
    <link rel="stylesheet" href="../CSS/back_office.css">
    <title>Back_Office OKAZ</title>
</head>

<body>
    <header>
        <nav>
            <ul class="navigate">
                <li><a href="back_office.php">BACK OFFICE</a></li>
                <li><a href="../index.php">ACCEUIL OKAZ</a></li>
            </ul>
            <div class="modify">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Catégories
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="add_category.php">Ajouter</a></li>
                        <li><a class="dropdown-item" href="modify_category.php">Modifier</a></li>
                        <li><a class="dropdown-item" href="delete_category.php">Supprimer</a></li>
                    </ul>
                </div>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Produits
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="add_product.php">Ajouter</a></li>
                        <li><a class="dropdown-item" href="modify_product.php">Modifier</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>