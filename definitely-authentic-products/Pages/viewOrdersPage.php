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
  echo "Hello!";
  require_once ("fragments/_displayOrder.php");
  echo "Goodbye";
  require_once ("../Classes/OrderBusinessService.php");

?>

<div class="container">
    <h3>KART!</h3>
      <div class="container box_color">
      <div class="row">
      <?php
        echo "<h1>Hello!</h1>";
        $date1 = $_GET['sqlDate'];
        $date2 = $_GET['cDate'];
        $businessService = new orderBusinessService();
        $orders = $businessService->getOrder($date1, $date2);
        //print_r($kart);
        displayOrder(orders)
      ?>
    </div>
    <div class="col-sm-4 box_color">
          <a href="Handlers/cancelAll.php" class="btn btn-success" role="button">Cancel Order</a>
    </div>
    <div class="col-sm-4 box_color">
    </div>
    <div class="col-sm-4 box_color">
          <a href="creditPage.php" class="btn btn-danger" role="button">Checkout</a>
    </div>
  </div>
</div>

</body>
</html>