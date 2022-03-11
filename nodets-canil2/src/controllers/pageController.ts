import { Request, Response } from 'express'
import { objectMenu } from '../helpers/createMenuObjetc'
import { Pet }  from '../models/pet'
  
export const home = (req: Request, res: Response) => {
    let list = Pet.getAll()

    res.render('pages/page', {
        menu: objectMenu('all'),
        banner: {
            animal: 'animais',
            background: 'allanimals.jpg'
        },
        list
    })
}

export const dogs = (req: Request, res: Response) => {
    let list = Pet.getFromType('dog');

    res.render('pages/page', {
        menu: objectMenu('dog'),
        banner: {
            animal: 'Cachorros',
            background: 'banner_dog.jpg'
        },
        list
    })
} 

export const cats = (req: Request, res: Response) => {
    let list = Pet.getFromType('cat')

    res.render('pages/page', {
        menu: objectMenu('cat'),
        banner: {
            animal: 'gatos',
            background: 'banner_cat.jpg'
        },
        list
    })
}

export const fishes = (req: Request, res: Response) => {
    let list = Pet.getFromType('fish')

    res.render('pages/page', {
        menu: objectMenu('fish'),
        banner: {
            animal: 'peixes',
            background: 'banner_fish.jpg'
        },
        list
    })
}