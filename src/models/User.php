<?php
namespace src\models;

use \core\Model;

class User extends Model {

	public $id;
	public $email;
	public $password;
	public $name;
	public $token;

	public function getName() 
	{
		return $this->Name;
	}

	public function getId() 
	{
		return $this->id;
	}

	public function getListId($uid)
    {
        $sql = "SELECT * FROM users where id = :uuid";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':uuid', $uid);
        $sql->execute();
        if ($sql->rowCount() > 0)
        {
            $data = $sql->fetchAll();
			return $data;
		}
		return false;
    }

	public function getListEmail($email)
    {
        $sql = "SELECT * FROM users where email = :email";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':email', $email);
        $sql->execute();
        if ($sql->rowCount() > 0)
        {
            $data = $sql->fetch();
			return $data;
		}
		return false;
	}
	
	public function add()
	{
        $sql = "insert into users (id,name, email, password)
				values (uuid(),:name,:email,:password)";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':name', $this->name);
        $sql->bindValue(':email', $this->email);
        $sql->bindValue(':password', md5($this->password));
        $sql->execute();

	}
}



















