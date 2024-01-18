<?php
use Core\Database;
use Core\Session;

$header = "Edit your journal entry";

if(!isLoggedIn())
{
    abort(403);
}
$userId = Session::get("userId");

if(isset($_POST["content"]) && isset($_POST["title"]))
{
    $content = htmlspecialchars($_POST["content"], ENT_QUOTES, 'UTF-8');
    $title = htmlspecialchars($_POST["title"], ENT_QUOTES, 'UTF-8');
    require base(CONTROLLER_PATH . "journal/update.php");
}

$db = new Database();
$postId = $_GET["id"];

$result = $db->query("SELECT * FROM `entries` WHERE user_id = :id AND id = :postId", [
    "id" => $userId,
    "postId" => $postId
])->findOrFail();

if(!$result)
{
    redirect("/journal");
}

require view("journal/edit.view.php");
