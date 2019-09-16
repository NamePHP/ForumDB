<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');

use Framework\Request;
use Framework\Session;

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', __DIR__ . DS); //C:\xampp\htdocs\ForumDB\App\
define('Framework', ROOT . 'Framework' . DS);
define('CONFIG', ROOT . 'Config' . DS);
define('View', ROOT . 'View' . DS);


spl_autoload_register(function (string $className){
    //$path = str_replace('\\','/',$className);
    $path =sprintf('%s%s.php',ROOT,$className);
    if(!file_exists($path)){
        throw new RuntimeException(sprintf('%s%s.php',ROOT,$path));
    }

    require_once $path;
});
$session = new Session();
$request = new Request($_GET, $_POST, $_FILES);
$controller = $request->get('_controller', 'default');
$action = $request->get('_action','index');

$controller = sprintf('Controller\%sController', ucfirst($controller));
$action = sprintf('%sAction',$action);
$controller = new $controller;

$controller->$action();
