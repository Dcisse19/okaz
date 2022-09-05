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
            <div class="w-10 h-10 bg-orange border-darkgrey mx-auto rounded-full text-lg font-semibold flex items-center mb-2">
                <span class="text-center w-full">1</span>
            </div>
            <p class="text-sm text-center">Panier</p>
        </div>


        <div class="w-1/6 align-center items-center align-middle content-center flex">
            <div class="w-full bg-grey rounded items-center align-middle align-center flex-1">
                <div class="bg-grey text-xs leading-none py-1 text-center text-grey-darkest rounded " style="width: 100%"></div>
            </div>
        </div>


        <div class="flex-1">
            <div class="w-10 h-10 bg-grey border-darkgrey mx-auto rounded-full text-lg font-semibold flex items-center mb-2">
                <span class="text-center w-full">2</span>
            </div>
            <p class="text-sm text-center">Livraison</p>
        </div>

        <div class="w-1/6 align-center items-center align-middle content-center flex">
            <div class="w-full bg-grey rounded items-center align-middle align-center flex-1">
                <div class="bg-grey text-xs leading-none py-1 text-center text-grey-darkest rounded " style="width: 100%"></div>
            </div>
        </div>

        <div class="flex-1">
            <div class="w-10 h-10 bg-grey border-darkgrey mx-auto rounded-full text-lg font-semibold flex items-center mb-2">
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
        <p class="text-center text-3xl uppercase mb-20 font-light">Votre panier a 2 articles</p>

            <div class="flex space-x-10 bg-white p-5">
                <img class=" h-[170px] w-[200px]" src="https://images.unsplash.com/photo-1573866926487-a1865558a9cf?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTF8fGNvdWNofGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=600&q=60" alt="Table_basse">
                <div class="flex flex-col space-y-3">
                    <h3 class="text-2xl uppercase font-light">Canapé en cuir matelassé</h3>
                    <h3 class="font-normal text-xl">H 70 cm, L 170 cm, P 95 cm</h3>
                    <h3 class="text-2xl">930,99€ TTC</h3>
                </div>
            </div>
            <div class="flex space-x-10 bg-white p-5">
                <img class=" h-[170px] w-[200px]" src="https://images.unsplash.com/photo-1595515106883-5d5da3043540?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8N3x8Y2FiaW5ldHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=600&q=60" alt="Table_basse">
                <div class="flex flex-col space-y-3">
                    <h3 class="text-2xl uppercase font-light">Set de 2 meubles de rangement </h3>
                    <h3 class="font-normal text-xl">H 90 cm, L 40 cm, P 38 cm et H 40 cm, L 100 cm, P 38 cm</h3>
                    <h3 class="text-2xl">410,99€ TTC</h3>
                </div>
            </div>


        <div class="flex flex-col justify-end space-y-6 mt-10">
            <h4 class="text-2xl uppercase text-center"> <span class="font-bold">Total : </span> 157€ TTC</h4>
            <div class=" bg-orange hover-bg-darkgrey w-fit rounded-full py-2 px-8 block m-auto">
                <a href="delivery.php" class="text-white text-lg font-semibold tracking-wider">Valider le panier</a>
            </div>
        </div>
    </div>

</section>

<?php require_once './includes/footer.php'; ?>