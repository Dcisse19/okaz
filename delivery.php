<?php
require_once './includes/phpheaders.php';
require_once "./src/UserModel.php";
require_once './src/CartModel.php';
isLogged();
$cm = new CartModel();
$cart = $cm->getCart();
if (!$cart){
    redirection("cart.php");
}
$userModel = new UserModel();
$user = $userModel->getUser();

require_once './includes/header.php';
$title = 'Je passe commande';
$subTitle = '';
require_once './includes/title.php';
?>

<!-- Contenu de la page -->
<section class="container mx-auto py-32 px-48">

    <!-- Progress bar  -->
    <div class="flex mb-32">

        <div class="flex-1 content-center">
            <a href="cart.php">
                <div class="w-10 h-10 bg-grey border-darkgrey mx-auto rounded-full text-lg font-semibold flex place-items-center mb-2">
                    <span class="text-center w-full">1</span>
                </div>
            </a>
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
        <p class="text-center text-3xl uppercase mb-20 text-darkblue font-semibold">Confirmez votre adresse de livraison</p>
        <div class="flex space-x-6">
            <div class="container  mx-auto w-[500px] bg-white p-5 flex flex-col content-center items-center space-y-3">
                <p class="text-xl">Livraison à votre domicile au :</p>
                <p class="text-lg font-bold"><?= $user["address"] . ", " . $user["postal_code"] . " " . $user["city"] ?></p>
                <a href="modify_profile.php" class="hover-text-orange  underline text-md tracking-wide">
                    <p class="text-center">Modifier l'adresse</p>
                </a>
            </div>
        </div>
        <div class=" bg-orange hover-bg-darkgrey w-fit rounded-full py-2 px-8 block m-auto mt-10 ">
            <a href="payment.php" class="text-white text-lg font-semibold tracking-wider">Valider</a>
        </div>
    </div>

</section>

<?php require_once './includes/footer.php'; ?>