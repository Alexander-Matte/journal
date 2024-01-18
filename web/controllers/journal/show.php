<?php
use Core\Database;
use Core\Session;

$header = "Journal Entry";

if(!isLoggedIn())
{
    abort(403);
}

$postId = $_GET["id"];
$db = new Database();
$userId = Session::get("userId");

$result = $db->query("SELECT * FROM `entries` WHERE user_id = :id AND id = :postId", [
    "id" => $userId,
    "postId" => $postId
])->findOrFail();

if(!$result)
{
    redirect("/journal");
}

require view("journal/show.view.php");