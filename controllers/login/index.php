<?php
use \Core\Authenticator;
use \Core\Session;

$header = "Log in";
$errors = [];
$successRegistration = false;

if (Session::has("errors")) {
    $errors = Session::get("errors");
    Session::unflash();
}

if(Session::has("reg_status")) {
    $successRegistration = true;
    $message = "Registration was successful! Please log in below!";
    Session::unflash();
}
if($_SERVER['REQUEST_METHOD'] === "POST") {
    if (!empty($_POST["password"])) {
        $authenticated = Authenticator::authenticateUser($_POST["email"], $_POST["password"]);

        if (!$authenticated) {
            $error = "No user found with given username and password!";
            Session::flash("errors", $error); // Flash the error message
            header("Location: /login");
            exit();
        }

        $user = Authenticator::authenticateUser($_POST["email"], $_POST["password"]); // Retrieve user details
        Session::unflash();
        Session::set("userId", $user["id"]); // Set user details in the session
        header("Location: /");
        exit();

    }
}


require view("login/index.view.php");
