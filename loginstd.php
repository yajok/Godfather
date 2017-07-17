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
  $mysql = "select * from student where stdid='$tuser' and stdpass='$tpass'";
  $result = mysqli_query($link,$mysql);
  $rows= mysqli_num_rows($result);

if($rows>=1){
  $mydata = mysqli_fetch_array($result,MYSQLI_ASSOC);
  $_SESSION['stdid'] = $mydata['stdid'];
  $_SESSION['stdname'] = $mydata['stdname'];

echo "<meta http-equiv= refresh content=0;URL=home.php>";
echo"ล็อกอินเรียบร้อย";
}
else {
  echo "<meta http-equiv= refresh content=0;URL=index.html>";
echo "รหัสไม่ถูกต้อง";
}
    ?>
    </body>

    </html>
