<?php

function displayOrder($order)
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
 
        foreach($order as $column){
            $tempTotal = $column[1] * $column[2];
            $total += $tempTotal;
            
      ?>
          <tr>
            <th scope="row"><?php echo $column[0]; ?></th>
            <td><?php echo $column[1];?></td>
            <td><?php echo $column[2];?></td>
            <td>$<?php echo $tempTotal;?></td>
          </tr>
      <?php    
        //$total = $temptotal + $total;

        }
      ?>
            <tr>
            <th></th>
            <td></td>
            <td><?php echo $total;?></td>
            </tr>
  </tbody>
</table>
<?php
}
?>