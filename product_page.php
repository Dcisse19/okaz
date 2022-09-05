<?php
require_once './includes/header.php';
require_once './signup_form.php'; // Formulaire d'inscription - modal 
require_once './login_form.php'; // Formulaire de connexion - modal 


$title = 'Les tables'; // change selon l'id de la catégorie
$subTitle = "Trouvez votre bonheur en parcourant notre catalogue de tables d'occasion"; // change selon l'id de la catégorie
require_once './includes/title.php';
?>

<!-- Contenu de la page -->
<section class="bg-white p-36">
    <div class="container mx-auto flex gap-10">

        <!-- Présentation produit -->
        <section class="container mx-auto px-20 py-10 bg-eggshell w-3/4">
            <img class="h-[400px] w-full border-2 border-black" src="https://media.istockphoto.com/photos/wooden-coffee-table-isolated-on-white-background-picture-id1063885982?k=20&m=1063885982&s=612x612&w=0&h=bl537HeLMyE7g4UCoSnA4Rteq699e0l1AbbQjQIKLDQ=" alt="Table_basse_rectangulaire_bois">

            <!-- Description produit -->
            <div class="container mx-auto p-10 bg-white rounded-3xl mt-10 ">
                <h2 class="text-left text-4xl font-semibold mb-2">Table basse rectangulaire en bois</h2>
                <p class="text-right text-orange text-3xl font-bold mb-10">120,65€</p>

                <a href="cart.php">
                    <div class=" bg-orange hover-bg-darkgrey w-fit rounded-full py-2 px-8 mb-6 block m-auto">
                        <button class="text-white text-center text-lg font-semibold tracking-wider">Ajouter au panier</button>
                    </div>
                </a>


                <a id="storeLink" href="#" data-bs-toggle="modal">
                    <div class=" bg-blue hover-bg-darkgrey w-fit rounded-full py-2 px-6 mb-14 block m-auto">
                        <button href="#" class="text-white text-center text-lg font-semibold tracking-wider">Acheter en magasin</button>
                    </div>
                </a>

                <div class="flex flex-col items-start">
                    <!-- Description -->
                    <p class="mb-10 text-lg"><span class="font-bold text-xl mb-2">Description : </span><br />Table basse rectangulaire en bois chêne</p>
                    <p class="text-lg"> <span class="font-bold">Etat : </span>Très bon état</p>
                    <p class="text-lg"> <span class="font-bold">Dimensions : </span>H 45cm, L 120cm, P 60cm</p>
                    <p class="text-lg"> <span class="font-bold">Couleur : </span>bois marron clair </p>
                </div>


            </div>
        </section>

        <!-- Produits similaires -->
        <aside class="container-mx-auto px-6 py-10 bg-eggshell w-1/4 flex flex-col items-center">
            <h3 class="text-3xl font-semibold text-darkblue mb-10 text-centerr">Produits similaires</h3>
            <div class="flex flex-col items-center gap-y-6">

                <div class="bg-white container mx-auto p-5">
                    <img class="border-2 border-black w-full" src=" https://media.istockphoto.com/photos/old-coffee-table-picture-id525954841?k=20&m=525954841&s=612x612&w=0&h=eVjoqEw6aoNbcwxmx6UbmHmiKUkzFhWU0JdSZXUCCqk=" alt="Table_basse_style_scandinave">
                    <p class="text-lg font-semibold text-left">Table basse style scandinave</p>
                    <p class="text-lg font-bold text-right">59,80€</p>
                </div>

                <div class="bg-white container mx-auto p-5">
                    <img class="border-2 border-black w-full" src=" https://media.istockphoto.com/photos/old-coffee-table-picture-id525954841?k=20&m=525954841&s=612x612&w=0&h=eVjoqEw6aoNbcwxmx6UbmHmiKUkzFhWU0JdSZXUCCqk=" alt="Table_basse_style_scandinave">
                    <p class="text-lg font-semibold text-left">Table basse style scandinave</p>
                    <p class="text-lg font-bold text-right">59,80€</p>
                </div>

                <div class="bg-white container mx-auto p-5">
                    <img class="border-2 border-black w-full" src=" https://media.istockphoto.com/photos/old-coffee-table-picture-id525954841?k=20&m=525954841&s=612x612&w=0&h=eVjoqEw6aoNbcwxmx6UbmHmiKUkzFhWU0JdSZXUCCqk=" alt="Table_basse_style_scandinave">
                    <p class="text-lg font-semibold text-left">Table basse style scandinave</p>
                    <p class="text-lg font-bold text-right">59,80€</p>
                </div>
                <button>
                    <i class=" fas fa-regular fa-chevron-down fa-3x"></i>
                </button>
            </div>

        </aside>
    </div>
</section>

<!-- Modale produit disponible dans magasin -->
<section id="storeModal" class="fixed hidden inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full">
    <div class="relative container mx-auto top-28 w-1/2 bg-white p-10">
        <!-- <div class="container p-10"> -->
        <button class="rounded p-2 bg-blue hover-bg-darkgrey float-right">
            <i id="closeStoreModal" class="fa-solid fa-xmark fa-xl"></i>
        </button>
        <h3 class="text-darkblue text-2xl text-center mb-10"> Votre produit : <span class="font-semibold"> "Table basse rectangulaire en bois"</span> <br /> est disponible dans votre magasin :</h3>
        <div class="flex flex-col gap-y-4">
            <h3 class="text-orange text-2xl font-semibold">OKAZ Villeneuve-le-Roi</h3>
            <p class="text-lg"> <span class="font-bold">Adresse : </span>15 Avenue Dumarché, 94290 Villeneuve-le-Roi </p>
            <p class="text-lg"> <span class="font-bold">Téléphone : </span>0126482030</p>
            <p class="text-lg"> <span class="font-bold">Horaires d'ouverture : </span>
                <br />Du Lundi au Vendredi : de 10h à 18h
                <br />Samedi : de 9h30 à 19h
                <br />Dimanche : Fermé
            </p>
        </div>
        <!-- </div> -->
    </div>
</section>

<?php require_once './includes/footer.php'; ?>