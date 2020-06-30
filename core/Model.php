<?php
namespace Core;

use core\Database;

class Model {

	protected $db;

	public function __construct() {
		$this->db = Database::getInstance();
	}

}