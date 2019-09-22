<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');
require_once 'Config\db.php';
use Framework\Request;
use Framework\Session;
use Framework\Router;
use Framework\RepositoryProvider;

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', __DIR__ . DS); 
define('Framework', ROOT . 'Framework' . DS);
define('CONFIG', ROOT . 'Config' . DS);
define('View', ROOT . 'View' . DS);


spl_autoload_register(function (string $className){
    $path =sprintf('%s%s.php',ROOT,$className);
    if(!file_exists($path)){
        throw new RuntimeException(sprintf('%s%s.php',ROOT,$path));
    }

    require_once $path;
});

$pdo = new PDO("mysql:host=$host;dbname=$db", $user,$pass);
$session = new Session();
$router = new Router();
$request = new Request($_GET, $_POST, $_FILES);
$repositoryMap = require CONFIG . 'repositoryMap.php';
$repositoryProvider = new RepositoryProvider($repositoryMap, $pdo);
$controller = $request->get('_controller', 'default');
$action = $request->get('_action','index');

$controller = sprintf('Controller\%sController', ucfirst($controller));
$action = sprintf('%sAction',$action);

$controller = new $controller($session,$router, $pdo, $repositoryProvider);
$controller->$action($request);


