<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<?php
  //start sessions
  include("fragments/header.php");
  //including our navbar
  include("fragments/adminNavbar.php"); 
  //adding our search methods, in the future we hope to add these to a new class instead of the utility file
  require_once("../Scripts/utility.php");
  //includes for the table
  require ("fragments/_displayKart.php");
  require_once ("../Classes/OrderBusinessService.php");

?>

<div class="container">
    <h3>KART!</h3>
      <div class="container box_color">
      <div class="row">
      <?php
        $businessService = new orderBusinessService();
        $kart = $businessService->getOrders(1);
        //print_r($kart);
        displayKart($kart)
      ?>
    </div>
    <div class="col-sm-4 box_color">
          <button type="button" class="btn btn-success">Delete Kart</button>
    </div>
    <div class="col-sm-4 box_color">
    </div>
    <div class="col-sm-4 box_color">
          <button type="button" class="btn btn-danger">Checkout</button>
    </div>
  </div>
</div>

</body>
</html>