import axios from 'axios'
import date from 'date-and-time'



export const Buscaphrase = async () => {
    let phrase = await axios('https://positive-vibes-api.herokuapp.com/quotes/random')
    return phrase.data 
}

export const HoraCerta =  () => {
    let now = new Date()
    let hora = date.format(now, 'H:mm')   
    let periodo = parseInt(date.format(now, 'H'))
    
    let periodos =  {
        manha: false,
        tarde: false,
        noite: false
    }
    if(periodo <= 12) {
        periodos.manha = true;
    }
    if(periodo >= 13 && periodo <= 17) {
        periodos.tarde = true
    }
    if(periodo >= 18 && periodo <= 23) {
        periodos.noite = true
    }
    return {
        hora,
        periodos
    } 
}



