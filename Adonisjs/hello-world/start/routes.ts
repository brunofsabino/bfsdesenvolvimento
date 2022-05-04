import Route from '@ioc:Adonis/Core/Route'
import './api.routes';

Route.get('/', 'HomeController.index')
Route.get('/sobre', 'HomeController.sobre')

