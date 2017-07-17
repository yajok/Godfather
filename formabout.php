<?php
    session_start();
	include("connectdb.php");

?>

    <!doctype html>
    <html>

    <head>
        <meta charset="utf-8">
        <title></title>
    </head>

    <body>
        <?php
	
	if(isset($_POST["txtemail"]))
{
	 $txtemail=$_POST["txtemail"];
	 $abtxt=$_POST["abtxt"];
	 $button=$_POST["button"];
}



	if($button=="Save"){
		
	$sql="INSERT INTO about VALUES('$txtemail','$abtxt');";	
	$result=mysqli_query($link,$sql);	
	
	if($result) {
		
		echo "<meta http-equiv= refresh content=0;URL=about.php>";
		echo"บันทึกข้อมูลเรียบร้อย";
		
	}else{
		
		echo "<meta http-equiv= refresh content=0;URL=about.php>";
		echo"ไม่สามารถบันทึกข้อมูลได้";
	}
		
		}
			
	
	
?>
    </body>

    </html>
