<?php
session_start();
include("connectdb.php");
if(!isset($_SESSION['stdid'])){
    
    echo "<meta http-equiv= refresh content=0;URL=login.html>";
}
if(isset($_GET["subid"]))
{
 $subid =$_GET["subid"];
                    
}
?>
<!doctype html>
<html lang="en">

<head>
    <title> Substudent</title>
    
    <?php
    include("include/head.php");
    ?>

</head>

<body>

    <div class="wrapper">
    <?php
    include("include/sidebar.php");
    ?>

        <div class="main-panel">
            
    <?php
    include("include/nav.php");
    ?>

            <div class="content">
                <div class="container-fluid">
                    <div class="row">
 
					   <h5 class="page-header  text-center"><a href=""><?php echo $subid ?></a></h5>
                       <?php                   
                    $mysql = "select * from content where subid='$subid'";
                    //INNER JOIN subject ON content.subid=subject.subid
				    $result = mysqli_query($link,$mysql);
                    while ($mydata =mysqli_fetch_array($result,MYSQLI_ASSOC)){
                                        
                                        
                    ?>


                            <div class="col-sm-12">
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <p class="text-center">
                                            <?php echo $mydata['contitle']?>
                                        </p>
                                    </div>
                                    <div class="panel-body">
                                        <p>
                                            <?php echo $mydata['contxt']?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- ปิดกล่อง-->
                            <?php
                    }
                    ?>
                   </div>


                </div>
            </div>

    <?php
    include("include/foodter.php");
    ?>
            

        </div>
    </div>

<?php
    include("include/script.php");
?>

</body>
</html>
