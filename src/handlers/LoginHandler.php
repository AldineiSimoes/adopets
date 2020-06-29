<?php
namespace src\handlers;

use src\Config;
use \src\models\User;

class LoginHandler {

    protected static function geraToken($id) 
    {
        $token = md5(time().rand(0,99999));
        User::update()
              ->set('token',$token)
              ->where('id',$id)
        ->execute();
        return $token;
    }

    public static function checkLogin()
    {
        if(!empty($_SESSION['token']))
        {
            $token = $_SESSION['token'];
            $data = User::select()->where('token',$token)->one();
            if(!empty($data) && (count($data)) > 0)
            {
                $loggedUser = new User();
                $loggedUser->id = $data['id'];
                $loggedUser->name = $data['name'];
                $loggedUser->email = $data['email'];
                $loggedUser->admin = $data['admin'];
                $loggedUser->name = Config::DB_DATABASE;
                if(!empty($data['name']))
                {
                    $loggedUser->name = $data['name'];
                }

                return $loggedUser;
            }
        }
        return false;
    }

    public static function verifyLogin($email,$password)
    {
        $user = User::select()->where('email',$email)->one();
        if($user)
        {
            if($password == $user['password'])
            {
                return self::geraToken($user['id']);
            }
        }
        return false;
    }

    public static function verifyToken($token)
    {
        $user = User::select()->where('token_api',$token)->one();
        if(!empty($user))
        {
            if($token == $user['token_api'])
            {
                return self::geraToken($user['id']);
            }
        }
        return false;
    }


}