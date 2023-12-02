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

function base(string $path)
{
    return BASE_PATH . $path;
}

function abort($statusCode = 404)
{
    http_response_code($statusCode);
    require base('controllers/httpResponse.php');
    exit();

}



?>