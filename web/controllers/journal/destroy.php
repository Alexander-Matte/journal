<?php
use Core\Database;
use Core\Session;

if(!isLoggedIn())
{
    abort(403);
}

$userId = Session::get("userId");
$postId = $_GET["id"];

$db = new Database();

$result = $db->query("DELETE FROM `entries` WHERE user_id = :id AND id = :postId", [
    "id" => $userId,
    "postId" => $postId
]);

redirect('/journal');