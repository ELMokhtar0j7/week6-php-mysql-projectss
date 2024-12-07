<?php
 require "connect_db.php";
 # fetching selected item data from prod
 $id = $_GET['id'];
 echo $id ;
$query = "SELECT * FROM prod WHERE id=$id;";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($result);
# check if item exist in card DB or no

# inserting data into card
$query = "INSERT INTO card (name,price) VALUES ('$row[name]','$row[price]');";
$result = mysqli_query($conn,$query);
# stay in the same page 
header("Location:shop.php");