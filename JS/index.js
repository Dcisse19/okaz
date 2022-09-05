
// Caroussel

        // set the default active slide to the first one
        let slideIndex = 1;
        showSlide(slideIndex);

        // change slide with the prev/next button
        function moveSlide(moveStep) {
            showSlide(slideIndex += moveStep);
        }

        // change slide with the dots
        function currentSlide(n) {
            showSlide(slideIndex = n);
        }

        function showSlide(n) {
            let i;
            const slides = document.getElementsByClassName("slide");
            const dots = document.getElementsByClassName('dot');
            
            if (n > slides.length) { slideIndex = 1 }
            if (n < 1) { slideIndex = slides.length }

            // hide all slides
            for (i = 0; i < slides.length; i++) {
                slides[i].classList.add('hidden');
            }

            // remove active status from all dots
            for (i = 0; i < dots.length; i++) {
                dots[i].classList.remove('bg-orange');
                dots[i].classList.add('bg-blue');
            }

            // show the active slide
            slides[slideIndex - 1].classList.remove('hidden');

            // highlight the active dot
            dots[slideIndex - 1].classList.remove('bg-blue');
            dots[slideIndex - 1].classList.add('bg-orange');
        }

        // Signup Modal
// Get the modal
var sModal = document.getElementById("signupModal");

// Get the button that opens the modal
var sLink = document.getElementById("signupLink");

// Get the <span> element that closes the modal
var sCross = document.getElementById("closeSignupModal");

// When the user clicks on the button, open the modal
sLink.onclick = function() {
  sModal.style.display = "block";
}

// When the user clicks on (x), close the modal
sCross.onclick = function() {
  sModal.style.display = "none";
}

// Login Modal
// Get the modal
var lModal = document.getElementById("loginModal");

// Get the button that opens the modal
var lLink = document.getElementById("loginLink");

// Get the <span> element that closes the modal
var lCross = document.getElementById("closeLoginModal");

// When the user clicks on the button, open the modal
lLink.onclick = function() {
  lModal.style.display = "block";
}

// When the user clicks on (x), close the modal
lCross.onclick = function() {
  lModal.style.display = "none";
}