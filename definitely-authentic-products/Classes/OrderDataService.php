<?php
//echo "User Data Service loaded<br>";
require_once("Database.php");

class orderDataService{
    function __construct(){
        //echo "new user DataService object<br>";
    }
    function findCurrentOrder($id){
        $database = new Database();
        $connection = $database->getConnected();
        $orderItems = [];
        $order_id = 0;
        
        //getting the order id
        $sql = "SELECT * FROM orders WHERE active = true AND user_ID = $id";
        if ($result = $connection->query($sql)) {
            $nbrRows = $result->num_rows;
            //echo "<p style=\"color: #green;\"><h3>Users</h3></p>";
            if($result->num_rows === 0){
                //echo "empty";
                return null;
            }
            else{
                //echo "<p>" . $result->num_rows . " users are registered.</p>";
                $order_id = $result->fetch_assoc();
                $order_id = $order_id['order_ID'];
            }
            
        } else {
            echo "<p style=\"color:red;\">ERROR: " . $DBConnect->error . "</p>";
            return null;
        }
        
        //getting all order items
        $sql = "SELECT products.name, order_info.quantity,products.price FROM order_info INNER JOIN products ON order_info.product_ID=products.product_ID WHERE order_info.order_ID = $order_id";
        if ($result = $connection->query($sql)) {
            $nbrRows = $result->num_rows;
            //echo "<p style=\"color: #green;\"><h3>Users</h3></p>";
            if($result->num_rows === 0)
                return null;
            else{
                //echo "<p>" . $result->num_rows . " users are registered.</p>";
                while($row = $result->fetch_assoc()){
                    $orderItems[$index] = array($row['name'] , $row ['quantity'] , $row['price']);
                    ++$index;
                }
                return $orderItems;
            }
            
        } else {
            echo "<p style=\"color:red;\">ERROR: " . $DBConnect->error . "</p>";
            return null;
        }
        disconnect();
    }
    
    
    //passes in a user id
    function removeOrder($id){
        $database = new Database();
        $connection = $database->getConnected();
        $users = [];
        $sql = "DELETE FROM `users` WHERE user_ID=" . $id;
        if ($result = $connection->query($sql)) {
            
        } else {
            echo "<p style=\"color:red;\">ERROR: " . $DBConnect->error . "</p>";
        }
    }
    
    function getOrderID($id){
        $database = new Database();
        $connection = $database->getConnected();
        $order_id = 0;
        
        //getting the order id
        $sql = "SELECT * FROM orders WHERE active = true AND user_ID = $id";
        if ($result = $connection->query($sql)) {
            $nbrRows = $result->num_rows;
            //echo "<p style=\"color: #green;\"><h3>Users</h3></p>";
            if($result->num_rows === 0){
                //echo "empty";
                return null;
            }
            else{
                //echo "<p>" . $result->num_rows . " users are registered.</p>";
                $order_id = $result->fetch_assoc();
                $order_id = $order_id['order_ID'];
                return $order_id;
            }
            
        } else {
            echo "<p style=\"color:red;\">ERROR: " . $DBConnect->error . "</p>";
            return null;
        }
    }
      function addItem($user_id,$id,$num){
        $database = new Database();
        $connection = $database->getConnected();
        $order_id = 0;
        
        //getting the order id
        $sql = "SELECT * FROM orders WHERE active = true AND user_ID = $user_id";
        if ($result = $connection->query($sql)) {
            $nbrRows = $result->num_rows;
            //echo "<p style=\"color: #green;\"><h3>Users</h3></p>";
            if($result->num_rows === 0){
                //echo "empty";
                return null;
            }
            else{
                //echo "<p>" . $result->num_rows . " users are registered.</p>";
                $order_id = $result->fetch_assoc();
                $order_id = $order_id['order_ID'];
                //echo $order_id;
            }
            
        } else {
            echo "<p style=\"color:red;\">ERROR: " . $DBConnect->error . "</p>";
            return null;
        }
        //echo $order_id;
        
        $sql = "INSERT INTO order_info(`order_ID`,`product_ID`, `quantity`) VALUES ($order_id,$id,$num)";
        if ($result = $connection->query($sql)) {
            
        } else {
            echo "<p style=\"color:red;\">ERROR: " . $DBConnect->error . "</p>";
        }
    }
    
    function removeItems($user_id){
        $user_id = 1;
        $database = new Database();
        $connection = $database->getConnected();
        $order_id = 0;
        
        //getting the order id
        $sql = "SELECT * FROM orders WHERE active = true AND user_ID = $user_id";
        if ($result = $connection->query($sql)) {
            $nbrRows = $result->num_rows;
            //echo "<p style=\"color: #green;\"><h3>Users</h3></p>";
            if($result->num_rows === 0){
                //echo "empty";
                return null;
            }
            else{
                //echo "<p>" . $result->num_rows . " users are registered.</p>";
                $order_id = $result->fetch_assoc();
                $order_id = $order_id['order_ID'];
                //echo $order_id;
            }
            
        } else {
            echo "<p style=\"color:red;\">ERROR: " . $DBConnect->error . "</p>";
            return null;
        }
        
        //deleting all items from the cart
         $sql = "DELETE FROM `order_info` WHERE order_ID = $order_id";
        if ($result = $connection->query($sql)) {
            
        } else {
            echo "<p style=\"color:red;\">ERROR: " . $DBConnect->error . "</p>";
        }
        
    }
}
?>