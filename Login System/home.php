<?php
include "config.php";
session_start();
$user_id = $_SESSION['id'];

if(!isset($user_id)){
    header("location: index.php");
}
$query = "SELECT * FROM users WHERE id='$user_id';";
$select = mysqli_query($conn,$query) ;
                if(mysqli_num_rows($select) > 0){
                    $row = mysqli_fetch_assoc($select);
                }
if(isset($_GET['id'])){
    unset($user_id);
    session_destroy();
    header("location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
</head>
<body>
    <center>
        <h2>الصفحة الرئيسية</h2>
    </center>
    <br><br><br><br>
    <center>
        <h3> username: <?php echo $row['username'];?></h3>
    </center>
   <center>
   <a href="home.php?id=<?php echo $user_id;?>">
        <button>
            LOGOUT
        </button>
    </a>
   </center>
</body>
</html>