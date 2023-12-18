<?php
use Core\Authenticator;
use Core\Database;
use Core\Session;
use Core\Validator;
$header = "Sign up";
$errors = [];

if (Session::has('userId')) {
    redirect('/');
}

if(Session::has('signup_errors')) {
    $errors = Session::get('signup_errors');
    Session::unflash();
}

if(isset($_POST['submit'])){
    if(!empty($_POST["email"]) && !empty($_POST["password"]))
    {
        $email = $_POST["email"];
        $password = $_POST["password"];
        // if email already exists in DB
        $user = Authenticator::email($email);
        if($user)
        {
            $errors[] = "Email already in use";
            Session::flash("signup_errors", $errors);
            redirect('/signup');
        }

        $validEmail = Validator::validateEmail($email);
        if(!$validEmail)
        {
            $errors[] = "Invalid email! Please try again";
            Session::flash("signup_errors", $errors);
            redirect('/signup');
        }

        $validPassword = Validator::validatePassword($password);
        if(!$validPassword)
        {
            $errors[] = "Password is to weak! Please try again.";
            Session::flash("signup_errors", $errors);
            redirect('/signup');
        }

        $password = hashPassword($password);
        Session::unflash();
        $db = new Database();
        $db->addUser($email,$password,$_POST["firstName"],$_POST["lastName"]);
        Session::flash("reg_status", "true");
        redirect('/login');
    }
    $errors[] = "Email or password was not set";
    Session::flash("signup_errors", $errors);
    redirect('/signup');

}

require view("signup/index.view.php");