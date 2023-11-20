<?php

$header = "Log in";

$db = new Core\Database();

if(isset($_POST["password"]))
{
    $result = $db->query("SELECT * FROM `users` WHERE email = :email AND password = :password", [
        "email" => $_POST["email"],
        "password" => $_POST["password"]
    ])->findOrFail();
}

$_SESSION["user"] = $result["id"];

var_dump($_SESSION);




require view("login/index.view.php");