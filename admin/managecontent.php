<?php

	include("connectdb.php");

?>

    <!doctype html>
    <html>

    <head>
        <meta charset="utf-8">
        <title>managecontent</title>
    </head>

    <body>
        <?php
	
	if(isset($_POST["contitle"]))
{
    $contitle=$_POST["contitle"];
    $subid=$_POST["subid"];
    $contxt=$_POST["contxt"];
    $condate=$_POST["condate"];
        
    
	 
    $button=$_POST["button"];
}



	if($button=="save"){
		
	$sql="INSERT INTO content VALUES('Null','$contitle','$subid','$contxt','$condate');";	
	$result=mysqli_query($link,$sql);	
	
	if($result) {
		
		echo "<meta http-equiv= refresh content=0;URL=adcontent.php>";
		echo"บันทึกข้อมูลเรียบร้อย";
		
	}else{
		
		echo "<meta http-equiv= refresh content=0;URL=adcontent.php>";
		echo"ไม่สามารถบันทึกข้อมูลได้";
	}
		
}
        else if(isset($_GET["conid"]))
	{
		$conid=$_GET["conid"];
		$getbutton=$_GET["button"];
	}
			
	if ($getbutton=="delete")
	{
		$sql="DELETE FROM content where conid='$conid'";

 		$result = mysqli_query($link,$sql);
		
		if($result){
			
			
			echo"<meta http-equiv= refresh content=0;URL=adcontent.php>";
			echo"ลบข้อมูลเรียบร้อย";
			
		 }else{
		
			echo"<meta http-equiv= refresh content=0;URL=adcontent.php>";
			echo"ไม่สามารถลบข้อมูลได้";
			
		 
	}
	}
    
	
?>
    </body>

    </html>
