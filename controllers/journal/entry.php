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

$result = $db->query("SELECT * FROM `entries` WHERE user_id = :id AND id = :postId", [
    "id" => $userId,
    "postId" => $_GET["id"]
])->findOrFail();





require view("journal/entry.view.php");