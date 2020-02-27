<?php
//echo "Database.php loaded<br>";
class Database{
    function getConnected(){
        //echo "Database->getconnected invoked";
        $tthis->dbhost = 'localhost';
        $this->dbuser = 'root';
        $this->dbpass = 'root';
        $this->dbname = 'NotAScam';
        $this->port = '';
        
        //connect to the db
        $this->dbconnect = new mysqli($this->dbhost , $this->dbuser , $this->dbpass,$this->dbname);
        if($this->dbconnect->connect_error){
            die('Failed to connect to MySQL: ' . $this->dbconnect->connect_error);
        }
        //return the connection
        return $this->dbconnect;
    }
    function disconnect($connect){
        $connect->close;
    }
}
?>