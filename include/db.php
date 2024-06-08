<?php 
    $serveur = getenv('DB_HOST');
    $login = getenv('DB_USER');
    $mot_de_passe = getenv('DB_PASS');
    $base_de_donnees = getenv('DB_NAME');
    $pdo = new PDO('mysql:host='.$serveur.';dbname='.$base_de_donnees, $login, $mot_de_passe);
    $pdo->exec("set names utf8");
?>
