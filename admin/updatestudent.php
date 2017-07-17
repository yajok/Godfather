<?php

	include("connectdb.php");

?>

    <!doctype html>
    <html>

    <head>
        <meta charset="utf-8">
        <title>manageteacher</title>
    </head>

    <body>
<?php
	
	if(isset($_POST["stdid"]))
{
    $stdid=$_POST["stdid"];
    $stdpass=$_POST["stdpass"];
    $stdname=$_POST["stdname"];
    $stdmail=$_POST["stdmail"];
    $stdtel=$_POST["stdtel"];
    $stdclass=$_POST["stdclass"];
    $stdtxt=$_POST["stdtxt"];
        
    $button=$_POST["button"];
}



	if($button=="update"){
		
	$sql="UPDATE student SET stdpass='$stdpass',stdname='$stdname',stdmail='$stdmail',stdtel='$stdtel',stdclass='$stdclass',stdtxt='$stdtxt' where stdid='$stdid' ";	
	$result=mysqli_query($link,$sql);	
	
	if($result) {
		
		echo "<meta http-equiv= refresh content=0;URL=adstudent.php>";
		echo"บันทึกข้อมูลเรียบร้อย";
		
	}else{
		
		echo "<meta http-equiv= refresh content=0;URL=adstudent.php>";
		echo"ไม่สามารถบันทึกข้อมูลได้";
	}
		
}

    
	
?>
    </body>

    </html>
