<?php
require_once './vendor/autoload.php';
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="./CSS/font-awesome.css">
    <title>OKAZ</title>
</head>

<body>
    <div class="">
        <header class="py-3 px-20 bg-slate-900 ">
            <div class="container flex mx-auto justify-between items-center">
                <div class="flex place-items-center gap-3">
                    <i class="fa-brands fa-facebook-f fa-lg" style="--fa-primary-color: white"></i>
                    <i class="fa-brands fa-instagram fa-lg"></i>
                    <i class="fa-brands fa-twitter fa-lg"></i>
                </div>
                <div class="hidden justify-between items-center gap-5">
                    <div class=" bg-amber-500 rounded-lg flex gap-3 place-items-center">
                        <i class="pl-2 fa-solid fa-circle-user"></i>
                        <p class="pr-4 text-white">Mon compte</p>
                    </div>
                    <i class="place-self-center fa-solid fa-cart-arrow-down fa-lg"></i>
                </div>
                <div class="flex justify-between items-center gap-5">
                    <ul class="list-none flex gap-6 justify-between items-center">
                        <li>
                            <button id="loginLink" class="text-lg font-light text-white hover:text-amber-500">
                                <!-- <a class="text-lg font-light text-white hover:text-amber-500" href="#"> -->
                                <i class="fa-solid fa-arrow-right-to-bracket mr-3"></i>Connexion
                                <!-- </a> -->
                            </button>
                        </li>
                        <li>
                            <a id="signupLink" class="text-lg font-light text-white hover:text-amber-500" href="#" data-bs-toggle="modal">
                                <i class="fa-solid fa-inbox mr-3"></i>Inscription</a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>

        <nav class="py-4 px-20 border-b-slate-400 border-2 bg-white ">
            <div class="container mx-auto flex justify-between items-center">
                <a href="index.php">
                    <img class="w-20" src="./images/logo_okaz.png" alt="logo_okaz">
                </a>
                <ul class="list-none flex gap-6 justify-between items-center">
                    <li>
                        <a class="text-lg text-gray-700 hover:text-amber-500 active:text-amber-500" href="index.php">Acceuil</a>
                    </li>
                    <li>
                        <a class="text-lg text-gray-700 hover:text-amber-500 active:text-amber-500" href="#">A propos</a>
                    </li>
                    <li>
                        <a class="text-lg text-gray-700 hover:text-amber-500 active:text-amber-500" href="#">Boutique</a>
                    </li>
                    <li>
                        <a class="text-lg text-gray-700 hover:text-amber-500 active:text-amber-500" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
        <section class="bg-gray-300 shadow-slate-400 shadow-md py-24 px-40">
            <div class="container mx-auto flex-col items-center">
                <h1 class="text-5xl text-center font-light uppercase mb-10">Titre</h1>
                <p class="text-center font-light">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit ab modi earum perferendis eos nulla eaque, illum officia cupiditate asperiores velit ullam at veniam. Dicta dolorem quo mollitia sequi rerum perspiciatis corrupti iusto esse expedita. Provident expedita aperiam sed numquam explicabo. Iure, aspernatur quidem iusto totam quis perferendis modi error.</p>
            </div>
        </section>
    </div>


    <!-- Modals -->
    <!-- <section class="hidden z-1"> -->
    <div id="signupModal" class="fixed hidden inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full ">
        <form class=" relative top-20 w-1/2 mx-auto bg-white border rounded p-8 shadow-md">
            <h1 class="text-4xl font-light text-center mb-10 uppercase">Inscription</h1>

            <div class="flex gap-6 mb-4">
                <div class="w-1/2">
                    <label class="block mb-2" for="firstname">Mon prénom:</label>
                    <input value="" class="border rounded border-gray-200 py-2 px-4 w-full outline-none shadow-sm" type="text" name="firstname" id="firstname">
                </div>
                <div class="w-1/2">
                    <label class="block mb-2" for="lastname">Mon nom:</label>
                    <input value="" class="border rounded border-gray-200 py-2 px-4 w-full outline-none shadow-sm" type="text" name="lastname" id="lastname">
                </div>
            </div>

            <div class="flex gap-6 mb-4">
                <div class="w-1/2">
                    <label class="block mb-2" for="email">Mon email:</label>
                    <input value="" class="border rounded border-gray-200 py-2 px-4 w-full outline-none shadow-sm" type="email" name="email" id="email">
                </div>
                <div class="w-1/2">
                    <label class="block mb-2" for="address">Mon adresse:</label>
                    <input value="" class="border rounded border-gray-200 py-2 px-4 w-full outline-none shadow-sm" type="text" name="address" id="address">
                </div>
            </div>

            <div class="flex gap-6 mb-4">
                <div class="w-1/2">
                    <label class="block mb-2" for="postal">Mon code postal:</label>
                    <input value="" class="border rounded border-gray-200 py-2 px-4 w-full outline-none shadow-sm" type="text" name="postal" id="postal">
                </div>
                <div class="w-1/2">
                    <label class="block mb-2" for="city">Ma ville:</label>
                    <input value="" class="border rounded border-gray-200 py-2 px-4 w-full outline-none shadow-sm" type="text" name="city" id="city">
                </div>
            </div>

            <div class="flex gap-6 mb-4">
                <div class="w-1/2">
                    <label class="block mb-2" for="password">Mon mot de passe:</label>
                    <input class="border rounded border-gray-200 py-2 px-4 w-full outline-none shadow-sm" type="password" name="password" id="password">
                </div>
                <div class="w-1/2">
                    <label class="block mb-2" for="confirm">Confirmation du mot de passe:</label>
                    <input class="border rounded border-gray-200 py-2 px-4 w-full outline-none shadow-sm" type="password" name="confirm" id="confirm">
                </div>
            </div>
            <div class="flex gap-6 justify-between mt-5">
                <button class="text-lg rounded py-3 w-1/2 bg-blue-400 hover:bg-blue-500 text-white font-semibold">
                    <i class="fa-solid fa-paper-plane mr-2"></i>Envoyer
                </button>
                <button class="rounded p-3 bg-red-600 hover:bg-red-700">
                    <i id="closeSignupModal" class="fa-solid fa-xmark fa-2xl"></i>
                </button>
            </div>

        </form>
    </div>

    <!-- </section> -->

    <!-- Bootstrap -->
    <script src="./JS/header.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script> -->
</body>

</html>