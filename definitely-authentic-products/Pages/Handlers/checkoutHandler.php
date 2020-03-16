<?php

require_once("../../Classes/OrderBusinessService.php");

$OBS = new OrderBusinessService();
$oid = $OBS->getOrderID(1);
$a_ID = $_GET['add_ID'];

$OBS->addAddress($a_ID, $oid);
$OBS->checkout($oid);

//echo $_GET['add_ID'];

header("Location: ../../index.php");
?>