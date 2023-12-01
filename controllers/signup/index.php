<?php
use Core\Authenticator;
use Core\Database;
use Core\Session;
use Core\Validator;
$header = "Sign up";
$errors = [];


if(Session::has('signup_errors')) {
    $errors = Session::get('signup_errors');
    Session::unflash();
}

if($_SERVER['REQUEST_METHOD'] === "POST"){
    if(!empty($_POST["email"]) && !empty($_POST["password"]))
    {
        // if email already exists in DB
        $user = Authenticator::email($_POST["email"]);
        if($user)
        {
            $errors[] = "Email already in use";
            Session::flash("signup_errors", $errors);
            header("Location: /signup");
            exit();
        }

        $validEmail = Validator::validateEmail($_POST["email"]);
        if(!$validEmail)
        {
            $errors[] = "Invalid email! Please try again";
            Session::flash("signup_errors", $errors);
            header("Location: /signup");
            exit();
        }

        $validPassword = Validator::validatePassword($_POST["password"]);
        if(!$validPassword)
        {
            $errors[] = "Password is to weak! Please try again.";
            Session::flash("signup_errors", $errors);
            header("Location: /signup");
            exit();
        }
        Session::unflash();
        $db = new Database();
        $db->addUser($_POST["email"],$_POST["password"],$_POST["firstName"],$_POST["lastName"]);
        Session::flash("reg_status", "true");
        header("Location: /login");
        exit();
    }
    $errors[] = "Email or password was not set";
    Session::flash("signup_errors", $errors);
    header("Location: /signup");
    exit();

}


require view("signup/index.view.php");