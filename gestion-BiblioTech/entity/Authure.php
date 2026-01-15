<?php 

class Authure{
     private string $nom;
     private string $prenom;
     private Liver $liver;
     public function __construct($nom ,$prenom,$liver)
     {
    $this -> nom = $nom;
    $this -> prenom = $prenom;
    $this -> liver = $liver;
     }

     
}

?>