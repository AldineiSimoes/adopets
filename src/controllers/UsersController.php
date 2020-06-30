<?php
namespace src\Controllers;

use \core\Controller;
use src\controllers\LoginController;

use src\models\User;

class UsersController extends Controller {

    public function add()
    {
        $user = new User();  
        $rest = new RestController;
        $data = $rest->getRequest();
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = $data['password'];
        $user->add();
        echo json_encode('Cadastrado');
    }
  
}