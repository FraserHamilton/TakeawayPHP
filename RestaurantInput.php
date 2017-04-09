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
	<title>Add a Restaurant</title>
</head>
<body>
	<p> 
          <a href = "RequestCustomerDetails.html">Search customer database</a> 
	  <a href="RestaurantInfo.html">Find order info about a restaurant</a><br/>
	</p>
	
	<h1>Restaurants</h1>
	
	<h2>Add a new restaurant</h2>
	</br>
	
	<form method="post" action="AddRestaurant2.php">
	<table>
	<tr>
		<td>Restaurant ID</td>
		<td><input type="text" size="50" name="restaurantID"/></td>
	</tr>
	<tr>
		<td>Loyalty Points Delivery</td>
		<td><input type="text" size="20" name="lpDel"/></td>
	</tr>
	<tr>
		<td>Loyalty Points Collection</td>
		<td><input type="text" size="20" name="lpCol"/></td>
	</tr>
	</table>
	<input type="submit" value="Submit"/>
	</form>

	<h2>Search For Specific Terms In Restaurant Database</h2>
	<p> Select Fields and then Input Search Term Into Text Box  </p>
	<br/>
	<p>
	Search For <form method="post" action="DisplaySpecificQueryR.php">
	  <select name="for">
	    <option value="RestaurantID">Restaurant Name</option>
	    <option value="PointsCollection">Points For Collection</option>
	    <option value="PointsDeliver">Points For Delivery</option>
	  </select>
	By
	 <select name="by">
	    <option value="RestaurantID">Restaurant Name</option>
	    <option value="PointsCollection">Points For Collection</option>
	    <option value="PointsDeliver">Points For Delivery</option>
	  </select>
	</p>
	<p>
	<input type="text" size="10" name="term1" placeholder="Search Term"/>
	</p>
	  <input type="submit">
	</form>
</body>
</html>
	
