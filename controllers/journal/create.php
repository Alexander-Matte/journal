<?php

use Core\Database;

$header = "Create a journal entry";

$db = new Database();



require view("journal/create.view.php");