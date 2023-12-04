<?php

if(!isset($_SESSION["userId"]))
{
    abort(403);
}
$userId = $_SESSION["userId"];
$postId = $_GET["id"];

$db = new Core\Database();

$result = $db->query("UPDATE entries SET title = :title, content = :content WHERE id = :entryId AND user_id = :userId", [
    'title' => $title,
    'content' => $content,
    'entryId' => $postId,
    'userId' => $userId
]);
redirect('/journal/show?id=' . $postId);