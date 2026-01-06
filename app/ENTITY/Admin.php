<?php
namespace App\ENTITY;
use app\ENTITY\Abstract\User;

class Admin extends User
{

    public function __construct($nom, $prenom, $role, $email, $password)
    {
        parent::__construct($nom, $prenom, $email, $role::ADMIN, $password);
    }
}
