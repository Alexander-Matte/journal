<?php
use Core\Authenticator;
use Core\Session;

$header = "Log in";
$errors = [];
$successRegistration = false;

if (Session::has('userId')) {
    redirect('/');
}

if (Session::has("errors")) {
    $errors = Session::get("errors");
    Session::unflash();
}

if(Session::has("reg_status")) {
    $successRegistration = true;
    $message = "Registration was successful! Please log in below!";
    Session::unflash();
}
if(isset($_POST['submit'])) {
    if (!empty($_POST["password"])) {
        $email = $_POST["email"];
        $password = $_POST["password"];
        $user = Authenticator::authenticateUser($email,$password);

        if (!$user) {
            $error = "No user found with given username and password!";
            Session::flash("errors", $error); // Flash the error message
            redirect('/login');
        }

        Session::unflash();
        Session::set("userId", $user["id"]); // Set user details in the session
        redirect('/');
    }
}

require view("login/index.view.php");
