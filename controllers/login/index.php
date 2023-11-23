<?php
use \Core\Authenticator;
$header = "Log in";


if(isset($_POST["password"]))
{
    if(Authenticator::authenticateUser($_POST["email"], $_POST["password"]))
    {
        $user = Authenticator::authenticateUser($_POST["email"], $_POST["password"]);
        logIn($user);
        header("Location: /");
        exit();
    }

    header($_SERVER["HTTP_REFERER"]);

}

require view("login/index.view.php");