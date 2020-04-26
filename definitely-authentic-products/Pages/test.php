<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once("../Classes/OrderBusinessService.php");


$service = new orderBusinessService();
$orderPayments = $service->getTotal(1);
print_r($orderPayments);
?>