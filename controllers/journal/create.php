<?php

$header = "Create a journal entry";

if(!isset($_SESSION["userId"]))
{
    require base("controllers/403.php");
    exit();
}
$userId = $_SESSION["userId"];

$db = new Core\Database();
if(isset($_POST["content"]) && isset($_POST["title"]))
{
    $result = $db->query("INSERT INTO entries (user_id, title, content)
    VALUES (:userId, :title, :content)", [
        'userId' => $userId,
        'title' => $_POST["title"],
        'content' => $_POST["content"]
    ]);

    header("Location: /journal");
    exit();
}



require view("journal/create.view.php");







