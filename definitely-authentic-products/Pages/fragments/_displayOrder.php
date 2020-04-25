<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once("../Classes/OrderBusinessService.php");
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
      ?>
            <tr>
            <th></th>
            <td></td>
            <td></td>
            <td><?php echo "$$total";?></td>
            </tr>
  </tbody>
</table>
<?php
}
?>