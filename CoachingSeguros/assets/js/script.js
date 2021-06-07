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

    // document.body.style.overflow = "hidden"
})


// const tamanho = document.querySelector(".banner-area2").clientWidth;


/* SLIDER */
let totalSlides = document.querySelectorAll('.slider--item').length
let widthSlideItem = document.querySelector('.slider--item').clientWidth
let currentSlide = 0

const sliderText1 = document.querySelector(".slider--item--text1")
const sliderText2 = document.querySelector(".slider--item--text2")
const sliderText3 = document.querySelector(".slider--item--text3")
const sliderText4 = document.querySelector(".slider--item--text4")


document.querySelector('.slider--width').style.width = `calc( 58vw * ${totalSlides} )`
// document.querySelector('.slider--width').style.width = `calc(750px * ${totalSlides})`

function goPrev(){
    currentSlide--
    if(currentSlide < 0){
        currentSlide = totalSlides -1
    }
    
    if(currentSlide == 0){
        sliderText1.classList.add("active")
        sliderText2.classList.remove("active")
        sliderText3.classList.remove("active")
        sliderText4.classList.remove("active")
    }
    if(currentSlide == 1){
        sliderText1.classList.remove("active")
        sliderText2.classList.add("active")
        sliderText3.classList.remove("active")
        sliderText4.classList.remove("active")
    }
    if(currentSlide == 2){
        sliderText1.classList.remove("active")
        sliderText2.classList.remove("active")
        sliderText3.classList.add("active")
        sliderText4.classList.remove("active")
    }
    if(currentSlide == 3){
        sliderText1.classList.remove("active")
        sliderText2.classList.remove("active")
        sliderText3.classList.remove("active")
        sliderText4.classList.add("active")
    }
    updateMargin()
}
function goNext(){
    currentSlide++
    if(currentSlide > (totalSlides - 1)){
        currentSlide = 0
    }
    if(currentSlide == 0){
        sliderText1.classList.add("active")
        sliderText2.classList.remove("active")
        sliderText3.classList.remove("active")
        sliderText4.classList.remove("active")
    }
    if(currentSlide == 1){
        sliderText1.classList.remove("active")
        sliderText2.classList.add("active")
        sliderText3.classList.remove("active")
        sliderText4.classList.remove("active")
    }
    if(currentSlide == 2){
        sliderText1.classList.remove("active")
        sliderText2.classList.remove("active")
        sliderText3.classList.add("active")
        sliderText4.classList.remove("active")
    }
    if(currentSlide == 3){
        sliderText1.classList.remove("active")
        sliderText2.classList.remove("active")
        sliderText3.classList.remove("active")
        sliderText4.classList.add("active")
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
/* SLIDER TEXT */

