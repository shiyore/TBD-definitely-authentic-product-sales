<!DOCTYPE html>
<html>
<head>
	<style>
		img{
			width: 900px;
			height:900px;
		}
	</style>
<title>Bootstrap Example</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../CSS/styles.css">
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<?php include("fragments/navbar.php"); ?>
	<div class="jumbotron text-center">
		<h1>Register Now!!</h1>
		<p>Register for great prices on completely real and "authentic"
			products!</p>
	</div>

	<div class="container">
		<div class="row">
			<form action="registerhandler.php" method="POST">
				<div class="col-sm-6">
					<div class="form-group">
						<label for="email">Email address:</label> <input type="text"
							class="form-control" id="email" name="email">
					</div>
					<div class="form-group">
						<label for="pwd">Password:</label> <input type="password"
							class="form-control" id="password" name="password">
					</div>
					<div class="checkbox">
						<label><input type="checkbox"> I have read the <a
							href="ToS.html">Terms of Service</a> and the <a
							href="PriPol.html">Privacy Policy</a></label>
					</div>
					<input name = "submitButton" type="submit" value="Submit">
				</div>
			</form>
			<div class="col-sm-4">
				<img src="../images/warehouse.jpg">
			</div>
		</div>
	</div>
</body>
</html>