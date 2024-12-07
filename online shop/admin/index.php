<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>رفع المنتجات</title>
    <link rel="stylesheet" href="../styles/upload_products.css">
</head>
<body>
    <center>
        <div class="main">
                <img src="../logo.png" alt="logo">
            <form action="../insert.php" method="POST" enctype="multipart/form-data">
                <input type="text" name="name">
                <br>
                <input type="text" name="price">
                <br>
                <input type="file" name="pic" id="pic" style="display: none;">
                
                <label for="pic">choose product picture</label>
                <br>
                <input class="submit" type="submit" name="send" value="upload product">
            </form>       
        </div>
        <br> <br>
            <a href="../products.php">
                <button>show all products</button>
            </a> 
    </center>
</body>
</html>