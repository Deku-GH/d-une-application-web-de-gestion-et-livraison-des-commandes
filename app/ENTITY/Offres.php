<?php
use App\ENTITY\Enum\status_offre;
use App\ENTITY\Livreur;

class OffreS {
   
    private string $price;
    private string $duration;
    private string $vihicle;

    private string $option;
    private status_offre $status;
    private array $livreur; 

    public function __construct($price ,$duration ,$vihicle,$option,$status,$livreur)
    {
        $this->price = $price;
        $this->duration = $duration;
        $this->vihicle = $vihicle;
        $this->option = $option;
        $this->status = $status;
    }
   


}


?>