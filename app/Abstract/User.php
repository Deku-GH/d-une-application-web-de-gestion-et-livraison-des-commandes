<?php
namespace App\Abstract;
use  App\ENTITY\Enum\Role;
abstract class User
{

    private string $nom;
    private string $prenom;
    private string $email;
    private int $telephone;
    private Role $role;
    private string $password;


    public function __construct($nom, $prenom, $email,$telephone, $role, $password)
    {

        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->telephone = $telephone;
        $this->role = $role;
        $this->password = $password;
    }

    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function gettelephone(){
        return $this->telephone ;
    }
    public function settelephone($telephone){
        $this->telephone=$telephone;
    }

    public function getRole()
    {
        return $this->role;
    }
    public function setRole($role)
    {
        $this->role = $role;
    }

    public function getPassword()
    {
        return $this->password;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }
}
