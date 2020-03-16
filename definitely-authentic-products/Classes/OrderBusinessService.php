<?php
//echo "BusinessService.php loaded <br>";
require ("OrderDataService.php");
?>
<?php
class orderBusinessService{

    function __construct(){
        //echo "new business service<br>";
    }
    function getOrders($id){
        //echo "getting orders<br>";

        $service = new orderDataService();
        return $service->findCurrentOrder($id);
    }
    function deleteUser($id){
        $service = new UserDataService();
        return $service->removeUser($id);
    }
}
?>