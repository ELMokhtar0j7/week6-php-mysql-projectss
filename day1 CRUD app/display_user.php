<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USERS DISPLAY</title>
    <script src="actions.js?nocache=1"></script>
</head>
<body>
     <a href="addUser.php"> <button>add user</button> </a>
    <hr>
    <br>
    <table style="margin-top:100px;margin-left:250px;width:700px;background-color: black;color: black;" >
        <tr style="background-color: white;color: #000;">
            <th> ID</th>
            <th> name</th>
            <th>email</th>
            <th>phone</th>
            <th> action</th>
        </tr>
            <?php 
                include "connect_db.php" ;
                $query = "SELECT * FROM users"; 
                $result = mysqli_query($conn,$query);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result) ) {
                        ?>
                        <tr style='background-color: white;color: #000; text-align: center;' > 
                        <td> <?php echo $row['id'] ;?> </td>
                        <td> <?php echo $row['name'] ;?> </td>
                        <td> <?php echo $row['email'] ;?> </td>
                        <td> <?php echo $row['phone'] ;?> </td>
                        <td>
                      <button onclick="deletion('<?php echo $row['id'] ;?>')"> delete</button>
                      <button onclick="update('<?php echo $row['id'] ;?>')"> edit</button>
                     
                        </td>
                        <?php
                    }
                } 
                 # delete the user by ID
                     if(isset($_GET['id']) ){
                        $del_user = $_GET['id'];
                        $query = "DELETE FROM users WHERE id='$del_user';";
                        $del_result  = mysqli_query($conn,$query);
                     }
                ?> 
        </tr>
    </table>
</body>
</html>