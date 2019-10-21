<?php
require_once 'guessUtils.php';

generateNumberToGuess();

$guess = $_POST['guess'];
if (1 === preg_match('/^\d{1,3}$/', $guess)) {
    $guess = (int)$guess;
    isRight($guess);
}
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Guess the number</title>
    </head>
    <body>
        <h1>Welcome to guess the number</h1>
        <h2>You have to guess <?= $_SESSION['numberToGuess']; ?></h2>
        <form action="index.php" method="post">
            <input type="text" name="guess"/>
            <button>Guess me</button>
        </form>
    </body>
</html>
