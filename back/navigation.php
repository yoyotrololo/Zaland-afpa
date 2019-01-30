<?php

switch($page){
    case "accueil": include('./vue/vue_accueil.php');
        break;
    case "filter": include('./vue/vue_filter.php');
        break;
    case "vue_gestion": include('./vue/vue_gestion_compte.php');
        break;
    case "vue_panier": include('./panier.php');
        break;
    default: include('./vue/vue_accueil.php');
        break;
}

?>