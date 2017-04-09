<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
include("dbfunctions.php");

session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Display Restaurant Info</title>
  <meta charse="UTF-8"/>
</head>
<body>
<p>
  <a href="RestaurantInput">Add a new restaurant</a>   &nbsp;&nbsp; 
  <a href="RequestCustomerDetails.html">Search customer database</a> &nbsp;&nbsp;
  <a href="RestaurantInfo.html">Find order info about a restaurant</a> 
  </br>
</p>
<h1>Restaurant order info</h1>

<?php
$username = $_SESSION['username'];
$password = $_SESSION['password'];


//connect to database
dbConnect("$username", "$password") ;
dbSelect("$username");
$restID = $_POST['restaurantID'];

$queryAll = "SELECT * FROM Orders WHERE RestaurantName = '$restID'";
$resultAll = runQuery($queryAll);
$numOrders = mysql_num_rows($resultAll);

print "This restaurant has fulfilled a total of " . $numOrders . " orders.";
print "</br></br>";

$queryC = "SELECT CustomerID FROM Orders, OrderHistory WHERE RestaurantName = '$restID' AND OrderNumber = OrderID AND OrderType = 'C' GROUP BY CustomerID";
$resultC = runQuery($queryC);
$numRows = mysql_num_rows($resultC);

print "Customers who have placed collection orders at this restaurant:";
if($numRows > 0){
  displayTable($resultC);
}else{
  print " No orders have been placed.";
}
print "</br>";

$queryD = "SELECT CustomerID FROM Orders, OrderHistory WHERE RestaurantName = '$restID' AND OrderNumber = OrderID AND OrderType = 'D' GROUP BY CustomerID";
$resultD = runQuery($queryD);
$numRows = mysql_num_rows($resultD);
print "Customers who have placed delivery orders from at this restaurant:";
if($numRows > 0){
  displayTable($resultD);
}else{
  print " No orders have been placed.";
}


?>

</body>
</html>
