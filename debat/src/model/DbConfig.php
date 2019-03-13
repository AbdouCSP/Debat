<?php 

class DbConfig
{
    static function Connect(){
        $conn = new PDO("mysql:host=localhost;dbname=debat", "root", "root");        
        return $conn;
    }
}    
    
?>
