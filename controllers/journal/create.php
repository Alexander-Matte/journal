<?php

$header = "Create a journal entry";
//Temp hard coded until authentication is built
$userId = 1;

$db = new Core\Database();
if(isset($_POST["content"]))
{
    $result = $db->query("INSERT INTO entries (user_id, title, content)
    VALUES (:userId, :title, :content)", [
        'userId' => $userId,
        'title' => $_POST["title"],
        'content' => $_POST["content"]
    ]);
}



require view("journal/create.view.php");







