<?php

require_once("../../Classes/OrderBusinessService.php");

$OBS = new OrderBusinessService();
$oid = $OBS->getOrderID(1);
$a_ID = $_GET['add_ID'];
$total = $_SESSION["total"];
unset($_SESSION["total"]);
$date = date("Y-m-d");

$OBS->addAddress($a_ID, $oid);
$OBS->commit(1,$oid, $a_ID, $date);
$OBS->checkout($oid);

$OBS->newOrder(1);

//echo $_GET['add_ID'];

header("Location: ../../index.php");
?>