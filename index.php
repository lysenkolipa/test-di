<?php

require 'app/libs/dev.php';
use app\core\DbQuery;
use app\core\Router;
use app\core\Connection;

spl_autoload_register(function ($class) {
    $path = str_replace('\\', '/', $class . '.php');
    if(file_exists($path))
        require $path;
});

session_start();

$router = new Router();
$router->runRouter();
$router->matchRoute();

$db = new DbQuery(Connection::getConnection());

$product = $this->db->selectData('products');

$comment = $this->db->selectData('comments');



var_dump($product, $comment);






