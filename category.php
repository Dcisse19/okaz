<?php
require_once './includes/header.php';
require_once './src/CategoryModel.php';
require_once './src/ProductModel.php';
$categorymodel = new CategoryModel();
$productmodel = new ProductModel();
$categoryInfo = $categorymodel->getOneCategory();
$title = $categoryInfo->getName_category();
$subTitle = $categoryInfo->getDescription_category();
require_once './includes/title.php';

$products = $productmodel->getProductsByCategory();
?>

<!-- FIN SECTION TITRE -->

<!-- -----SECTION FILTER RECHERCHE ---- -->
<section class="py-10 px-40">
    <div class="container p-10">
        <h2 class="text-2xl font-semibold mb-10 uppercase text-darkblue"> Affiner votre recherche</h2>
        <form action="" class="flex justify-start space-x-6">
            <div class="">
                <input value="" class="border rounded-lg border-darkgrey py-2 px-4 w-full outline-orange shadow-lg" placeholder="Rechercher par mot-clé" type="text" name="search_keyword" id="search_keyword">
            </div>
            <p class="font-semibold text-xl text-orange">ou</p>
            <div class="">
                <select value="" class="border rounded-lg border-darkgrey py-2 px-4 w-full outline-orange shadow-lg bg-white" name="select_store" id="select_store">
                    <option class="" value="">-- Sélectionnez un magasin --</option>
                    <option class="" value="">Okaz - Villeneuve-le-Roi</option>
                    <option class="" value="">Okaz - Evry</option>
                    <option class="" value="">Okaz - Coignières</option>
                    <option class="" value="">Okaz - Orléans</option>
                    <option class="" value="">Okaz - Bordeaux</option>
                    <option class="" value="">Okaz - Dunkerque</option>
                    <option class="" value="">Okaz - Strasbourg</option>
                    <option class="" value="">Okaz - Nantes</option>
                    <option class="" value="">Okaz - Aix-en-Provence</option>
                </select>
            </div>
            <button class="font-semibold text-lg uppercase tracking-wider hover-text-orange">Filtrer
            </button>
        </form>

        <p class="font-semibold text-xl mt-10">Filtrer par prix</p>
        <form action="" class="flex justify-start space-x-6 mt-6">
            <div class="">
                <input value="" class="border rounded-lg border-darkgrey py-2 px-4 outline-orange shadow-lg" placeholder="Prix MIN" type="text" name="min_price" id="min_price">
            </div>
            <div class="">
                <input value="" class="border rounded-lg border-darkgrey py-2 px-4 outline-orange shadow-lg" placeholder="Prix MAX" type="text" name="max_price" id="max_price">
            </div>
            <button class="font-semibold text-lg uppercase tracking-wider hover-text-orange">Filtrer
            </button>
        </form>

    </div>
    <hr class="block mx-auto  border-darkgrey border-t-0 border-b-2 mt-10" />
</section>

<!-- -----SECTION FILTER RECHERCHE ---- -->

