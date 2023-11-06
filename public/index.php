<?php


use Core\Router;

ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);


const BASE_PATH = __DIR__ . '/../';

require BASE_PATH . "Core/functions.php";
require base("Core/Router.php");
require base("routes.php");
require base("Core/Database.php");

$uri = parse_url($_SERVER["REQUEST_URI"]);


$router = new Router($routes);
$router->route($uri["path"]);

?>