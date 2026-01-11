<?php
namespace App\ENTITY;
use app\Abstract\User;

class Admin extends User
{

    public function __construct($nom, $prenom, $role, $email,$telephone, $password)
    {
        parent::__construct($nom, $prenom, $email, $telephone,$role::ADMIN, $password);
    }
}
