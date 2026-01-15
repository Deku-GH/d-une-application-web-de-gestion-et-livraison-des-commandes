<?php

namespace App\Services;
use App\Controllers\Data;
use App\Database\Database;
use PDO;
require_once __DIR__ . '/../../vendor/autoload.php';



class Cruduser
{
    public function register($nom, $role, $email, $telephone, $password)
    {

        $conn = new Database();

        $connex = $conn->connect();
        $sql = "INSERT INTO users(nom , role ,email,telephone,password )VALUES(:nom,:role,:email,:telephone,:password)";
        $stmt = $connex->prepare($sql);
        $stmt->execute(
            [
                ':nom' => $nom,
                ':role' => $role,
                ':email' => $email,
                ':telephone' => $telephone,
                ':password' => $password
            ]
        );

    }
    public function checkaccount($email, $Password)
    {
        $conn = new Database();

        $connex = $conn->connect();
        $sql = "SELECT * FROM  users WHERE email = :email AND password = :password";
        $stmt = $connex->prepare($sql);
        $stmt->execute([
            ':email' => $email,
            ':password' => $Password
        ]);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $resulta = $stmt->fetch();

        return $resulta;

    }
    
}


$cread = new Cruduser();
$data = new Data();
$dataregister = $data->getdataregister();
$cread->register($dataregister['nom'], $dataregister['role'], $dataregister['email'], $dataregister['telephone'], $dataregister['password']);
var_dump($dataregister);
 header("Location: ../../views/index.html");



?>