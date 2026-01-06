<?php
class Commande
{

    private string $title;
    private float $price;
    private string $description;
    private string $addrese;
    private string $status;

    private array $client;
    private array $offre;


    public function __construct($title, $price, $description, $addrese, $status, $client, $offre)
    {
        $this->title = $title;
        $this->price = $price;
        $this->description = $description;
        $this->addrese = $addrese;
        $this->status = $status;
        $this->client = $client;
        $this->offre = $offre;

    }

}

?>