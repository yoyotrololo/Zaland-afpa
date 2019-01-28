<?php
require_once('db_config.php');
require_once('./class/articles.php');

try
{
    //connexion avec la BDD
	$bdd = new PDO('mysql:host=172.14.140.8;dbname=zalandafpa;charset=utf8', DB_USER, DB_PASSWORD);
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

if(isset($_GET['genre'])) {
    switch($_GET['genre']) {
        case 'Homme':
            $req = $bdd->query('SELECT * FROM articles WHERE genre = "Homme"');
            break;
        case 'Femme':
            $req = $bdd->query('SELECT * FROM articles WHERE genre = "Femme"');
            break;
    } 
} else {
    //récupère les articles homme ET femme   
    $req = $bdd->query('SELECT * FROM articles');
}

$tab_article = array();

while ($donnees = $req->fetch())

{
    $article = new articles($donnees['ID_article'], $donnees['nom'], $donnees['genre'], $donnees['type'], $donnees['couleur'], $donnees['taille'], $donnees['prix'], $donnees['lien_image']);
    $tab_article[] = $article; 
}

echo json_encode($tab_article);
?>
