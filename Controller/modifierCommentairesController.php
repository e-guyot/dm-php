<?php

if (PHP_SESSION_NONE === session_status()) {
    session_start();
}

require_once (__DIR__ . '/../Model/bdd.php');

$paramUrl = explode('/', $_SERVER['REQUEST_URI']); //découpe les différents parametre de l'url

foreach ($paramUrl as $value) { //PARCOURS LES PARAMETRES DE L'URL
    $paramModif = testParamUrl($value);
}

switch ($paramModif[0]) {
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

function testParamUrl ($paramUrl) { //test si dans les paramètres de l'url existe le parametre 'modifier'
    if (preg_match('/modifier\?id=/', $paramUrl) || preg_match('/modifierComm/', $paramUrl)) {
        return explode('?', $paramUrl);
    }
}


