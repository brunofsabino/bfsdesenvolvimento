const express = require('express')
const path = require('path')
const http = require('http')
const dotenv = require('dotenv')
const socketIO = require('socket.io')

dotenv.config()

const app = express()
const server = http.createServer(app)
const io = socketIO(server)


app.use(express.static(path.join(__dirname, 'public')))

let connectUsers = []

io.on('connection', (socket) => {
    console.log("CONEXÂO DETECTADA...")

    socket.on('join-request', (username) => {
        socket.username = username
        connectUsers.push(username)
        console.log( connectUsers )

        socket.emit('user-ok', connectUsers)
        socket.broadcast.emit('list-update', {
            joined: username,
            list: connectUsers
        })
    })

    socket.on('disconnect', () => {
        connectUsers = connectUsers.filter( u => u != socket.username)
        console.log(connectUsers)

        socket.broadcast.emit('list-update', {
            left: socket.username,
            list: connectUsers
        })
    })

    socket.on('send-msg', (txt) => {
        let obj = {
            username: socket.username,
            message: txt
        }

        //socket.emit('show-msg', obj)
        socket.broadcast.emit('show-msg', obj)
    })
})








server.listen(process.env.PORT)

