<html lang="en">
    <?php require_once "../Classes/Database.php";
    require_once "../Scripts/utility.php";?>
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
    include("fragments/header.php");
    if(isset($_SESSION["admin"]))
        include("fragments/adminNavbar.php");
    else
        include("fragments/navbar.php");
    $product = $_GET['product_ID'];
    $db = new Database();
    $conn = $db->getConnected();
    $sql = "SELECT * FROM products WHERE product_ID = $product";
    $data = $conn->query($sql);
    $row = $data->fetch_assoc();
    $info = array($row['name'], $row['price'], $row['description'], $row['desc_image']);
    ?>
    <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1><?php echo "$info[0]"?></h1>
                    <hr>
                    <h2><?php echo "$info[2]"?></h2>
                </div>
                <div class="col-sm-6" style="border-style: solid; border-width: 1px;">
                    <?//php echo $info[3];?>
                    <h2><?php echo "$".$info[1];?></h2>
                    <hr>
                    <img style = "-ms-interpolation-mode: bicubic; width: 500px; height: 500px;" src="<?php echo $info[3];?>">
                    
                </div>
            </div>
        </div>
    </body>
</html>
    