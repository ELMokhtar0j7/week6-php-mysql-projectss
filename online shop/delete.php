<?php
require "connect_db.php";
$id = $_GET['id'];
$query = "DELETE FROM prod WHERE id=$id;";
$result=mysqli_query($conn,$query);

header("Location:products.php");