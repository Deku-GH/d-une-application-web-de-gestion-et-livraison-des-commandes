<?php
class DATABASE
{

    protected PDO $conn ;
    private string $host = "localhost" ;
    private string $db_name = "d-une-application-web-de-gestion-et-livraison-des-commandes" ;
    private string $usename = "root" ;
    private string $password = "" ;

    public function __construct()
    {
        $db = $dsn = "mysql:host=$this->host;dbname=$this->db_name;charset=utf8";
        try {
            $this->conn = new PDO($dsn, $this->usename, $this->password);
         
        } catch (Exception $e) {

            echo $e->getMessage();

        }
    }

}
$conn = new DATABASE();


?>