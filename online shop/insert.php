<?php
header("Location:admin/index.php");
 require "connect_db.php";
 if ($conn) {
    echo "db connected";
 }
if ($_SERVER['REQUEST_METHOD']=='POST') {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $img = $_FILES['pic'];
    if ($name && $price && $img) {
        # image upload procedure
        require "image_upload.php";
        // inserting data to db
        $query = "INSERT INTO prod (name,price,img) 
        VALUES('$name','$price','$img_path');";
        $insert = mysqli_query($conn,$query);
    }
}