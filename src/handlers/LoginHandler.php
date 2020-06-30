<?php
namespace src\handlers;

use src\Config;
use \src\models\User;

class LoginHandler {

    public static function checkLogin()
    {
        if(!empty($_SESSION['userId']))
        {
            $user = new User();
            $data = $user->getListId($_SESSION['userId']);
            if(!empty($data) && (count($data)) > 0)
            {
                $loggedUser = new User();
                $loggedUser->id = $data['id'];
                $loggedUser->name = $data['name'];
                $loggedUser->email = $data['email'];

                return $loggedUser;
            }
        }
        return false;
    }

    public static function verifyLogin($email,$password)
    {
        if(isset($email) && (!empty($email)))
        {
            $user = new User();
            $data = $user->getListEmail($email);
            if($data)
            {
                if($password == $data['password'])
                {
                    $_SESSION['userID'] = $data['id'];
                    return true;
                }
            }
        }
        return false;
    }

}