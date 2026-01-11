<?php
namespace App\Database;
use PDO;
use PDOException;
class Database
{

    protected PDO $conn ;
    protected string $host = "localhost" ;
    protected string $db_name = "d-une-application-web-de-gestion-et-livraison-des-commandes" ;
    protected string $usename = "root" ;
    protected string $password = "" ;

    public function connect()
    {
 
        $dsn = "mysql:host=$this->host;dbname=$this->db_name;charset=utf8";
        try {
            $this->conn = new PDO($dsn, $this->usename, $this->password);
            
             return $this->conn;
             
        } catch (PDOException $e) {

            return $e->getMessage();

        }
    }

}

?>