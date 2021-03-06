<?php
namespace src\handlers;

use \src\models\User;
use \src\models\User_Relation;
use \src\models\Post;
use \src\models\Post_Like;
use \src\models\Posts_Comment;

class PostHandler {

    public static function addPost($idUser, $type, $body){

        $body = trim($body);

        if(!empty($body) && !empty($idUser)) {
            Post::insert([
                'id_user' => $idUser,
                'type' => $type,
                'created_at' => date('Y-m-d H:i:s'),
                'body' => $body
            ])->execute();
        }

    }

    public static function _postListToObject($postList, $loggedUserId) {
        $posts = [];
        foreach($postList as $postItem){
            $newPost = new Post();
            $newPost->id = $postItem['id'];
            $newPost->type = $postItem['type'];
            $newPost->created_at = $postItem['created_at'];
            $newPost->body = $postItem['body'];
            $newPost->mine = false;

            if($postItem['id_user'] == $loggedUserId){
                $newPost->mine = true;
            }

            // 4. Preencher as informações adicionais no post
            $newUser = User::select()->where('id', $postItem['id_user'])->one();
            $newPost->user = new User();
            $newPost->user->name = $newUser['name'];
            $newPost->user->id = $newUser['id'];
            $newPost->user->avatar = $newUser['avatar'];

            // TODO: 4.1 preencher informações de LIKE
            $likes = Post_Like::select()->where('id_user', $postItem['id'])->get();

            $newPost->likeCount = count($likes);
            $newPost->liked = self::isLiked($postItem['id'], $loggedUserId);

            // TODO: 4.2 preencher informaçõs de COMMENTS
            $newPost->comments = Posts_Comment::select()->where('id_user', $postItem['id'])->get();
            foreach($newPost->comments as $key => $comment){
                $newPost->comments[$key]['user'] = User::select()->where('id', $comment['id_user'])->one();
            }

            $posts[] = $newPost;

        }

        return $posts;
    }

    public static function isLiked($id, $loggedUserId) {
        $myLike = Post_Like::select()
            ->where('id_post', $id)
            ->where('id_user', $loggedUserId)
        ->get();

        if(count($myLike) > 0) {
            return true;
        } else {
            return false;
        }
    }

    public static function getHomeFeed($idUser, $page ) {
        $perPage = 3;
        
        // 1. Pegar a lista dos usuarios que EU(usuario logado) sigo
        $listUsers = User_Relation::select()->where('user_from', $idUser)->get();
        
        $users = [];
        foreach($listUsers as $user){
            $users[] = $user['user_to'];
        }
        $users[] = $idUser;
        

        // 2. Pegar os posts dessa galera ordenado pela data
        $postList = Post::select()
            ->where('id_user', 'in', $users)
            ->orderBy('created_at', 'desc')
            ->page($page, $perPage)
        ->get();

        $total = Post::select()->where('id_user', 'in', $users)->count();
        $pageCount = ceil($total / $perPage);

        // 3. Transformar o resultado em objetos dos models

        $posts = self::_postListToObject($postList, $idUser);

        // 5. retornar o resultado
        return [
            'posts' => $posts,
            'pageCount' => $pageCount,
            'currentPage' => $page
        ];
    }

    public static function getUserFeed($idUser, $page, $loggedUserId){
        $perPage = 3;

        $postList = Post::select()
            ->where('id_user', $idUser)
            ->orderBy('created_at', 'desc')
            ->page($page, $perPage)
        ->get();

        $total = Post::select() 
            ->where('id_user', $idUser)
        ->count();
        $pageCount = ceil($total / $perPage);

        //  Transformar o resultado em objetos dos models
        $posts = self::_postListToObject($postList, $loggedUserId);

        // retornar o resultado

        return [
            'posts' => $posts,
            'pageCount' => $pageCount,
            'currentPage' => $page
        ];

    }

    public static function getPhotosFrom($idUser) {
        $photosData = Post::select()
            ->where('id_user', $idUser)
            ->where('type', 'photo')
        ->get();

        $photos = [];

        foreach($photosData as $photo) {
            $newPost = new Post();
            $newPost->id = $photo['id'];
            $newPost->type = $photo['type'];
            $newPost->created_at = $photo['created_at'];
            $newPost->body = $photo['body'];

            $photos[] = $newPost;
        }

        return $photos;
    }
}


