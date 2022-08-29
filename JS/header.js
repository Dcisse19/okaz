// Get the modal
var modal = document.getElementById("signupModal");

// Get the button that opens the modal
var btn = document.getElementById("signupLink");

// Get the <span> element that closes the modal
var cross = document.getElementById("closeSignupModal");

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
cross.onclick = function() {
  modal.style.display = "none";
}