<?php
 require "connect_db.php";
 $id = $_GET['id'];
 $query = "SELECT * FROM prod WHERE id=$id;" ;
 $result = mysqli_query($conn,$query); 
 $row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تعديل المنتجات</title>
</head>
<body>
    <center>
        <div class="main">
                <img src="<?php echo $row['img'];?>" alt="logo" style="width:200px;">
            <form action="edit_Item.php?id=<?php echo $row['id'];?>" method="POST" enctype="multipart/form-data">
                <label for="">edit the title</label>
                <input type="text" name="name" value="<?php echo $row['name'];?>">
                <br>
                <label for="">edit price item</label>
                <input type="text" name="price" value="<?php echo $row['price'];?>">
                <br>
                <input type="file" name="pic" id="pic" style="display: none;">
                
                <label for="pic">choose new product img</label>
                
                <br>
                <input type="submit" name="send" value="submit changes">
            </form>
            <br> <br> <br>
            <a href="products.php">
                <button>cancel editing item</button>
            </a>        
        </div>
    </center>
</body>
</html>