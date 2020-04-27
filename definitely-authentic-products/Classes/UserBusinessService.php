<?php
//echo "BusinessService.php loaded <br>";
require "UserDataService.php";
?>
<?php
class userBusinessService{

    function __construct(){
        //echo "new business service<br>";
    }
    function addUser($e, $p, $r)
    {
        $service = new UserDataService();
        $service->addUser($e, $p, $r);
    }
    function updateUser($e, $p, $r)
    {
        $service = new UserDataService();
        $service->updateUser($e, $p, $r);
    }
    function checkForUser($e)
    {
        $service = new UserDataService();
        return $service->checkForUser($e);
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