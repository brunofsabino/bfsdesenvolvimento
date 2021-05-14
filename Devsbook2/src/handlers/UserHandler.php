<?php
namespace src\handlers;

use \src\models\User;
use \src\models\User_Relation;

class UserHandler  {

    public static function checkLogin() {

        if(!empty($_SESSION['token'])){
            $token = $_SESSION['token'];

            $user = User::select()->where('token', $token)->one();

            if(count($user) > 0){
                $loggedUser = new User();
                $loggedUser->name = $user['name'];
                $loggedUser->id = $user['id'];
                $loggedUser->avatar = $user['avatar'];

                return $loggedUser;
            }
            
        }
        return false;
        
    }

    public static function login($email, $password) {
        $user = User::select()
            ->where('email', $email)
        ->one();

        if($user){
            if(password_verify($password, $user['password'])){
                $token = md5(time().rand(0,9999).time());
                User::update()
                    ->set('token', $token)
                    ->where('email', $email)
                ->execute();
                return $token;
            }
        }
        return false;
    }

    public static function emailExists($email) {
        $email = User::select()->where('email', $email)->one();
        return $email ? true : false;
    }

    public static function addUser($name, $email, $birthdate, $password){
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $token = md5(time().rand(0,9999).time());

        User::insert([
            'name' => $name,
            'password' => $hash,
            'birthdate' => $birthdate,
            'email' => $email,
            'token' => $token
        ])->execute();

        return $token;
    }

   

}