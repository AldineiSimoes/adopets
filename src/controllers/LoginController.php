<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\LoginHandler;

class LoginController extends Controller {

	public function signIn()
	{
        $rest = new RestController;
        $data = $rest->getRequest();
		$email = $data['email'];
		$password = $data['password'];
		return LoginHandler::verifyLogin($email,md5($password));
	}

	public function logout() {

		unset($_SESSION['userId']);
		exit;

	}

}

