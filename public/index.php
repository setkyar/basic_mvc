<?php 

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)));

require_once(ROOT.DS.'lib'.DS.'init.php');

$router = new Router($_SERVER['REQUEST_URI']);

var_dump($router->getRoute());
var_dump($router->getLanguage());
var_dump($router->getController());
var_dump($router->getMethodPrefix());
var_dump($router->getParams());