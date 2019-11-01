<?php

if (PHP_SESSION_NONE === session_status()) {
    session_start();
}

require_once (__DIR__ . '/../Model/bdd.php');

$paramUrl = explode('?', explode('/', $_SERVER['REQUEST_URI'])[2]);

if ($paramUrl[0] === 'supprimer') {
    supprimerCommentaire($_GET['id']);
    $commentaires = getCommentaires();
    require_once (__DIR__ . '/../View/navBar.php');
    require_once (__DIR__ . '/../View/commentaires.php');
    require_once (__DIR__ . '/../View/footer.php');
}

