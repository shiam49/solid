<?php

//namespace lib;

class DBMySQLi implements Database
{    
    // private static $_instance = false;
    private $host = HOST;
    private $database = DB;
    private $user = USER;
    private $password = PASSWORD;
    private $db; 
    
    
    public function __construct() 
    {        
        $this->connect();        
    }
    
    public function connect()
    {
        $this->bd = new mysqli($this->host, $this->user, $this->password, $this->database);
        
        
        if(mysqli_connect_error())
        {
            trigger_error("Failed to conencto to MySQL: " .mysqli_connect_error(), E_USER_ERROR);
        }
        
        echo 'connect';
    }
    
    public function query($sql)
    {
        /*$stmt =  $this->bd->prepare();
        $stmt->execute();
        $stmt->close();*/
    }        




    private function __clone()
    {
        throw new Exception('Not possible to clone');
    }
    
}
