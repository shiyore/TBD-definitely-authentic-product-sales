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
  include("fragments/navbar.php"); 
  include("../Scripts/utility.php");
?>

<div class="container">
    <h3>Here are the damned products! LOOK AT THEM!</h3>
    <div class="container box_color">
    <div class="row">
    <?php 
    $category = $_GET['category'];
      //echo $category;
    $products = getItems($category); 
    foreach ($products as $product)
    {
    ?>
      
      <!-- This is where we put in the html code to show the products -->
      <div class="col-sm-3 box_color">
        <h3><?php echo $product[1]; ?></h3>
        <p><?php echo "$" . $product[2]; ?></p>
        <div class="thumbnail">
          <p>
          <a href="prodPage.php?product_ID=<?php echo $product[0]; ?>">
          <img alt="" src="<?php echo $product[4]; ?>" width='350px' height='215px'>
          </a>
          </p>
        </div>
        <p><?php echo $product[3]; ?></p>
      </div>
  
   <?php    
      
    }
  
    ?>
      </div>
  </div>
</div>

</body>
</html>