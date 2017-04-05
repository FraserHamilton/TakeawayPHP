<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("dbfunctions.php");

session_start();
?>

<!DOCTYPE html>

<html>
<head>
	<meta charset="UTF-8"/>
	<title>Add New Customer</title>
</head>
<body>
	<p>
		<a href="RequestCustomerDetails.html">Find a customer's info</a>
	</p>
	<h1>Customers</h1>
	
	<h2>Edit a customer's details</h2>
	</br>
	
	<form method="post" action="CustomerEdit.php">
	<table>
	<tr>
		<td>Customer ID</td>
		<td><input type="text" size="10" name="customerID"/></td>
	</tr>
	<tr>
		<td>First Name</td>
		<td><input type="text" size="20" name="firstName"/></td>
	</tr>
	<tr>
		<td>Last Name</td>
		<td><input type="text" size="20" name="lastName"/></td>
	</tr>
	<tr>
		<td>Email address</td>
		<td><input type="text" size="60" name="email"/></td>
	</tr>
	<tr>
		<td>Address</td>
		<td><input type="text" size="100" name="address"/></td>
	</tr>
	<tr>
		<td>City</td>
		<td><input type="text" size="20" name="city"/></td>
	</tr>
	<tr>
		<td>Postcode</td>
		<td><input type="text" size="10" name="postcode"?></td>
	</tr>
	
	</table>
	
	<input type="submit" value="Submit"/>
	</form>
</body>
</html>
	
