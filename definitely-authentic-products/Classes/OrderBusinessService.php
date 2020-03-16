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
    function getOrderID($id)
    {
        $service = new orderDataService();
        return $service->getOrderID($id);
    }
    function deleteUser($id){
        $service = new UserDataService();
        return $service->removeUser($id);
    }
    function checkout($id)
    {
        $service = new orderDataService();
        return $service->checkout($id);
    }
    function addAddress($id, $oid)
    {
        $service = new orderDataService();
        return $service->addAddress($id, $oid);
    }
    function newOrder($id)
    {
        $service = new orderDataService();
        return $service->newOrder($id);
    }
}
?>