<?php
/*
    Author: Carson Perry
    Date: 2/29/20
    addhandler.php

    This is supposed to let an admin add a new user to the site without going through the register page
*/
?>
<html>
<head>

    <title>Add Handler</title>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styles.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>

<?php

require_once "../../Classes/User.php";

$card = $_POST['credit'];
$email = $_POST['email'];
$pass = $_POST['password'];
if ($_POST['customer'] == "cust")
{
    if($_POST ['admin'] == "adm")
    {
        $rights[] = {true, true};
    }
    else
    {
        $rights[] = {true, false};
    }
}
elseif ($_POST['admin'] == "adm")
{
    $rights[] = {false, true};
}
else
{
    $rights[] = {false, false};
}

echo "<p>$card</p>";

$user = new User($card, $email, $pass, $rights)
$user->addToTable();

echo "<h3>New user created succesfully</h3>";
?>
</body>
</html>