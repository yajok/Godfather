<?php
session_start();
include("connectdb.php");

?>

    <!doctype html>
    <html>

    <head>
        <meta charset="utf-8">
        <title>updatenews</title>
    </head>

    <body>
<?php
	
	if(isset($_POST["idnews"]))
{
    $idnews=$_POST["idnews"];
    $namenews=$_POST["namenews"];
    $datenews=$_POST["datenews"];
    $newsdata=$_POST["newsdata"];
   
    
	 
    $button=$_POST["button"];
}



	if($button=="update"){
		
	$sql="UPDATE news SET namenews='$namenews',datenews='$datenews',tname='$_SESSION[tname]',newsdata='$newsdata' where idnews='$idnews' ";	
	$result=mysqli_query($link,$sql);	
	
	if($result) {
		
		echo "<meta http-equiv= refresh content=0;URL=adnews.php>";
		echo"บันทึกข้อมูลเรียบร้อย";
		
	}else{
		
		echo "<meta http-equiv= refresh content=0;URL=adnews.php>";
		echo"ไม่สามารถบันทึกข้อมูลได้";
	}
		
}

    
	
?>
    </body>

    </html>
