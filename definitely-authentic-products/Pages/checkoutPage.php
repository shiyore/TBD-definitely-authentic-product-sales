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
/*ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);*/
  //start sessions
  include("fragments/header.php");
  //including our navbar
  include("fragments/adminNavbar.php"); 
  //adding our search methods, in the future we hope to add these to a new class instead of the utility file
  require_once("../Scripts/utility.php");
  //includes for the table
  /*ini_set('display_errors', true);
  error_reporting(E_ALL);*/
  require ("fragments/_displayOrder.php");
  require_once ("../Classes/OrderBusinessService.php");

?>

<div class="container">
    <h3>Your order!</h3>
      <div class="container box_color">
      <div class="row">
      <?php
        $businessService = new orderBusinessService();
        $order = $businessService->getOrders(1);
        //$orderstr = $order[0][2];
        /*foreach($order as $o)
        {
          echo "<h1>Name: $o[0]</h1><br/>";
          echo "<h1>Name: $o[1]</h1><br/>";
          echo "<h1>Name: $o[2]</h1><br/>";
        }*/
        displayOrder($order);
      ?>
    </div>
    <div class="col-sm-6 box_color">
    <form action="Handlers/discountHandler.php?add_ID=<?php echo $_GET['add_ID'];?>" method="POST">
      <div class="form-group">
        <label for="dCode">Discount Code:</label>
        <input type="text" class="form-control" name="dCode" id="dCode">
      </div>
      <button name="submitButton" type="submit" class="btn btn-info" value="Submit">Apply</button>
    </form>
    </div>
    <div class="col-sm-6 box_color">
          <a href="Handlers/checkoutHandler.php?add_ID=<?php echo $_GET['add_ID'];?>" class="btn btn-warning" role="button" style="margin-top: 25px; margin-left: 30px;">Checkout</a>
    </div>
  </div>
</div>

</body>
</html>