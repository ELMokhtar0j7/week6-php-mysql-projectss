<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>عرض المنتجات</title>
    <script src="actions.js?nocache=1"></script>
</head>
<?php
require "connect_db.php";
$query = "SELECT * FROM prod";
$fetch_result = mysqli_query($conn,$query);
if($fetch_result){
    while ($row = mysqli_fetch_assoc($fetch_result)) {
?>
<body>
    <div class="card" style="width: 18rem; display:inline-block;align-items: center;">
  <img src="<?php echo $row['img'] ;?>" class="card-img-top" alt="item picture">
  <div class="card-body">
    <h5 class="card-title"><?php echo $row['name'] ;?></h5>
    <p class="card-text"><?php echo $row['price'] ;?></p>
    <a onclick="edit(<?php echo $row['id']; ?>)" class="btn btn-primary">edit item</a>
    <button onclick="deletion('<?php echo $row['id'] ;?>')" class="btn btn-danger">delete item</button>
  </div>
</div>
</body>
<?php
    }
}
?>
</html>