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

if (isset($_POST['mail']) && isset($_POST['pass'])) {

    $mail = htmlspecialchars($_POST['mail']);
    $pass_hache = password_hash($_POST['pass'], PASSWORD_DEFAULT);


$req = $bdd->prepare('SELECT id_client, pass FROM clients WHERE mail = :mail');
$req->execute(array(
    'mail' => $mail));
    $resultat = $req->fetch();

// Comparaison du pass envoyé via le formulaire avec la base
$isPasswordCorrect = password_verify($_POST['pass'], $resultat['pass']);

if (!$resultat)
{
    echo 'Mauvais identifiant ou mot de passe !';
}
else
{
    if ($isPasswordCorrect) {
        session_start();
        $_SESSION['id_client'] = $resultat['id_client'];
        $_SESSION['mail'] = $mail;
        echo 'Vous êtes connecté !';
    }
    else {
        echo 'Mauvais email ou mot de passe !';
    }
}


}

//lien header location

?>