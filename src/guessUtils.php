<?php

function generateNumberToGuess()
{
    if (PHP_SESSION_NONE === session_status()) {
        session_start();
    }
    if (false === isset($_SESSION['numberToGuess'])) {
        $_SESSION['numberToGuess'] = rand(0, 100);
    }
}

function isRight($guess): void
{
    $isRight = $guess <=> $_SESSION['numberToGuess'];

    switch ($isRight) {
        case -1:
            echo "C'est plus grand";
            break;
        case 0:
            echo 'Bravo';
            unset($_SESSION['numberToGuess']);
            generateNumberToGuess();
            break;
        case 1:
            echo "C'est plus petit";
            break;
        default:
            echo "Ca ne devrait pas arriver";
            break;
    }
}
