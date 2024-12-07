<?php
require "config.php" ;
if($_SERVER['REQUEST_METHOD']== "POST"){
    $username = $_POST['user'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $cpwd = $_POST['cpwd'];
    $img = $_FILES['pfp'];
    if ($username && $email && $pwd && $cpwd) {
        $query = "SELECT * FROM users WHERE email='$email';" ;
        $check = mysqli_query($conn,$query);
        if (mysqli_num_rows($check)>0) {
            echo "this user is already registred";
        } else {
            if ($pwd === $cpwd) {
                if (isset($img)) {
                    require "upload_img.php";
                    $query = "INSERT INTO users(email,pwd,username,pfp)VALUES('$email','$pwd','$username','$img_path');";
                } else if (!isset($img))  {
                    $img_path = "pfp/nopfp.jpg";
                $query = "INSERT INTO users(email,pwd,username,pfp)VALUES('$email','$pwd','$username','$img_path');";
                }
                $result = mysqli_query($conn,$query);
                if($result){
                    echo "registed succesfully";
                    header("Location:index.php");
                }else{
                    echo "registration failled";
                }
            }else {
                echo "passwords dont match";
            }
        }
        
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
<center>
    <h1> Register</h1>
        <div class="main">
                <img src="login.png" alt="logo">
            <form action="register.php" method="POST" enctype="multipart/form-data">

                <input type="text" name="user" placeholder="username">
                <br>
                <input type="email" name="email" placeholder="E-Mail">
                <br>
                <input type="password" name="pwd" placeholder="password">
                <br>
                <input type="password" name="cpwd" placeholder="confirm password">
                <br>
                <label for="pic">choose a profile picture</label>
                <input type="file" name="pfp" style="display:none;" id="pic">
                <br>
                <input class="submit" type="submit" name="send" value="Register">
            </form>       
        </div>
        <br> <br>
            <p><a href="index.php" style="color: orange;">
                Login
            </a>if you already have an acount</p>
    </center>
</body>
</html>