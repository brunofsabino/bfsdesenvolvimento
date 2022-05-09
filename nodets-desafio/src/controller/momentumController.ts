import { Request, Response } from 'express'
import * as Momentum from '../models/Momentum'
import date from 'date-and-time'



export const home = async (req: Request, res: Response) => {
    let phrase = await Momentum.Buscaphrase()
    let horas = Momentum.HoraCerta()
    let periodo = horas.periodos
    
    res.render('pages/page', {
        phrase,
        horas: horas.hora,
        periodo
    })
}

