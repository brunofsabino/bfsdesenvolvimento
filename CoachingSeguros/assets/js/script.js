// MENU RESPONSIVO
let show = true;

const menuSection = document.querySelector(".menu-section")
const menuToggle = document.querySelector(".menu-toggle")
const menuNav = document.querySelector(".header .menu-section nav")

menuToggle.addEventListener("click", ()=>{
    menuSection.classList.toggle("on", show)
    menuToggle.classList.toggle("on", show)
    menuNav.classList.toggle("on", show)
    show = !show
})