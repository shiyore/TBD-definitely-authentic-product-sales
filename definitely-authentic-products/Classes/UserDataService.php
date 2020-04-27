<?php
//echo "User Data Service loaded<br>";
require_once("Database.php");

class userDataService{
    function __construct(){
        //echo "new user DataService object<br>";
    }
    function addUser($e, $p, $r)
    {
        $database = new Database();
        $connection = $database->getConnected();
        $sql = "INSERT INTO users(email, password, roles) VALUES ('$e', '$p', $r)";
        $connection->query($sql);
    }
    function checkForUser($e)
    {
        $database = new Database();
        $connection = $database->getConnected();
        $sql = "SELECT * FROM users WHERE email = '$e'";
        $result = $connection->query($sql);
        $nbrRows = $result->num_rows;
        if ($nbrRows > 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    function updateUser($e, $p, $r)
    {
        $database = new Database();
        $connection = $database->getConnected();
        $sql = "SELECT * FROM users WHERE email = '$e'";
        $result = $connection->query($sql);
        $nbrRows = $result->num_rows;
        if ($nbrRows > 0)
        {
            $sql = "UPDATE users SET email = '$e', password = '$p', roles = $r WHERE email = '$e'";
            $connection->query($sql);
        }
        else
        {
            die("No existing user");
        }
    }
    function findAllUsers(){
        $database = new Database();
        $connection = $database->getConnected();
        $users = [];
        $sql = "SELECT * FROM users";
        if ($result = $connection->query($sql)) {
            $nbrRows = $result->num_rows;
            echo "<p style=\"color: #green;\"><h3>Users</h3></p>";
            if($result->num_rows === 0)
                return null;
            else{
                //echo "<p>" . $result->num_rows . " users are registered.</p>";
                while($row = $result->fetch_assoc()){
                    $users[$index] = array($row['user_ID'] , $row ['email'] , $row['username'] , $row['password']);
                    ++$index;
                }
                return $users;
            }
            
        } else {
            echo "<p style=\"color:red;\">ERROR: " . $DBConnect->error . "</p>";
            return null;
        }
        disconnect();
    }
    
    //passes in a user id
    function removeUser($id){
        $database = new Database();
        $connection = $database->getConnected();
        $users = [];
        $sql = "DELETE FROM `users` WHERE user_ID=" . $id;
        if ($result = $connection->query($sql)) {
            
        } else {
            echo "<p style=\"color:red;\">ERROR: " . $DBConnect->error . "</p>";
        }
    }
    
    //queries for whether the user has prime or not
    function getPrime($id){
        $database = new Database();
        $connection = $database->getConnected();
        $users = [];
        $sql = "SELECT users.prime FROM users WHERE user_ID = $id";
        if ($result = $connection->query($sql)) {
            $result = $result->fetch_assoc();
            return $result['prime'];
        } else {
            echo "<p style=\"color:red;\">ERROR: " . $DBConnect->error . "</p>";
        }
    }
}
?>