import express from 'express'
import dotenv from 'dotenv'
import path from 'path'
import cors from 'cors'
import mustache from 'mustache-express'
import { Server } from 'socket.io';

import router from './routes/api'

dotenv.config()

const server = express()

server.use(cors())
server.use(express.static(path.join(__dirname, '../public')))
server.use(express.urlencoded({ extended: true }))
export const io = new Server(process.env.PORT)

server.set('view engine', 'mustache')
server.set('views', path.join(__dirname, 'views'))
server.engine('mustache', mustache())

server.use(router)

// server.use((req, res) => {
//     // res.status(404)
//     // res.json({ error: "Endpoint não encontrado"})
// })


server.listen(process.env.PORT)