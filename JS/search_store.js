// Signup Modal
// Get the modal

var storeForm = document.getElementById("searchStoreForm");
var storeModal = document.getElementById("store_searchModal");

// Get the <span> element that closes the modal
var storeCross = document.getElementById("closeStore_searchModal");

// When the user clicks on the button, open the modal
storeForm.onsubmit = function() {
  storeModal.style.display = "block";
}

// When the user clicks on (x), close the modal
storeCross.onclick = function() {
  storeModal.style.display = "none";
}
