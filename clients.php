<?php

class clients
    {
	public $ID_client;
    public $nom;
    public $prenom;
    public $numRue;
	public $nomRue;
	public $CP;
	public $ville;
    public $pays;
    public $genre;
    public $date_naissance;
    private $email;
    private $pass;

	// Constructeur
    private function classClients()
    {
		
    }
     public function getAdresse(){
         $adresse = $this->numRue. " " .$this->nomRue. " ".$this->CP. " " .$this->ville. "";
         return $adresse;
     }
  
    
    public function getMail() {
    return $this->email;
}
    
    public function getPass() {
    return $this->pass;
}
    
  
    
?>
