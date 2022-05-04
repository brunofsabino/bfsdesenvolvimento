// import type { HttpContextContract } from '@ioc:Adonis/Core/HttpContext'

export default class PainelController {

    protected users = [
        {
            id: 1,
            name: 'Bruno Ferraz',
            slug: 'brubs'
        },
        {
            id: 2,
            name: 'Fulano da Silva',
            slug: 'fufu'
        },
        {
            id: 3,
            name: 'Ciclano de Tal',
            slug: 'cici'
        }
    ]

    async index({  response }) {
        // request.qs()
        // let json = { hello: 'world'}
        // response.send(json)
        // response.status(404)// 501, 500... created 201, 200
        // response.status(201).send(json)
        response.redirect().toPath('/api/painel/usuarios/1')
        // response.download()

        // return { 
        //     response: 'Index do Painel',
        //     language: request.language(),
        //     headers: request.headers(),
        //     method: request.method(),
        //     ip: request.ip(),
        //     ips: request.ips(),
        //     qs: request.qs(),
        //     url: request.url(),
        //     completeUrl: request.completeUrl(),
        //     all: request.all(),
        //     only: request.only(['idade']),
        //     except: request.except(['idade'])
        // }
    }
    // async usuarios() {
    //     return { 
    //         user: this.users
    //     }
    // }
    // async admin() {
    //     return { response: 'Rota Admin'}
    // }
    async usuarioById({ params}) {
        if(!params['id']){
            return { users: this.users}
        }
        let myRequestUserId = params['id']
        let myYser = this.users.find( user => user.id == myRequestUserId)
        if(!myYser) {
            return { error: 'Nenhum usuario encontrado'}
        }
        return myYser
    }

    async usuarioBySlug({ params}) {
        let myRequestUserSlug = params['slug']
        let myYser = this.users.find( user => user.slug == myRequestUserSlug)
        if(!myYser) {
            return { error: 'Nenhum usuario encontrado'}
        }
        return myYser
    }

    async docs({ params }) {
        return params['*'][1]
    }
}
