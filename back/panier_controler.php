<?php

$routeur = $_POST['routeur'];
$ID_article = $_POST['ID_article'];

switch ($routeur) {
	case 'ajouter' :
		ajouterArticle($ID_article);
	break;
	case 'supprimer' : 
		supprimerArticle($ID_article);
	break;
}

creationPanier();


$somme = calculerTotal();
for ($i=0; $i<count($_SESSION['panier']['ID_article']); $i++) {
	$id = $_SESSION['panier']['ID_article'][$i];
	$nom = $_SESSION['panier']['nom'][$i];
	$prix = $_SESSION['panier']['prix'][$i];
	echo("<p> L'article n°" . $id . " - (" . $nom . ") - prix = " . $prix ."</p>");
}
	echo '<br/>';
	echo ("<p>Total = " . $somme . "</p>");
	echo '<br/>';	

$ID_articleSupprime = '9';
supprimerArticle($ID_articleSupprime);
$ID_articleSupprime = '2';
supprimerArticle($ID_articleSupprime);


$somme = calculerTotal();
for ($i=0; $i<count($_SESSION['panier']['ID_article']); $i++) {
	$id = $_SESSION['panier']['ID_article'][$i];
	$nom = $_SESSION['panier']['nom'][$i];
	$prix = $_SESSION['panier']['prix'][$i];
	echo("<p> L'article n°" . $id . " - (" . $nom . ") - prix = " . $prix ."</p>");
}
	echo '<br/>';
	echo ("<p>Total = " . $somme . "</p>");
	echo '<br/>';	



function creationPanier(){
   if (!isset($_SESSION['panier'])){
      $_SESSION['panier']=array();
      $_SESSION['panier']['ID_article'] = array();      
      $_SESSION['panier']['nom'] = array();
      $_SESSION['panier']['prix'] = array();
   }
}

function ajouterArticle($ID_article){
    if (creationPanier()) {
    	require('panier_model.php'); 
    	array_push($_SESSION['panier']['ID_article'],$ID_article);
    	array_push($_SESSION['panier']['nom'],$nom);
		array_push($_SESSION['panier']['prix'],$prix);
    }
}

function supprimerArticle($ID_articleSupprime) {
	$tmp = array();
	$tmp['ID_article'] = array();
	$tmp['nom'] = array();
	$tmp['prix'] = array();

	for ($i=0; $i<count($_SESSION['panier']['ID_article']); $i++) {
		if ($_SESSION['panier']['ID_article'][$i] != $ID_articleSupprime) {
	    	array_push($tmp['ID_article'], $_SESSION['panier']['ID_article'][$i]);
	    	array_push($tmp['nom'], $_SESSION['panier']['nom'][$i]);
			array_push($tmp['prix'],$_SESSION['panier']['prix'][$i]);		
		}
	}
	$_SESSION['panier'] = $tmp;
}
	
function calculerTotal() {
	$total = array_sum($_SESSION['panier']['prix']);
	return $total;
}


?>
