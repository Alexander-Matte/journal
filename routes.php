<?php

$routes = [
    [
    "url" => "/",
    "controller" =>  CONTROLLER_PATH . "index.php"
    ],
    [
    "url" => "/contact",
    "controller" => CONTROLLER_PATH . "contact.php"
    ],
    [
    "url" => "/login",
    "controller" => CONTROLLER_PATH . "login/index.php"
    ],
    [
    "url" => "/signup",
    "controller" => CONTROLLER_PATH . "signup/index.php"
    ],
    [
    "url" => "/journal",
    "controller" => CONTROLLER_PATH . "journal/index.php"
    ],
    [
    "url" => "/journal/create",
    "controller" => CONTROLLER_PATH . "journal/create.php"
    ],
    [
    "url" => "/journal/show",
    "controller" => CONTROLLER_PATH . "journal/show.php"
    ],
    [
    "url" => "/logout",
    "controller" => CONTROLLER_PATH . "logout.php"
    ],
    [
    "url" => "/journal/edit",
    "controller" => CONTROLLER_PATH . "journal/edit.php"
    ],
    [
    "url" => "/journal/destroy",
    "controller" => CONTROLLER_PATH . "journal/destroy.php"
    ],
    
];