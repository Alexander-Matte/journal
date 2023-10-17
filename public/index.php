<?php
ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);

const BASE_PATH = __DIR__ . '/../';

require BASE_PATH . "Core/functions.php";



if($_SERVER["REQUEST_URI"] === "/") {
    require BASE_PATH . "controllers/index.php";
} elseif ($_SERVER["REQUEST_URI"] === "/contact") {
    require BASE_PATH . "controllers/contact.php";
}

?>