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
                $loggedUser->city = $user['city'];

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

    public static function idExists($id) {
        $email = User::select()->where('id', $id)->one();
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

    public static function getUser($id, $full = false) {

        $data = User::select()->where('id', $id)->one();

        if($data) {
            $user = new User();
            $user->id = $data['id'];
            $user->email = $data['email'];
            $user->name = $data['name'];
            $user->birthdate = $data['birthdate'];
            $user->city = $data['city'];
            $user->work = $data['work'];
            $user->avatar = $data['avatar'];
            $user->cover = $data['cover'];

            if($full) {
                $user->followers = [];
                $user->following = [];
                $user->photos = [];


                //followers
                $followers = User_Relation::select()->where('user_to', $id)->get();
                foreach($followers as $follower){
                    $userData = User::select()->where('id', $follower['user_from'])->one();
                    $newUser = new User();
                    $newUser->id = $userData['id'];
                    $newUser->name = $userData['name'];
                    $newUser->avatar = $userData['avatar'];

                    $user->followers[] = $newUser;
                }

                //following
                $following = User_Relation::select()->where('user_from', $id)->get();
                foreach($following as $follow){
                    $userData = User::select()->where('id', $follow['user_to'])->one();

                    $newUser = new User();
                    $newUser->id = $userData['id'];
                    $newUser->name = $userData['name'];
                    $newUser->avatar = $userData['avatar'];

                    $user->following[] = $newUser;
                }

                //photos
                $user->photos = PostHandler::getPhotosFrom($id);
            }
            return $user;
        }
        return false;
    }

    public static function isFollowing($from, $to) {
        $data = User_Relation::select()
            ->where('user_from', $from)
            ->where('user_to', $to)
        ->one();

        if($data) {
            return true;
        } else {
            return false;
        }
    }

    public static function follow($from, $to) {
        User_Relation::insert([
            'user_from' => $from,
            'user_to' => $to
        ])->execute();
    }

    public static function unfollow($from, $to) {
        User_Relation::delete()
            ->where('user_from', $from)
            ->where('user_to', $to)
        ->execute();
    }
}