<?php

if(!isset($_SESSION["userId"]))
{
    abort(403);
}
$userId = $_SESSION["userId"];
$postId = $_GET["id"];


$db = new Core\Database();

$result = $db->query("DELETE FROM `entries` WHERE user_id = :id AND id = :postId", [
    "id" => $userId,
    "postId" => $postId
]);

redirect('/journal');