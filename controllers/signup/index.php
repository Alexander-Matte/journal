<?php
use Core\Authenticator;
use Core\Database;
$header = "Sign up";

if(isset($_POST["email"]) && isset($_POST["password"]))
{
    if(Authenticator::email($_POST["email"]))
    {
        //Need to build errors and notify user that emails already in use
        dd("EMAIL IN USE");
    }

    $db = new Database();
    $db->addUser($_POST["email"],$_POST["password"],$_POST["firstName"],$_POST["lastName"]);
    header("Location: /login");
    exit();

}





require view("signup/index.view.php");