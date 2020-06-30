<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\LoginHandler;
use src\models\Product;

class ProductController extends Controller {

    private $loggedUser;

    public function __construct() 
    {
        // $this->loggedUser = LoginHandler::checkLogin();
        // if($this->loggedUser == false){
        //     $this->redirect("/login");
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
        
    }

    public function del($id)
    {
        $product = new Product();
        $id = $id['id'];
        $product->del($id);
        
    }

}