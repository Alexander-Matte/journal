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

$result = $db->query("UPDATE entries SET title = :title, content = :content WHERE id = :entryId AND user_id = :userId", [
    'title' => $title,
    'content' => $content,
    'entryId' => $postId,
    'userId' => $userId
]);

redirect('/journal/show?id=' . $postId);