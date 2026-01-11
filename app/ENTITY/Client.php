<?php
namespace App\ENTITY;

use app\Abstract\User;


class Client extends User
{

    public function __construct($nom, $prenom, $email, $role, $password)
    {
        parent::__construct($nom, $prenom, $email, $role::CLIENT, $password);
    }
}
