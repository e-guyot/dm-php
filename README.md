# dm-php

## Docker 

- lancer le dockerfile : docker build / ou si cela ne marche pas tester avec cette commande : docker run -d -p 8888:80 --name tp_docker -v  <emplacement du fichier en local>:/var/www/html php:7.2-apache
- lancer le docker-compose : docker-compose up --build -d

Je tiens à préciser que les fichiers docker ne fonctionne pas sur mon ordi je n'ai pas encore trouvé l'erreur.

## Bdd

Vous trouverez dans le dossier bdd un fichier sous extension.sql, c'est la base de données utilisée pour le dm. Il suffit juste de l'importer sur phpmyadmin.

## Route 

Ne pas oublier de modifier la variable $route, c'est le chemin utilisé sur mon PC donc peut varier. Cette variable ce trouve dans le fichier index.php.
