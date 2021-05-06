<?php
namespace src\handlers;

use \src\models\User;

class UserHandler  {

    public static function checkLogin() {

        if(!empty($_SESSION['token'])){
            $token = $_SESSION['token'];

            $user = User::select()->where('token', $token)->one();

            if(count($user) > 0){
                $newUser = new User();
                $newUser->name = $user['name'];
                $newUser->id = $user['id'];
                $newUser->avatar = $user['avatar'];

                return $newUser;
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
                User::update('token', $token)
                    ->where('id', $user['id'])
                ->execute();
                return $token;
            }
        }
    }

    public static function emailExists($email) {
        $email = User::select()->where('email', $email)->one();
        return $email ? true : false;

    }

}