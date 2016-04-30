<?php

//voir la liste des drivers disponible
//var_dump(PDO::getAvailableDrivers

//definir les constrantes
define('DB_HOST', 'localhost');
define('DB_NAME', 'netdev');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');


try {
//create new objet db (connexion de la base de donnée)
$db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USERNAME, DB_PASSWORD);
    
    //DEBOGAGE Code s'arrete quand il y a un problème
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } 
//garder les erreurs de type PDOException dans variable $e
catch(PDOException $e) {
//Affichage message d'erreur
    die('Erreur:'.$e->getMessage());
}
