<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\UserHandler;

class HomeController extends Controller {

    public function __construct(){
        if(!empty($_SESSION['token'])){
            
            $this->redirect('/login');
        }
    }

    public function index() {

       

        $this->render('home');
    }

    public function sobre() {
        $this->render('sobre');
    }

    public function sobreP($args) {
        print_r($args);
    }

}