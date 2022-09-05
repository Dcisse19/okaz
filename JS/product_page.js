// Signup Modal
// Get the modal
var storeModal = document.getElementById("storeModal");

// Get the button that opens the modal
var storeLink = document.getElementById("storeLink");

// Get the <span> element that closes the modal
var storeCross = document.getElementById("closeStoreModal");

// When the user clicks on the button, open the modal
storeLink.onclick = function() {
  storeModal.style.display = "block";
}

// When the user clicks on (x), close the modal
storeCross.onclick = function() {
  storeModal.style.display = "none";
}
