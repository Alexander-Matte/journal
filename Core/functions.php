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
    return base('views/' . $viewName);
}

function base(string $path)
{
    return BASE_PATH . $path;
}

function abort($statusCode = 404)
{
    http_response_code($statusCode);
    require base('Core/httpResponse.php');
    exit();

}

function redirect($path)
{
    header('Location: ' . $path);
    exit();
}

function hashPassword($password)
{
    return password_hash($password, PASSWORD_DEFAULT);

}



?>