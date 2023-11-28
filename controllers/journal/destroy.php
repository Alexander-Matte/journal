<?php

if(!isset($_SESSION["userId"]))
{
    require base("controllers/403.php");
    exit();
}
$userId = $_SESSION["userId"];
$postId = $_GET["id"];


$db = new Core\Database();

$result = $db->query("DELETE FROM `entries` WHERE user_id = :id AND id = :postId", [
    "id" => $userId,
    "postId" => $postId
]);

header("Location: /journal");
exit();