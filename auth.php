<?php
if (PHP_SESSION_NONE === session_status()) {
    session_start();
}

$defaultPassword = password_hash('root', PASSWORD_DEFAULT);
$defaultUsername = 'root';

if ('POST' === $_SERVER['REQUEST_METHOD']) {
    $username = sanitize($_POST['username']);
    $password = sanitize($_POST['password']);

//    if ($username === $defaultUsername && password_verify($password, $defaultPassword)) {
    $_SESSION['user'] = ['username' => $username, 'password' => $password];
//    } else {
//        $error = 'invalid credentials';
//    }
}

if ($_SESSION['user'] !== null) {
    var_dump($_SESSION['user']);
}

function sanitize(string $input): string
{
    $input = trim($input);
    return htmlspecialchars($input);
}
?>

<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Authentification</title>
    </head>
    <body>
        <?= $_SESSION['user']['username']; ?>
        <form action="auth.php" method="post">
            <label for="username">Login</label>
            <input type="text" name="username">
            <label for="password">Mot de passe</label>
            <input type="password" name="password">
            <input type="submit" value="Send">
        </form>
    </body>
</html>
