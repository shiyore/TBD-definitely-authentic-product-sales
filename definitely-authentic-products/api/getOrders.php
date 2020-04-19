<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//requires
require_once("../Classes/order.php");
require_once("../Classes/orderHistory.php");
require_once("../Classes/OrderBusinessService.php");


// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

//database connection
$bs = new orderBusinessService();


?>