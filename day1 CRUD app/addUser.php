<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD USER</title>
</head>
<body>
    <h1> ADD USER</h1>
    <br><br><hr>
    <form action="addUser.php" method="POST">
        <label for="n">ENTER YOUR NAME</label> <input type="text" name="name" id="n">
        <br> <br> <br> 
        <label for="e">ENTER YOUR E-Mail</label> <input type="email" name="email" id="e">
        <br><br> <br>
        <label for="p">ENTER YOUR PASSWORD</label> <input type="password" name="pwd" id="p">
        <br> <br>
        <label for="pn">ENTER YOUR PHONE NUMBER</label> <input type="tel" name="phone" id="pn">
        <br> <br>
        <input type="submit" name="send" value="SIGN-UP" >
        <br> <hr> <br>
    </form>
    <a href="http://localhost/MyProjects/day1%20CRUD%20app/display_user.php">
        <button type="button">
            back to previous page
        </button>
    </a>
</body>
</html>

<?php

if ($_POST['send']) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $phone = $_POST['phone'];
    $send = $_POST['send'];
   }
 
    if (!empty($name) && !empty($email) && !empty($pwd) && !empty($phone)&& !empty($send)) {
    include "connect_db.php" ;
     $query = "INSERT INTO users (name,email,pwd,phone) VALUES('$name','$email','$pwd',$phone);";
     $result = mysqli_query($conn,$query);
     if ($result) {
        echo " <br> user has been added";
     }
    } else{
       echo "invalid information";
    }
?>