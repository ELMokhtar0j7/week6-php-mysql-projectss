<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title> تسوق الان</title>
    <script src="actions.js?nocache=1"></script>
</head>
<body>
    <br>
<center>
<a href="mycart.php">
        <button>
           GO TO MY CART
        </button>
    </a>
</center>
     <hr>
<?php
require "connect_db.php";
$query = "SELECT * FROM prod";
$fetch_result = mysqli_query($conn,$query);
if($fetch_result){
    while ($row = mysqli_fetch_assoc($fetch_result)) {
?>
    <div class="card" style="width: 18rem; display:inline-block;align-items: center;">
  <img src="<?php echo $row['img'] ;?>" class="card-img-top" alt="item picture">
  <div class="card-body">
    <h5 class="card-title"><?php echo $row['name'] ;?></h5>
    <p class="card-text"><?php echo $row['price'] ;?></p>
    <a href="add_to_card.php?id=<?php echo $row['id'] ;?>">
    <button class="btn btn-success">
        add to card
    </button>
    </a>
  </div>
</div>
</body>
<?php
    }
}
?>
</html>