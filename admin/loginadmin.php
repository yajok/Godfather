<?php
session_start();
include("connectdb.php");

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>checklogin</title>
    </head>

    <body>

        <?php

    if(isset($_POST["tuser"]))// นำข้อมูลมาจาก form
    {
      $tuser=$_POST["tuser"];
      $tpass=$_POST["tpass"];
  }
//ดึงข้อมูลจากฐานข้อมมูล
  $mysql = "select * from teacher where tuser='$tuser' and tpass='$tpass'";
  $result = mysqli_query($link,$mysql);
  $rows= mysqli_num_rows($result);

if($rows>=1){
  $mydata = mysqli_fetch_array($result,MYSQLI_ASSOC);
  $_SESSION['tid'] = $mydata['tid'];
  $_SESSION['tname'] = $mydata['tname'];

echo "<meta http-equiv= refresh content=0;URL=dashboard.php>";
echo"ล็อกอินเรียบร้อย";
}
else {
  echo "<meta http-equiv= refresh content=0;URL=index.html>";
echo "รหัสไม่ถูกต้อง";
}
    ?>
    </body>

    </html>
