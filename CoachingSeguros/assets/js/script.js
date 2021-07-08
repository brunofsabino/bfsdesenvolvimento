// MENU RESPONSIVO
let show = true;

const menuSection = document.querySelector(".menu-section")
const menuToggle = document.querySelector(".menu-toggle")
const menuNav = document.querySelector(".header .menu-section nav")
const body = window.screen.width

menuToggle.addEventListener("click", ()=>{

    document.body.style.overflowY = show ? 'hidden' : 'initial'

    menuSection.classList.toggle("on", show)
    menuToggle.classList.toggle("on", show)
    menuNav.classList.toggle("on", show)
    show = !show    
})

// DIV FLASH 
const flash = document.querySelector(".flash")
flash.addEventListener("click", ()=>{
    flash.style.display = "none"
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



if(body <= 768) {
    document.querySelector('.slider--width').style.width = `calc( 100vw * ${totalSlides} )`
} else if (body >= 768) {
    document.querySelector('.slider--width').style.width = `calc( 58vw * ${totalSlides} )`
}

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
const largura2 = document.querySelector('.slider--width').clientWidth / totalSlides

// console.log(largura)
function updateMargin() {
    const body = window.screen.width

    let newMargin = (currentSlide * largura2)
    
    if(body <= 768) {
        const larguraTela = window.screen.width
        newMargin = (currentSlide * body)
        document.querySelector('.slider--width').style.marginLeft = `-${newMargin}px`
    } else if (body >= 768){
        newMargin = (currentSlide * largura2)
        document.querySelector('.slider--width').style.marginLeft = `-${newMargin}px`
    }
    
}

setInterval(goNext, 5000)



/*  Aparecer area de simulação plano de saude */

const buttonSimulador = document.querySelector(".area1-button")
const area1 = document.querySelector(".area1")
const area1Simulacao = document.querySelector(".area1-simulacao")

const textoAparecer = document.querySelector(".area1-forms-escolha-operadora h3")
const operadoraEscolhidaUsuario = document.querySelector(".operadora-escolhida")
const operadoras = ['Todas as Operadoras', 'Amil', 'Allianz', 'Bradesco', 'Care Plus', 'Saúde Beneficência', 'SulAmérica', 'Omint', 'NotreDame Intermédica', 'Sompo', 'Unimed', 'Golden Cross', 'Trasmontano', 'São Cristóvão', 'Ameplan', 'Porto Seguro', 'Bio Saúde', 'Biovida', 'Blue Med', 'Cruz Azul', 'Medical Health', 'Interclínicas', 'Total MedCare', 'Med Tour', 'Qualicorp', 'São Miguel Saúde']


function abrir (e) {
    const body = window.screen.width

    console.log(body)

    e.preventDefault()
    area1.style.height = "280vh"
    
    setTimeout( ()=>{
        area1Simulacao.style.display = 'flex'
    }, 500)

    if(body < 937) {
        area1.style.height = "300vh"
    } 
    if(body < 768) {
        area1.style.height = "310vh"
    }
    if(body < 601) {
        area1.style.height = "auto"
    }
}
function abrir2 (e) {
    const body = window.screen.width
    area1.style.height = "280vh"
    
    setTimeout( ()=>{
        area1Simulacao.style.display = 'flex'
    }, 500)
    if(body < 937) {
        area1.style.height = "300vh"
    } 
    if(body < 768) {
        area1.style.height = "310vh"
    }
    if(body < 601) {
        area1.style.height = "auto"
    }
}
buttonSimulador.addEventListener('click', abrir)


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

// area aparecer ao clicar descriçao dos serviços

const sessionAreaSeguros = document.querySelector(".area-seguros")

const areaSeguros1 = document.querySelector(".area-seguros-icon1")
const areaSeguros2 = document.querySelector(".area-seguros-icon2")
const areaSeguros3 = document.querySelector(".area-seguros-icon3")
const areaSeguros4 = document.querySelector(".area-seguros-icon4")
const areaSeguros5 = document.querySelector(".area-seguros-icon5")
const areaSeguros6 = document.querySelector(".area-seguros-icon6")
const areaSeguros7 = document.querySelector(".area-seguros-icon7")
const areaSeguros8 = document.querySelector(".area-seguros-icon8")

const areaSeguros1Button = document.querySelector(".area-seguros-icon1 a")
const areaSeguros2Button = document.querySelector(".area-seguros-icon2 a")
const areaSeguros3Button = document.querySelector(".area-seguros-icon3 a")
const areaSeguros4Button = document.querySelector(".area-seguros-icon4 a")
const areaSeguros5Button = document.querySelector(".area-seguros-icon5 a")
const areaSeguros6Button = document.querySelector(".area-seguros-icon6 a")
const areaSeguros7Button = document.querySelector(".area-seguros-icon7 a")
const areaSeguros8Button = document.querySelector(".area-seguros-icon8 a")

const areaSeguros1Aparecer = document.querySelector(".area-seguros-icon1-aparecer")
const areaSeguros2Aparecer = document.querySelector(".area-seguros-icon2-aparecer")
const areaSeguros3Aparecer = document.querySelector(".area-seguros-icon3-aparecer")
const areaSeguros4Aparecer = document.querySelector(".area-seguros-icon4-aparecer")
const areaSeguros5Aparecer = document.querySelector(".area-seguros-icon5-aparecer")
const areaSeguros6Aparecer = document.querySelector(".area-seguros-icon6-aparecer")
const areaSeguros7Aparecer = document.querySelector(".area-seguros-icon7-aparecer")
const areaSeguros8Aparecer = document.querySelector(".area-seguros-icon8-aparecer")


const areaSeguros1AparecerButton = document.querySelector(".area-seguros-icon1-aparecer a")
const areaSeguros2AparecerButton = document.querySelector(".area-seguros-icon2-aparecer a")
const areaSeguros3AparecerButton = document.querySelector(".area-seguros-icon3-aparecer a")
const areaSeguros4AparecerButton = document.querySelector(".area-seguros-icon4-aparecer a")
const areaSeguros5AparecerButton = document.querySelector(".area-seguros-icon5-aparecer a")
const areaSeguros6AparecerButton = document.querySelector(".area-seguros-icon6-aparecer a")
const areaSeguros7AparecerButton = document.querySelector(".area-seguros-icon7-aparecer a")
const areaSeguros8AparecerButton = document.querySelector(".area-seguros-icon8-aparecer a")

areaSeguros1Button.addEventListener("click", (e)=> {
    e.preventDefault()
    setTimeout( ()=>{
        areaSeguros2.style.display = "none"
        areaSeguros3.style.display = "none"
        areaSeguros4.style.display = "none"
        areaSeguros5.style.display = "none"
        areaSeguros6.style.display = "none"
        areaSeguros7.style.display = "none"
        areaSeguros8.style.display = "none"
    }, 300)
    if(body < 937) {
       
        areaSeguros1.style.position = "relative"
        areaSeguros1.style.maxWidth = "85vw"
        areaSeguros1.style.padding = "40px"
        sessionAreaSeguros.style.display = "flex"
        sessionAreaSeguros.style.flexDirection = "column"
    }
    if(body > 938) {
        areaSeguros1.style.position = "absolute"
        areaSeguros1.style.maxWidth = "35%"
        sessionAreaSeguros.style.justifyContent = "right"
    }
    if(body > 1600) {
        areaSeguros1.style.maxWidth = "50%"
        areaSeguros1.style.padding = "40px"
    }

    areaSeguros1Aparecer.style.display = "flex"
    areaSeguros1Button.style.display = 'none'
   
    console.log(body)
})
areaSeguros2Button.addEventListener("click", (e)=> {
    e.preventDefault()
    setTimeout( ()=>{
        areaSeguros1.style.display = "none"
        areaSeguros3.style.display = "none"
        areaSeguros4.style.display = "none"
        areaSeguros5.style.display = "none"
        areaSeguros6.style.display = "none"
        areaSeguros7.style.display = "none"
        areaSeguros8.style.display = "none"
    }, 300)
    if(body < 937) {
       
        areaSeguros2.style.position = "relative"
        areaSeguros2.style.maxWidth = "85vw"
        areaSeguros2.style.padding = "40px"
        sessionAreaSeguros.style.display = "flex"
        sessionAreaSeguros.style.flexDirection = "column"
    }
    if(body > 938) {
        areaSeguros2.style.position = "absolute"
        areaSeguros2.style.maxWidth = "35%"
        sessionAreaSeguros.style.justifyContent = "right"
    }
    if(body > 1600) {
        areaSeguros2.style.maxWidth = "50%"
        areaSeguros2.style.padding = "40px"
    }

    areaSeguros2Aparecer.style.display = "flex"
    areaSeguros2Button.style.display = 'none'
})
areaSeguros3Button.addEventListener("click", (e)=> {
    e.preventDefault()
    setTimeout( ()=>{
        areaSeguros2.style.display = "none"
        areaSeguros1.style.display = "none"
        areaSeguros4.style.display = "none"
        areaSeguros5.style.display = "none"
        areaSeguros6.style.display = "none"
        areaSeguros7.style.display = "none"
        areaSeguros8.style.display = "none"
    }, 300)
    if(body < 937) {
       
        areaSeguros3.style.position = "relative"
        areaSeguros3.style.maxWidth = "85vw"
        areaSeguros3.style.padding = "40px"
        sessionAreaSeguros.style.display = "flex"
        sessionAreaSeguros.style.flexDirection = "column"
    }
    if(body > 938) {
        areaSeguros3.style.position = "absolute"
        areaSeguros3.style.maxWidth = "35%"
        sessionAreaSeguros.style.justifyContent = "right"
    }
    if(body > 1600) {
        areaSeguros3.style.maxWidth = "50%"
        areaSeguros3.style.padding = "40px"
    }

    areaSeguros3Aparecer.style.display = "flex"
    areaSeguros3Button.style.display = 'none'
})
areaSeguros4Button.addEventListener("click", (e)=> {
    e.preventDefault()
    setTimeout( ()=>{
        areaSeguros2.style.display = "none"
        areaSeguros3.style.display = "none"
        areaSeguros1.style.display = "none"
        areaSeguros5.style.display = "none"
        areaSeguros6.style.display = "none"
        areaSeguros7.style.display = "none"
        areaSeguros8.style.display = "none"
    }, 300)
    if(body < 937) {
       
        areaSeguros4.style.position = "relative"
        areaSeguros4.style.maxWidth = "85vw"
        areaSeguros4.style.padding = "40px"
        sessionAreaSeguros.style.display = "flex"
        sessionAreaSeguros.style.flexDirection = "column"
    }
    if(body > 938) {
        areaSeguros4.style.position = "absolute"
        areaSeguros4.style.maxWidth = "35%"
        sessionAreaSeguros.style.justifyContent = "right"
    }
    if(body > 1600) {
        areaSeguros4.style.maxWidth = "50%"
        areaSeguros4.style.padding = "40px"
    }

    areaSeguros4Aparecer.style.display = "flex"
    areaSeguros4Button.style.display = 'none'
})
areaSeguros5Button.addEventListener("click", (e)=> {
    e.preventDefault()
    setTimeout( ()=>{
        areaSeguros2.style.display = "none"
        areaSeguros3.style.display = "none"
        areaSeguros4.style.display = "none"
        areaSeguros1.style.display = "none"
        areaSeguros6.style.display = "none"
        areaSeguros7.style.display = "none"
        areaSeguros8.style.display = "none"
    }, 300)
    if(body < 937) {
       
        areaSeguros5.style.position = "relative"
        areaSeguros5.style.maxWidth = "85vw"
        areaSeguros5.style.padding = "40px"
        sessionAreaSeguros.style.display = "flex"
        sessionAreaSeguros.style.flexDirection = "column"
    }
    if(body > 938) {
        areaSeguros5.style.position = "absolute"
        areaSeguros5.style.maxWidth = "35%"
        sessionAreaSeguros.style.justifyContent = "right"
    }
    if(body > 1600) {
        areaSeguros5.style.maxWidth = "50%"
        areaSeguros5.style.padding = "40px"
    }

    areaSeguros5Aparecer.style.display = "flex"
    areaSeguros5Button.style.display = 'none'
})
areaSeguros6Button.addEventListener("click", (e)=> {
    e.preventDefault()
    setTimeout( ()=>{
        areaSeguros2.style.display = "none"
        areaSeguros3.style.display = "none"
        areaSeguros4.style.display = "none"
        areaSeguros5.style.display = "none"
        areaSeguros1.style.display = "none"
        areaSeguros7.style.display = "none"
        areaSeguros8.style.display = "none"
    }, 300)
    if(body < 937) {
       
        areaSeguros6.style.position = "relative"
        areaSeguros6.style.maxWidth = "85vw"
        areaSeguros6.style.padding = "40px"
        sessionAreaSeguros.style.display = "flex"
        sessionAreaSeguros.style.flexDirection = "column"
    }
    if(body > 938) {
        areaSeguros6.style.position = "absolute"
        areaSeguros6.style.maxWidth = "35%"
        sessionAreaSeguros.style.justifyContent = "right"
    }
    if(body > 1600) {
        areaSeguros6.style.maxWidth = "50%"
        areaSeguros6.style.padding = "40px"
    }

    areaSeguros6Aparecer.style.display = "flex"
    areaSeguros6Button.style.display = 'none'
})
areaSeguros7Button.addEventListener("click", (e)=> {
    e.preventDefault()
    setTimeout( ()=>{
        areaSeguros2.style.display = "none"
        areaSeguros3.style.display = "none"
        areaSeguros4.style.display = "none"
        areaSeguros5.style.display = "none"
        areaSeguros6.style.display = "none"
        areaSeguros1.style.display = "none"
        areaSeguros8.style.display = "none"
    }, 300)
    if(body < 937) {
       
        areaSeguros7.style.position = "relative"
        areaSeguros7.style.maxWidth = "85vw"
        areaSeguros7.style.padding = "40px"
        sessionAreaSeguros.style.display = "flex"
        sessionAreaSeguros.style.flexDirection = "column"
    }
    if(body > 938) {
        areaSeguros7.style.position = "absolute"
        areaSeguros7.style.maxWidth = "35%"
        sessionAreaSeguros.style.justifyContent = "right"
    }
    if(body > 1600) {
        areaSeguros7.style.maxWidth = "50%"
        areaSeguros7.style.padding = "40px"
    }

    areaSeguros7Aparecer.style.display = "flex"
    areaSeguros7Button.style.display = 'none'
})
areaSeguros8Button.addEventListener("click", (e)=> {
    e.preventDefault()
    setTimeout( ()=>{
        areaSeguros2.style.display = "none"
        areaSeguros3.style.display = "none"
        areaSeguros4.style.display = "none"
        areaSeguros5.style.display = "none"
        areaSeguros6.style.display = "none"
        areaSeguros7.style.display = "none"
        areaSeguros1.style.display = "none"
    }, 300)
    if(body < 937) {
       
        areaSeguros8.style.position = "relative"
        areaSeguros8.style.maxWidth = "85vw"
        areaSeguros8.style.padding = "40px"
        sessionAreaSeguros.style.display = "flex"
        sessionAreaSeguros.style.flexDirection = "column"
    }
    if(body > 938) {
        areaSeguros8.style.position = "absolute"
        areaSeguros8.style.maxWidth = "35%"
        sessionAreaSeguros.style.justifyContent = "right"
    }
    if(body > 1600) {
        areaSeguros8.style.maxWidth = "50%"
        areaSeguros8.style.padding = "40px"
    }

    areaSeguros8Aparecer.style.display = "flex"
    areaSeguros8Button.style.display = 'none'
})

areaSeguros1AparecerButton.addEventListener("click", (e)=> {
    e.preventDefault()
    areaSeguros1Aparecer.style.display = "none"
    areaSeguros1Button.style.display = 'flex'

    setTimeout( ()=>{
        areaSeguros1.style.display = "flex"
        areaSeguros2.style.display = "flex"
        areaSeguros3.style.display = "flex"
        areaSeguros4.style.display = "flex"
        areaSeguros5.style.display = "flex"
        areaSeguros6.style.display = "flex"
        areaSeguros7.style.display = "flex"
        areaSeguros8.style.display = "flex"
    }, 300)

    areaSeguros1.style.position = "relative"
    areaSeguros1.style.maxWidth = "22vw"
    areaSeguros1.style.padding = "40px"
    sessionAreaSeguros.style.display = "grid"
    sessionAreaSeguros.style.flexDirection = "column"
    if(body < 600) {
        areaSeguros1.style.maxWidth = "max-content"
        areaSeguros1.style.padding = "0px"
    }
})

areaSeguros2AparecerButton.addEventListener("click", (e)=> {
    e.preventDefault()
    areaSeguros2Aparecer.style.display = "none"
    areaSeguros2Button.style.display = 'flex'

    setTimeout( ()=>{
        areaSeguros1.style.display = "flex"
        areaSeguros2.style.display = "flex"
        areaSeguros3.style.display = "flex"
        areaSeguros4.style.display = "flex"
        areaSeguros5.style.display = "flex"
        areaSeguros6.style.display = "flex"
        areaSeguros7.style.display = "flex"
        areaSeguros8.style.display = "flex"
    }, 300)
    

    areaSeguros2.style.position = "relative"
    areaSeguros2.style.maxWidth = "22vw"
    areaSeguros2.style.padding = "40px"
    sessionAreaSeguros.style.display = "grid"
    sessionAreaSeguros.style.flexDirection = "column"
    if(body < 600) {
        areaSeguros2.style.maxWidth = "max-content"
        areaSeguros2.style.padding = "0px"
    }
})
areaSeguros3AparecerButton.addEventListener("click", (e)=> {
    e.preventDefault()
    areaSeguros3Aparecer.style.display = "none"
    areaSeguros3Button.style.display = 'flex'

    setTimeout( ()=>{
        areaSeguros1.style.display = "flex"
        areaSeguros2.style.display = "flex"
        areaSeguros3.style.display = "flex"
        areaSeguros4.style.display = "flex"
        areaSeguros5.style.display = "flex"
        areaSeguros6.style.display = "flex"
        areaSeguros7.style.display = "flex"
        areaSeguros8.style.display = "flex"
    }, 300)

    areaSeguros3.style.position = "relative"
    areaSeguros3.style.maxWidth = "22vw"
    areaSeguros3.style.padding = "40px"
    sessionAreaSeguros.style.display = "grid"
    sessionAreaSeguros.style.flexDirection = "column"
    if(body < 600) {
        areaSeguros3.style.maxWidth = "max-content"
        areaSeguros3.style.padding = "0px"
    }
})
areaSeguros4AparecerButton.addEventListener("click", (e)=> {
    e.preventDefault()
    areaSeguros4Aparecer.style.display = "none"
    areaSeguros4Button.style.display = 'flex'

    setTimeout( ()=>{
        areaSeguros1.style.display = "flex"
        areaSeguros2.style.display = "flex"
        areaSeguros3.style.display = "flex"
        areaSeguros4.style.display = "flex"
        areaSeguros5.style.display = "flex"
        areaSeguros6.style.display = "flex"
        areaSeguros7.style.display = "flex"
        areaSeguros8.style.display = "flex"
    }, 300)

    areaSeguros4.style.position = "relative"
    areaSeguros4.style.maxWidth = "22vw"
    areaSeguros4.style.padding = "40px"
    sessionAreaSeguros.style.display = "grid"
    sessionAreaSeguros.style.flexDirection = "column"
    
    if(body < 600) {
        console.log(body)
        areaSeguros4.style.maxWidth = "max-content"
        areaSeguros4.style.padding = "0px"
    }
})
areaSeguros5AparecerButton.addEventListener("click", (e)=> {
    e.preventDefault()
    areaSeguros5Aparecer.style.display = "none"
    areaSeguros5Button.style.display = 'flex'

    setTimeout( ()=>{
        areaSeguros1.style.display = "flex"
        areaSeguros2.style.display = "flex"
        areaSeguros3.style.display = "flex"
        areaSeguros4.style.display = "flex"
        areaSeguros5.style.display = "flex"
        areaSeguros6.style.display = "flex"
        areaSeguros7.style.display = "flex"
        areaSeguros8.style.display = "flex"
    }, 300)

    areaSeguros5.style.position = "relative"
    areaSeguros5.style.maxWidth = "22vw"
    areaSeguros5.style.padding = "40px"
    sessionAreaSeguros.style.display = "grid"
    sessionAreaSeguros.style.flexDirection = "column"
    if(body < 600) {
        areaSeguros5.style.maxWidth = "max-content"
        areaSeguros5.style.padding = "0px"
    }
})
areaSeguros6AparecerButton.addEventListener("click", (e)=> {
    e.preventDefault()
    areaSeguros6Aparecer.style.display = "none"
    areaSeguros6Button.style.display = 'flex'

    setTimeout( ()=>{
        areaSeguros1.style.display = "flex"
        areaSeguros2.style.display = "flex"
        areaSeguros3.style.display = "flex"
        areaSeguros4.style.display = "flex"
        areaSeguros5.style.display = "flex"
        areaSeguros6.style.display = "flex"
        areaSeguros7.style.display = "flex"
        areaSeguros8.style.display = "flex"
    }, 300)

    areaSeguros6.style.position = "relative"
    areaSeguros6.style.maxWidth = "22vw"
    areaSeguros6.style.padding = "40px"
    sessionAreaSeguros.style.display = "grid"
    sessionAreaSeguros.style.flexDirection = "column"
    if(body < 600) {
        areaSeguros6.style.maxWidth = "max-content"
        areaSeguros6.style.padding = "0px"
    }
})
areaSeguros7AparecerButton.addEventListener("click", (e)=> {
    e.preventDefault()
    areaSeguros7Aparecer.style.display = "none"
    areaSeguros7Button.style.display = 'flex'

    setTimeout( ()=>{
        areaSeguros1.style.display = "flex"
        areaSeguros2.style.display = "flex"
        areaSeguros3.style.display = "flex"
        areaSeguros4.style.display = "flex"
        areaSeguros5.style.display = "flex"
        areaSeguros6.style.display = "flex"
        areaSeguros7.style.display = "flex"
        areaSeguros8.style.display = "flex"
    }, 300)

    areaSeguros7.style.position = "relative"
    areaSeguros7.style.maxWidth = "22vw"
    areaSeguros7.style.padding = "40px"
    sessionAreaSeguros.style.display = "grid"
    sessionAreaSeguros.style.flexDirection = "column"
    if(body < 600) {
        areaSeguros7.style.maxWidth = "max-content"
        areaSeguros7.style.padding = "0px"
    }
})
areaSeguros8AparecerButton.addEventListener("click", (e)=> {
    e.preventDefault()
    areaSeguros8Aparecer.style.display = "none"
    areaSeguros8Button.style.display = 'block'

    setTimeout( ()=>{
        areaSeguros1.style.display = "flex"
        areaSeguros2.style.display = "flex"
        areaSeguros3.style.display = "flex"
        areaSeguros4.style.display = "flex"
        areaSeguros5.style.display = "flex"
        areaSeguros6.style.display = "flex"
        areaSeguros7.style.display = "flex"
        areaSeguros8.style.display = "flex"
    }, 300)

    areaSeguros8.style.position = "relative"
    areaSeguros8.style.maxWidth = "22vw"
    areaSeguros8.style.padding = "40px"
    sessionAreaSeguros.style.display = "grid"
    sessionAreaSeguros.style.flexDirection = "column"
    if(body < 600) {
        areaSeguros8.style.maxWidth = "max-content"
        areaSeguros8.style.padding = "0px"
    }
})


// aparecer whats
const aparecerWhatss = document.querySelector(".whats-anime")
window.onscroll = ()=> {
    aparecerWhats();
}
function aparecerWhats() {
    if(document.body.scrollTop > 500 || document.documentElement.scrollTop > 500 )  {
        if(body < 767) {
            aparecerWhatss.style.display = 'block'
        }   
    } else {
        
        aparecerWhatss.style.display = 'none'
            
        
        
    }
}