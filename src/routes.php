<?php
use core\Router;

$router = new Router();

$router->post('/login','LoginController@signIn');
$router->post('/logout','LoginController@logout');
$router->post('/usuario/add', 'UsersController@add');
$router->post('/product/add', 'ProductController@add');
$router->post('/product/edit', 'ProductController@edit');
$router->post('/product/del/{id}', 'ProductController@del');
$router->get('/product/listName/{name}', 'ProductController@getListName');
$router->get('/product/listDescription/{description}', 'ProductController@getListDescription');
$router->get('/product/listCategory/{category}', 'ProductController@getListCategory');
