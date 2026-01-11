<?php
namespace App\ENTITY;
use app\Abstract\User;

class Livreur extends User
{

    public function __construct($nom, $prenom, $email,$telephone, $role, $password)
    {
        parent::__construct($nom, $prenom, $email, $telephone,$role::LIVREUR, $password);
    }
}
