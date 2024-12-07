<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
</head>
<?php
require "connect_db.php";
# fetch user to edit by ID
if(isset($_GET['id']) ){
    $edit_user = $_GET['id'];
    $query = "SELECT * FROM users WHERE id='$edit_user';";
    $user_info  = mysqli_query($conn,$query);
    if ($user_info){
        $row = mysqli_fetch_assoc($user_info) ; 
    }
}
# edit user by id
if(isset($_POST['edit'])){
   $new_name = $_POST['name'];
   $new_email = $_POST['email'];
   $new_pwd = $_POST['pwd'];
   $new_phone = $_POST['phone'];
   if($new_name && $new_email && $new_pwd && $new_phone){
    $query= "UPDATE `users` SET 
   `name`='$new_name',`email`='$new_email',`pwd`='$new_pwd',`phone`='$new_phone'
    WHERE id='$edit_user'";
    $edit_result = mysqli_query($conn,$query);
   }
}
?>
<body>
    <form action="updateUser.php?id=<?php echo $edit_user; ?>" method="POST">
       <label for="n">EDIT NAME</label> 
       <input value="<?php echo $row['name']; ?>" type="text" name="name" id="n">
        <br> <br> <br> 
        <label for="e">EDIT E-Mail</label> 
        <input value="<?php echo $row['email'] ; ?>" type="email" name="email" id="e">
        <br><br> <br>
        <label for="p">EDIT PASSWORD</label> 
        <input value="<?php echo $row['pwd'] ; ?>" type="text" name="pwd" id="p">
        <br> <br>
        <label for="pn">EDIT PHONE NUMBER</label> 
        <input value="<?php echo $row['phone'] ; ?>" type="tel" name="phone" id="pn">
        <br> <br>
        <input type="submit" name="edit" value="EDIT" >
        <br> <hr> <br>
    </form>
    <a href="http://localhost/MyProjects/day1%20CRUD%20app/display_user.php">
            <button>
                back to previus page
            </button>
        </a>
</body>
</html>