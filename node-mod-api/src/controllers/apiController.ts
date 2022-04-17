import { Request, Response } from 'express'
import { Sequelize } from 'sequelize'
import { Phrase } from '../models/Phrase'

export const ping = (req: Request, res: Response) => {
    res.json({pong: true})
}

export const random = (req: Request, res: Response) => {
    let nRand: number = Math.floor( Math.random() * 10)
    res.json({number: nRand})
}

export const name = (req: Request, res: Response) => {
    let { nome } = req.params
    res.json({nome: `Você enviou o nome ${nome}`})
}

export const createPhrase = async(req: Request, res: Response) => {
    let { author, content } = req.body
    let newPhrase = await Phrase.create({ author, content })
    res.status(201)
    res.json({ id: newPhrase.id, author, content})
}

export const listPhrases = async (req: Request, res: Response) => {
    let list = await Phrase.findAll()
    res.json({ list })
}

export const getPhrase = async (req: Request, res: Response) => {
    let { id } = req.params
    let phrase = await Phrase.findByPk(id)
    if(phrase){
        res.json({phrase})
    }else {
        res.status(404)
        res.json({error: 'Frase não encontrada'})
    }
}

export const updatePhrase = async (req: Request, res: Response) => {
    let { id } = req.params
    let { author, content } = req.body

    let user = await Phrase.findByPk(id)
    if(user){
        user.author = author
        user.content = content
        user.save()

        res.json({user})
    } else{
        res.status(404)
        res.json({ error: 'Usuário não encontrado'})
    }
}

export const deletePhrase = async (req: Request, res: Response ) => {
    let { id } = req.params
    await Phrase.destroy({ where: { id } })
    res.json({})
}

export const randomPhrase = async (req: Request, res: Response ) => {
    let phrase = await Phrase.findOne({
        order: [
            Sequelize.fn('RANDOM')
        ]
    })
    if(phrase) {
        res.json({ phrase})
    } else {
        res.status(404)
        res.json({ error: 'Não há frases cadastradas'})
    }
}