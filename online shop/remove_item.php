<?php
 # remove item by ID
 include "connect_db.php";
 if(isset($_GET['id']) ){
    $rm_item = $_GET['id'];
    $query = "DELETE FROM card WHERE id='$rm_item';";
    $rm_result  = mysqli_query($conn,$query);
    header("Location:mycart.php");
 }