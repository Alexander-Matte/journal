<?php

use Core\Database;

$header = "Journal Entry";

$db = new Database();
$userLoggedIn = 4;
$result = $db->query("SELECT * FROM `entries` WHERE id = :id", [
    "id" => $_GET["id"]
])->findOrFail();




require view("journal/entry.view.php");