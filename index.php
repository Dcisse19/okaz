<?php
require_once './includes/header.php';
require_once './signup.php'; // Formulaire d'inscription - modal 
?>

<!-- SECTION BANNIERE -->
<section class="bg-black bg-opacity-40 bg-blend-darken bg-hero bg-no-repeat bg-cover bg-center bg-fixed py-40 px-80">
    <div class="container mx-auto flex-col items-center ">
        <h1 class="text-4xl text-center text-white font-bold uppercase tracking-wider leading-10 mb-8">OKAZ, ACHAT ET VENTE DE MEUBLES D'OCCASION EN LIGNE ET EN MAGASIN </h1>
        <div class="flex justify-center gap-5">
            <div class=" bg-orange hover-bg-darkgrey rounded-full flex py-2 px-8">
                <a href="#" class="text-white text-lg font-bold tracking-wider">J'achète</a>
            </div>
            <div class=" bg-blue hover-bg-darkgrey rounded-full flex py-2 px-8">
                <a href="#" class="text-white text-lg font-bold tracking-wider">Je vends</a>
            </div>
        </div>
    </div>
</section>


<!-- FIN SECTION BANNIERE -->

<!-- SECTION NOS DERNIERS MEUBLES -->
<section class="bg-white shadow-slate-400 shadow-md py-24 px-40">
    <h1 class="text-4xl text-center text-darkblue font-semibold uppercase mb-14 font-sans">Nos derniers meubles d'occasions</h1>

    <!-- Implement the carousel -->
    <div class="relative w-[600px] mx-auto">
        <div class="slide relative">
            <img class="w-full h-[300px] object-cover" src="https://www.kindacode.com/wp-content/uploads/2022/07/flower-1.jpeg">
            <a href="#">
                <div class="absolute bottom-0 w-full px-5 py-3 bg-black/40 text-center text-white">Nom de l'article</div>
            </a>
        </div>

        <div class="slide relative">
            <img class="w-full h-[300px] object-cover" src="https://www.kindacode.com/wp-content/uploads/2022/07/flower-2.jpeg">
            <a href="#">
                <div class="absolute bottom-0 w-full px-5 py-3 bg-black/40 text-center text-white">Nom de l'article</div>
            </a>
        </div>

        <div class="slide relative">
            <img class="w-full h-[300px] object-cover" src="https://www.kindacode.com/wp-content/uploads/2022/07/flower-3.jpeg">
            <a href="#">
                <div class="absolute bottom-0 w-full px-5 py-3 bg-black/40 text-center text-white">Nom de l'article</div>
            </a>
        </div>

        <div class="slide relative">
            <img class="w-full h-[300px] object-cover" src="https://www.kindacode.com/wp-content/uploads/2022/07/flower-1.jpeg">
            <a href="#">
                <div class="absolute bottom-0 w-full px-5 py-3 bg-black/40 text-center text-white">Nom de l'article</div>
            </a>
        </div>

        <div class="slide relative">
            <img class="w-full h-[300px] object-cover" src="https://www.kindacode.com/wp-content/uploads/2022/07/flower-2.jpeg">
            <a href="#">
                <div class="absolute bottom-0 w-full px-5 py-3 bg-black/40 text-center text-white">Nom de l'article</div>
            </a>
        </div>

        <!-- The previous button -->
        <a class="absolute left-0 top-1/2 p-4 -translate-y-1/2 bg-black/30 hover:bg-black/50 text-white hover-text-orange cursor-pointer" onclick="moveSlide(-1)">❮</a>

        <!-- The next button -->
        <a class="absolute right-0 top-1/2 p-4 -translate-y-1/2 bg-black/30 hover:bg-black/50 text-white hover-text-orange cursor-pointer" onclick="moveSlide(1)">❯</a>

    </div>
    <br>

    <!-- The dots -->
    <div class="flex justify-center items-center space-x-5">
        <div class="dot w-4 h-4 rounded-full cursor-pointer" onclick="currentSlide(1)"></div>
        <div class="dot w-4 h-4 rounded-full cursor-pointer" onclick="currentSlide(2)"></div>
        <div class="dot w-4 h-4 rounded-full cursor-pointer" onclick="currentSlide(3)"></div>
        <div class="dot w-4 h-4 rounded-full cursor-pointer" onclick="currentSlide(4)"></div>
        <div class="dot w-4 h-4 rounded-full cursor-pointer" onclick="currentSlide(5)"></div>
    </div>
    <button></button>
</section>

<!-- FIN SECTION NOS DERNIERS MEUBLES -->

<!-- SECTION QUI SOMMES-NOUS-->

<section id="quiSommeNous" class="py-20 px-36 bg-orange">
    <div class="container mx-auto text-white flex justify-between">
        <div class="w-3/4 flex-col px-16">
            <h1 class="text-4xl text-justify font-bold uppercase font-sans mb-10"> QUI SOMMES-NOUS ? </h1>
            <p class="text-xl tracking-wider font-sans mb-10">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores, reprehenderit pariatur? Dignissimos, voluptate eligendi rem pariatur repudiandae at, aliquid qui a, odit in ducimus illo suscipit praesentium id sed quod? Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                </br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio obcaecati dicta deleniti molestias.
            </p>

            <div>
                <a href="#" class="py-3 px-8 rounded-full bg-blue hover-text-darkgrey text-white font-bold text-lg">
                    <i class="fa-solid fa-eye mr-2"></i>En savoir plus
                </a>
            </div>
        </div>

        <div class="w-1/4">
            <figure class="flex flex-col items-center mt-10">
                <img src="./images/istockphoto-1194667952-612x612.jpg" alt="pdg_de_okaz" class="rounded-full w-60 mb-4">
                <figcaption class="text-center font-semibold text-xl tracking-wider ">
                    Ahmed Diarra </br> PDG de OKAZ
                </figcaption>
            </figure>
        </div>
    </div>
</section>

<!-- FIN SECTION QUI SOMMES-NOUS-->

<!-- SECTION RECHERCHE MAGASIN -->

<section id="searchStore" class="py-28 px-36 bg-grey">
    <div class="flex flex-col items-center">
        <h1 class="text-4xl font-semibold uppercase font-sans mb-14 text-center" id="searchTitle"> Trouvez un magazin Okaz près de chez vous </h1>
        <form action="#" class="flex rounded-full border-2 border-orange gap-x-20 w-1/2 py-2 px-4 bg-white" id="search">
            <input class="text-xl w-full outline-none" type="text" name="search" placeholder="Entrer votre région ou votre code postal" id="searchInput">
            <button class="">
                <i id="searchIcon" class="fas fa-regular fa-magnifying-glass-location fa-2x"></i>
            </button>
        </form>
    </div>
</section>
<!-- FIN SECTION RECHERCHE MAGASIN -->

<!-- ---- footer----- -->
<?php require_once './includes/footer.php'; ?>



<!-- Javascript -->
<script src="./JS/index.js"></script>
<!-- Bootstrap -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script> -->
</body>

</html>