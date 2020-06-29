<?php
namespace src\handlers;

use src\Config;
use \src\models\User;

class UserHandler {

    public static function list()
    {
        $data = User::select()->execute();
        if(!empty($data) && (count($data)) > 0)
        {
            return $data;
        }
        return false;
    }

    public  static function getId($id)
    {
        $data = User::select()->where('id',$id)->one();
        return $data;
    }

    public  static function getEmail($email)
    {
        $data = User::select()->where('email',$email)->one();
        if(empty($data))
        {
            return false;
        }
        return true;
    }

    public static function add()
    {
        return false;
    }

    public static function save(User $user)
    {
        if($user->id > 0)
        {
            User::update()
                    ->set('token',$user->token)
                    ->set('token_api',$user->token_api)
                    ->set('name',$user->name)
                    ->where('id',$user->id)
            ->execute();
        } 
        else
        {
            $dados = CadastroHandler::add($user->email);
  
            User::insert(['email' => $user->email,
                          'password' => md5($user->password),
                          'token' => $user->token,
                          'token_api' => $user->token_api,
                          'name' => $user->name,
                          'ID_PESSOA' => $dados['ID']
            ])->execute();
        }
        return false;
    }

    public static function del()
    {
        return false;
    }

}