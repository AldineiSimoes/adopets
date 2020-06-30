<?php
namespace src\Controllers;

use \core\Controller;
use \src\handlers\LoginHandler;
use src\handlers\UserHandler;
use src\models\User;

class UsersController extends Controller {

    public function __construct() 
    {
        $this->loggedUser = LoginHandler::checkLogin();
        if($this->loggedUser == false){
            exit;
        }

	}

    public function add()
    {
        $user = new User();  
        $rest = new RestController;
        $data = $rest->getRequest();
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = $data['password'];
        $user->add();
    }
  
}