<?php

switch($page){
    case "homme": include('./homme.php');
        break;
    case "femme": include('./femme.php');
        break;
    default: include('accueil.php');
        break;
}

?>