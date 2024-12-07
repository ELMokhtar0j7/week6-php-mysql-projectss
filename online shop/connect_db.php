<?php
$dbServer = 'localhost' ;
$dbuser = 'root';
$dbpwd = '';
$dbname = 'shop';

$conn = mysqli_connect($dbServer,$dbuser,$dbpwd,$dbname);

if (empty($conn)) {
    die (mysql_error($conn));
}
