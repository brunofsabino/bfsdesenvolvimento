import { Request, Response } from 'express'
import { Todo } from '../models/Todo'

export const all = async (req: Request, res: Response) => {
    const list = await Todo.findAll()
    res.json({ list })
}
export const add = async (req: Request, res: Response) => {
    if(req.body.title){
        let newTodo = await Todo.create({
            title: req.body.title,
            done: req.body.done ? true : false
        })
        res.status(201).json({ item: newTodo })
    } else {
        res.status(404).json({ error: 'Dados não enviados.'})
    }
}
export const update = async (req: Request, res: Response) => {
    let id: string  = req.params.id
    let user = await Todo.findByPk(id)
    if(user){
        if(req.body.title) {
            user.title = req.body.title
        }
        if(req.body.done) {
            switch(req.body.done.toLowerCase()) {
                case 'true':
                case '1':
                    user.done = true
                    break
                case 'false':
                case '0':
                    user.done = false
                    break
            }
        }
        await user.save()
        res.json( {item: user} )
    } else {
        res.status( 404 ).json({ error: 'Usuario não localizado'})
    }
}
export const remove = async (req: Request, res: Response) => {
    let id: string = req.params.id
    let todo = await Todo.findByPk(id)
    if(todo){
        await todo.destroy()
    }
    res.json({})
}