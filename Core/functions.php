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

/**
 * @param $user
 * @return mixed
 */
function logIn($user)
{
    $_SESSION["userID"] = $user["id"];
}

?>