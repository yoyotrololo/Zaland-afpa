<?php
require_once('db_config.php');

try
{
    //connexion avec la BDD
	$bdd = new PDO('mysql:host=172.14.140.8;dbname=zalandafpa;charset=utf8', DB_USER, DB_PASSWORD);
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

$recherche = $_POST['rechercher'];
$req = $bdd->query('SELECT * FROM articles WHERE nom LIKE "'.$recherche.'%"');

while($donne = $req->fetch()){
    var_dump($donne);
}
?>