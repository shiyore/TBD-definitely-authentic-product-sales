<?php
require_once("../Classes/product.php");
function getProducts($products){
 // print_r($products);
    $product_array = array();
    $id = 0;
      foreach ($products as $product)
      {
        //this is the order of the items in the products array
        //array($row['product_ID'] , $row ['name'] , $row['price'] , $row['short_desc'] , $row['image'] , $row['category_ID'] , $row['description'] , $row['desc_image']);
          array_push($product_array, new product($product[0],$product[1],$product[2],$product[3],$product[4],$product[5],$product[6],$product[7]));
      ?>
        <!-- This is where we put in the html code to show the products -->
        <div class="col-sm-3 box_color">
          
          <div Style="height: 450px;" class="thumbnail">
            <h3><?php echo $product[1]; ?></h3>
            <p><?php echo "$" . $product[2]; ?></p>
            <p>
            <a href="prodPage.php?product_ID=<?php echo $product[0]; ?>">
            <img Style= "height: 200px; width: 200px;" alt="" src="<?php echo $product[4]; ?>" width='350px' height='215px'>
            </a>
            </p>
            <p><?php echo $product[3]; ?></p>
          </div>
        </div>
  
   <?php    
      $id++;
        
    }
  //print_r($product_array);
  return $product_array;
}
?>