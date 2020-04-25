<html lang='eng'>
    <head>
        <title>Login</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../CSS/styles.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <style>
            img{
                width: 140px;
                height: 800px;
            }
            body{
                font-family: "Comic sans MS";
            }
        </style>
    </head>
    <body>
        <?php include("fragments/navbar.php");?>
        <div class="jumbotron text-center">
            <h1>Login</h1>
        </div>
        
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Discount code failed</h2>
                </div>
                <div class="col-sm-6" style="border-style: solid; border-width: 1px;">
                    <a href="checkoutPage.php?add_ID=<?echo $_GET['add_ID'];?>">Go back to cart</a>
                </div>
            </div>
        </div>

    </body>
</html>