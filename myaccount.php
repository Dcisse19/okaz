<?php
require_once './includes/header.php';
require_once './signup_form.php'; // Formulaire d'inscription - modal 
require_once './login_form.php'; // Formulaire de connexion - modal 

?>

<!-- SECTION TITRE -->
<?php
$title = 'Mon compte';
$subTitle = '';
require_once './includes/title.php';

?>

<!-- FIN SECTION TITRE -->

<!-- ---- SECTION MON COMPTE --------- -->

<!-- --- nav bar------------ -->
<section class="py-20 px-40">


        <?php require_once './components/account_sidebar.php'; ?> 
        <!-- -------- message --------------- -->

        <div class="w-3/4 px-20 py-20 flex flex-col ">
            <h2 class="text-xl font-bold mb-10"> Bonjour, Dior :)</h2>
            <p class="text-xl mb-10">
                Bienvenue sur votre espace client OKAZ.com </br>
                Ici, vous pouvez gérer vos commandes, ainsi que vos informations personnelles.
            </p>
            <div class="block m-auto">
                <a href="shop.php" class="py-3 px-8 rounded-lg bg-orange hover-bg-darkgrey text-white font-semibold text-lg uppercase">
                    Continuer mes achats
                </a>
            </div>

        </div>

    </div>

</section>

<!-- ---- SECTION MON COMPTE --------- -->

<!-- ------- footer -------- -->
<?php require_once './includes/footer.php'; ?>