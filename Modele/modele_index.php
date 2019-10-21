<?php

include_once __DIR__ . '/../config/config.php';

function connect ()
{
    try {
        return new PDO(
            sprintf('mysql:host=%s;dbname=%s', DATABASE_CONFIG['host'], DATABASE_CONFIG['database']),
            DATABASE_CONFIG['user'],
            DATABASE_CONFIG['password']
        );
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
}

function getAllCommentaires ()
{
    $db = connect();

    $query = $db->prepare('SELECT * FROM comments');
    $query->execute();

    return $query->fetchAll();
}

function getAllCategoriesName()
{
    $db = connect();

    $query = $db->prepare('SELECT name FROM categories');
    $query->execute();

    return $query->fetchAll();
}
