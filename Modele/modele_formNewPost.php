<?php
if (isset($_POST) && is_array($_POST)) {
	//envoie de la requete sql + affichage d'un message : bien envoyé
	include_once('../Views/view_newPost.php');
	return 1;
}