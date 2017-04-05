<?php
error_reporting(E_ALL); 
ini_set('display_errors', 1); 
session_start();
include ("dbfunctions.php");
//print first part of html
?>
<!DOCTYPE html>

<html>
<head>  
  <meta charset="UTF-8" />
  <title>Add a Spy</title> 
</head>
<body>
<h1>The data has been successfully entered into our database.</h1>
<p>

<a href = "CustomerEdit.php" >Edit a customer's info</a>   &nbsp;&nbsp; 
<a href = "RequestCustomerDetails.html">Search customer database</a> <br/>
<br/>
<?php

//////////////////////////////////////////////////////////////////////////////
//retrieve username and password
$username = $_SESSION['username'];
$password = $_SESSION['password'];

//connect to database
dbConnect("$username", "$password") ;
dbSelect("$username");


//////////////////////////////////////////////////////////////////////////////
//First pick up the parameters from the form 

$restID = $_POST["restaurantID"];
$lpDel = $_POST["lpDel"];
$lpCol = $_POST["lpCol"];

//////////////////////////////////////////////////////////////////////////////

//define and run a query (null bank account and 0 amount due)
$query = "INSERT INTO Restaurant VALUES ('$restID', '$lpDel', '$lpCol')";

//remove this line when query comes out looking ok
print $query . '<br/>';

$insResult = mysql_query($query);
if ($insResult)
{
   print("Restaurant details for " . $restID . " been inserted<br/>");
}
else
//don't expect to come here unless program logic error
//or some other problem with the database
  	  exit ( mysql_error(). "</p></body></html>" );   //vital to know 
print "</p></body>";
print "</html>";

?>
