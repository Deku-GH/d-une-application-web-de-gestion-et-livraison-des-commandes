<?php

namespace App\Controllers;
use App\Database\Database;

require_once __DIR__ . '/../../vendor/autoload.php';

class Crudcommande
{
    public function creatcommande($description, $adresse, $status, $ville, $code_postal)
    {
        $conn = new Database();
        $pdo = $conn->connect();

        $sql = "INSERT INTO commendes (description, addrese, status, Ville, Code_postal)
                VALUES (:description, :addrese, :status, :Ville, :Code_postal)";
        
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':description'  => $description,
            ':addrese'      => $adresse,
            ':status'       => $status,
            ':Ville'        => $ville,
            ':Code_postal'  => $code_postal,
        ]);
    }

    public function getdatacommend()
    {
        return [
            'description'   => $_POST['description'] ?? '',
            'adresse'       => $_POST['adresse'] ?? '',
            'status'        => $_POST['type_colis'] ?? '',
            'ville'         => $_POST['ville'] ?? '',
            'code_postal'   => $_POST['code_postal'] ?? '',
        ];
    }
}




    $crud = new Crudcommande();
    $data = $crud->getdatacommend();

 
    $crud->creatcommande(
        $data['description'],
        $data['adresse'],
        $data['status'],
        $data['ville'],
        $data['code_postal']
    );

    



 header("Location: ../../views/dashboard-client.php");
?>