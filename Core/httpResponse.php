<?php

switch ($statusCode)
{
    case 403:
        $header = '403 Forbidden - You do not have permission to view this site';
        require view('httpResponseStatus.view.php');
        break;

    case 404:
        $header = '404 Not Found';
        require view('httpResponseStatus.view.php');
        break;

    case 418:
        $header = '418 - I\'m a teapot';
        require view('httpResponseStatus.view.php');
        break;

    default:
        $header = '500 - Internal Server Error';
        require view('httpResponseStatus.view.php');
        break;

}
