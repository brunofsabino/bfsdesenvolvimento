import { Router } from 'express'
import * as ChatController from '../controllers/chatController'

const router = Router()

router.get('/ping', (req, res) => {
    res.json({ pong: true})
})

router.get('/', ChatController.initial)
router.get('/home', ChatController.home)

export default router