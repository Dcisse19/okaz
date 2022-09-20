<?php
require_once './includes/phpheaders.php';
require_once './src/StoreModel.php';

$storemodel = new StoreModel();
$stores = $storemodel->getAllStores();

$title = 'Nos magasins';
$subTitle = '';
require_once './includes/header.php';
require_once './includes/title.php';
?>

<!-- Contenu de la page -->
<section class="container py-20 px-40">
    <?php foreach ($stores as $store) { ?>
    <div id="<?=$store->getId(); ?>" class="mb-16">
        <h3 class="text-orange text-3xl font-semibold mb-5 uppercase"><?= $store->getStore_name(); ?></h3>
        <div class="flex flex-col gap-y-3">
            <p class="text-lg"> <span class="font-bold">Adresse : </span><?= $store->getStore_address() . ', ' . $store->getStore_postal_code() . ' ' . $store->getStore_city() ?></p>
            <p class="text-lg"> <span class="font-bold">Téléphone : </span><?= $store->getStore_telephone(); ?></p>
            <p class="text-lg"> <span class="font-bold">Horaires d'ouverture : </span>
                <br />Du Lundi au Vendredi : de 10h à 18h
                <br />Samedi : de 9h30 à 19h
                <br />Dimanche : Fermé
            </p>
        </div>
    </div>
    <?php } ?>
</section>

<?php require_once './includes/footer.php'; ?>