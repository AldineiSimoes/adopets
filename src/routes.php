<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/login','LoginController@signIn');
$router->post('/login','LoginController@logInAction');
$router->get('/logout','LoginController@logout');
$router->post('/loginApi','LoginController@logInApi');
$router->get('/cadastro', 'CadastroController@index');
$router->post('/save', 'CadastroController@save');
$router->get('/usuario', 'UsersController@index');
$router->get('/usuario/add', 'UsersController@add');
$router->get('/usuario/edit/{id}', 'UsersController@edit');
$router->get('/usuario/del', 'UsersController@del');
$router->post('/usuario/save', 'UsersController@save');
