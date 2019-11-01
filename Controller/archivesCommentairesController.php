<?php
if (PHP_SESSION_NONE === session_status()) {
    session_start();
}


require_once (__DIR__ . '/../Model/bdd.php');

$archivesCommentaires = getArchivesCommentaires();
require_once (__DIR__ . '/../View/navBar.php');
require_once (__DIR__ . '/../View/archives.php');
require_once (__DIR__ . '/../View/footer.php');