<!-- ------- SECTION PRODUITS --------------- -->
<main class="p-20 mb-20">
    <section class="container mx-auto px-10">
        <div class=" grid grid-cols-4 gap-x-10 gap-y-16">
            <?php foreach ($products as $product) {?>
            <article class="p-4 flex flex-col items-center bg-eggshell rounded-xl">
                <figure class="flex flex-col items-center mb-4 space-y-6">
                    <img class="h-[200px] w-[250px]" src="<?= $product->getImage()?>" alt="<?= $product->getName()?>">
                    <figcaption class="block">
                        <h3 class="text-center text-xl font-semibold"><?= $product->getName()?></h3>
                        <p class="text-center text-2xl font-bold"><?= $product->getPrice()?>€</p>
                    </figcaption>
                </figure>
                <div class="py-1 px-4 rounded-full bg-orange hover-bg-blue">
                    <a href="product_page.php?id=<?= $product->getId()?>" class="text-center text-white font-semibold text-lg">
                        <i class="fas fa-regular fa-eye mr-2"></i>Voir le produit
                    </a>
                </div>
            </article>
            <?php } ?>

            <!-- <article class="p-4 flex flex-col items-center bg-eggshell rounded-xl ">
                <figure class="flex flex-col items-center mb-4 space-y-6">
                    <img class="h-[200px] w-[250px]" src="./images/canape.jpg " alt="canape">
                    <figcaption>
                        <h3 class="text-center text-2xl font-semibold mb-2">Nom du produit</h3>
                        <p class="text-center text-2xl font-bold">120 €</p>
                    </figcaption>
                </figure>
                <div class="py-1 px-4 rounded-full bg-orange hover-bg-blue">
                    <a href="product_page.php" class="text-center text-white font-semibold text-lg">
                        <i class="fas fa-regular fa-eye mr-2"></i>Voir le produit
                    </a>
                </div>
            </article>
            <article class="p-4 flex flex-col items-center bg-eggshell rounded-xl ">
                <figure class="flex flex-col items-center mb-4 space-y-6">
                    <img class="h-[200px] w-[250px]" src="./images/canape.jpg " alt="canape">
                    <figcaption>
                        <h3 class="text-center text-2xl font-semibold mb-2">Nom du produit</h3>
                        <p class="text-center text-2xl font-bold">120 €</p>
                    </figcaption>
                </figure>
                <div class="py-1 px-4 rounded-full bg-orange hover-bg-blue">
                    <a href="product_page.php" class="text-center text-white font-semibold text-lg">
                        <i class="fas fa-regular fa-eye mr-2"></i>Voir le produit
                    </a>
                </div>
            </article>
            <article class="p-4 flex flex-col items-center bg-eggshell rounded-xl ">
                <figure class="flex flex-col items-center mb-4 space-y-6">
                    <img class="h-[200px] w-[250px]" src="./images/canape.jpg " alt="canape">
                    <figcaption>
                        <h3 class="text-center text-2xl font-semibold mb-2">Nom du produit</h3>
                        <p class="text-center text-2xl font-bold">120 €</p>
                    </figcaption>
                </figure>
                <div class="py-1 px-4 rounded-full bg-orange hover-bg-blue">
                    <a href="product_page.php" class="text-center text-white font-semibold text-lg">
                        <i class="fas fa-regular fa-eye mr-2"></i>Voir le produit
                    </a>
                </div>
            </article>
            <article class="p-4 flex flex-col items-center bg-eggshell rounded-xl ">
                <figure class="flex flex-col items-center mb-4 space-y-6">
                    <img class="h-[200px] w-[250px]" src="./images/canape.jpg " alt="canape">
                    <figcaption>
                        <h3 class="text-center text-2xl font-semibold mb-2">Nom du produit</h3>
                        <p class="text-center text-2xl font-bold">120 €</p>
                    </figcaption>
                </figure>
                <div class="py-1 px-4 rounded-full bg-orange hover-bg-blue">
                    <a href="product_page.php" class="text-center text-white font-semibold text-lg">
                        <i class="fas fa-regular fa-eye mr-2"></i>Voir le produit
                    </a>
                </div>
            </article>
            <article class="p-4 flex flex-col items-center bg-eggshell rounded-xl ">
                <figure class="flex flex-col items-center mb-4 space-y-6">
                    <img class="h-[200px] w-[250px]" src="./images/canape.jpg " alt="canape">
                    <figcaption>
                        <h3 class="text-center text-2xl font-semibold mb-2">Nom du produit</h3>
                        <p class="text-center text-2xl font-bold">120 €</p>
                    </figcaption>
                </figure>
                <div class="py-1 px-4 rounded-full bg-orange hover-bg-blue">
                    <a href="product_page.php" class="text-center text-white font-semibold text-lg">
                        <i class="fas fa-regular fa-eye mr-2"></i>Voir le produit
                    </a>
                </div>
            </article>
            <article class="p-4 flex flex-col items-center bg-eggshell rounded-xl ">
                <figure class="flex flex-col items-center mb-4 space-y-6">
                    <img class="h-[200px] w-[250px]" src="./images/canape.jpg " alt="canape">
                    <figcaption>
                        <h3 class="text-center text-2xl font-semibold mb-2">Nom du produit</h3>
                        <p class="text-center text-2xl font-bold">120 €</p>
                    </figcaption>
                </figure>
                <div class="py-1 px-4 rounded-full bg-orange hover-bg-blue">
                    <a href="product_page.php" class="text-center text-white font-semibold text-lg">
                        <i class="fas fa-regular fa-eye mr-2"></i>Voir le produit
                    </a>
                </div>
            </article>
            <article class="p-4 flex flex-col items-center bg-eggshell rounded-xl ">
                <figure class="flex flex-col items-center mb-4 space-y-6">
                    <img class="h-[200px] w-[250px]" src="./images/canape.jpg " alt="canape">
                    <figcaption>
                        <h3 class="text-center text-2xl font-semibold mb-2">Nom du produit</h3>
                        <p class="text-center text-2xl font-bold">120 €</p>
                    </figcaption>
                </figure>
                <div class="py-1 px-4 rounded-full bg-orange hover-bg-blue">
                    <a href="product_page.php" class="text-center text-white font-semibold text-lg">
                        <i class="fas fa-regular fa-eye mr-2"></i>Voir le produit
                    </a>
                </div>
            </article> -->

        </div>
    </section>
</main>

<!-- ----- footer ----- -->
<?php require_once './includes/footer.php'; ?>