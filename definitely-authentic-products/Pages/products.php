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
  //starting sessions
  include("fragments/header.php");
   include("fragments/header.php");
  //loading navbars
    if(isset($_SESSION["admin"]))
        include("fragments/adminNavbar.php");
    else
        include("fragments/navbar.php");
  //adding our search methods, in the future we hope to add these to a new class instead of the utility file
  require_once("../Scripts/utility.php");

?>

<div class="container">
    <h3>Here are the products! LOOK AT THEM!</h3>
      <div class="container box_color">
      <div class="row">
      <?php
      $category_ID = $_GET['category'];
      //echo $category;
      $products = getItems($category_ID);
      $id = 0;
      foreach ($products as $product)
      {
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
            <p>Amount you buy: <span id="productCount<?php echo $id; ?>"></span></p>
            <Script>
              var slider = document.getElementById("myRange<?php echo $id;?>");
              var output = document.getElementById("productCount<?php echo $id;?>");
              output.innerHTML = slider.value; // Display the default slider value
                
              // Update the current slider value (each time you drag the slider handle)
              slider.oninput = function() {
                  output.innerHTML = this.value;
              } 
            </Script>
            <div class="slidecontainer">
                  <input type="range" min="1" max="800" value="50" class="slider" id="myRange<?php echo $id;?>">
            </div>
            <div align="center" class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="defaultChecked2" checked>
              <label class="custom-control-label" for="defaultChecked2"></label>
            </div>
          </div>
        </div>
  
   <?php    
      $id++;
    }
  
    ?>
    </div>
  </div>
</div>

</body>
</html>