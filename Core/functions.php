<?php

use Core\Session;

/**
 * Debugging tool to see value of given var
 * @param $value
 * @return void
 */
function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}

/**
 * Returns specific view file
 * @param string $viewName
 * @return string
 */
function view(string $viewName): string
{
    return base('web/views/' . $viewName);
}

/**
 * Returns file starting from base of project to provided path
 * @param string $path
 * @return string
 */
function base(string $path): string
{
    return BASE_PATH . $path;
}

/**
 * Handles http errors by loading appropriate error code file
 * @param int $statusCode
 * @return void
 */
function abort(int $statusCode = 404)
{
    http_response_code($statusCode);
    require base('Core/httpResponse.php');
    exit();

}

/**
 * Redirects user to provided path and exits
 * @param string $path
 * @return void
 */
function redirect(string $path)
{
    header('Location: ' . $path);
    exit();
}

/**
 * Hashes password
 * @param string $password
 * @return false|string|null
 */
function hashPassword(string $password)
{
    return password_hash($password, PASSWORD_DEFAULT);
}

function isLoggedIn()
{
    if(!Session::has("userId"))
    {
        return false;
    }
    return true;
}

?>