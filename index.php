<?php
$route = '/dm_php2/dm-php/';
if (PHP_SESSION_NONE === session_status()) { //test si la session est bien active.
	session_start();
	return $route;
}


$requestedPage = '/';
if (isset($_SERVER['REQUEST_URI'])) {
	$requestedPage = explode('?', $_SERVER['REQUEST_URI']);
}
switch ($requestedPage[0]) {
	case $route:
	require_once(__DIR__ . '/Controller/loginController.php');
	break;
	case $route.'accueil':
	require_once(__DIR__ . '/Controller/accueilController.php');
	break;
	case $route.'commentaires':
	require_once(__DIR__ . '/Controller/commentairesController.php');
	break;
	case $route.'ajout':
	require_once(__DIR__ . '/Controller/ajoutCommentairesController.php');
	break;
	case $route.'login':
	require_once(__DIR__ . '/Controller/loginController.php');
	break;
	case $route.'archive':
	require_once(__DIR__ . '/Controller/archivesCommentairesController.php');
	break;
	case $route.'modifier':
	require_once(__DIR__ . '/Controller/modifierCommentairesController.php');
	break;
	case $route.'deconnexion':
	require_once(__DIR__ . '/Controller/deconnexionController.php');
	break;
	case $route.'modifierComm':
	require_once(__DIR__ . '/Controller/modifierCommentairesController.php');
	break;
	case $route.'supprimer':
	require_once(__DIR__ . '/Controller/supprimerCommentaireController.php');
	break;
	default:
	require_once(__DIR__ . '/View/navBar.php');
	require_once(__DIR__ . '/View/404.php');
	require_once(__DIR__ . '/View/footer.php');
}