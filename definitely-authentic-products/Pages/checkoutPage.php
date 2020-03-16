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
  require ("fragments/_displayOrder.php");
  require_once ("../Classes/OrderBusinessService.php");

?>

<div class="container">
    <h3>Your order!</h3>
      <div class="container box_color">
      <div class="row">
      <?php
      echo "php gayest";
        $businessService = new orderBusinessService();
        echo "php gayer";
        $order = $businessService->getOrderItems(1);
        //print_r($kart);
        displayOrder($order)
      ?>
    </div>
    <div class="col-sm-4 box_color">
          <a href="deleteOrder.php" class="btn btn-success" role="button">Cancel Order</a>
    </div>
    <div class="col-sm-4 box_color">
    </div>
    <div class="col-sm-4 box_color">
          <a href="checkoutHandler.php?add_ID=<?php echo $_GET['add_ID']?>" class="btn btn-danger" role="button">Checkout</a>
    </div>
  </div>
</div>

</body>
</html>