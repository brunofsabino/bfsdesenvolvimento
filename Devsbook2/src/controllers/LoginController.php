<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\UserHandler;

class LoginController extends Controller {

    public function signin() {
        $flash = '';
        if(!empty($_SESSION['flash'])){
            $flash = $_SESSION['flash'];
            $_SESSION['flash'] = '';   
        }
        $this->render('signin',
        ['flash' => $flash]
        );
    }

    public function signinAction() {
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $password = filter_input(INPUT_POST, 'password');

        if($email && $password) {
            $token = UserHandler::login($email, $password);

            if($token === false){
                $_SESSION['flash'] = 'Email e/ou senha incorretos';
                $this->redirect('/login');
            } else {
                $_SESSION['token'] = $token;
                $this->redirect('/');
            }
        }
        $this->redirect('/');
    }

    public function signup() {
        $flash = '';
        if(!empty($_SESSION['flash'])){
            $flash = $_SESSION['flash'];
            $_SESSION['flash'] = '';
        }
        $this->render('signup', [
            'flash' => $flash
        ]);
    }

    public function signupAction() {
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $birthdate = filter_input(INPUT_POST, 'birthdate');
        $password = filter_input(INPUT_POST, 'password');

        if($name && $email && $birthdate && $password) {

            if(UserHandler::emailExists($email)=== true) {
                $_SESSION['flash'] = 'E-mail já cadastrado, faça o login';
                $this->redirect('/login');
            }

            $birthdate = explode('/', $birthdate);
            if(count($birthdate) != 3){
                $_SESSION['flash'] = 'Data de nascimento invalida';
                $this->redirect('/cadastrar');
            }
            $birthdate = $birthdate[2].'-'.$birthdate[1].'-'.$birthdate[0];

            if(strtotime($birthdate) === false) {
                $_SESSION['flash'] = 'Data de nascimento invalida';
                $this->redirect('/cadastrar');
            }

            $token = UserHandler::addUser($name, $email, $birthdate, $password);
            $_SESSION['token'] = $token;
            $this->redirect('/');
        }
    }

    public function logout() {
        $_SESSION['token'] = '';
        $this->redirect('/');
    }
}