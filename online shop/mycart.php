<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>عربة التسوق</title>
</head>
<body>
    <center>
        <h3>محتويات العربة</h3>
    </center>
    <table style="margin-top:100px;margin-left:250px;width:700px;background-color: black;color: black;" >
        <tr style="background-color: white;color: #000;">
            <th> ID</th>
            <th> title</th>
            <th>price</th>
            
            <th> action</th>
        </tr>
            <?php 
                include "connect_db.php" ;
                $query = "SELECT * FROM card"; 
                $result = mysqli_query($conn,$query);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result) ) {
                        ?>
                        <tr style='background-color: white;color: #000; text-align: center;' > 
                        <td> <?php echo $row['id'] ;?> </td>
                        <td> <?php echo $row['name'] ;?> </td>
                        <td> <?php echo $row['price'] ;?> </td>
                        
                        <td>
                      <a href="remove_item.php?id=<?php echo $row['id'] ;?>"><button>الازالة من العربة</button></a>
                      
                     
                        </td>
                        <?php
                    }
                } 
                ?> 
        </tr>
    </table>
    <br><hr>
    <center>
    <a href="shop.php"><button>العودة للتسوق</button></a>
    </center>
</body>
</html>