<?php
require_once './includes/header.php';



$title = 'Boutique';
$subTitle = 'Ceci est la page boutique';
require_once './includes/title.php';
// Include des classes
require_once './src/CategoryModel.php';

// Instanciation
$categorymodel = new CategoryModel();
$categories = $categorymodel->getAllCategories();
?>

<!-- Contenu de la page -->
<section class="p-20">
    <div class="container mx-auto">
        <h2 class="uppercase text-darkblue font-semibold text-4xl text-center mb-10">Découvrez nos produits classés par catégories</h2>

        <div class="container mx-auto p-28 grid grid-cols-2 gap-12">
           <?php foreach ($categories as $category) { ?>
                <div class="flex space-x-10">
                    <img class=" h-[170px] w-[200px]" src="<?= $category->getImage_category() ?>" alt="<?= $category->getName_category() ?>">
                    <div class="flex flex-col space-y-3">
                        <a href="category.php?id=<?=$category->getId() ?>" class="text-2xl uppercase text-orange font-semibold"><?= $category->getName_category() ?></a>
                        <hr class="border-darkgrey border-t-0 border-b-2 mb-32" />
                        <p class=""><?= $category->getDescription_category() ?></p>
                    </div>
                </div>
                <?php } ?>
        </div>
    </div>
</section>

<?php require_once './includes/footer.php'; ?>