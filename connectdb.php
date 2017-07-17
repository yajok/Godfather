<?php
$host = "127.0.0.1";
$user = "root";
$pass = "";
$dbname = "godfather";

$link = mysqli_connect($host,$user,$pass,$dbname);
mysqli_query($link,"SET NAMES UTF8");
?>
