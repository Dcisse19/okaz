<?php
require_once './includes/header.php';
require_once './signup.php'; // Formulaire d'inscription - modal 
?>

<!-- SECTION NOS DERNIERS MEUBLES -->
<section class="bg-white shadow-slate-400 shadow-md py-24 px-40">
    <h1 class="text-4xl text-center font-light uppercase mb-14">Nos derniers meubles d'occasions</h1>

    <!-- Implement the carousel -->
    <div class="relative w-[600px] mx-auto">
        <div class="slide relative">
            <img class="w-full h-[300px] object-cover" src="https://www.kindacode.com/wp-content/uploads/2022/07/flower-1.jpeg">
            <div class="absolute bottom-0 w-full px-5 py-3 bg-black/40 text-center text-white">Flower One Caption</div>
        </div>

        <div class="slide relative">
            <img class="w-full h-[300px] object-cover" src="https://www.kindacode.com/wp-content/uploads/2022/07/flower-2.jpeg">
            <div class="absolute bottom-0 w-full px-5 py-3 bg-black/40 text-center text-white">Flower Two Caption</div>
        </div>

        <div class="slide relative">
            <img class="w-full h-[300px] object-cover" src="https://www.kindacode.com/wp-content/uploads/2022/07/flower-3.jpeg">
            <div class="absolute bottom-0 w-full px-5 py-3 bg-black/40 text-center text-white">Flower Three Caption
            </div>
        </div>

        <!-- The previous button -->
        <a class="absolute left-0 top-1/2 p-4 -translate-y-1/2 bg-black/30 hover:bg-black/50 text-white hover:text-amber-500 cursor-pointer" onclick="moveSlide(-1)">❮</a>

        <!-- The next button -->
        <a class="absolute right-0 top-1/2 p-4 -translate-y-1/2 bg-black/30 hover:bg-black/50 text-white hover:text-amber-500 cursor-pointer" onclick="moveSlide(1)">❯</a>

    </div>
    <br>

    <!-- The dots -->
    <div class="flex justify-center items-center space-x-5">
        <div class="dot w-4 h-4 rounded-full cursor-pointer" onclick="currentSlide(1)"></div>
        <div class="dot w-4 h-4 rounded-full cursor-pointer" onclick="currentSlide(2)"></div>
        <div class="dot w-4 h-4 rounded-full cursor-pointer" onclick="currentSlide(3)"></div>
    </div>
    <button></button>
</section>

<!-- FIN SECTION NOS DERNIERS MEUBLES -->

    <!-- --- section 3-4-->

    <section id="quiSommeNous" class="p-20 text-white">
        <h1 class="text-5xl text-justify font-bold uppercase"> QUI SOMMES NOUS ? </h1>
        <div class = "flex justify-between">
            <div class ="w-3/4 flex-col">
                <div class="my-10 text-2xl tracking-wider">
                    <p class = "py-4" > 
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores, reprehenderit pariatur? Dignissimos, voluptate eligendi rem pariatur repudiandae at, aliquid qui a, odit in ducimus illo suscipit praesentium id sed quod? Lorem ipsum dolor sit amet consectetur, adipisicing elit.</br>
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio obcaecati dicta deleniti molestias.</br>
                    </p>

                </div>
               
                <div>
                    <a href="#" class="py-3 px-10  rounded-full bg-blue-500 hover:bg-blue-700 text-white font-bold text-2xl">
                        <i class="fa-solid fa-eye mr-2 mt-10"></i>En savoir plus
                      </a>
                </div>
                
            </div>
            
           <div class = "w-1/4">
                <figure class="flex flex-col items-center">
                    <img src="./images/istockphoto-1194667952-612x612.jpg" alt="pdg de okaz" class="rounded-full w-72 mr-10 my-4">
                    <figcaption class ="text-center pr-10 font-bold text-2xl tracking-wider "> 
                        Ahmed Diarra </br> PDG de OKAZ
                    </figcaption>

                </figure>
           </div>

        </div>
       

    </section>

    <section id="searchStore" > 
        <div class="flex flex-col items-center my-14" >
            <div>
                <h1 class ="text-4xl font-bold uppercase mb-14" id="searchTitle"> trouver un magazin Okaz près de chez vous </h1>
            </div>
            <form action="#" class="flex rounded-full items-center mb-10" id="search" >
                <div class="" >
                    <input class="my-5 ml-2  w-full text-2xl" type="text" name="search" placeholder="Entrer votre région ou votre code postal" id="searchInput">
                </div>
                <div>
                    <button class="w-full p-3">
                        <i id="searchIcon" class=" fas fa-light fa-magnifying-glass-location fa-3x"></i>
                    </button>
                </div>
            </form>
        </div>
    </section>


<!-- Javascript -->
<script src="./JS/index.js"></script>
<!-- Bootstrap -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script> -->
</body>

</html>