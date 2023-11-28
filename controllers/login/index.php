<?php
use \Core\Authenticator;
use \Core\Session;

$header = "Log in";
$errors = [];

if (Session::has("errors")) {
    $errors = Session::get("errors");
    Session::unflash();
}

if (isset($_POST["password"])) {
    $authenticated = Authenticator::authenticateUser($_POST["email"], $_POST["password"]);

    if (!$authenticated) {
        $error = "No user found with given username and password!";
        Session::flash("errors", $error); // Flash the error message
        header("Location: /login");
        exit();
    } else {
        $user = Authenticator::authenticateUser($_POST["email"], $_POST["password"]); // Retrieve user details
        Session::unflash();
        Session::set("userId", $user["id"]); // Set user details in the session
        header("Location: /");
        exit();
    }
}

require view("login/index.view.php");
