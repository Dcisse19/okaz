<?php
require_once './includes/header.php';
require_once './signup_form.php'; // Formulaire d'inscription - modal 
require_once './login_form.php'; // Formulaire de connexion - modal 

?>

<!-- SECTION TITRE -->
<?php
$title = 'Mon profil';
$subTitle = '';
require_once './includes/title.php';

?>

<!-- ------ formulaire------- -->

<section class="py-20 px-40">
    <div class="container mx-auto flex justify-start ">
        <?php require_once './components/account_sidebar.php'; ?>

        <form action="profile.php" class="top-20 w-1/2 mx-auto border-rounded py-8 px-10">

            <div class="flex flex-col">
                <h1 class="text-4xl text-center mb-10 uppercase tracking-wide">MODIFIER MON PROFIL</h1>
            </div>


            <div class="flex gap-6 mb-4">
                <div class="w-1/2">
                    <label class="block mb-2" for="firstname">Prénom</label>
                    <input value="" class="border rounded border-gray-200 py-2 px-4 w-full outline-slate-800 shadow-lg" placeholder="Prénom" type="text" name="firstname" id="firstname">
                </div>
                <div class="w-1/2">
                    <label class="block mb-2" for="lastname">Nom</label>
                    <input value="" class="border rounded border-gray-200 py-2 px-4 w-full outline-slate-800 shadow-lg" placeholder="Nom" type="text" name="lastname" id="lastname">
                </div>
            </div>

            <div class="flex gap-6 mb-4">
                <div class="w-1/2">
                    <label class="block mb-2" for="email">Email</label>
                    <input value="" class="border rounded border-gray-200 py-2 px-4 w-full outline-slate-800 shadow-lg" placeholder="Email" type="email" name="email" id="email">
                </div>
                <div class="w-1/2">
                    <label class="block mb-2" for="phoneNumber">Numéro de télephone</label>
                    <input value="" class="border rounded border-gray-200 py-2 px-4 w-full outline-slate-800 shadow-lg" placeholder="Numéro de télephone" type="tel" name="phoneNumber" id="phoneNumber">
                </div>
            </div>

            <div class="mb-4">
                <label class="block mb-2" for="address">Adresse</label>
                <input value="" class="border rounded border-gray-200 py-2 px-4 w-full outline-slate-800 shadow-lg" placeholder="Adresse" type="text" name="address" id="address">
            </div>

            <div class="flex gap-6 mb-4">
                <div class="w-1/2">
                    <label class="block mb-2" for="postal">Code postal</label>
                    <input value="" class="border rounded border-gray-200 py-2 px-4 w-full outline-slate-800 shadow-lg" placeholder="Code postal" type="text" name="postal" id="postal">
                </div>
                <div class="w-1/2">
                    <label class="block mb-2" for="city">Ville</label>
                    <input value="" class="border rounded border-gray-200 py-2 px-4 w-full outline-slate-800 shadow-lg" placeholder="Ville" type="text" name="city" id="city">
                </div>
            </div>

            <div class="flex justify-center mt-10">
                <button class="shadow-lg rounded-full py-2 px-10 bg-orange hover-bg-darkgrey text-white font-semibold uppercase tracking-wider">Modifier
                </button>
            </div>
        </form>
    </div>
</section>


<!-- ------- footer -------- -->
<?php require_once './includes/footer.php'; ?>