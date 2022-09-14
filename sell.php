<?php
require_once './includes/header.php';



$title = 'VENDRE SUR OKAZ';
$subTitle = "Vous déménagez ou souhaitez renouveler votre intérieur. Vous ne savez pas quoi faire de vos anciens meubles, pourquoi ne pas les vendre? Chez Okaz, nous vous rachetons vos biens au prix le plus juste. Vous pouvez également mettre en vente vos meubles par dépôt-vente.";
require_once './includes/title.php';
?>

<!-- Contenu de la page -->


<section class="py-16 px-3 bg-white">
    <div class="container mx-auto ">
        <h2 class="text-center mb-8 text-4xl font-bold uppercase text-orange">Comment ça marche ?</h2>

        <div class="grid grid-cols-2 gap-y-20 px-52 py-20 content-center">
            <div class="container mx-auto p-5 w-[450px] h-[300px] bg-white grid">
                <i class="fas fa-regular fa-shop text-center fa-3x"></i>
                <h3 class="text-center  text-orange text-4xl font-bold uppercase">#1</h3>
                <h4 class="text-center text-2xl uppercase">rendez-vous en magasin</h4>
                <p class="text-center text-lg ">
                   Rendez vous dans le magasin le plus proche de chez vous avec vos meubles à vendre. 
                </p>
            </div>
            <div class="container mx-auto p-5 w-[450px] h-[300px] bg-white grid">
                <i class="fas fa-regular fa-magnifying-glass-dollar text-center fa-3x"></i>
                <h3 class="text-center  text-orange text-4xl font-bold uppercase">#2</h3>
                <h4 class="text-center text-2xl uppercase">estimation du bien</h4>
                <p class="text-center text-lg ">
                   Un expert estime la valeur de vos meubles. 
                </p>
            </div>
            <div class="container mx-auto p-5 w-[450px] h-[350px] bg-white grid">
                <i class="fas fa-refular fa-money-bill-1-wave text-center fa-3x"></i>
                <h3 class="text-center  text-orange text-4xl font-bold uppercase">#3</h3>
                <h4 class="text-center text-2xl uppercase">choix du paiement</h4>
                <p class="text-center text-lg ">
                    Deux formules sont proposées: </br>
                    1. L’achat cash, vous êtes payés immédiatement</br>
                    2. Le dépôt vente, vous êtes payés quelques jours après la vente  
                </p>
            </div>
            <div class="container mx-auto p-5 w-[450px] h-[350px] bg-white grid">
                <i class="fas fa-regular fa-cart-arrow-down text-center fa-3x"></i>
                <h3 class="text-center  text-orange text-4xl font-bold uppercase">#4</h3>
                <h4 class="text-center text-2xl uppercase">Mise en vente</h4>
                <p class="text-center text-lg ">
                   OKAZ s’occupe de tout pour vous. Nos équipes se charge de l’exposition et de la vente sur notre site et en magasin. 
                </p>
            </div>
        </div>
    </div>
</section>


<?php require_once './components/search_store.php'; ?>


<?php require_once './includes/footer.php'; ?>