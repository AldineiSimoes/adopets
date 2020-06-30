<?php
namespace src\controllers;

use \core\Controller;


class RestController extends Controller
{
    public function index() 
    {
        

    }

    public function getMethod()
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    public function getRequest()
    {

        switch($this->getMethod())
        {
            case 'GET' :
                return $_GET;
                break;
            case 'POST' :
                $data = json_decode(file_get_contents('php://input'));
                if(is_null($data))
                {
                    $data = $_POST;
                }
                return (array) $data;
                break;
            case 'PUT' :
            case 'DEELTE' :
                parse_str(file_get_contents('php://input'),$data);
                return (array) $data;
                break;
        }
    }

    public function returnJson($array)
    {
        header('Content-type : applicaiton/json');
        echo json_encode($array);
        exit;
    }

}