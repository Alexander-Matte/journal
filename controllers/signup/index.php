<?php
use Core\Authenticator;
use Core\Database;
use Core\Validator;
$header = "Sign up";
$errors = [];

if(isset($_POST["email"]) && isset($_POST["password"]))
{
    // if email already exists in DB
    if(Authenticator::email($_POST["email"]))
    {
        $errors = array_push($errors, "Email already in use");
        require view("signup/index.view.php");
        exit();
    }
    $email = Validator::validateEmail($_POST["email"]);
    if(is_array($email))
    {
        $errors = $email;
        require view("signup/index.view.php");
        exit();
    }

    $result = Validator::validatePassword($_POST["password"]);

    if(is_array($result))
    {
        $errors = $result;
        require view("signup/index.view.php");
        exit();
    }

    $db = new Database();
    $db->addUser($_POST["email"],$_POST["password"],$_POST["firstName"],$_POST["lastName"]);
    //TODO: Notify user of successful login
    header("Location: http://localhost:7171/login");
    exit();



}

require view("signup/index.view.php");