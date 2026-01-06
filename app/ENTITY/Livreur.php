<?php
namespace App\ENTITY;
use app\ENTITY\Abstract\User;

class Livreur extends User
{

    public function __construct($nom, $prenom, $email, $role, $password)
    {
        parent::__construct($nom, $prenom, $email, $role::LIVREUR, $password);
    }
}
