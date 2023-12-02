<?php

$header = "Edit your journal entry";

if(!isset($_SESSION["userId"]))
{
    abort(403);
}
$userId = $_SESSION["userId"];

if(isset($_POST["content"]) && isset($_POST["title"]))
{
    require base("controllers/journal/update.php");
    exit();
}

$db = new Core\Database();
$postId = $_GET["id"];

$result = $db->query("SELECT * FROM `entries` WHERE user_id = :id AND id = :postId", [
    "id" => $userId,
    "postId" => $postId
])->findOrFail();





require view("journal/edit.view.php");
