import { Router } from 'express'
import * as momentumController from '../controller/momentumController'

const router = Router()

router.get('/', momentumController.home)


export default router