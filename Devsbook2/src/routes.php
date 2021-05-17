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

$router->get('/perfil', 'ProfileController@index');

$router->post('/post/new', 'PostController@new');

//$router->get('/perfil')
//$router->get('/perfil')