<?php
// requires & includes
require_once ('myFuncs.php');

// global login variables for mysql
define('EMPTY_STRING', "");
$DBName = "milestone1";
$tableName = "users";
$message = "";

/**$testArray = getAllUsers($DBName, $tableName);
echo "<div style = 'border: 3px solid #555555;width: 1380px;margin: 13px;padding: 5px;height:640px;'>";
foreach($testArray as $arr){
    foreach($arr as $value){
        echo $value . " ";
    }
    echo "<br>";
}
echo "</div>";**/
/**
 *
 * @param
 *            DBName
 * @param
 *            tableName
 */
//getAllBlogs("activity1" , "posts");
function getAllUsers($DBName, $tableName)
{
    $users = array();
    $index = 0;
    $DBConnect = connect($DBName);
    if ($DBConnect->connect_error) {
        echo "<Connection error: " . $DBConnect->connect_error;
    } else {
        $sql = "SELECT user_ID, email , username FROM $tableName";
        if ($result = $DBConnect->query($sql)) {
            $nbrRows = $result->num_rows;
            echo "<p style=\"color: #green;\"><h3>Users</h3></p>";
            if($result->num_rows === 0)
                echo"<p>No Users are registered</p>";
            else{
                //echo "<p>" . $result->num_rows . " users are registered.</p>";
                while($row = $result->fetch_assoc()){
                    $users[$index] = array($row['user_ID'] , $row ['email'] , $row['username']);
                    ++$index;
                }
                //print_r($users);
            }
            
        } else {
            echo "<p style=\"color:red;\">ERROR: " . $DBConnect->error . "</p>";
        }
    }
    


    $DBConnect->close;
    return $users;
}

function getAllBlogs($DBName, $tableName)
{
    $blogs = array();
    $index = 0;
    $DBConnect = connect($DBName);
    if ($DBConnect->connect_error) {
        echo "<Connection error: " . $DBConnect->connect_error;
    } else {
        $sql = "SELECT * FROM $tableName";
        if ($result = $DBConnect->query($sql)) {
            $nbrRows = $result->num_rows;
            echo "<p style=\"color: #green;\"><h3>Blogs</h3></p>";
            if($result->num_rows === 0)
                echo"<p>No blogs are filed</p>";
            else{
                //echo "<p>" . $result->num_rows . " users are registered.</p>";
                while($row = $result->fetch_assoc()){
                    $blogs[$index] = array($row['post_ID'],$row['users_IDPostBy'] , $row ['Title'] , $row['Content']);
                    ++$index;
                }
                //print_r($blogs);
            }
            
        } else {
            echo "<p style=\"color:red;\">ERROR: " . $DBConnect->error . "</p>";
        }
    }
    


    $DBConnect->close;
    return $blogs;
}
function getPost($DBName, $tableName , $post_ID)
{
    $post = array();
    $index = 0;
    $DBConnect = connect($DBName);
    if ($DBConnect->connect_error) {
        echo "<Connection error: " . $DBConnect->connect_error;
    } else {
        $sql = "SELECT * FROM $tableName WHERE post_ID=$post_ID";
        if ($result = $DBConnect->query($sql)) {
            $nbrRows = $result->num_rows;
            //echo "<p style=\"color: #green;\"><h3>Blogs</h3></p>";
            if($result->num_rows === 0)
                echo"<p>No blogs are filed</p>";
            else{
                //echo "<p>" . $result->num_rows . " users are registered.</p>";
                while($row = $result->fetch_assoc()){
                    $post[$index] = array($row['post_ID'],$row['users_IDPostBy'] , $row ['Title'] , $row['Content']);
                    ++$index;
                }
                //print_r($blogs);
            }
            
        } else {
            echo "<p style=\"color:red;\">ERROR: " . $DBConnect->error . "</p>";
        }
    }
    


    $DBConnect->close;
    return $post;
}

function getUser($DBName , $tableName , $ID){
    $user = "";
    $DBConnect = connect($DBName);
    $sql = "SELECT *FROM $tableName WHERE ID=$ID";
    if($result = $DBConnect->query($sql)){
        if($result->num_rows != 0){
            $row = $result->fetch_assoc();
            $user = $row['USERNAME'];
        }
    }else{
        echo "error fetching user";
    }
    $DBConnect->close;
    return $user;
    
}

function updatePost($DBName , $tableName , $postID , $title , $content){
    $DBConnect = connect($DBName);
    $sql = "UPDATE $tableName SET Title='$title', Content='$content' WHERE post_ID='$postID'";
    if($result = $DBConnect->query($sql)){
        echo "Your post has been successfully uploaded";
    }else{
        
        echo "Error with editing post " . $DBConnect->error ;
    }
    $DBConnect->close;
    return $post;
}


function searchPost($DBName , $tableName , $title , $content){
    $searchResults = array();
    $DBConnect = connect($DBName);
    if($title === null || $title === EMPTY_STRING){
    //if($firstName === NULL || $firstName == str_replace(" ", "" , $firstName)){
        if($content != null && $content != EMPTY_STRING)
            $sql = "SELECT * FROM $tableName WHERE Content LIKE '%$content%'";
        else
            echo "There was nothing entered";
    }
    else if($content == null || $content == EMPTY_STRING){
        if($title != null && $title != EMPTY_STRING)
            $sql = "SELECT * FROM $tableName WHERE Title LIKE '%$title%'";
        else
            echo "There was nothing entered";
    }
    else{
        $sql = "SELECT * FROM $tableName WHERE Title LIKE '%$title%' AND Content LIKE '%$content%'";
    }
    
    if($result = $DBConnect->query($sql)){
        $nbrRows = $result->num_rows;
            echo "<p style=\"color: #green;\"><h3>Blogs</h3></p>";
            if($result->num_rows === 0)
                echo"<p>Could not find any posts with the given parameters</p>";
            else{
                while($row = $result->fetch_assoc()){
                    $searchResults[$index] = array($row['post_ID'],$row['users_IDPostBy'] , $row ['Title'] , $row['Content']);
                    ++$index;
                }
            }
    }else{
        
        echo "Error with editing post " . $DBConnect->error ;
    }
    $DBConnect->close;
    return $searchResults;
}

?>
