<?php
require "../abstract/user.php";

class Client extends User
{

    public function __construct($nom, $prenom, $email, $role, $password)
    {
        parent::__construct($nom, $prenom, $email, $role::CLIENT, $password);
    }
}
