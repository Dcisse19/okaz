        <!-- Implement the carousel -->
        <div class=" flex  justify-between mx-auto items-center space-x-3 sm:space-x-6"> -->

            <!-- Previous button -->
            <!-- <a onclick="moveSlide(-1)">
                <div class="rounded-full bg-orange hover-bg-darkgrey px-2 py-0 sm:px-4 sm:py-2 md:px-5 md:py-3">
                    <i class="fas fa-regular fa-angle-left text-base sm:text-xl md:text-3xl"></i>
                </div>
            </a>
            <?php foreach($products as $product){ 
            ?>
            <div class="slide md:w-[500px] sm:w-[400px] w-[220px]">
                <img class="w-full md:h-[350px] sm:h-[250px] h-[120px]" src="<?php echo $product->getImage()
                                                                                ?>">
                <a href="product_page.php?id=<?php  echo $product->getId() 
                                                ?>">
                    <div class="text-xs sm:text-base w-full py-2 px-3 sm:px-5 sm:py-3 bg-zinc-600 hover:bg-zinc-800 text-center text-white"><?= $product->getName() ?></div>
                </a>
            </div>
            <?php } 
            ?>
             Next button 
            <a onclick="moveSlide(1)">
                <div class="rounded-full bg-blue hover-bg-darkgrey px-2 py-0 sm:px-4 sm:py-2 md:px-5 md:py-3">
                    <i class="fas fa-regular fa-angle-right text-base sm:text-xl md:text-3xl"></i>
                </div>
            </a>
        </div>

        <br>

         The dots 
        <div class="flex justify-center items-center space-x-5">
            <div class="dot w-3 h-3 md:w-4 md:h-4 rounded-full cursor-pointer" onclick="currentSlide(1)"></div>
            <div class="dot w-3 h-3 md:w-4 md:h-4 rounded-full cursor-pointer" onclick="currentSlide(2)"></div>
            <div class="dot w-3 h-3 md:w-4 md:h-4 rounded-full cursor-pointer" onclick="currentSlide(3)"></div>
            <div class="dot w-3 h-3 md:w-4 md:h-4 rounded-full cursor-pointer" onclick="currentSlide(4)"></div>
            <div class="dot w-3 h-3 md:w-4 md:h-4 rounded-full cursor-pointer" onclick="currentSlide(5)"></div>
        </div>

        
        
        <?php foreach($products as $product){ ?>
                <div class="carousel-item active relative float-left w-full">
                    <img src="<?php echo $product->getImage() ?>" class="block w-full" alt="<?php echo $product->getName() ?>" />
                    <div class="carousel-caption hidden md:block absolute text-center">
                        <h5 class="text-xl"><?php echo $product->getName() ?></h5>
                    </div>
                </div>
                <?php } ?>
