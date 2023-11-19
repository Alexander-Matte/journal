<?php

use Core\Database;

$header = "Create a journal entry";
//Temp hard coded until authentication is built
$user = 1;

$db = new Database();
if(isset($_POST["content"]))
{
    $title = $_POST["title"];
    $content = $_POST["content"];
    $result = $db->query("INSERT INTO entries (user_id, title, content)
    VALUES ($user, '$title', '$content')");
}



require view("journal/create.view.php");







