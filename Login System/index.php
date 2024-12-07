<?php
include "config.php";
session_start();

if (isset($_POST['send'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, md5($_POST['pwd']));
    $query = "SELECT * FROM users WHERE email = '$email';";
    $select = mysqli_query($conn,$query) or die('connect failed');
    if (mysqli_num_rows($select) > 0) {
        $row = mysqli_fetch_assoc($select);
        $_SESSION['id']= $row['id'];
        header("location: home.php");
    } else {
        $message[] = 'email or password incorrect';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <center>
        <div class="main">
                <img src="login.png" alt="logo">
            <form action="index.php" method="POST" enctype="multipart/form-data">
                <input type="email" name="email" placeholder="E-Mail">
                <br>
                <input type="password" name="pwd" placeholder="password">
                <br>
                <input class="submit" type="submit" name="send" value="Login">
            </form>       
        </div>
        <br> <br>
            <p><a href="register.php" style="color: orange;">
                register
            </a>if you dont have an acount</p>
    </center>
</body>
</html>