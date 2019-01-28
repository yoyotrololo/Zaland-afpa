<?php

/*session_start();*/

try
{
    //connexion avec la BDD
	$bdd = new PDO('mysql:host=172.14.140.8;dbname=zalandafpa;charset=utf8', 'madeline', 'madeline');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}


// Insertion
if (isset($_POST['nom']) && isset($_POST['prenom']) && isset ($_POST['nomRue']) && isset ($_POST['numRue']) && isset ($_POST['CP']) && isset ($_POST['ville']) && isset ($_POST['pays']) && isset ($_POST['mail']) && isset ($_POST['pass']) && isset ($_POST['genre']) && isset ($_POST['dateNaissance'])) {
 
    $pass_hache = password_hash($_POST['pass'], PASSWORD_DEFAULT);
    $mail = $_POST['mail'];

    $query = $bdd->query("select ID_client from clients where mail='$mail'");

   $count = $query->rowCount();

   if ($count == 1)

   { echo "Un compte existe déjà avec cet email";}

   else {   
    
    
$req = $bdd->prepare('INSERT INTO clients (nom, prenom, numRue, nomRue, CP, ville, pays, mail, pass, genre, dateNaissance) VALUES (:nom, :prenom, :numRue, :nomRue, :CP, :ville, :pays, :mail, :pass, :genre, :dateNaissance)');
$req->execute(array(
    'nom' => $_POST['nom'],
    'prenom' => $_POST['prenom'],
    'numRue' => $_POST['numRue'],
    'nomRue' => $_POST['nomRue'],
    'CP'=> $_POST['CP'],
    'ville'=> $_POST['ville'],
    'pays'=> $_POST['pays'],
    'mail'=> $mail,
    'pass'=> $pass_hache,
    'genre'=> $_POST['genre'],
    'dateNaissance'=> $_POST['dateNaissance']

));
}

}

/*header('Location: connexion.php');*/

?>