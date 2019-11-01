<?php

require_once __DIR__ . '/../config/config.php';

function connect() {
    try {
        return new PDO(
                sprintf('mysql:host=localhost;dbname=dm', DATABASE_CONFIG['host'], DATABASE_CONFIG['database']), DATABASE_CONFIG['user'], DATABASE_CONFIG['password']
        );
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
}

function getUsers() {
    $db = connect();
    $query = $db->prepare('SELECT * FROM users');
    $query->execute();
    return $query->fetchAll();
}

function getCommentaires() {
    $db = connect();
    $query = $db->prepare('SELECT c.id, titre, pseudo, libelle FROM commentaires c join users u on id_user = u.id where archive = 0');
    $query->execute();
    return $query->fetchAll();
}

function getCommentaire($idCommentaire) {
    $db = connect();
    $query = $db->prepare("SELECT c.id, titre, pseudo, libelle FROM commentaires c join users u on id_user = u.id where archive = 0 && c.id = $idCommentaire");
    $query->execute();
    return $query->fetchAll();
}

function addCommentaire($id_user, $titre, $libelle) {
    $db = connect();
    $query = $db->prepare("INSERT INTO commentaires VALUES (NULL, '$titre', '$libelle', '$id_user', 0)");
    $query->execute();
    return $query->fetchAll();
}

function getArchivesCommentaires() {
    $db = connect();
    $query = $db->prepare('SELECT titre, pseudo, libelle FROM commentaires join users u on id_user = u.id where archive = 1');
    $query->execute();
    return $query->fetchAll();
}

function updateCommentaire($id_commentaire, $titre, $libelle) {
    $db = connect();
    $query = $db->prepare("UPDATE commentaires SET libelle = '$libelle', titre = '$titre' WHERE commentaires.id = $id_commentaire");
    $query->execute();
    return $query->fetchAll();
}

function supprimerCommentaire($id_commentaire){
    $db = connect();
    $query = $db->prepare("UPDATE commentaires SET archive = 1 WHERE commentaires.id = $id_commentaire");
    $query->execute();
    return $query->fetchAll();
}
