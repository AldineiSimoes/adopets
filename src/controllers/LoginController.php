<?php
namespace src\controllers;

use \core\Controller;
use src\models\User;

class LoginController extends Controller {

	public function signIn()
	{
        $rest = new RestController;
		$data = $rest->getRequest();
		$email = $data['email'];
		$password = $data['password'];
		echo json_encode($this->verifyLogin($email,md5($password)));
	}	

	public function logout() {

		unset($_SESSION['userId']);
		exit;

	}

	public static function checkLogin()
    {
        $loggedUser = new User();
        $loggedUser->id = 0;
        $loggedUser->name = 'Não logado';
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

                
            }
        }
        return $loggedUser;;
    }

	public function verifyLogin($email,$password)
    {
        if(isset($email) && (!empty($email)))
        {
            $user = new User();
			$data = $user->getListEmail($email);
            if($data)
            {
                if($password == $data['password'])
                {
					return $_SESSION['userID'] = $data['id'];
                }
            }
		}
		return false;
    }

}

