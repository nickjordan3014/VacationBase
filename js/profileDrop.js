let profileDrop = document.querySelector(".drop-list");
let button = document.querySelector(".drop-btn");

const toggle = () => profileDrop.classList.toggle("active");

// click anywhere else but the drop down to close it
window.addEventListener("click", function (e) {
    if(!button.contains(e.target)) {
        profileDrop.classList.remove("active");
    }
});