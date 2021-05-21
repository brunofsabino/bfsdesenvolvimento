<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\UserHandler;
use \src\handlers\PostHandler;

class HomeController extends Controller {
    private $loggedUser;

    public function __construct(){
        $this->loggedUser = UserHandler::checkLogin();
        if($this->loggedUser === false){
            header("Content-Type: application/json");
            echo json_encode(['error' => 'Usuario não logado']);
            exit;
        }
    }

    public function upload() {
        $array = ['error' => ''];

        if(isset($_FILES['photo']) && !empty($_FILES['photo']['tmp_name'])) {
            $photo = $_FILES['photo']; 

            $maxWidth = 800;
            $maxHeight = 800;

            if(in_array($photo['type'], ['image/jpeg', 'image/png', 'image/jpg'])) {
                
                list($widthOrig, $heightOrig) = getimagesize($photo['tmp_name']);
                $ratio = $widthOrig / $heightOrig;

                $newWidth = $maxWidth;
                $newHeight = $maxHeight;
                $ratioMax = $maxWidth / $maxHeight;

                if($ratioMax > $ratio) {
                    $newWidth = $newHeight * $ratio;
                } else {
                    $newHeight = $newWidth / $ratio;
                }

                $finalImage = imagecreatefromjpeg($newWidth, $newHeight);
                switch($photo['type']) {
                    case 'image/png':
                        $image = imagecreatefrompng($photo['tmp_name']);
                    break;   
                    case 'image/jpeg':
                    case 'image/jpg' :
                        $image = imagecreatefromjpeg($photo['tmp_name']);
                    break;  
                }

                imagecopyresampled(
                    $finalImage, $image,
                    0,0,0,0,       
                    $newWidth, $newHeight, $widthOrig, $heightOrig
                );

                $photoName = md5(time().rand(0,9999)).'.jpg';

                imagejpeg($finalImage, 'media/uploads/'.$photoName);

                PostHandler::addPost(
                    $this->loggedUser->id,
                    'photo', 
                    $photoName
                );

            }
        } else {
            $array['error'] = 'Nenhuma imagem enviada';
        }

        header("Content-Type: application/json");
        echo json_encode($array);
        exit;
    }


}