<?php
session_start();
include("connectdb.php");

?>

    <!doctype html>
    <html>

    <head>
        <meta charset="utf-8">
        <title>updatesubject</title>
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



	if($button=="update"){
		
	$sql="UPDATE subject SET subname='$subname',subdetail='$subdetail',tname='$_SESSION[tname]',subterm='$subterm',subdate='$subdate' where subid='$subid' ";	
	$result=mysqli_query($link,$sql);	
	
	if($result) {
		
		echo "<meta http-equiv= refresh content=0;URL=adsubject.php>";
		echo"บันทึกข้อมูลเรียบร้อย";
		
	}else{
		
		echo "<meta http-equiv= refresh content=0;URL=adsubject.php>";
		echo"ไม่สามารถบันทึกข้อมูลได้";
	}
		

}
    
	
?>
    </body>

    </html>
