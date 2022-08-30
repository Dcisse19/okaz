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
<?php require_once './includes/header.php' ?>
    

    <!-- </section> -->
    <!-- Implement the carousel -->
    <section class="bg-white shadow-slate-400 shadow-md py-24 px-40">
    <h1 class="text-4xl text-center font-light uppercase mb-14">Nos derniers meubles d'occasions</h1>

    <!-- Implement the carousel -->
    <div class="relative w-[600px] mx-auto">
        <div class="slide relative">
            <img class="w-full h-[300px] object-cover" src="https://www.kindacode.com/wp-content/uploads/2022/07/flower-1.jpeg">
            <div class="absolute bottom-0 w-full px-5 py-3 bg-black/40 text-center text-white">Flower One Caption</div>
        </div>

        <div class="slide relative">
            <img class="w-full h-[300px] object-cover" src="https://www.kindacode.com/wp-content/uploads/2022/07/flower-2.jpeg">
            <div class="absolute bottom-0 w-full px-5 py-3 bg-black/40 text-center text-white">Flower Two Caption</div>
        </div>

        <div class="slide relative">
            <img class="w-full h-[300px] object-cover" src="https://www.kindacode.com/wp-content/uploads/2022/07/flower-3.jpeg">
            <div class="absolute bottom-0 w-full px-5 py-3 bg-black/40 text-center text-white">Flower Three Caption
            </div>
        </div>

        <!-- The previous button -->
        <a class="absolute left-0 top-1/2 p-4 -translate-y-1/2 bg-black/30 hover:bg-black/50 text-white hover:text-amber-500 cursor-pointer" onclick="moveSlide(-1)">❮</a>

        <!-- The next button -->
        <a class="absolute right-0 top-1/2 p-4 -translate-y-1/2 bg-black/30 hover:bg-black/50 text-white hover:text-amber-500 cursor-pointer" onclick="moveSlide(1)">❯</a>

    </div>
    <br>

    <!-- The dots -->
    <div class="flex justify-center items-center space-x-5">
        <div class="dot w-4 h-4 rounded-full cursor-pointer" onclick="currentSlide(1)"></div>
        <div class="dot w-4 h-4 rounded-full cursor-pointer" onclick="currentSlide(2)"></div>
        <div class="dot w-4 h-4 rounded-full cursor-pointer" onclick="currentSlide(3)"></div>
    </div>
    </section>



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


    <!-- Bootstrap -->
    <script src="./JS/header.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script> -->
</body>

</html>