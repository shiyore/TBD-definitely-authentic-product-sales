<html lang="en">
    <?php require_once "../Classes/Database.php";?>
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
    $product = $product_ID;
    $db = new Database();
    $conn = $db->getConnected();
    $sql = "SELECT * FROM products WHERE product_ID = $product";
    $data = $conn->query($sql);
    $info = ($row['name'], $row['price'], $row['description'], $row['desc_image']);
    ?>
    <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1><?php echo "$info[0]"?></h1>
                    <h2><?php echo "$info[2]"?></h2>
                </div>
                <div class="col-sm-6" style="border-style: solid; border-width: 1px;">
                    <img style = "-ms-interpolation-mode: bicubic;" src="<?php $info[3]?>">
                    <h2><?php echo "$info[1]"?></h2>
                </div>
                <div class="col-sm-2">
                    <img src="https://i.redd.it/7fneh737oox21.png" >
                </div>
            </div>
        </div>
    