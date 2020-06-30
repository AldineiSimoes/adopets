<?php
namespace src\models;
use \core\Model;
use PDOException;

class Product extends Model {
    public $uuid;
    public $name;
    public $description;
    public $category;
    public $price;
    public $quantity;

    public function add()
    {
        $div = new Diversos();
        $div->logMsg('Incluindo produto');
        try{
            $sql = "insert into products (uuid,name, description, category,price, quantity)
                    values (uuid(),:name,:description,:category,:price,:quantity)";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':name', $this->name);
            $sql->bindValue(':description', $this->description);
            $sql->bindValue(':category', $this->category);
            $sql->bindValue(':price', $this->price);
            $sql->bindValue(':quantity', $this->quantity);
            $sql->execute();
        } catch(PDOException $e) {
            $div->logMsg("ERRO: ".$e->getMessage(),'error');
            exit;
        }
    }

    public function edit()
    {
        $div = new Diversos();
        $div->logMsg('Alterando produto');
        try
        {
            $sql = "update products set name=:name
                , description=:description
                , category=:category
                , price=:price
                , quantity=:quantity
                where uuid=:uuid";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':uuid', $this->uuid);
            $sql->bindValue(':name', $this->name);
            $sql->bindValue(':description', $this->description);
            $sql->bindValue(':category', $this->category);
            $sql->bindValue(':price', $this->price);
            $sql->bindValue(':quantity', $this->quantity);
            $sql->execute();
        } catch(PDOException $e) {
            $div->logMsg("ERRO: ".$e->getMessage(),'error');
            exit;
        }
		return false;
    }

    public function del($id)
    {
        $div = new Diversos();
        $div->logMsg('Exlcuindo produto');
        try
        {
            $sql = "DELETE FROM products where uuid like :id";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':id', $id);
            $sql->execute();
        } catch(PDOException $e) {
            $div->logMsg("ERRO: ".$e->getMessage(),'error');
            exit;
        }
}

    public function getListName($name)
    {
        $sql = "SELECT * FROM products where name like :name".'"%"';
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':name', $name);
        $sql->execute();
        if ($sql->rowCount() > 0)
        {
            $data = $sql->fetchAll();
			return $data;
		}
		return false;
    }

    public function getListDescription($description)
    {
        $sql = "SELECT * FROM products where description like :description".'"%"';
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':description', $description);
        $sql->execute();
        if ($sql->rowCount() > 0)
        {
            $data = $sql->fetchAll();
			return $data;
		}
		return false;
    }

    public function getListCategory($category)
    {
        $sql = "SELECT * FROM products where category like :category".'"%"';
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':category', $category);
        $sql->execute();
        if ($sql->rowCount() > 0)
        {
            $data = $sql->fetchAll();
			return $data;
		}
		return false;
    }

}