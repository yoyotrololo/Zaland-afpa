<?php

require_once('db_config.php');
//session_start();

try 
{
	$bdd = new PDO('mysql:host=172.14.140.8:3306;dbname=zalandafpa;charset=utf8',DB_USER, DB_PASSWORD, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)	//permet de capturer l'exception en cas d'erreur, et d'éviter que le mot de passe ne s'affiche
{
	die('Erreur : ' . $e->getMessage());
} 

$requete = $bdd->prepare('SELECT * FROM articles WHERE ID_article = :ID_article');
$requete->execute(array(
	'ID_article' => $_POST['ID_article']
));
$resultat = $requete->fetch();
$nom = $resultat['nom'];
$prix = $resultat['prix'];

$requete->CloseCursor();

?>