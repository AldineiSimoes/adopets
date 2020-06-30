<?php
namespace src\controllers;

use \core\Controller;
use src\models\Product;

class ProductController extends Controller {

    private $loggedUser;

    public function __construct() 
    {
        // $this->loggedUser = LoginController::checkLogin();
        // if($this->loggedUser == false){
        //     exit;
        // }

	}

    public function add()
    {   
        $product = new Product();
        $rest = new RestController;
        $data = $rest->getRequest();
        $product->name = $data['name'];
        $product->description = $data['description'];
        $product->category = $data['category'];
        $product->price = $data['price'];
        $product->quantity = $data['quantity'];
        $product->add();
        echo json_encode('cadastrado');
        
    }

    public function edit()
    {
        $product = new Product();
        $rest = new RestController;
        $data = $rest->getRequest();
        $product->uuid = $data['uuid'];
        $product->name = $data['name'];
        $product->description = $data['description'];
        $product->category = $data['category'];
        $product->price = $data['price'];
        $product->quantity = $data['quantity'];
        $product->edit();
        echo json_encode('alterado');
        
    }

    public function del($id)
    {
        $product = new Product();
        $id = $id['id'];
        $product->del($id);
        echo json_encode('excluido');
      
    }

    public function getListName($name = '')
    {
        $product = new Product();
        $name = $name['name'];
        $data = $product->getListName($name);
        echo json_encode($data);
    }

    public function getListDescription($param = '')
    {
        $product = new Product();
        $param = $param['description'];
        $data = $product->getListDescription($param);
        echo json_encode($data);
    }

    public function getListCategory($param = '')
    {
        $product = new Product();
        $param = $param['category'];
        $data = $product->getListCategory($param);
        echo json_encode($data);
    }

}