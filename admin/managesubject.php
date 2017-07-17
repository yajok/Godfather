<?php
session_start();
include("connectdb.php");

?>

    <!doctype html>
    <html>

    <head>
        <meta charset="utf-8">
        <title>managesubject</title>
    </head>

    <body>
        <?php
	
	if(isset($_POST["subid"]))
{
    $subid=$_POST["subid"];
    $subname=$_POST["subname"];
    $subdetail=$_POST["subdetail"];
    $subterm=$_POST["subterm"];
    $subdate=$_POST["subdate"];
        
    
	 
    $button=$_POST["button"];
}



	if($button=="save"){
		
	$sql="INSERT INTO subject VALUES('$subid','$subname','$subdetail','$_SESSION[tname]','$subterm',' $subdate');";	
	$result=mysqli_query($link,$sql);	
	
	if($result) {
		
		echo "<meta http-equiv= refresh content=0;URL=adsubject.php>";
		echo"บันทึกข้อมูลเรียบร้อย";
		
	}else{
		
		echo "<meta http-equiv= refresh content=0;URL=adsubject.php>";
		echo"ไม่สามารถบันทึกข้อมูลได้";
	}
		
}
        else if(isset($_GET["subid"]))
	{
		$subid=$_GET["subid"];
		$getbutton=$_GET["button"];
	}
			
	if ($getbutton=="delete")
	{
		$sql="DELETE FROM subject where subid =$subid";

 		$result = mysqli_query($link,$sql);
		
		if($result){
			
			
			echo"<meta http-equiv= refresh content=0;URL=adsubject.php>";
			echo"ลบข้อมูลเรียบร้อย";
			
		 }else{
		
			echo"<meta http-equiv= refresh content=0;URL=adsubject.php>";
			echo"ไม่สามารถลบข้อมูลได้";
			
		 
	}
	}
    
	
?>
    </body>

    </html>
