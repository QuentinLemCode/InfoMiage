Installation :

Pré-requis :
-Composer
-Serveur Web avec PHP 5.5
-Base de données mySQL

-Cloner le dépot
-Dans le dossier app/config, renommer le fichier parameters.yml.dist en parameters.yml ; puis modifier ce fichier afin d'y rentrer vos paramètres de connexion à la base de données
-A la racine du dossier, executez "composer install"
-puis "php app/console doctrine:database:create" et "php app/console doctrine:schema:create"
