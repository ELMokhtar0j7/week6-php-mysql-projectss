<?php
header("Location:products.php");
require "connect_db.php";
    $id = $_GET['id'];
if ($_SERVER['REQUEST_METHOD']=='POST') {
   $name = $_POST['name'];
   $price = $_POST['price'];
   $img = $_FILES['pic'];
   if ($name && $price && $img) {
       # image upload procedure
       require "image_upload.php";
       # UPDATE data in the DB
       if ($img_path ==="upload_dir/") {
        $query = "UPDATE `prod` 
        SET `name`='$name',`price`='$price' 
        WHERE `id`='$id' ;";
       } else {
        $query = "UPDATE `prod` 
         SET `name`='$name',`price`='$price',`img`='$img_path' 
         WHERE `id`='$id' ;";
       }
       $insert = mysqli_query($conn,$query);
   }
}