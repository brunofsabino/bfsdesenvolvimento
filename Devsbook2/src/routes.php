<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');

$router->get('/login', 'LoginController@signin');
$router->post('/login', 'LoginController@signinAction');

$router->get('/cadastrar', 'LoginController@signup');
$router->post('/cadastrar', 'LoginController@signupAction');

$router->get('/sair', 'LoginController@logout');

$router->get('/sobre/{nome}', 'HomeController@sobreP');
$router->get('/sobre', 'HomeController@sobre');

$router->get('/perfil/{id}/amigos', 'ProfileController@friends');
$router->get('/perfil/{id}/follow', 'ProfileController@follow');
$router->get('/perfil/{id}', 'ProfileController@index');
$router->get('/perfil', 'ProfileController@index');

$router->post('/post/new', 'PostController@new');

$router->get('/ajax/upload',  'AjaxController@upload');

//$router->get('/perfil')
//$router->get('/perfil')

//$router->get('/pesquisa');
//$router->get('/sair');
//$router->get('/amigos');
//$router->get('/fotos');
//$router->get('/config');