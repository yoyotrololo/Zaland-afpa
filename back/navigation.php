<?php

switch($page){
    case "accueil": include('./vue/vue_accueil.php');
        break;
    case "article": include('./vue/vue_article.php');
        break;
    case "filter": include('./vue/vue_filter.php');
        break;
    default: include('./vue/vue_accueil.php');
        break;
}

?>