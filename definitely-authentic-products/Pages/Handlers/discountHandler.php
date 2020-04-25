<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once("../../Classes/OrderBusinessService.php");

$service = new OrderBusinessService();
$code = $_POST['dCode'];
$discount = $service->getDiscount($code);
if ($code)
{
    header("Location: ../checkoutPage.php?add_ID=$_GET['add_ID']&disc=$discount");
}
else
{
    header("Location: ../discountFail.php?add_ID=$_GET['add_ID']");
}
?>