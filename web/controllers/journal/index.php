<?php
use Core\Database;
use Core\Session;

$header = "Journal Entries";

if(!isLoggedIn())
{
    abort(403);
}

$db = new Database();
$userId = Session::get("userId");

$results = $db->query("SELECT * FROM `entries` WHERE user_id = :id", [
    "id" => $userId
])->findAll();

require view("journal/index.view.php");