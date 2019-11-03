<?php

if (PHP_SESSION_NONE === session_status()) {
    session_start();
}

require_once (__DIR__ . '/../Model/bdd.php');

$paramUrl = explode('/', $_SERVER['REQUEST_URI']);

foreach ($paramUrl as $value) { //PARCOURS LES PARAMETRES DE L'URL
	$paramSuppr = testParamUrl($value);
}
// recupère le parametre seul supprimer
if ($paramSuppr[0] === 'supprimer') {
    supprimerCommentaire($_GET['id']);
    $commentaires = getCommentaires();
    require_once (__DIR__ . '/../View/navBar.php');
    require_once (__DIR__ . '/../View/commentaires.php');
    require_once (__DIR__ . '/../View/footer.php');
}

function testParamUrl ($paramUrl) { //test si dans les paramètres de l'url existe le parametre 'supprimer'
	if (preg_match('/supprimer\?id=/', $paramUrl)) {
		return explode('?', $paramUrl);
	}
}

