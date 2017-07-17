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
	
	if(isset($_POST["tuser"]))
{
    $tuser=$_POST["tuser"];
    $tpass=$_POST["tpass"];
    $tname=$_POST["tname"];
    $tmail=$_POST["tmail"];
    $ttel=$_POST["ttel"];
    $troom=$_POST["troom"];
    $ttxt=$_POST["ttxt"];
	 
    $button=$_POST["button"];
}



	if($button=="save"){
		
	$sql="INSERT INTO teacher VALUES('Null','$tuser','$tpass','$tname','$tmail','$ttel',' $troom','$ttxt');";	
	$result=mysqli_query($link,$sql);	
	
	if($result) {
		
		echo "<meta http-equiv= refresh content=0;URL=adteacher.php>";
		echo"บันทึกข้อมูลเรียบร้อย";
		
	}else{
		
		echo "<meta http-equiv= refresh content=0;URL=adteacher.php>";
		echo"ไม่สามารถบันทึกข้อมูลได้";
	}
		
}
        else if(isset($_GET["tid"]))
	{
		$tid=$_GET["tid"];
		$getbutton=$_GET["button"];
	}
			
	if ($getbutton=="delete")
	{
		$sql="DELETE FROM teacher where tid =$tid";

 		$result = mysqli_query($link,$sql);
		
		if($result){
			
			
			echo"<meta http-equiv= refresh content=0;URL=adteacher.php>";
			echo"ลบข้อมูลเรียบร้อย";
			
		 }else{
		
			echo"<meta http-equiv= refresh content=0;URL=adteacher.php>";
			echo"ไม่สามารถลบข้อมูลได้";
			
		 
	}
	}
    
	
?>
    </body>

    </html>
