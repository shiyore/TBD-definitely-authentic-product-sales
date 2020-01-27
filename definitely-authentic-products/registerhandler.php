<!--
     Author: Aiden Yoshioka 
     Date: 09-08-2019
     pagehandler.php 
          
     This is the php code to handle the data from the html registration page.
     The code takes that data and sends it to the correct database and table (milestone1 , users)
     I wanted to make the framework for creating a functional account in the near future.
-->


<html>
<head>
    <link rel="stylesheet" href="homepage.css">
</head>
<body>
    <ul>
        <li style="display: inline;">
            <a href="index.html">Home</a>
        </li>
        <li style="display: inline;">
            <a href="blogpost.html">Create a post</a>
        </li>
        <li style="display: inline;">
            <a href="makeBlogRequest.php">List Blogs</a>
        </li>
        <li style="display: inline;">
            <a href="searchpage.php">Search Posts</a>
        </li>
        <li style="display: inline;">
            <a href="index.html">Log off</a>
        </li>
    </ul>
    <div class = "background">
<?php
//requires and includes
require_once('myFuncs.php');

#global login variables for mysql
define('EMPTY_STRING' , "");
$DBName = "milestone1";
$tableName = "users";

//traps if there is no data
#failure no data
if(!isset($_POST["submitButton"])){
    die("<p style='color: red;'>Submission Failed, no data</p>");
}
#success
else{
    #global variables holding the registration data from the registration page
    $email = $_POST['email'];
    $userName = $_POST['userName'];
    $Password = $_POST['password'];
}

#stores the resource 
$DBConnect = connect($DBName);
if($DBConnect){
    #Testing for valid data
    include('utility.php');
    $usernames = "SELECT Username FROM $tableName WHERE Username ='$userName'";
    $usernameCheck = $DBConnect->query($usernames);
    $userRows = $usernameCheck->num_rows;
    $emails = "SELECT Email FROM $tableName WHERE Email='$email'";
    $emailCheck = $DBConnect->query($emails);
    $emailRows = $emailCheck->num_rows;
    
    //echo $userRows;
    if($userName === null || $userName === EMPTY_STRING){
    //if($firstName === NULL || $firstName == str_replace(" ", "" , $firstName)){
        echo "<p style = 'color: red;'>The <strong>Username</strong> is a required field
            and cannot be blank.</p>";
    }
    else if($Password == null || $Password == EMPTY_STRING){
        echo "<p style = 'color: red;'>The <strong>Password</strong> is a required field
            and cannot be blank.</p>";
    }
    else if($userRows > 0){
        echo "A user has already registered with this username";
    }
    else if($emailRows > 0){
        echo "A user has already been registered with this email.";
    }
    else{
        echo "<p><h2>Thank you for registering as:</h2></p>";
        echo "<p>" . $userName ." </p>";

        $sql = "INSERT INTO $tableName (Email , Username , Password) VALUES ('$email' , '$userName' , '$Password')";
        $DBConnect->query($sql);  

    }
        
    echo "<h2><p>Database Closing</p></h2>";
    $DBConnect->close();
}
?>
        <ul>
            <li><a href=index.html>Main Menu</a></li>
        </ul>
<hr>
</div>
</body>
</html>
