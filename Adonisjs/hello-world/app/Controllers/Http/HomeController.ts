// import type { HttpContextContract }  from '@ioc:Adonis/Core/HttpContext'

import View from "@ioc:Adonis/Core/View"

export default class HomeController {
    
    async index({ view }) {
        // console.log(ctx)
        let dados = {
            usuarios: [
                {
                // nome:'Bruno Ferraz',
                // idade: 32,
                // apelido:'brubs',
                // tecnologias: ['html', 'css', 'javascript'],
                // tecnologias_excluidas: ['msql']
                    nome: 'Bruno Ferraz Sabino',
                    tecnologias: ['html', 'css', 'javascript'],
                    admin: true
                },
                {
                    nome: 'José da Silva',
                    tecnologias: ['php', 'python', 'javascript'],
                    admin: false
                },
                {
                    nome: 'Maria José',
                    tecnologias: ['C', 'C++', 'java'],
                    admin: true
                }
            ],
            script: "<script> alert('teste') </script>",
            getUser: async () => { return 'User'}
        }
        return view.render('homepage', dados )
        // return "Hello World"
    }
    async sobre({view}) {
        return view.render('sobre')
    }
}
