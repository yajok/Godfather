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
    <title> Test</title>
    
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
                       <div class="col-sm-12">
					   <h5 class="page-header text-center"><a href="">ข้อสอบ</a></h5>
                           <div class="card">
                               
                               

                        <div class="col-sm-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <p class="text-center">แบบทดสอบเรื่องยุคของคอมพิวเตอร์</p>
                                </div>
                                <div class="panel-body">
                                 <img src="admin/assets/img/robots.png" class="img-rounded" alt="robost" width="400" height="200">
                                  
                                  <br>
                                  <br>
                                   <a href="http://goo.gl/forms/251B9ar4M6Hr9Qae2" class="text-center">คลิกเพื่อทำแบบทดสอบ</a>
                                    
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <p class="text-center">แบบทดสอบเรื่องประวัติศาสตร์ไทย</p>
                                </div>
                                <div class="panel-body">
                                 <img src="admin/assets/img/movies.gif" class="img-rounded" alt="robost" width="400" height="200">
                                  
                                  <br>
                                  <br>
                                   <a href="http://goo.gl/forms/PfDV7bzDxAQajIUm1" class="text-center">คลิกเพื่อทำแบบทดสอบ</a>
                                    
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <p class="text-center">แบบทดสอบเรื่องฟุตซอล</p>
                                </div>
                                <div class="panel-body">
                                 <img src="admin/assets/img/basketball.jpg" class="img-rounded" alt="robost" width="400" height="200">
                                  
                                  <br>
                                  <br>
                                   <a href="http://goo.gl/forms/ZPkBAzWQjkK3jVLp1" class="text-center">คลิกเพื่อทำแบบทดสอบ</a>
                                    
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <p class="text-center">แบบทดสอบเรื่องฟุตบอล</p>
                                </div>
                                <div class="panel-body">
                                 <img src="admin/assets/img/soccer.png" class="img-rounded" alt="robost" width="400" height="200">
                                  
                                  <br>
                                  <br>
                                   <a href="http://goo.gl/forms/b4cfVUYzJmggW3Lp1" class="text-center">คลิกเพื่อทำแบบทดสอบ</a>
                                    
                                </div>
                            </div>
                        </div>
                           </div>
                       </div>
					   
					   
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
