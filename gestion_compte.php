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
//$prenom = "madeline";
//$id_client = 2;

// ROUTEUR 
$routeur = $_POST['routeur'];
//$routeur = "update";

switch ($routeur) {
	case "update":			// MODIFIER LES INFOS DU CLIENT 
		// reception de tous les champs à modifier et de leurs nouvelles valeurs en JSON
		//$json ='[{"champModif":["prenom","nom","genre"],"nouvellesValeurs":["madeline","plard","femme"]}]';
		$json = $_POST['json'];
		$tab_modif = json_decode($json);
		$taille_tab_modif = sizeof($tab_modif[0]->champModif);

		// vérification si colonnes existent dans la table
		//$result = mysqli_query($bdd, "SHOW COLUMNS FROM clients LIKE 'prenom'");
		for ($i=0; $i<$taille_tab_modif; $i++) {
			$requete = $bdd->prepare("SHOW COLUMNS FROM clients LIKE'" . $tab_modif[0]->champModif[$i] . "'");
			$requete->execute();
			$resultat = $requete->fetch();
			if(!$resultat) {
				echo("pas de colonne batard!");
				exit();
			}
			if ($resultat['Field'] == 'ID_client') {
				echo("interdit de mofidier cette colonne batard!");
				exit();
			}
			$requete->closeCursor();
		}

		// traitement et controle des valeurs
		for ($i=0; $i<$taille_tab_modif; $i++) {
			$colonne = $tab_modif[0]->champModif[$i];
			$nouvelleValeur = $tab_modif[0]->nouvellesValeurs[$i];

			switch ($colonne){
				case 'mail' :
					// vérifier si le mail n'existe pas déj)
				break; 
				case 'pass' :
					//hachage
				break;
				case 'CP' :
					// 5 chiffres
				break; 				 
			}
		}
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

	case "delete":			// SUPPRESSION DU COMPTE CLIENT
		$requete = "
			DELETE FROM clients 
			WHERE id_client = " . $id_client . "";
		$bdd->exec($requete);
		echo("Adieu " . $prenom . " , vous n'allez pas nous manquer sale batard!");
		break;
}

?>


