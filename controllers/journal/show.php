<?php

use Core\Database;

$header = "Journal Entry";

if(!isset($_SESSION["userId"]))
{
    abort(403);
}

$postId = $_GET["id"];

$db = new Database();

$userId = $_SESSION["userId"];

$result = $db->query("SELECT * FROM `entries` WHERE user_id = :id AND id = :postId", [
    "id" => $userId,
    "postId" => $postId
])->findOrFail();





require view("journal/show.view.php");