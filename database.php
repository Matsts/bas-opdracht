<?php

class Database {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "bas";
    private $conn;

    public function __construct() {
        $dsn = "mysql:host={$this->host};dbname={$this->dbname}";
        $options = array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        );
        $this->conn = new PDO($dsn, $this->username, $this->password, $options);
    }

    public function executeQuery($query) {
        return $this->conn->query($query);
    }

    public function fetchAll($result) {
        return $result->fetchAll();
    }
    function dbConnect(){
        $servername = "localhost" ;
        $dbname = "bas" ;
        $username = "root" ;
        $password = "" ;
      
    
    
    
    
        if(isset($conn)){
            return $conn;
    
    
    
    
        }else{
            try{
                 $conn = new PDO ("mysql:host=$servername;dbname=$dbname",
                                        $username, $password) ;
    
    
                 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION) ;
                 echo "Connectie gelukt <br />" ;
            }
    
    
            catch(PDOException $e){
                 echo "helaas: " . $e->getMessage() ;
            }
            return $conn;
        }
        
    }
}