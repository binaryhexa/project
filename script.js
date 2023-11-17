// // script.js

// document.addEventListener("DOMContentLoaded", function() {
//     var button = document.querySelector("button");
//     var popup = document.getElementById("popup");

//     button.addEventListener("click", function() {
//         // Tampilkan popup
//         popup.style.display = "block";
//     });

//     // Fungsi untuk menutup popup
//     window.closePopup = function() {
//         popup.style.display = "none";
//     };
// });

const myModal = document.getElementById('myModal')
const myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', () => {
  myInput.focus()
})