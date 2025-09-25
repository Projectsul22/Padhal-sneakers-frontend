Padhal Sneakers (WordPress)

Environnement : WordPress local sous XAMPP (Apache + MySQL).

Ce dépôt contient le cœur de WordPress, le thème personnalisé padhal-sneakers-theme ainsi que du code spécifique (gestion de stock AJAX, etc.).

Prérequis

XAMPP pour Windows (Apache + MySQL/MariaDB + PHP)

Git

Un dump SQL de la base de données du projet — fourni dans ce dépôt (push séparé ou release/pièce jointe)

Structure des dossiers

wp-content/themes/padhal-sneakers-theme/ — code du thème personnalisé (PHP, JS, CSS)

wp-content/uploads/ — fichiers utilisateurs (ignorés par Git)

wp-config.php — identifiants locaux (ignoré par Git). Utiliser wp-config-sample.php comme base.

Mise en route (contributeur)

Cloner le dépôt dans le web root de XAMPP

cd C:\xampp\htdocs
# choix du dossier de clonage ; structure actuelle : htdocs\padhal-sneakers\Padhal-sneakers
mkdir padhal-sneakers
cd padhal-sneakers
git clone https://github.com/Projectsul22/Padhal-sneakers-frontend.git Padhal-sneakers


Site disponible à l’adresse :

http://localhost/padhal-sneakers/Padhal-sneakers/


Créer la base de données et importer le dump

Lancer XAMPP (Apache + MySQL)

Créer une base (ex. padhal_sneakers)

Importer le dump SQL fourni (repo ou pièce jointe)

Configurer wp-config.php

Copier wp-config-sample.php → wp-config.php

Modifier les paramètres DB :

DB_NAME : padhal_sneakers

DB_USER : root

DB_PASSWORD : `` (vide par défaut sous XAMPP) ou votre mot de passe local

DB_HOST : localhost

Vérifier que WP_HOME et WP_SITEURL pointent vers http://localhost/padhal-sneakers/Padhal-sneakers/ ou modifier directement dans la DB (wp_options, champs siteurl et home).

Lancer le site

Accès front : http://localhost/padhal-sneakers/Padhal-sneakers/

Accès admin : http://localhost/padhal-sneakers/Padhal-sneakers/wp-admin/

Notes de développement

Endpoint personnalisé Stock : accessible via Mon compte > Stock

Handlers AJAX : ps_stock_query, ps_stock_update

Autorisations : réservé aux rôles/capacités manage_woocommerce, edit_products ou rôle personnalisé vendor

Script JS : wp-content/themes/padhal-sneakers-theme/assets/js/ps-stock.js

Première configuration (propriétaire du dépôt)

Exécuter une seule fois depuis C:\xampp\htdocs\padhal-sneakers\Padhal-sneakers si le dépôt n’est pas initialisé :

# Initialisation + branche principale
git init
git add .
# Vérifier que .gitignore exclut bien uploads/secrets avant le commit
git commit -m "chore: initial commit (WordPress + custom theme)"
git branch -M main

# Ajout remote et push
git remote add origin https://github.com/Projectsul22/Padhal-sneakers-frontend.git
git push -u origin main

Fichiers ignorés (important)
