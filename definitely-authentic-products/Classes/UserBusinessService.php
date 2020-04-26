<?php
//echo "BusinessService.php loaded <br>";
require "UserDataService.php";
?>
<?php
class userBusinessService{

    function __construct(){
        //echo "new business service<br>";
    }
    function fetchUsers(){
        //echo "searchByFirstName<br>";

        $service = new UserDataService();
        return $service->findAllUsers();
    }
    function deleteUser($id){
        $service = new UserDataService();
        return $service->removeUser($id);
    }
    
    //this is for telling if the user has prime
    function getPrime($id){
        $service = new UserDataService();
        return $service->getPrime($id);
    }
}
?>