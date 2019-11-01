<?php

if (PHP_SESSION_NONE === session_status()) {
    session_start();
}

require_once (__DIR__ . '/../Model/bdd.php');

$paramUrl = explode('?', explode('/', $_SERVER['REQUEST_URI'])[2]);

switch ($paramUrl[0]) {
    case 'modifier' :
        $id_commentaire = $_GET['id'];
        $commentaire = getCommentaire($_GET['id']);
        $titre = $commentaire[0]['titre'];
        $text = $commentaire[0]['libelle'];
        $param = 'modifierComm';
        $textButton = 'Modifier';
        require_once (__DIR__ . '/../View/navBar.php');
        require_once (__DIR__ . '/../View/ajout.php');
        require_once (__DIR__ . '/../View/footer.php');
        break;
    case 'modifierComm':
        updateCommentaire($_POST['id_commentaire'], $_POST['titre'], $_POST['libelle']);
        $commentaires = getCommentaires();
        require_once (__DIR__ . '/../View/navBar.php');
        require_once (__DIR__ . '/../View/commentaires.php');
        require_once (__DIR__ . '/../View/footer.php');
        break;
    default :
        $commentaires = getCommentaires();
        require_once (__DIR__ . '/../View/navBar.php');
        require_once (__DIR__ . '/../View/commentaires.php');
        return require_once (__DIR__ . '/../View/footer.php');
}

