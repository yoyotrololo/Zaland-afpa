<?php
try
{
$bdd = new PDO('mysql:host=172.14.140.8;dbname=Zalandafpa;charset=utf8', 'Jérémy', 'root');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
//$genre = $_POST['Genre'];
$couleur ='rouge' ;
$requete = $bdd->prepare("SELECT * FROM articles WHERE couleur = ?");
$requete->execute(array($couleur));
$donnees = $requete->fetchAll();
$taille = sizeof($donnees);
//var_dump ($donnees[1]['nom']);
for ($i=0; $i<$taille; $i++) {
    echo $donnees[$i]['nom'] . ' - ' . $donnees[$i]['genre'] . '<br/>';




}
?>

