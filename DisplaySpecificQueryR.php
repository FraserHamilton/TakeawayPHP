<?php
error_reporting(E_ALL); 
ini_set('display_errors', 1); 
include ("dbfunctions.php");

//start session 
session_start();

//print first part of html
?>
<!DOCTYPE html>

<html>
<head>  
  <meta charset="UTF-8" /> 
  <title>View A Specific Query: Customer</title>  
</head>
<body>
<h1>Query Info</h1>
<p>
  <a href="RestaurantInput">Add a new restaurant</a>   &nbsp;&nbsp; 
  <a href="RequestCustomerDetails.html">Search customer database</a> &nbsp;&nbsp;
  <a href="RestaurantInfo.html">Find order info about a restaurant</a> 
  </br>
</p>
<h2>View a Customer Query</h2>

<?php
//retrieve username and password
$username = $_SESSION['username'];
$password = $_SESSION['password'];


//connect to database
dbConnect("$username", "$password") ;
dbSelect("$username");
$selection1 = $_POST['for'];
$selection2 = $_POST['by'];
$searchterm = $_POST['term1'];

//display query details
$query = "SELECT $selection1 FROM Restaurant WHERE $selection2 = '$searchterm'";
$result = runQuery($query);
$numrows = mysql_num_rows($result);
if ($numrows == 0) 
{
	print "No Restaurant with the $selection2 $searchterm found";
	print "</body></html>";
	exit();
}
print "<h3>Restaurant which has $selection2 $searchterm</h3>";
displayTable($result);
