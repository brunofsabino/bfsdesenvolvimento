<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\UserHandler;


class ConfigController extends Controller {

    private $loggedUser;

    public function __construct(){
        $this->loggedUser = UserHandler::checkLogin();
        if($this->loggedUser  === false){
            $this->redirect('/login');
        }
    }

    public function index() {
        // $page = intval(filter_input(INPUT_GET, 'page'));
        $user = UserHandler::getUser(
            $this->loggedUser->id,
        );

        $this->render('config', [
            'loggedUser' => $this->loggedUser,
            'user' => $user
        ]);
    }

    public function update($atts = []){
        if(!empty($atts['id'])) {
            $id = $atts['id'];
        } 
        //$id = filter_input(INPUT_POST, 'id');

        echo "ID: ".$id;
    }

}
