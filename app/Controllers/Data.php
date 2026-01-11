<?php
namespace App\Controllers;


class Data
{


    public function getdataregister()
    {

        return [
        'nom' => $_POST['nom'] ?? '',
        'email' => $_POST['email'] ?? '',
        "telephone" => $_POST['telephone'] ?? '',
        'role' => $_POST['role'] ?? '',
        'password' => $_POST['password'] ?? ''      
        ];
    }


}



?>