<?php

 try
{
    //connexion avec la BDD
	$bdd = new PDO('mysql:host=172.14.140.8;dbname=zalandafpa;charset=utf8', 'jonathan', '123');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

if (isset($_POST['mail']) && isset($_POST['pass'])) {

    $mail = htmlspecialchars($_POST['mail']);
    $pass_hache = password_hash($_POST['pass'], PASSWORD_DEFAULT);


$req = $bdd->prepare('SELECT id_client, pass, prenom FROM clients WHERE mail = :mail');
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
        $_SESSION['prenom'] = $resultat['prenom'];
        $_SESSION['connexion'] = true;
        echo 'Vous êtes connecté !';
        header("Location: http://localhost/Zaland-afpa/");
    }
    else {
        echo 'Mauvais identifiant ou mot de passe !';
    }
}


}

//lien header location

?>
