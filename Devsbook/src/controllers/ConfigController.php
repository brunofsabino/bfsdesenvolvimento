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

        $recado = '';
        if(!empty($_SESSION['recado'])) {
            $recado = $_SESSION['recado'];
            $_SESSION['recado'] = '';
        }

        $this->render('config', [
            'loggedUser' => $this->loggedUser,
            'user' => $user,
            'recado' => $recado
        ]);
    }

    public function update(){
         
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
        $birthdate = filter_input(INPUT_POST, 'birthdate');
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $city = filter_input(INPUT_POST, 'city');
        $work = filter_input(INPUT_POST, 'work');
        $password = filter_input(INPUT_POST, 'password_new');
        $password_repeat = filter_input(INPUT_POST,'password_new_repeat');

        if($name && $email) {

            $updateFields = [];

            $user = UserHandler::getUser($this->loggedUser->id);

            // EMAIL
            if($user->email !== $email) {
                if(!UserHandler::emailExists($email)){
                    $updateFields['email'] = $email;
                }else {
                    $_SESSION['recado'] = 'E-mail já existe!';
                    $this->redirect('/config');
                }
            }

            //BIRTHDATE
            $birthdate = explode('/', $birthdate);
            if(count($birthdate) != 3) {
                $_SESSION['recado'] = 'Data de nascimento invalida';
                $this->redirect('/config');
            }
            $birthdate = $birthdate[2].'-'.$birthdate[1].'-'.$birthdate[0];
            if(strtotime($birthdate) === false ){
                $_SESSION['recado'] = 'Data de nascimento invalida';
                $this->redirect('/config');
            }    
            $updateFields['birthdate'] = $birthdate;

            //PASSWORD 
            if(!empty($password)) {
                if($password === $password_repeat){
                    $updateFields['password'] = $password;
                } else {
                    $_SESSION['recado'] = 'As senhas não são as mesmas.';
                    $this->redirect('/config');
                }
            }

            //CAMPOS NORMAIS 
            $updateFields['name'] = $name;
            $updateFields['city'] = $city;
            $updateFields['work'] = $work;

             // AVATAR
             if(isset($_FILES['avatar']) && !empty($_FILES['avatar']['tmp_name'])) {
                $newAvatar = $_FILES['avatar'];

                if(in_array($newAvatar['type'], ['image/jpeg', 'image/jpg', 'image/png'])) {
                    $avatarName = $this->cutImage($newAvatar, 200, 200, 'media/avatars');
                    $updateFields['avatar'] = $avatarName;
                }
            }

            // COVER
            if(isset($_FILES['cover']) && !empty($_FILES['cover']['tmp_name'])) {
                $newCover = $_FILES['cover'];

                if(in_array($newCover['type'], ['image/jpeg', 'image/jpg', 'image/png'])) {
                    $coverName = $this->cutImage($newCover, 850, 310, 'media/covers');
                    $updateFields['cover'] = $coverName;
                }
            }

            UserHandler::updateUser($updateFields, $this->loggedUser->id);

        }
        
        $this->redirect('/config');
    }

    private function cutImage($file, $w, $h, $folder) {
        list($widthOrig, $heightOrig) = getimagesize($file['tmp_name']);
        $ratio = $widthOrig / $heightOrig;

        $newWidth = $w;
        $newHeight = $newWidth / $ratio;

        if($newHeight < $h) {
            $newHeight = $h;
            $newWidth = $newHeight * $ratio;
        }

        $x = $w - $newWidth;
        $y = $h - $newHeight;

        $x = $x < 0 ? $x / 2 : $x;
        $y = $y < 0 ? $y / 2 : $y;

        $finalImage =imagecreatetruecolor($w, $h);
        switch($file['type']) {
            case 'image/jpeg':
            case 'image/jpg':
                $image = imagecreatefromjpeg($file['tmp_name']);
            break;    
            case 'image/png':
                $image = imagecreatefrompng($file['tmp_name']);
            break;     
        }

        imagecopyresampled(
            $finalImage, $image, 
            $x, $y, 0, 0,  
            $newWidth, $newHeight, $widthOrig, $heightOrig
        );

        $fileName = md5(time().rand(0,9999)).'.jpg';

        imagejpeg($finalImage, $folder.'/'.$fileName);

        return $fileName;
    }

}
