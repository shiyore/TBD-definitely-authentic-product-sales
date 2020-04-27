<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once("../../Classes/UserBusinessService.php");

$email = $_POST['email'];
$password = $_POST['password'];
$service = new UserBusinessService();
$roles = 0;
if (isset($_POST['cust']))
{
    $roles += 1;
}
if (isset($_POST['adm']))
{
    $roles += 2;
}
if ($service->checkForUser($email))
{
    $service->updateUser($email, $password, $roles);
}
else
{
    $service->addUser($email, $password, 1);
}
header("Location: ../../index.php");
?>