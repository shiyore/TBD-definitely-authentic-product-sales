<!--Written by Aiden Yoshioka
This handles all the code to add an item to the cart-->
<?php
require("../../Classes/OrderBusinessService.php");
$quantity = $_GET["quantity"];
$product_ID = $_GET["product_ID"];

$service = new orderBusinessService();
$service->addToKart($product_ID,$quantity);


header("Location: /definitely-authentic-products/Pages/prodPage.php?product_ID=$product_ID");
?>