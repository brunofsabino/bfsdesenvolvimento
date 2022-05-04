import { Request, Response } from 'express'

export const initial = (req: Request, res: Response) => {
    res.render('pages/page')
}

export const home = ( req: Request, res: Response ) => {

    
    res.render('pages/home')
}