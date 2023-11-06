<?php

use Core\Database;

$header = "Journal Entries";

$db = new Database();

$results = $db->query("SELECT * FROM `entries` LIMIT 50")->findAll();


require view("journal/index.view.php");