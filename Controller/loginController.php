<?php

if (PHP_SESSION_NONE === session_status()) {
    session_start();
    $_SESSION['user']= [];
    return require_once (__DIR__.'/../View/login.php');
}

require_once (__DIR__ . '/../Model/bdd.php');

$users = getUsers();
if ('POST' === $_SERVER['REQUEST_METHOD']) {

    foreach ($users as $key => $user) {
        $username = sanitize($_POST['pseudo']);
        $password = sanitize($_POST['password']);
        if ($user['pseudo'] === $username && $user['password'] === $password) {
            $_SESSION['user'] = ['id' => $user['id'], $user['pseudo'] => $username, 'password' => $user['password']];
         require_once (__DIR__ . '/../View/navBar.php');
        return require_once (__DIR__ . '/../View/footer.php');
        }
    }
}
require_once (__DIR__.'/../View/login.php');


function sanitize(string $input): string {
    $input = trim($input);
    return htmlspecialchars($input);
}

?>
