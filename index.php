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



<!-- Modals -->

<!-- Javascript -->
<script src="./JS/index.js"></script>
<!-- Bootstrap -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script> -->
</body>

</html>