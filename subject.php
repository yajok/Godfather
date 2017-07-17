<?php
session_start();
include("connectdb.php");
if(!isset($_SESSION['stdid'])){
    
    echo "<meta http-equiv= refresh content=0;URL=login.html>";
}
?>
<!doctype html>
<html lang="en">

<head>
    <title> Subject</title>
    
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
					   <h5 class="page-header  text-center"><a href="">บทเรียน</a></h5>
                        
                        <?php
                        $mysql = "select * from subject";
				        $result = mysqli_query($link,$mysql);
                        while ($mydata =mysqli_fetch_array($result,MYSQLI_ASSOC)){
                        ?>
                            <div class="panel panel-info">

                                <div class="panel-heading">
                                    <p>รหัสวิชา :
                                        <?php echo $mydata['subid']?>
                                    </p>

                                </div>
                                <div class="panel-body">
                                    <p>ชื่อรายวิชา :
                                        <?php echo $mydata['subname']?>
                                    </p>
                                    <br>
                                    <p>อาจารย์ผู้สอน :
                                        <?php echo $mydata['tname']?>
                                    </p>
                                    <br>
                                    <p>ปีการศึกษา :
                                        <?php echo $mydata['subterm']?>
                                    </p>
                                    <br>
                                    <p>รายละเอียดรายวิชา :
                                        <?php echo $mydata['subdetail']?>
                                    </p>
                                    <br>
                                    <div align="right">
                                        <a href="substudent.php?subid=<?php echo $mydata['subid'];?>" class="btn btn-large btn-primary"> เข้าสู่บทเรียน </a>
                                    </div>

                                </div>
                            </div>
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
