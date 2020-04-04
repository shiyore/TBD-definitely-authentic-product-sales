<!--Written by Aiden Yoshioka
This handles all the code to add an item to the cart-->
<?php
ini_set('display_errors', true);
  error_reporting(E_ALL);
require("../../Classes/OrderBusinessService.php");

$quantity = $_GET["quantity"];
$product_ID = $_GET["product_ID"];

$service = new orderBusinessService();

//making a new order if there is none
$service->checkOrder(1);
$service->addToKart($product_ID,$quantity);


header("Location: /definitely-authentic-products/Pages/prodPage.php?product_ID=$product_ID");
?>