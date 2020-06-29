<?php
namespace src\Controllers;

use \core\Controller;
use \src\handlers\LoginHandler;
use src\handlers\UserHandler;
use src\models\User;

class UsersController extends Controller {

	private $user;
    private $arrayInfo;
    private $users;

    public function __construct() 
    {
        $this->loggedUser = LoginHandler::checkLogin();
        if($this->loggedUser == false){
            $this->redirect("/login");
            exit;
        }

	}

	public function index() {
		$flash = '';
		if(!empty($_SESSION['flash']))
		{
			$flash = $_SESSION['flash'];
			$_SESSION['flash'] = '';
		}
        $data['data'] = UserHandler::list();
        $data['user'] = $this->loggedUser;
        $data['flash'] = $flash;
		$this->render('users',$data);

    }

    public function add()
    {
        $this->arrayInfo['user'] = $this->loggedUser;;
        $this->render('userCadastro',$this->arrayInfo);
    }

    public function edit($id) 
    {
        $this->arrayInfo['dados'] = UserHandler::getId($id);
        $this->arrayInfo['user'] = $this->loggedUser;;
        $this->render('userCadastro',$this->arrayInfo);
    }

    public function save()
    {
        $user = new User();  
        $user->id = filter_input(INPUT_POST,'id');
        $user->email = filter_input(INPUT_POST,'email');
        $user->password = filter_input(INPUT_POST,'password');
        $user->token = filter_input(INPUT_POST,'token');
        $user->token_api = filter_input(INPUT_POST,'token_api');
        $user->name = filter_input(INPUT_POST,'name');
        if ((UserHandler::getEmail($user->email)) && ($user->id == 0))
        {
          $_SESSION['flash'] = 'Email ja existe';
        }
        else
        {
            UserHandler::save($user);
        }
        $this->redirect('/usuario');

    }
    
}