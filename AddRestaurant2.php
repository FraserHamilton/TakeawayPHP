<?php
error_reporting(E_ALL); 
ini_set('display_errors', 1); 
session_start();
include ("dbfunctions.php");

$username = $_SESSION['username'];
$password = $_SESSION['password'];

dbConnect("$username", "$password") ;
dbSelect("$username");

$restID = $_POST["restaurantID"];
$lpDel = $_POST["lpDel"];
$lpCol = $_POST["lpCol"];
?>
<!DOCTYPE html>

<html>
<head>  
  <meta charset="UTF-8" />
  <title>Add a Restaurant</title> 
</head>
<body>
<h1>
  <?php
    if($restID == null){
      print "Restaurant was not added to database";
    }else{
      print "Restaurant was successfully added to database.";
    }
    print "</h1>";
  ?>
<p>
  <a href="RestaurantInput">Add a new restaurant</a>   &nbsp;&nbsp; 
  <a href="RequestCustomerDetails.html">Search customer database</a> &nbsp;&nbsp;
  <a href="RestaurantInfo.html">Find order info about a restaurant</a> 
  </br>
</p>
<br/>
<?php

if($restID == null){
  print "No restaurant name entered.";
  exit;
}

//////////////////////////////////////////////////////////////////////////////

//define and run a query (null bank account and 0 amount due)
$query = "INSERT INTO Restaurant VALUES ('$restID', '$lpDel', '$lpCol')";

//remove this line when query comes out looking ok


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

</p></body>
</html>
