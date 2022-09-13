
// // Caroussel
// (function() {
//   var carousels = document.querySelectorAll('.js-product-carousel');

//   [].forEach.call(carousels, function(carousel) {
//     carouselize(carousel);
//   });

// })();

// function carouselize(carousel) {
//   var productList = carousel.querySelector('.js-product-list');
//   var productListWidth = 0;
//   var productListSteps = 0;
//   var products = carousel.querySelectorAll('.product');
//   var productAmount = 0;
//   var productAmountVisible = 4;
//   var carouselPrev = carousel.querySelector('.js-carousel-prev');
//   var carouselNext = carousel.querySelector('.js-carousel-next');

//   //Count all the products
//   [].forEach.call(products, function(product) {
//     productAmount++;
//     productListWidth += 250;
//     productList.style.width = productListWidth+"px";
//   });

//   carouselNext.onclick = function() {
//     if(productListSteps < productAmount-productAmountVisible) {
//       productListSteps++;
//       moveProductList();
//     }
//   }
//   carouselPrev.onclick = function() {
//     if(productListSteps > 0) {
//       productListSteps--;
//       moveProductList();
//     }
//   }

//   // This is a bit hacky, let me know if you find a better way to do this!
//   // Move the carousels product-list
//   function moveProductList() {
//     productList.style.transform = "translateX(-"+205*productListSteps+"px)";
//   }
// }

let slideIndex = 1;
showSlide(slideIndex);

var x = 1;
// change slide with the prev/next button
function moveSlide(moveStep) {
  showSlide(slideIndex += moveStep);
}


function showSlide(n) {
  // if (n < x){
  //  var y = x 
  // }

  let i;
  const slides = document.getElementsByClassName("slide");
  const buttonPrev = document.getElementById("buttonprev")
  const buttonNext = document.getElementById("buttonnext")

  if (n == slides.length) {
    buttonNext.style.display = "none";
  } else {
    buttonNext.style.display = "block";
  }

  // if (n > slides.length) { slideIndex = 1 }
  // if (n < 1) { slideIndex = slides.length }

  // hide all slides
  for (i = 0; i < slides.length; i++) {
    slides[i].classList.add('hidden');
  }

  // show the active slide
  if (n == 1) {
    for (i = 0; i < 4; i++) {
      buttonPrev.style.display = "none";
      slides[i].classList.remove('hidden');
    }
  } else {
    buttonPrev.style.display = "block";
  }

  if (n > x) {
    for (i = x; i < (x + 4); i++) {
      slides[i].classList.remove('hidden');
    } x = x + 1
  }

  if (n < x) {
    for (i = (n - 1); i < (n + 3); i++) {
      slides[i].classList.remove('hidden');
    } x = x - 1
  }

  // slides[slideIndex - 1].classList.remove('hidden');
}

// Store Modal
// Get the modal
var storeModal = document.getElementById("storeModal");

// Get the button that opens the modal
var storeLink = document.getElementById("storeLink");

// Get the <span> element that closes the modal
var storeCross = document.getElementById("closeStoreModal");

// When the user clicks on the button, open the modal
storeLink.onclick = function () {
  storeModal.style.display = "block";
}

// When the user clicks on (x), close the modal
storeCross.onclick = function () {
  storeModal.style.display = "none";
}
