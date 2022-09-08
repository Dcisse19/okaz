<?php
require_once './includes/header.php';
isLogged();



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
            <div class="w-10 h-10 bg-orange border-darkgrey mx-auto rounded-full text-lg font-semibold flex items-center mb-2">
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
        <p class="text-center text-3xl uppercase mb-20 text-darkblue font-semibold">Choisisssez votre mode de livraison</p>

        <fieldset class="flex flex-col space-y-6 justify-center items-center">
            <div class="flex space-x-6">
                <input type="radio" id="store_delivery" name="choose_delivery" value="">
                <div class="container mx-auto w-[500px] bg-white p-5">
                    <p class="text-xl mb-3">Retrait dans votre magasin :</p>
                    <h3 class="text-orange text-xl font-semibold">OKAZ Villeneuve-le-Roi</h3>
                    <p class="text-lg"> <span class="font-bold">Adresse : </span>15 Avenue Dumarché, 94290 Villeneuve-le-Roi </p>
                </div>
            </div>
            <div class="flex space-x-6">
                <input type="radio" id="home_delivery" name="choose_delivery" value="">
                <div class="container  mx-auto w-[500px] bg-white p-5 ">
                    <p class="text-xl mb-3">Livraison à votre domicile au :</p>
                    <p class="text-lg mb-3"> <span class="font-bold">Adresse : </span>2 rue Jean Jaurès, 94290 Villeneuve-le-Roi </p>
                    <div class=" bg-eggshell hover-bg-darkgrey w-fit rounded-full py-1 px-6 block">
                        <a href="modify_profile.php" class="text-black hover:text-white text-sm font-semibold tracking-wider">Modifier l'adresse</a>
                    </div>
                </div>
            </div>
        </fieldset>


            <div class=" bg-orange hover-bg-darkgrey w-fit rounded-full py-2 px-8 block m-auto mt-10 ">
                <a href="payment.php" class="text-white text-lg font-semibold tracking-wider">Valider</a>
            </div>
    </div>

</section>

<?php require_once './includes/footer.php'; ?>