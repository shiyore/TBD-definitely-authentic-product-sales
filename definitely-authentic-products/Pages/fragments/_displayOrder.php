<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once("../Classes/OrderBusinessService.php");
require_once("../Classes/UserBusinessService.php");
function displayOrder($orders)
{
?>
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">Product</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price of Product</th>
      <th scope="col">Total</th>
  
    </tr>
  </thead>
  <tbody>
      <?php
        $service = new orderBusinessService();
        $index = 0;
        $total = 0;
        $temptotal = 0;
        foreach($orders as $o)
        {
          $temptotal = $o[1] * $o[2];
          $order[$index] = array($o[0], $o[1], $o[2], $temptotal);
          $total += $temptotal;
          $index++;
        }
 
        foreach($order as $column)
        {
            
      ?>
          <tr>
            <th scope="row"><?php echo $column[0]; ?></th>
            <td><?php echo $column[1];?></td>
            <td><?php echo $column[2];?></td>
            <td>$<?php echo $column[3];?></td>
          </tr>
      <?php
        }
          //Aiden's checkout info shipping, tax, total;
          $checkoutInfo = $service->getTotal(1);
          $userService = new userBusinessService();
          $isPrime = $userService->getPrime(1);
          if($isPrime){
            $checkoutInfo[2] -= $checkoutInfo[0];
            $checkoutInfo[0] = 0;
          }
          $total = $checkoutInfo[2];
          
  
        if (isset($_GET['disc']))
        {
          $dCode = $_GET['disc'];
          $discount = $service->getDiscount($dCode);
          

          if ($total > $discount)
          {
            $total -= $discount;
          }
          else
          {
            $total = 0;
          }
        }
      ?>
            <tr>
            <th></th>
            <td></td>
            <td></td>
            <td><?php 
                  if($isPrime)
                    echo "Prime ";
                  echo "Shipping: \$$checkoutInfo[0] <br/>Tax: $$checkoutInfo[1] <br/>Total: $$checkoutInfo[2]";
              
              ?></td>
            </tr>
  </tbody>
</table>
<?php
$_SESSION["total"] = $total;
}
?>