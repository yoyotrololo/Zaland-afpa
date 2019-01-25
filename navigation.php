<?php

switch($page){
    case "accueil": include('./vue_accueil.php');
        break;
    case "article": include('./vue_article.php');
        break;
    case "filter": include('./vue_filter.php');
        break;
    default: include('./vue_accueil.php');
        break;
}

?>