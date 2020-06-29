<?php
namespace core;

use \src\Config;
use src\handlers\LoginHandler;

class Database {
    private static $_pdo;
    private static $_pdoBase;
    public static function getInstance() {
        if(isset(LoginHandler::checkLogin()->name))
        {
            if(!isset(self::$_pdo)) {
                self::$_pdo = new \PDO(Config::DB_DRIVER.":dbname=".Config::DB_DATABASE.";host=".Config::DB_HOST, Config::DB_USER, Config::DB_PASS);
                self::$_pdo->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);

            }
        }
        return self::$_pdo;
    }
    public static function getInstanceBase() {
        return self::$_pdoBase;
    }
    private function __construct() { }
    private function __clone() { }
    private function __wakeup() { }
}