<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
include("dbfunctions.php");

session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/>
  <title>Show Total Orders</title>
</head>
<body>
  <p>
    <a href="RestaurantInput.php">Add a new restaurant</a>
    <a href="RequestCustomerDetails.html">Find a customer's info</a>
  </p>


<?php
$username = $_SESSION['username'];
$password = $_SESSION['password'];

dbConnect("$username", "$password");
dbSelect("$username");

$customerID = $_POST['customerID'];
$restaurant = $_POST['restaurantName'];

$queryCollect = "SELECT * FROM Orders, OrderHistory WHERE CustomerID = '$customerID' AND OrderID = OrderNumber AND OrderType = 'C' AND RestaurantName = '$restaurant'";

$queryDeliver = "SELECT * FROM Orders, OrderHistory WHERE CustomerID = '$customerID' AND OrderID = OrderNumber AND OrderType = 'D' AND RestaurantName = '$restaurant'";

$resultCol = runQuery($queryCollect);
$resultDel = runQuery($queryDeliver);

$numRowsCol = mysql_num_rows($resultCol);
$numRowsDel = mysql_num_rows($resultDel);

print "This customer has made a total of " . ($numRowsCol+$numRowsDel) . " order(s) from " . $restaurant . ".";

print "</br></br>";
print $numRowsCol . " collection order(s).";
print "</br>";
print $numRowsDel . " delivery order(s).";


?>

</body>
</html>

