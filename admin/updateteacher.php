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
	
	if(isset($_POST["tid"]))
{
    $tid=$_POST["tid"];
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
		
	$sql="UPDATE teacher SET tuser='$tuser',tpass='$tpass',tname='$tname',tmail='$tmail',ttel='$ttel',troom='$troom',ttxt='$ttxt' where tid='$tid' ";	
	$result=mysqli_query($link,$sql);	
	
	if($result) {
		
		echo "<meta http-equiv= refresh content=0;URL=adteacher.php>";
		echo"บันทึกข้อมูลเรียบร้อย";
		
	}else{
		
		echo "<meta http-equiv= refresh content=0;URL=adteacher.php>";
		echo"ไม่สามารถบันทึกข้อมูลได้";
	}
		
}

    
	
?>
    </body>

    </html>
