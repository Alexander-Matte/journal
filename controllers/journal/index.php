<?php

use Core\Database;

$header = "Journal Entries";

if(!isset($_SESSION["userId"]))
{
    abort(403);
}

$db = new Database();
$userId = $_SESSION["userId"];

$results = $db->query("SELECT * FROM `entries` WHERE user_id = :id", [
    "id" => $userId
])->findAll();


require view("journal/index.view.php");