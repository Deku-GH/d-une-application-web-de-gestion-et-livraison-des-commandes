<?php
class Curdlivre
{
    protected PDO $PDO;


    public function creatLivre($PDO, $titre, $authur)
    {
        $sql = "INSERT INTO Livre(titre , authur)VALUES(:titre ,:authur)";
        $stmt = $PDO->prepare($sql);
        $stmt->execute([
            ":titre" => $titre,
            ":authur" => $authur

        ]);

    }

    public function readlivre($PDO)
    {

        $sql = "SELECT * FROM Livre";
        $stmt = $PDO->prepare($sql);
        $stmt->execute();

    }
     public function updateLivre(){
        $sql ="UPDATE ";
     }
}


?>