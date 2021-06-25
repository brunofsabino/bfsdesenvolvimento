// MENU RESPONSIVO
let show = true;

const menuSection = document.querySelector(".menu-section")
const menuToggle = document.querySelector(".menu-toggle")
const menuNav = document.querySelector(".header .menu-section nav")

menuToggle.addEventListener("click", ()=>{

    document.body.style.overflowY = show ? 'hidden' : 'initial'

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



/*  Aparecer area de simulação plano de saude */

const buttonSimulador = document.querySelector(".area1-button")
const area1 = document.querySelector(".area1")
const area1Simulacao = document.querySelector(".area1-simulacao")

const textoAparecer = document.querySelector(".area1-forms-escolha-operadora h3")
const operadoraEscolhidaUsuario = document.querySelector(".operadora-escolhida")
const operadoras = ['Todas as Operadoras', 'Amil', 'Allianz', 'Bradesco', 'Care Plus', 'Saúde Beneficência', 'SulAmérica', 'Omint', 'NotreDame Intermédica', 'Sompo', 'Unimed', 'Golden Cross', 'Trasmontano', 'São Cristóvão', 'Ameplan', 'Porto Seguro', 'Bio Saúde', 'Biovida', 'Blue Med', 'Cruz Azul', 'Medical Health', 'Interclínicas', 'Total MedCare', 'Med Tour', 'Qualicorp', 'São Miguel Saúde']


buttonSimulador.addEventListener('click', (e)=>{
    e.preventDefault()
    area1.style.height = "280vh"
    
    setTimeout( ()=>{
        area1Simulacao.style.display = 'block'
    }, 500)

    
})


const amil = document.querySelectorAll(".operadoras-area1")

amil.forEach(click => {
    click.addEventListener("click",()=>{
        
        const operadoraEscolhida = click.getAttribute('data-id')
        textoAparecer.innerHTML = operadoras[operadoraEscolhida]
        operadoraEscolhidaUsuario.setAttribute('value', operadoras[operadoraEscolhida])

        
        // const moverTela = document.querySelector("form textarea").getBoundingClientRect().y
        // console.log(moverTela)
        // window.scroll(0, moverTela)
    })
});


// scroll ao clicar em Simulador online

const simuladorHeader = document.querySelector('.header .header-telefone-simulador')
const moverTela = "540vh"
simuladorHeader.addEventListener("click", ()=>{
    window.scroll(0, moverTela)
})