<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Auth</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <div class="row">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="<?=$route?>accueil">Accueil<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?=$route?>commentaires">Commentaires</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?=$route?>ajout">Ajout</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?=$route?>archive">Archive</a>
                            </li>
                            <li>
                                <a href="<?=$route?>deconnexion" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Déconnexion</a>
                            </li>
                        </ul>
                    </div>
                </nav>