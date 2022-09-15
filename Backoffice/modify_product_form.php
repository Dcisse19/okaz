<?php require_once "./header_backoffice.php";
require_once dirname(__DIR__) . "/src/CategoryModel.php";
require_once dirname(__DIR__) . "/src/ProductModel.php";
require_once dirname(__DIR__) . "/src/StoreModel.php";
$productmodel = new ProductModel();
$categorymodel = new CategoryModel();
$storemodel = new StoreModel();
$categories = $categorymodel->getAllCategories();
$stores = $storemodel->getAllStores();
$product = $productmodel->getOneProduct()

?>
<section class="page_main">
    <h2>Modifier un produit</h2>
    <form method="POST">
        <div class="mb-4">
            <label for="product_name" class="form-label">Nom<span> *</span></label>
            <input value="<?= $product->getName(); ?>" name="product_name" type="text" class="form-control" id="product_name" required>
        </div>
        <div class="mb-4">
            <label for="product_image" class="form-label">Image<span> *</span></label>
            <div id="imageHelp" class="form-text">Veuillez entrer l'URL de l'image</div>
            <input value="<?= $product->getImage();?>" name="product_image" type="text" class="form-control" id="product_image" aria-describedby="imageHelp" required>
            <div id="" class="form-text">Image actuelle</div>
            <img class = "product_image" src="<?= $product->getImage();?>" alt="<?= $product->getName();?>">
        </div>
        <div class="mb-4">
            <label for="product_description" class="form-label">Description<span> *</span></label>
            <textarea maxlength="200" rows="4" value="" type="text" class="form-control" id="product_description" name="product_description" aria-describedby="descriptionHelp" required><?= $product->getDescription();?></textarea>
            <div id="descriptionHelp" class="form-text">200 caractères maximum</div>
        </div>
        <div class="mb-4">
            <label for="product_condition" class="form-label">Etat<span> *</span></label>
            <input value="<?= $product->getProduct_condition();?>" type="text" class="form-control" id="product_condition" name="product_condition" placeholder="Bon état/ Tres bon état/ Neuf" aria-describedby="" required>
        </div>
        <div class="mb-4">
            <label for="product_dimensions" class="form-label">Dimensions</label>
            <input value="<?= $product->getDimensions();?>" type="text" class="form-control" id="product_dimensions" name="product_dimensions" placeholder="H(cm), L(cm), P(cm)" aria-describedby="" >
        </div>
        <div class="mb-4">
            <label for="product_color" class="form-label">Couleur<span> *</span></label>
            <input value="<?= $product->getColor();?>" type="text" class="form-control" id="product_color" name="product_color" placeholder="" aria-describedby="" required>
        </div>
        <div class="mb-4">
            <label for="product_price" class="form-label">Prix<span> *</span></label>
            <input value="<?= number_format($product->getPrice(), 2, ',', ' ');?>" type="text" class="form-control" id="product_price" name="product_price" placeholder="" aria-describedby="priceHelp" required>
            <div id="priceHelp" class="form-text">Prix TTC en euros (€)</div>
        </div>
        <div class="mb-4">
            <label for="product_category" class="form-label">Catégorie<span> *</span></label>
            <select class="form-select" aria-label="product_category" id="product_category" name="product_category" required>
                <option>--Sélectionnez une catégorie--</option>
                <?php foreach ($categories as $category) { ?>
                    <option value="<?= $category->getId(); ?>"><?= $category->getName_category(); ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="mb-4">
            <label for="product_store" class="form-label">Magasin<span> *</span></label>
            <select class="form-select" aria-label="product_store" id="product_store" name="product_store" required>
                <option>--Sélectionnez le magasin dans lequel le produit est disponible--</option>
                <?php foreach ($stores as $store) { ?>
                    <option value="<?= $store->getId(); ?>"><?= $store->getStore_Name() ; ?></option>
                <?php } ?>
            </select>
        </div>
        <p id="mandatory"><span> *</span> : Champs obligatoires</p>
        <button type="submit" class="form_btn btn btn-primary">Modifier</button>
    </form>

</section>
<?php require_once "./footer_backoffice.php"; ?>