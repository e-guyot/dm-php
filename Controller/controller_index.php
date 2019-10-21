<?php

include __DIR__ . '/../Model/modele_index.php';

$commentaires = getAllCommentaires();
$categories = getAllCategoriesName();

include __DIR__ . '/../View/view_index.php';