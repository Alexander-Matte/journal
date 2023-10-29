<?php

$header = "Add journal entry";

if ($_POST)
{
    dd($_POST);
}
require view("journal.view.php");