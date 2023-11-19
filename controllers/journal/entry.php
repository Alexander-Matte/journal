<?php

use Core\Database;

$header = "Journal Entry";

$db = new Database();
//Temporary hardcoded while figuring out authentication
$userLoggedIn = 4;

if($userLoggedIn != $_GET["id"])
{
    require base("controllers/403.php");
    exit();
}
$result = $db->query("SELECT * FROM `entries` WHERE id = :id", [
    "id" => $_GET["id"]
])->findOrFail();





require view("journal/entry.view.php");