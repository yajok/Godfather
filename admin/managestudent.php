<?php
session_start();
include("connectdb.php");

?>

    <!doctype html>
    <html>

    <head>
        <meta charset="utf-8">
        <title>managestudent</title>
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



	if($button=="save"){
		
	$sql="INSERT INTO student VALUES('$stdid','$stdpass','$stdname','$stdmail','$stdtel',' $stdclass','$stdtxt');";	
	$result=mysqli_query($link,$sql);	
	
	if($result) {
		
		echo "<meta http-equiv= refresh content=0;URL=adstudent.php>";
		echo"บันทึกข้อมูลเรียบร้อย";
		
	}else{
		
		echo "<meta http-equiv= refresh content=0;URL=adstudent.php>";
		echo"ไม่สามารถบันทึกข้อมูลได้";
	}
		
}
        else if(isset($_GET["stdid"]))
	{
		$stdid=$_GET["stdid"];
		$getbutton=$_GET["button"];
	}
			
	if ($getbutton=="delete")
	{
		$sql="DELETE FROM student where stdid =$stdid";

 		$result = mysqli_query($link,$sql);
		
		if($result){
			
			
			echo"<meta http-equiv= refresh content=0;URL=adstudent.php>";
			echo"ลบข้อมูลเรียบร้อย";
			
		 }else{
		
			echo"<meta http-equiv= refresh content=0;URL=adstudent.php>";
			echo"ไม่สามารถลบข้อมูลได้";
			
		 
	}
	}
    
	
?>
    </body>

    </html>
