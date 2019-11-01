<?php
if (PHP_SESSION_NONE === session_status()) {
    session_start();
}


$requestedPage = '/';
if (isset($_SERVER['REQUEST_URI'])) {
    $requestedPage = explode('?', $_SERVER['REQUEST_URI']);
}
switch ($requestedPage[0]) {
    case '/dm_php2/':
        require_once(__DIR__ . '/Controller/loginController.php');
        break;
    case '/dm_php2/accueil':
        require_once(__DIR__ . '/Controller/accueilController.php');
        break;
    case '/dm_php2/commentaires':
        require_once(__DIR__ . '/Controller/commentairesController.php');
        break;
    case '/dm_php2/ajout':
        require_once(__DIR__ . '/Controller/ajoutCommentairesController.php');
        break;
    case '/dm_php2/login':
        require_once(__DIR__ . '/Controller/loginController.php');
        break;
    case '/dm_php2/archive':
        require_once(__DIR__ . '/Controller/archivesCommentairesController.php');
        break;
    case '/dm_php2/modifier':
        require_once(__DIR__ . '/Controller/modifierCommentairesController.php');
        break;
    case '/dm_php2/deconnexion':
        require_once(__DIR__ . '/Controller/deconnexionController.php');
        break;
    case '/dm_php2/modifierComm':
        require_once(__DIR__ . '/Controller/modifierCommentairesController.php');
        break;
    case '/dm_php2/supprimer':
        require_once(__DIR__ . '/Controller/supprimerCommentaireController.php');
        break;
    default:
        require_once(__DIR__ . '/View/404.php');
}