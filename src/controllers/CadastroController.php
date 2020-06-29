<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\LoginHandler;
use \src\handlers\CadastroHandler;
use src\models\Pessoa;
use src\models\PessoaDado;

class CadastroController extends Controller {

    private $loggedUser;

    public function __construct() 
    {
        $this->loggedUser = LoginHandler::checkLogin();
        if($this->loggedUser == false){
            $this->redirect("/login");
            exit;
        }

	}

    public function index() {
        $dados = CadastroHandler::cadastro();
        $this->render('cadastro',$dados);
    }

    public function save()
    {
        $pessoa = new Pessoa();
        $dado = new PessoaDado();
		$pessoa->id = filter_input(INPUT_POST,'id');
		$dado->pv = filter_input(INPUT_POST,'pv');
        $dado->token = filter_input(INPUT_POST,'token');
        CadastroHandler::save($pessoa,$dado);
        $this->redirect("/");
        
    }

}