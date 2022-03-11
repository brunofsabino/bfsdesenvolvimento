import express from 'express'
import mustacheExpress from 'mustache-express'
import dotenv from 'dotenv'
import path from 'path'
import mainRouters from './routers/index'

dotenv.config()

const server = express()
server.set('view engine', 'mustache')
server.set('views', path.join(__dirname, 'views'))
server.engine('mustache', mustacheExpress())

server.use(express.static(path.join(__dirname, '../public')))

//router
server.use(mainRouters)

server.use( (req, res)=> {
    res.render('pages/404')
})

server.listen(process.env.PORT)