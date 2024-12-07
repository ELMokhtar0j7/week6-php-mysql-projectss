<?php
$dbServer = 'localhost' ;
$dbuser = 'root';
$dbpwd = '';
$dbname = 'myapp';

$conn = mysqli_connect($dbServer,$dbuser,$dbpwd,$dbname);

if (empty($conn)) {
    die(mysql_error($conn));
} else {
    echo "<br> db connected successfully <br>" ;
}
