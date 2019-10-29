<?php

$requestedPage = '/';

if (isset($_SERVER['REQUEST_URI'])) {
    $requestedPage = explode('?', $_SERVER['REQUEST_URI']);
}

switch ($requestedPage[0]) {
    case '/students':
        require_once(__DIR__ . '/Controller/studentsController.php');
        break;
    default:
        require_once(__DIR__ . '/View/404.php');
}
