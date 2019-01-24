<?php

switch($page){
    case "homme": include('./vue_homme.php');
        break;
    case "femme": include('./vue_femme.php');
        break;
    case "accueil": include('./vue_accueil.php');
        break;
    case "filter": include('./vue_filter.php');
        break;
    default: include('./vue_accueil.php');
        break;
}

?>