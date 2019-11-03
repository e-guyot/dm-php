<?php
if (PHP_SESSION_NONE === session_status()) {
    session_start();
}

if ('POST' === $_SERVER['REQUEST_METHOD']) {
require_once (__DIR__ . '/../Model/bdd.php');
$id_user = $_SESSION['user']['id'];
$titre = $_POST['titre'];
$libelle = $_POST['libelle'];
addCommentaire($id_user, $titre, $libelle); //ajout dans la bdd
require_once (__DIR__ . '/../View/navBar.php');
require_once (__DIR__.'/commentairesController.php');
return require_once (__DIR__ . '/../View/footer.php');
}

$titre = '';
$text = '';
$param = 'ajout';
$textButton = 'Ajouter';
require_once (__DIR__ . '/../View/navBar.php');
require_once (__DIR__ . '/../View/ajout.php');
require_once (__DIR__ . '/../View/footer.php');
