<?php
session_start();
include("connectdb.php");

?>

    <!doctype html>
    <html>

    <head>
        <meta charset="utf-8">
        <title>managenews</title>
    </head>

    <body>
        <?php
	
	if(isset($_POST["namenews"]))
{
    $namenews=$_POST["namenews"];
    
    $newsdata=$_POST["newsdata"];
    
    $datenews=$_POST["datenews"];
    
	 
    $button=$_POST["button"];
}



	if($button=="save"){
		
	$sql="INSERT INTO news VALUES('Null','$namenews','$_SESSION[tname]','$newsdata','$datenews');";	
	$result=mysqli_query($link,$sql);	
	
	if($result) {
		
		echo "<meta http-equiv= refresh content=0;URL=adnews.php>";
		echo"บันทึกข้อมูลเรียบร้อย";
		
	}else{
		
		echo "<meta http-equiv= refresh content=0;URL=adnews.php>";
		echo"ไม่สามารถบันทึกข้อมูลได้";
	}
		
}
        else if(isset($_GET["idnews"]))
	{
		$idnews=$_GET["idnews"];
		$getbutton=$_GET["button"];
	}
			
	if ($getbutton=="delete")
	{
		$sql="DELETE FROM news where idnews =$idnews";

 		$result = mysqli_query($link,$sql);
		
		if($result){
			
			
			echo"<meta http-equiv= refresh content=0;URL=adnews.php>";
			echo"ลบข้อมูลเรียบร้อย";
			
		 }else{
		
			echo"<meta http-equiv= refresh content=0;URL=adnews.php>";
			echo"ไม่สามารถลบข้อมูลได้";
			
		 
	}
	}
    
	
?>
    </body>

    </html>
