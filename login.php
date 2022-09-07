<?php
require_once './includes/header.php';


// $title = 'Inscription';
// $subTitle = 'Ceci est la page boutique';
// require_once './includes/title.php';
?>

<!-- Contenu de la page -->
<div class="container py-28">
    <!-- <div id="signupModal" class="fixed hidden inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full"> -->
        <form class=" container w-1/2 mx-auto border-rounded p-10 shadow-xl" method="POST">

        <div class="flex flex-col">
            <h1 class="text-5xl text-center mb-10 uppercase text-darkgrey tracking-wide">Connexion</h1>
            <p class="text-center text-lg mb-8">Déja inscrit ? <br />Merci de vous identifier</p>
        </div>

        <div class="mb-4">
            <label class="block mb-2" for="email">Email<span class='text-red-600'> *</span></label>
            <input value="" class="border rounded border-gray-200 py-2 px-4 w-full outline-slate-800 shadow-lg" placeholder="Email" type="email" name="email" id="email" required>
        </div>

        <div class="mb-4">
            <label class="block mb-2" for="password">Mot de passe<span class='text-red-600'> *</span></label>
            <input class="border rounded border-gray-200 py-2 px-4 w-full outline-slate-800 shadow-lg" placeholder="Mot de passe" type="password" name="password" id="password" required>
        </div>
            <p class='mt-6'><span class='text-red-600'>* </span> Champs obligatoires</p>
            <div class="flex justify-center mt-10">
                <button class="shadow-lg rounded-full py-2 px-10 bg-orange hover-bg-darkgrey text-white font-semibold uppercase tracking-wider">S'inscrire
                    <!-- <i class="fa-solid fa-paper-plane mr-2"></i> -->
                </button>
            </div>
        </form>
    <!-- </div> -->
</div>

<?php require_once './includes/footer.php'; ?>