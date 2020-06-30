<?php
namespace src;

use PDO;
use PDOException;
use src\models\User;

class Config {
    const BASE_DIR = '/adopets/public';
    const DB_DRIVER = 'mysql';
    const DB_HOST = 'localhost';
    const DB_DATABASE = 'adopets';
    CONST DB_USER = 'root';
    const DB_PASS = '';

    const ERROR_CONTROLLER = 'ErrorController';
    const DEFAULT_ACTION = 'index';

}

