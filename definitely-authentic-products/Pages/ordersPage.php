<!DOCTYPE html>
<html>
<?php date_default_timezone_set("America/Phoenix");?>
<head>
<title>Bootstrap Example</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script>
    function generateMonth()
    {
        var x=document.getElementById("randomMonth");
        x.innerHTML=Math.floor((Math.random()*12)+1);
    }
</script>
<script>
    function generateDay()
    {
        var x=document.getElementById("randomDay");
        x.innerHTML=Math.floor((Math.random()*31)+1);
    }
</script>
<script>
    function generateYear()
    {
        var x=document.getElementById("randomYear");
        var y = Math.floor((Math.random()*20));
        if (y < 10) 
        x.innerHTML= "200" + y;
        else
        x.innerHTML= "20" + y;
    }
</script>
<style>
    .inline
    {
        float: left;
        display: inline;
        margin: 15px;
    }
    .next
    {
        float: left;
        display: inline;
        margin-left: 30px;
    }
</style>
<meta charset="ISO-8859-1">
<title>Orders!</title>
</head>
<body>
<?php 
   include "fragments/header.php";
    if(isset($_SESSION["admin"])){
        include("fragments/adminNavbar.php");
    }
    else{
        include("fragments/navbar.php");
    }
    if(isset($_SESSION["ID"]))
      echo "ID:" . $_SESSION["ID"];
?>
	<h1 style="color: #ee5500;">Please enter the date</h1><br>
    <div class="inline">
    <ul>
    <li class="inline">
        <h2>Month: </h2>
        <div id="randomMonth">1</div>
        <button onclick="generateMonth()">Randomize</button>
    </li>
    <li class="inline">
        <h2>Day: </h2>
        <div id="randomDay">1</div>
        <button onclick="generateDay()">Randomize</button>
    </li>
    <li class="inline">
        <h2>Year: </h2>
        <div id="randomYear">2000</div>
        <button onclick="generateYear()">Randomize</button>
    </li>
    <li class="next">
        <h2>Until</h2>
    </li>
    <li class="next">
        <h1><?php echo date("m/d/Y");?><h1>
    </li>
    </ul>
    </div>



</body>
</html>