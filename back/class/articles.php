<?php

class articles {
    
    private $ID_article;
    public $nom;
    public $genre;
    public $type;
    public $couleur;
    public $taille;
    public $prix;
    public $lien_image;
    
}

 function __construct($ID_article, $nom, $genre, $type, $couleur, $taille, $prix, $lien_image)
    {
        $this->ID_article = $ID_article;
        $this->nom = $nom;
        $this->genre = $genre;
        $this->type = $type;
        $this->couleur = $couleur;
        $this->taille = $taille;
        $this->prix = $prix;
        $this->lien_image = $lien_image;
    }




function getID_article() {
    return $this->ID_article;
}

?>