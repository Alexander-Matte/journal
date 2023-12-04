<?php

$header = "Create a journal entry";

if(!isset($_SESSION["userId"]))
{
    abort(403);
}
$userId = $_SESSION["userId"];

$db = new Core\Database();

if(isset($_POST["content"]) && isset($_POST["title"]))
{
    $content = htmlspecialchars($_POST["content"], ENT_QUOTES, 'UTF-8');
    $title = htmlspecialchars($_POST["title"], ENT_QUOTES, 'UTF-8');
    $result = $db->query("INSERT INTO entries (user_id, title, content)
        VALUES (:userId, :title, :content)", [
        'userId' => $userId,
        'title' => $title,
        'content' => $content
    ]);

    redirect('/journal');
}




require view("journal/create.view.php");







