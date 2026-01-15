<?php 
class Liver{
    private string $titre;
    private string $authur;

          public function __construct($titre,$authur)
          {
            $this->titre = $titre;
            $this -> authur = $authur;
          }


          public function getTiter(){
            return $this ->titre;
          }
          public function setTitre($titre){
            $this->titre= $titre;
          }
          public function getAuthure(){
            return $this->authur;
          }
          public function setAuthure($authur)
          {
            $this->authur = $authur;

          }


    }


?>