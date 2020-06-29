<?php
namespace src\models;

use \core\ModelBase;

class User extends ModelBase {

	public $id;
	public $email;
	public $password;
	public $Name;
	public $emp;
	public $name;
	public $admin;
	public $token;
	public $token_api;

	public function getName() {
		return $this->Name;
	}

	public function getId() {
		return $this->id;
	}

}



















