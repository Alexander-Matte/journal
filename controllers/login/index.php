<?php
use \Core\Authenticator;
$header = "Log in";


if(isset($_POST["password"]))
{
    //todo: notify user of authentication errors
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