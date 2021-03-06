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
        return $service->getOrder($d1, $d2);
    }

    function getPrice($oid)
    {
        $service = new orderDataService();
        return $service->getPrice($oid);
    }

    function getDate($oid)
    {
        $service = new orderDataService();
        return $service->getDate($oid);
    }

    function getOrderInfo($date1, $date2)
    {
        $service = new orderDataService();
        return $service->getOrderInfo($date1, $date2);
    }

    function getDiscount($code)
    {
        $service = new orderDataService();
        return $service->getDiscount($code);
    }
    
    //this is for getting the api information - Aiden
    function apiData($date1,$date2){
        $service = new orderDataService();
        return $service->getapi($date1,$date2);
    }
    
    //gets the total with both taxes and shipping
    function getTotal($userID){
        $service = new orderDataService();
        
        //rates for calculations
        $taxRate = .0625; //the average state sales tax is around 6.25%
        $shippingRate = 5.62; //5.62 dollars per 10 Kgs
           
        $shipping = 0;
        $tax = 0;
        $total = 0;
        $runningTotal = 0;
        $totalWeight = 0;
        
        //the array is: shipping, tax, total
        $output = array();
        $items = $service->getOrderTotal();
        
        //item array order is quantity, price, weightKg
        foreach($items as $item){
            $runningTotal += $item[0] * $item[1];
            $totalWeight += $item[0] * $item[2];
        }
        
        $tax = $taxRate * $runningTotal;
        $shipping = $totalWeight * ($shippingRate/10);
        //echo "Tax: \$$tax , shipping: \$$shipping";
        $total = $runningTotal + $tax + $shipping;
        
        //pushing values to the output array
        array_push($output,round($shipping, 2));
        array_push($output,round($tax , 2));
        array_push($output,round($total , 2));
        
        return $output;
    }
}
?>