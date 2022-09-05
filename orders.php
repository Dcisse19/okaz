<?php
require_once './includes/header.php';
require_once './signup_form.php'; // Formulaire d'inscription - modal 
require_once './login_form.php'; // Formulaire de connexion - modal 

?>

<!-- SECTION TITRE -->
<?php
$title = 'Mes commandes';
$subTitle = '';
require_once './includes/title.php';

?>

<!-- FIN SECTION TITRE -->

<!-- ---- SECTION MON COMPTE --------- -->

<!-- --- nav bar------------ -->
<section class="py-20 px-40">
    <div class="container mx-auto flex justify-start ">
        <?php require_once './components/account_sidebar.php'; ?>


        <!-- -------- MES INFOS --------------- -->

        <div class="container mx-auto w-3/4 pl-10 py-10 flex flex-col">
            <h2 class="text-xl font-bold mb-10">Commande du 8 juin 2022 </h2>
            <div class="flex justify-start gap-32 mb-10 ">
                <div>
                    <ul class="mb-5">
                        <li class="font-bold text-xl">
                            <h2>Numéro de commande </h2>
                        </li>
                        <li class="">
                            <p>149031042</p>
                        </li>
                    </ul>
                    <ul class="">
                        <li class="font-bold text-xl">
                            <h2> Mode de livraison </h2>
                        </li>
                        <li class="">
                            <p>Livraison à domicile</p>
                        </li>

                    </ul>
                </div>
                <div>
                    <ul class="mb-5">
                        <li class="font-bold text-xl">
                            <h2> Total </h2>
                        </li>
                        <li class="">
                            <p>253,05 €</p>
                        </li>
                    </ul>
                    <ul class="mb-5">
                        <li class="font-bold text-xl">
                            <h2> Statut du paiement </h2>
                        </li>
                        <li class="">
                            <p>Réglé par carte bancaire</p>
                        </li>
                    </ul>

                </div>
                <div>

                    <ul class="">
                        <li class="font-bold text-xl">
                            <h2>Adresse de livraison </h2>
                        </li>
                        <li class="">
                            <p>5 rue de la paix 75008 Paris</p>
                        </li>

                    </ul>
                </div>
            </div>

            <div class="flex space-x-10 bg-white p-5">
                <img class=" h-[170px] w-[200px]" src="https://images.unsplash.com/photo-1573866926487-a1865558a9cf?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTF8fGNvdWNofGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=600&q=60" alt="Table_basse">
                <div class="flex flex-col space-y-3">
                    <h3 class="text-2xl uppercase font-light">Canapé en cuir matelassé</h3>
                    <h3 class="font-normal text-xl">H 70 cm, L 170 cm, P 95 cm</h3>
                    <h3 class="text-2xl">930,99€ TTC</h3>
                </div>
            </div>
    
            <div class="flex space-x-10 bg-white p-5">
                <img class=" h-[170px] w-[200px]" src="https://images.unsplash.com/photo-1573866926487-a1865558a9cf?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTF8fGNvdWNofGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=600&q=60" alt="Table_basse">
                <div class="flex flex-col space-y-3">
                    <h3 class="text-2xl uppercase font-light">Canapé en cuir matelassé</h3>
                    <h3 class="font-normal text-xl">H 70 cm, L 170 cm, P 95 cm</h3>
                    <h3 class="text-2xl">930,99€ TTC</h3>
                </div>
            </div>
        </div>


    </div>

</section>



<!-- ---- SECTION MON PROFIL--------- -->


<!-- ------- footer -------- -->
<?php require_once './includes/footer.php'; ?>