<?php
use Core\Database;
use Core\Session;

$header = "Create a journal entry";

if(!isLoggedIn())
{
    abort(403);
}
$userId = Session::get("userId");

$db = new Database();

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







