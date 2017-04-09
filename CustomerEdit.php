<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

include("dbfunctions.php");
session_start();
?>

<!DOCTYPE Html>
<html>
<head>
  <meta charset="UTF-8"/>
  <title>Edit Customer Details</title>
</head>
<body>
<p>
  <a href="RestaurantInput">Add a new restaurant</a>   &nbsp;&nbsp; 
  <a href="RequestCustomerDetails.html">Search customer database</a> &nbsp;&nbsp;
  <a href="RestaurantInfo.html">Find order info about a restaurant</a> 
  </br>
</p>
<h1>The data has been successfully entered into our database.</h1>

<?php

$username = $_SESSION['username'];
$password = $_SESSION['password'];

dbConnect("$username", "$password");
dbSelect("$username");

$customerID = $_POST["customerID"];
$firstName = $_POST['FName'];
$lastName = $_POST["LName"];
$email = $_POST["Email"];
$address = $_POST["Address"];
$city = $_POST["City"];
$postcode = $_POST["Postcode"];
$totalPoints = $_POST["TotalPoints"];


$query = "UPDATE Customer SET FName = '$firstName', LName = '$lastName', Email = '$email', Address = '$address', City = '$city', Postcode = '$postcode', TotalPoints = '$totalPoints' WHERE Username = '$customerID'";


$insResult = mysql_query($query);
if($insResult){
  
  print("Customer details for " . $customerID . " have been updated</br>");
}
else{
	exit(mysql_error() . "</p></body></html>");
}
print "</p></body>";
print "</html>";
?>


