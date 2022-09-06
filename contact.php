<?php
require_once './includes/header.php';
require_once './signup_form.php'; // Formulaire d'inscription - modal 
require_once './login_form.php'; // Formulaire de connexion - modal 


$title = 'contact';
$subTitle = '';
require_once './includes/title.php';
?>

<!-- Contenu de la page -->
<div class="container px-40 py-20 mx-auto block">
    <div class="p-5 space-x-5 ">
        <h1 class="text-4xl text-center uppercase text-darkblue font-semibold">Envoyer une demande</h1>
        <p class="text-center text-2xl mt-10 gap-y-3">Vous avez une question? <br />Laissez-nous un message, nous nous ferons un plaisir de vous répondre.</p>


        <form class="grid gap-y-6 p-16">
            <div class="flex gap-6 ">
                <div class="w-1/2  ">
                    <label class="block mb-2" for="lastname-firstname"><i class="fa-regular fa-user mr-2"></i>Nom et Prénom</label>
                    <input value="" class="bg-eggshell border rounded border-darkgrey py-2 px-4 w-full outline-slate-800 shadow-lg bg-eggshell" type="text" name="lastname-firstname" id="lastname-firstname" required>
                </div>
                <div class="w-1/2">
                    <label class="block mb-2" for="email"><i class="fa-regular fa-envelope mr-2"></i>Email<span class='text-red-600'> *</span></label>
                    <input value="" class="  bg-eggshell border rounded border-darkgrey py-2 px-4 w-full outline-slate-800 shadow-lg" type="email" name="email" id="email" required>
                </div>
            </div>
            <div class="">
                <label class="block mb-2" for="demande"><i class="fa-solid fa-question mr-2"></i>Ma demande concerne</label>
                    <select value="" class=" bg-eggshell border rounded border-darkgrey py-2 px-4 w-full outline-slate-800 shadow-lg" name="demande" id="demande">
                        <option value="">-- Sélectionnez une option --</option>
                        <option class="" value="">Une demande d'information</option>
                        <option value="">Un problème technique</option>
                        <option value="">Une question à propos de ma commande</option>
                        <option value="">Vendre chez Okaz</option>
                        <option value="">Un témoignage</option>
                    </select>
            </div>

            <div class="">
                <label class="block mb-2" for="message"><i class="fas fa-thin fa-file-pen mr-2"></i> Message<span class='text-red-600'>*</span></label>
                <textarea name="" id="" cols="10" rows="5" class=" bg-eggshell border rounded border-darkgrey py-2 px-4 w-full outline-slate-800 shadow-lg" required></textarea>
            </div>

            <div class="flex justify-center">
                <input type="submit" value="ENVOYER" class="focus:outline-none mt-5 bg-orange-500 hover-bg-darkgrey px-6 py-2 text-white font-semibold rounded-full flex justify-center">
            </div>

        </form>


    </div>


</div>
<?php require_once './includes/footer.php'; ?>