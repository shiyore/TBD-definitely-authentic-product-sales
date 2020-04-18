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
    function addToKart($id,$quantity){
        $service = new orderDataService();
        $service->addItem(1,$id,$quantity);
    }
    
    //this deletes all the current items in the cart
    function endItAll($user_id){
        $service = new orderDataService();
        $service->removeItems($user_id);
    }

    function commit($user_ID , $order_ID , $address_ID , $date)
    {
        $service = new orderDataService();
        $service->commit($user_ID , $order_ID , $address_ID , $date);
    }

    function checkOrder($uid)
    {
        $service = new orderDataService();
        $service->checkOrder($uid);
    }

    function getOrder($d1, $d2)
    {
        $service = new orderDataService();
        $service->getOrder($d1, $d2);
    }

    function getPrice($oid)
    {
        $service = new orderDataService();
        $service->getPrice($oid);
    }

    function getDate($oid)
    {
        $service = new orderDataService();
        $service->getDate($oid);
    }
}
?>