import { Router } from 'express'
import multer from 'multer'
import * as ApiController from '../controllers/apiController'

// const storageConfig = multer.memoryStorage() // deixando só na memoria *** vai faltar memoria e vai pesar no servidor 
// const storageConfig = multer.diskStorage({
//     destination: (req, file, cb) => {
//         cb(null, './tmp')
//     },
//     filename: (req, file, cb) => {
//         let randomName = Math.floor(Math.random() * 99999)
//         cb(null, `${randomName+Date.now()}.jpg`)
//     }
// })
const upload = multer({
    // storage: storageConfig
    dest: './tmp',
    fileFilter: (req, file, cb) => {
       const allowed: string[] = ['image/jpg', 'image/jpeg', 'image/png']
       cb(null, allowed.includes( file.mimetype))
    },
    limits: { fileSize: 20000000 } // aceitando arquivos ATE 20MB
})

const router = Router()

router.get('/ping', ApiController.ping)
router.get('/random', ApiController.random)
router.get('/nome/:nome', ApiController.name)

router.post('/frases', ApiController.createPhrase)
router.get('/frases', ApiController.listPhrases)
router.get('/frase/aleatoria', ApiController.randomPhrase)
router.get('/frase/:id', ApiController.getPhrase)
router.put('/frase/:id', ApiController.updatePhrase)
router.delete('/frase/:id', ApiController.deletePhrase)

// router.post('/upload', upload.single('avatar') ,ApiController.uploadFile)
// router.post('/upload', upload.array('avatars', 2) ,ApiController.uploadFile)
// router.post('/upload', upload.fields([
    //     { name: 'avatar', maxCount: 1},
    //     { name: 'gallery', maxCount: 3}
    // ]) ,ApiController.uploadFile)
router.post('/upload', upload.single('avatar') ,ApiController.uploadFile)
    

export default router