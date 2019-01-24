<?php

session_start();

try 
{
	$bdd = new PDO('mysql:host=172.14.140.8:3306;dbname=zalandafpa;charset=utf8','jonathan','123', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)	//permet de capturer l'exception en cas d'erreur, et d'éviter que le mot de passe ne s'affiche
{
	die('Erreur : ' . $e->getMessage());
} 


$prenom = $_SESSION['prenom'];
$id_client = $SESSION['id_client'];

// ROUTEUR 
$routeur = "delete";

switch ($routeur) {
	case "update":
		// MODIFIER LES INFOS DU CLIENT 

		// reception de tous les champs à modifier et de leurs nouvelles valeurs en JSON
		$json ='[{"champModif": ["genre","nom"],"nouvellesValeurs": ["HOMME","targaryen"]}]';
		$tab_modif = json_decode($json);
		$taille_tab_modif = sizeof($tab_modif[0]->champModif);

		// màj de tous les champs à modifier
		for ($i=0 ; $i<$taille_tab_modif ; $i++) {
			$colonne = $tab_modif[0]->champModif[$i];
			$nouvelleValeur = $tab_modif[0]->nouvellesValeurs[$i];

			$requete = "
				UPDATE clients 
				SET " . $tab_modif[0]->champModif[$i] . "= '" .  $tab_modif[0]->nouvellesValeurs[$i] . "' " . "
				WHERE id_client = " . $id_client . "";
			$bdd->exec($requete);
		}
		echo("Le compte de " . $prenom . " a bien été mis à jour.");
		break;

	case "delete":
		// SUPPRESSION DU COMPTE CLIENT
		$requete = "
			DELETE FROM clients 
			WHERE id_client = " . $id_client . "";
		$bdd->exec($requete);
		echo("Adieu " . $prenom . " , vous n'allez pas nous manquer sale batard!");
		break;
}


?>
