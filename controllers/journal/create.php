<?php

use Core\Database;

$header = "Add journal entry";

$db = new Database();


if ($_POST)
{
    dd($_POST);
}
require view("journal.view.php");