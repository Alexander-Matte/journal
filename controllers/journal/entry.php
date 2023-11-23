<?php

use Core\Database;

$header = "Journal Entry";

if(!isset($_SESSION["userId"]))
{
    require base("controllers/403.php");
    exit();
}

$db = new Database();

$userId = $_SESSION["userId"];
$result = $db->query("SELECT * FROM `entries` WHERE id = :id", [
    "id" => $userId
])->findOrFail();





require view("journal/entry.view.php");