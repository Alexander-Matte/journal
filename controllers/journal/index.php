<?php

use Core\Database;

$header = "Journal Entries";

$db = new Database();

$results = $db->query("SELECT * FROM `entries` LIMIT 50")->findAll();

dd($results);

require view("journal.view.php");