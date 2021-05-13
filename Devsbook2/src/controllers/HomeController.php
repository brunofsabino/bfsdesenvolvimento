<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\UserHandler;

class HomeController extends Controller {
    private $loggedUser;

    public function __construct(){
        $this->loggedUser = UserHandler::checkLogin();
        if($this->loggedUser === false){
             $this->redirect('/login');
        }
    }

    public function index() {

       $feed = UserHandler::getHomeFeed($this->loggedUser->id);

        $this->render('home', [
            'loggedUser' => $this->loggedUser,
        ]);
    }

    public function sobreP($args) {
        print_r($args);
    }

}