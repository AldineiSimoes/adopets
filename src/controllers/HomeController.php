<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\LoginHandler;

class HomeController extends Controller {

    private $loggedUser;

    public function __construct() 
    {
        $this->loggedUser = LoginHandler::checkLogin();
        if($this->loggedUser == false){
            $this->redirect("/login");
            exit;
        }

		$this->arrayInfo = array(
			'user' => $this->loggedUser,
			'menuActive' => 'home'
		);
	}

    public function index() {
        $this->render('home',$this->arrayInfo);
    }

}