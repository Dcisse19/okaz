<?php
require_once './includes/header.php';
require_once './signup_form.php'; // Formulaire d'inscription - modal 
require_once './login_form.php'; // Formulaire de connexion - modal 

?>

<!-- SECTION TITRE -->
<?php
$title = 'Les tables';
$subTitle = 'Trouvez votre bonheur en parcourant notre catalogue de tables d’occasions.';
require_once './includes/title.php';

?>

<!-- FIN SECTION TITRE -->

<!-- -----SECTION FILTER RECHERCHE ---- -->
<section class="py-20 px-40">
    <div class="container bg-eggshell mx-30 py-10 rounded-[30px]">
        <h2 class ="text-2xl font-semibold text-center pb-10"> Affiner votre recherche</h2>
        <div class="flex justify-center gap-5 mb-8">
            <div class="bg-white rounded-full border-2 flex py-2 px-8">
                <a href="#" class="text-xl font-semibold tracking-wider ">Rechercher par mot clé</a>
            </div>
            <div class="  bg-white rounded-full border-2 flex py-2 px-8">
                <a href="#" class=" text-xl font-semibold tracking-wider">Rechercher par magasin</a>
            </div>
        </div>
       
    </div>
</section>

<!-- -----SECTION FILTER RECHERCHE ---- -->

<!-- ------- SECTION PRODUITS --------------- -->
<main class = "container mx-auto py-8 px-32">
    <section class= "w-full py-8 box-border">
        <div class =" flex flex-wrap  justify-between ">
            <article class = "w-30 p-8 mb-10 mx-4 flex flex-col space-y-6 items-center bg-eggshell " >
                    <figure class="flex flex-col items-center mb-4 space-y-6">
                        <div class="h-[200px] w-[300px]">
                            <img src="./images/canape.jpg " alt="canape" >
                        </div>
                        <figcaption>
                            <h3 class="text-center text-2xl font-semibold mb-3">Nom du produit</h3>
                            <p class="text-center text-2xl font-semibold">120 €</p>
                        </figcaption>
                    </figure>
                    <div>
                    <div>
                        <a href="product_page.php" class="py-2 px-6 rounded-full bg-orange hover-bg-blue text-black font-semibold text-xl">
                            <i class="fas fa-regular fa-eye mr-2"></i>Voir le produit
                        </a>
                    </div>
            </article>
            <article class = "w-30 p-8 mb-10 mx-4 flex flex-col items-center bg-eggshell" >
                    <figure class="flex flex-col items-center mb-4">
                        <div class="h-[200px] w-[300px]">
                            <img src="./images/canape.jpg " alt="canape" >
                        </div>
                        <figcaption>
                            <h3 class="text-center text-2xl font-semibold">Nom du produit</h3>
                            <p class="text-center text-2xl font-semibold">120 €</p>
                        </figcaption>
                    </figure>
                    <div>
                    <div>
                        <a href="#" class="py-2 px-6 rounded-full bg-orange hover-bg-blue text-black font-semibold text-xl">
                            <i class="fas fa-regular fa-eye mr-2"></i>Voir le produit
                        </a>
                    </div>
            </article>
            <article class = "w-30 p-8 mb-10 mx-4 flex flex-col items-center bg-eggshell" >
                    <figure class="flex flex-col items-center mb-4">
                        <div class="h-[200px] w-[300px]">
                            <img src="./images/canape.jpg " alt="canape" >
                        </div>
                        <figcaption>
                            <h3 class="text-center text-2xl font-semibold">Nom du produit</h3>
                            <p class="text-center text-2xl font-semibold">120 €</p>
                        </figcaption>
                    </figure>
                    <div>
                    <div>
                        <a href="#" class="py-2 px-6 rounded-full bg-orange hover-bg-blue text-black font-semibold text-xl">
                            <i class="fas fa-regular fa-eye mr-2"></i>Voir le produit
                        </a>
                    </div>
            </article>
            <article class = "w-30 p-8 mb-10 mx-4 flex flex-col items-center bg-eggshell" >
                    <figure class="flex flex-col items-center mb-4">
                        <div class="h-[200px] w-[300px]">
                            <img src="./images/canape.jpg " alt="canape" >
                        </div>
                        <figcaption>
                            <h3 class="text-center text-2xl font-semibold">Nom du produit</h3>
                            <p class="text-center text-2xl font-semibold">120 €</p>
                        </figcaption>
                    </figure>
                    <div>
                    <div>
                        <a href="#" class="py-2 px-6 rounded-full bg-orange hover-bg-blue text-black font-semibold text-xl">
                            <i class="fas fa-regular fa-eye mr-2"></i>Voir le produit
                        </a>
                    </div>
            </article>
            <article class = "w-30 p-8 mb-10 mx-4 flex flex-col items-center bg-eggshell" >
                    <figure class="flex flex-col items-center mb-4">
                        <div class="h-[200px] w-[300px]">
                            <img src="./images/canape.jpg " alt="canape" >
                        </div>
                        <figcaption>
                            <h3 class="text-center text-2xl font-semibold">Nom du produit</h3>
                            <p class="text-center text-2xl font-semibold">120 €</p>
                        </figcaption>
                    </figure>
                    <div>
                    <div>
                        <a href="#" class="py-2 px-6 rounded-full bg-orange hover-bg-blue text-black font-semibold text-xl">
                            <i class="fas fa-regular fa-eye mr-2"></i>Voir le produit
                        </a>
                    </div>
            </article>
            <article class = "w-30 p-8 mb-10 mx-4 flex flex-col items-center bg-eggshell" >
                    <figure class="flex flex-col items-center mb-4">
                        <div class="h-[200px] w-[300px]">
                            <img src="./images/canape.jpg " alt="canape" >
                        </div>
                        <figcaption>
                            <h3 class="text-center text-2xl font-semibold">Nom du produit</h3>
                            <p class="text-center text-2xl font-semibold">120 €</p>
                        </figcaption>
                    </figure>
                    <div>
                    <div>
                        <a href="#" class="py-2 px-6 rounded-full bg-orange hover-bg-blue text-black font-semibold text-xl">
                            <i class="fas fa-regular fa-eye mr-2"></i>Voir le produit
                        </a>
                    </div>
            </article>
            
            
        </div>            
    </section>
    </main>

<!-- ----- footer ----- -->
<?php require_once './includes/footer.php'; ?>