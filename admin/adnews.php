<?php
session_start();
include("connectdb.php");
if(!isset($_SESSION['tid'])){
    
    echo "<meta http-equiv= refresh content=0;URL=index.html>";
}
?>
    <!doctype html>
    <html lang="en">

    <head>
        <title>Admin | News</title>

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
                                        <div class="card">
                                            <div class="header">
                                                <h4 class="title">จัดการข่าวสาร</h4>

                                            </div>
                                            <div class="content">
                                                <ul class="nav nav-tabs">
                                                    <li class="active"><a data-toggle="tab" href="#newsname">ข่าวสารทั้งหมด</a></li>
                                                    <li><a data-toggle="tab" href="#newsadd">เพิ่มข่าวสาร</a></li>

                                                </ul>
                                                <div class="tab-content">
                                                    <div id="newsname" class="tab-pane fade in active">
                                                        <div class="row">

                                                            <?php
				$mysql = "select * from news";
				$result = mysqli_query($link,$mysql);
	
				while($mydata = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
				
				?>

                                                                <div class="col-md-4">
                                                                    <br>
                                                                    <br>
                                                                    <div class="card card-user">
                                                                        <div class="image">
                                                                            <img src="assets/img/sidebar-1.jpg" alt="">
                                                                        </div>
                                                                        <div class="content">
                                                                            <div class="text-center">

                                                                                <h4>
                                                                                <?php echo $mydata['namenews']?><br >
                                                                                 <small>โดย : 
                                                                                 <?php echo $mydata['tname']?></small></h4>

                                                                            </div>

                                                                            <p class="text-center">
                                                                                 
                                                                                   เพิ่มเมื่อ : 
                                                                                    <?php echo $mydata['datenews']?>


                                                                            </p>
                                                                        </div>
                                                                        <hr>
                                                                        <div class="text-center">
                                                                            <br>
                                                                            <a href="editnews.php?idnews=<?php echo $mydata['idnews'];?>" class="btn btn-large btn-warning"> Edit </a> &nbsp; &nbsp;

                                                                            <a href="managenews.php?idnews=<?php echo $mydata['idnews'];?>&button=delete" class="btn btn-danger btn-large"> Delete </a>

                                                                            <br>
                                                                            <br>

                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <?php 
				}
							?>

                                                        </div>

                                                    </div>


                                                    <div id="newsadd" class="tab-pane fade">

                                                        <form method="post" action="managenews.php">
                                                            <div class="row">
                                                                <br>
                                                                <div class="col-md-12">
                                                                    <div class="alert alert-warning">
                                                                        <button type="button" aria-hidden="true" class="close">×</button>
                                                                        <span><b> คำเเนะนำ - </b> ช่องที่เเสดงเครื่องหมาย * ควรระบุข้อมูลให้ครบถ้วน</span>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">

                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>New title</label>
                                                                        <font color="#FF0000">*</font>
                                                                        <input type="text" class="form-control" name="namenews" required>

                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Teacher</label>

                                                                        <input type="text" class="form-control" name="tname" value="<?php echo $_SESSION['tname']; ?>" disabled>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Date</label>
                                                                        <input type="date" class="form-control" name="datenews">
                                                                    </div>
                                                                </div>

                                                            </div>


                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label>Content</label>
                                                                        <font color="#FF0000">*</font>
                                                                        <textarea rows="5" class="form-control" name="newsdata" id="mytextarea"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <button type="submit" name="button" value="save" class="btn btn-info btn-fill pull-right">เพิ่มข้อมูล</button>
                                                            <div class="clearfix"></div>
                                                        </form>
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
