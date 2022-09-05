<?php
require_once './includes/header.php';
require_once './signup_form.php'; // Formulaire d'inscription - modal 
require_once './login_form.php'; // Formulaire de connexion - modal 


$title = 'Je passe commande';
$subTitle = '';
require_once './includes/title.php';
?>

<!-- Contenu de la page -->
<section class="container mx-auto py-32 px-48">

    <!-- Progress bar  -->
    <div class="flex mb-32">

        <div class="flex-1 content-center">
            <div class="w-10 h-10 bg-grey border-darkgrey mx-auto rounded-full text-lg font-semibold flex place-items-center mb-2">
                <!-- <i class="fas fa-regular fa-check"></i> -->
                <span class="text-center w-full">1</span>
            </div>
            <p class="text-sm text-center">Panier</p>
        </div>


        <div class="w-1/6 align-center items-center align-middle content-center flex">
            <div class="w-full bg-grey rounded items-center align-middle align-center flex-1">
                <div class="bg-orange text-xs leading-none py-1 text-center text-grey-darkest rounded " style="width: 100%"></div>
            </div>
        </div>


        <div class="flex-1">
            <div class="w-10 h-10 bg-grey borde-darkgrey mx-auto rounded-full text-lg font-semibold flex items-center mb-2">
                <span class="text-center w-full">2</span>
            </div>
            <p class="text-sm text-center">Livraison</p>
        </div>

        <div class="w-1/6 align-center items-center align-middle content-center flex">
            <div class="w-full bg-grey rounded items-center align-middle align-center flex-1">
                <div class="bg-orange text-xs leading-none py-1 text-center text-grey-darkest rounded " style="width: 100%"></div>
            </div>
        </div>

        <div class="flex-1">
            <div class="w-10 h-10 bg-orange border-darkgrey mx-auto rounded-full text-lg font-semibold flex items-center mb-2">
                <span class="text-center w-full">3</span>
            </div>
            <p class="text-sm text-center">Paiement</p>
        </div>


        <div class="w-1/6 align-center items-center align-middle content-center flex">
            <div class="w-full bg-grey-light rounded items-center align-middle align-center flex-1">
                <div class="bg-grey text-xs leading-none py-1 text-center text-grey-darkest rounded " style="width: 100%"></div>
            </div>
        </div>


        <div class="flex-1">
            <div class="w-10 h-10 bg-grey border-darkgrey mx-auto rounded-full text-lg font-semibold flex items-center mb-2">
                <span class="text-center w-full">4</span>
            </div>
            <p class="text-sm text-center">Récapitulatif</p>
        </div>

    </div>
    <!-- END OF PROGRESS BAR  -->
    <hr class="block mx-auto w-2/3 border-darkgrey border-t-0 border-b-2 mb-32" />
    <div class="container mx-auto bg-eggshell px-16 py-20">
        <p class="text-center text-3xl uppercase mb-20 font-light">Paiement de votre commande</p>

        <form action="recap.php" class="px-20">
            <div class="mb-4">
                <label class="block mb-2" for="email">N° de carte bancaire</label>
                <input value="" class="border rounded border-gray-200 py-2 px-4 w-full outline-slate-800 shadow-lg" placeholder="N° de carte bancaire" type="text" name="card_number" id="card_number" required>
            </div>

            <div class="flex space-x-4">
                <div class="">
                    <label class="block mb-2" for="password">Date d'expiration</label>
                    <input class="border rounded border-gray-200 py-2 px-4 w-full outline-slate-800 shadow-lg" placeholder="MM/AA" type="text" name="expiration_date" id="expiration_date" required>
                </div>
                <div class="">
                    <label class="block mb-2" for="password">Code CVV</label>
                    <input class="border rounded border-gray-200 py-2 px-4 w-full outline-slate-800 shadow-lg" placeholder="Code CVV" type="text"  name="cvv_code" id="cvv_code" required>
                </div>
            </div>

            <div class="flex justify-center mt-14">
                <button class="shadow-lg rounded-full py-2 px-10 bg-orange hover-bg-darkgrey text-white font-semibold uppercase tracking-wider">Valider
                </button>
            </div>
        </form>

        <!-- <div class=" bg-orange hover-bg-darkgrey w-fit rounded-full py-2 px-8 block m-auto mt-10 ">
            <a href="#" class="text-white text-lg font-semibold tracking-wider">Valider</a>
        </div> -->
    </div>


</section>

<?php require_once './includes/footer.php'; ?>