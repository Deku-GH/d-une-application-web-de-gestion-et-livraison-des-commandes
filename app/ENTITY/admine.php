<?php
require "../abstract/user.php";
class Admin extends User
{

    public function __construct($nom, $prenom, $role, $email, $password)
    {
        parent::__construct($nom, $prenom, $email, $role::ADMIN, $password);
    }
}
