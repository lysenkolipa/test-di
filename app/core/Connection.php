<?php


namespace app\core;


use PDO;

class Connection
{
    private $host = 'localhost';
    private $user_name = 'root';
    private $pass = 'root';
    private $db_name = 'framework_with_di';

    public static function getConnection()
    {
        /**
         * @var PDO
         */
        return new PDO("mysql:host=localhost;dbname=framework_with_di", 'root', 'root');
    }
}