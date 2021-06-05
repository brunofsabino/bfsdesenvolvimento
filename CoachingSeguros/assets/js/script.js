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


// const tamanho = document.querySelector(".banner-area2").clientWidth;


/* SLIDER */
let totalSlides = document.querySelectorAll('.slider--item').length
let widthSlideItem = document.querySelector('.slider--item').clientWidth
let currentSlide = 0


document.querySelector('.slider--width').style.width = `calc( 58vw * ${totalSlides} )`
// document.querySelector('.slider--width').style.width = `calc(750px * ${totalSlides})`

function goPrev(){
    currentSlide--
    if(currentSlide < 0){
        currentSlide = totalSlides -1
    }
    updateMargin()
}
function goNext(){
    currentSlide++
    if(currentSlide > (totalSlides - 1)){
        currentSlide = 0
    }
    updateMargin()
}
const largura = document.querySelector('.slider--width').clientWidth / totalSlides
console.log(largura)
function updateMargin() {
    let newMargin = (currentSlide * largura)
    document.querySelector('.slider--width').style.marginLeft = `-${newMargin}px`
}

setInterval(goNext, 5000)