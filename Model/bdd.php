<?php

require_once __DIR__ . '/../config/config.php';

function connect() { //connexion à la bdd
    try {
        return new PDO(
                sprintf('mysql:host=localhost;dbname=dm', DATABASE_CONFIG['host'], DATABASE_CONFIG['database']), DATABASE_CONFIG['user'], DATABASE_CONFIG['password']
        );
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
}

function getUsers() { //obtention tous les utilisateurs de la bdd
    $db = connect();
    $query = $db->prepare('SELECT * FROM users');
    $query->execute();
    return $query->fetchAll();
}

function getCommentaires() { //obtention tous les commentaires non supprimés
    $db = connect();
    $query = $db->prepare('SELECT c.id, titre, pseudo, libelle FROM commentaires c join users u on id_user = u.id where archive = 0');
    $query->execute();
    return $query->fetchAll();
}

function getCommentaire($idCommentaire) { //obtention le commentaire ayant l'id n° tant
    $db = connect();
    $query = $db->prepare("SELECT c.id, titre, pseudo, libelle FROM commentaires c join users u on id_user = u.id where archive = 0 && c.id = $idCommentaire");
    $query->execute();
    return $query->fetchAll();
}

function addCommentaire($id_user, $titre, $libelle) { //ajoute un commentaire
    $db = connect();
    $query = $db->prepare("INSERT INTO commentaires VALUES (NULL, '$titre', '$libelle', '$id_user', 0)");
    $query->execute();
    $query->fetchAll();
}

function getArchivesCommentaires() { //obtention les commentaires supprimé
    $db = connect();
    $query = $db->prepare('SELECT titre, pseudo, libelle FROM commentaires join users u on id_user = u.id where archive = 1');
    $query->execute();
    return $query->fetchAll();
}

function updateCommentaire($id_commentaire, $titre, $libelle) { //modifie un commentaire
    $db = connect();
    $query = $db->prepare("UPDATE commentaires SET libelle = '$libelle', titre = '$titre' WHERE commentaires.id = $id_commentaire");
    $query->execute();
    $query->fetchAll();
}

function supprimerCommentaire($id_commentaire){ //supprime un commentaire, on le stocke dans archive puisqu'une donnée ne doit jamais être supprimé (en cas d'erreur pouvoir toujours remettre la donnée dans la base)
    $db = connect();
    $query = $db->prepare("UPDATE commentaires SET archive = 1 WHERE commentaires.id = $id_commentaire");
    $query->execute();
    $query->fetchAll();
}
