<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once("../../Classes/OrderBusinessService.php");

$service = new OrderBusinessService();
$code = $_POST['dCode'];
$discount = $service->getDiscount($code);
echo $discount;
$add = $_GET['add_ID'];
if ($discount > 0)
{
    header("Location: /definitely-authentic-products/Pages/checkoutPage.php?add_ID=$add&disc=$code");
}
else
{
    header("Location: /definitely-authentic-products/Pages/checkoutPage.php?add_ID=$add&disc=0");
}
?>