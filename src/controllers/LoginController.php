<?php
namespace src\controllers;

use \core\Controller;
use src\Config;
use \src\handlers\LoginHandler;

class LoginController extends Controller {

	public function signIn()
	{
		$flash = '';
		if(!empty($_SESSION['flash']))
		{
			$flash = $_SESSION['flash'];
			$_SESSION['flash'] = '';
		}
		$this->render('login',[
			'flash' => $flash
		]);
	}

	public function loginAction()
	{
		$email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
		$password = filter_input(INPUT_POST,'password');
		if($email && $password)
		{
			$token = LoginHandler::verifyLogin($email,md5($password));
			if($token)
			{
				$_SESSION['token'] = $token;
				$this->redirect('/');
			} else
			{
				$_SESSION['flash'] = 'Email e/ou senha inválido';
				$this->redirect('/login');
			}
		} else
		{
			$this->redirect('/login');
		}
	}

	public function signUp()
	{

	}
	public function logout() {

		unset($_SESSION['token']);
		$this->redirect('/');
		exit;

	}

	public function loginApi()
	{
		$body = file_get_contents('php://input');
		$dados = json_decode($body,true);
		$token_api = $dados['token'];
		if(!empty($token_api))
		{
			$token = LoginHandler::verifyToken($token_api);
			if($token)
			{	
				return true;
			}
		} 
   		return false;
	}



}

