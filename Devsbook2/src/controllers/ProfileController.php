<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\UserHandler;

class ProfileController extends Controller {
    private $loggedUser;

    public function __construct(){
        $this->loggedUser = UserHandler::checkLogin();
        if($this->loggedUser === false){
             $this->redirect('/login');
        }
    }  

    public function index($atts = []) {
        $page = intval(filter_input(INPUT_GET, 'page'));

        //detectando o usuario logado
        $id = $this->loggedUser->id;
        if(!empty($atts['id'])){
            $id = $atts['id'];
        }

        //pegando as informações do usuario
        $user = UserHandler::getUser($id, true);


        $this->render('profile', [
            'loggedUser' => $this->loggedUser,
        ]);
    }

    

}