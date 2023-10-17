<?php 

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

function view($viewName)
{
    return BASE_PATH . "/views/" . $viewName;
}

?>