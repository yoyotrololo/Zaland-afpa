<?php

try
{
    //connexion avec la BDD
	$bdd = new PDO('mysql:host=localhost;dbname=zalandafpa;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

// Hachage du mot de passe
$pass_hache = password_hash($_POST['pass'], PASSWORD_DEFAULT);

// Insertion
if (isset($_POST['nom']) && isset($_POST['prenom']) && isset ($_POST['nomRue']) && isset ($_POST['numRue']) && isset ($_POST['CP']) && isset ($_POST['ville']) && isset ($_POST['pays']) && isset ($_POST['mail']) && isset ($_POST['pass']) && isset ($_POST['genre']) && isset ($_POST['dateNaissance'])) {
$req = $bdd->prepare('INSERT INTO clients(nom, prenom, numRue, nomRue, CP, ville, pays, mail, pass, genre, dateNaissance)');
$req->execute(array(
    'nom' => $nom,
    'prenom' => $prenom,
    'numRue' => $numRue,
    'nomRue' => $nomRue,
    'CP'=> $CP,
    'ville'=> $ville,
    'pays'=> $pays,
    'mail'=> $mail,
    'pass'=> $pass_hache,
    'genre'=> $genre,
    'dateNaissance'=> $dateNaissance,    

));}


//header location vers page connexion

?>