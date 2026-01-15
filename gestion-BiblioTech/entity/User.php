<?php 

abstract class User{
    private string $nom ;
    private string $prenom;
    private string $role ;
    private string $email;
    private string $password;

    public function __construct($nom,$prenom,$role,$email,$password){
             $this->nom = $nom;
             $this->prenom = $prenom;
             $this->role = $role;
             $this->email = $email;
             $this->password =$password;
    }

    public function getNom()
    {
        return $this->nom;
    }

   
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    public function getPrenom(){
        return $this->prenom;
    }
    public function setPrenom($prenom){
        $this->prenom= $prenom;

    }
    public function getRole()
    {
           return $this->role;   
    }
    public function setRole($role)
    {
            $this->role = $role;   
    }
    public function getEmail()
    {
        return $this->email;
    }
     public function setEmail($email)
    {
            $this->email = $email;
    }
    public function getPassword(){
        return $this->password;
    }
    public function setPassword($password)
    {
         $this->password = $password; 
    }
}


?>