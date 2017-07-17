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
        <title>Admin | Subject</title>

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
                                                <h4 class="title">จัดการรายวิชา</h4>

                                            </div>
                                            <div class="content">
                                                <ul class="nav nav-tabs">
                                                    <li class="active"><a data-toggle="tab" href="#subjectname">ชื่อรายวิชา</a></li>
                                                    <li><a data-toggle="tab" href="#subjectadd">เพิ่มรายวิชา</a></li>

                                                </ul>
                                                <div class="tab-content">
                                                    <div id="subjectname" class="tab-pane fade in active">
                                                        <div class="row">

                <?php
				$mysql = "select * from subject";
				$result = mysqli_query($link,$mysql);
				while($mydata = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
				
				?>

                                                                <div class="col-md-4">
                                                                    <br>
                                                                    <br>
                                                                    <div class="card card-user">
                                                                        <div class="image">
                                                                            <img src="assets/img/img%20(11).jpg" alt="">
                                                                        </div>
                                                                        <div class="content">
                                                                            <div class="text-center">

                                                                                <h4 class="title">
                                                                                <?php echo $mydata['subname']?><br>
                                                                                 <small>
                                                                                 <?php echo $mydata['subid']?></small>
                                                                                </h4>
                                                                                <br>

                                                                            </div>
                                                                            <p class="description text-center">
                                                                                ครู :
                                                                                <?php echo $mydata['tname']?>
                                                                                <br>ปีการศึกษา
                                                                                <?php echo $mydata['subterm']?>
                                                                                <br>เพิ่มเมื่อ :
                                                                                <?php echo $mydata['subdate']?>
                                                                            </p>
                                                                        </div>
                                                                        <hr>
                                                                        <div class="text-center">
                                                                            <br>
                                                                            <a href="editsubject.php?subid=<?php echo $mydata['subid'];?>" class="btn btn-large btn-warning"> Edit </a> &nbsp; &nbsp;

                                                                            <a href="managesubject.php?subid=<?php echo $mydata['subid'];?>&button=delete" class="btn btn-danger btn-large"> Delete </a>

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


                                                    <div id="subjectadd" class="tab-pane fade">

                                                        <form method="post" action="managesubject.php">
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
                                                                        <label>Subject ID</label>
                                                                        <font color="#FF0000">*</font>
                                                                        <input type="text" class="form-control" name="subid" placeholder="ง33101" required>

                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label >Subject name</label>
                                                                        <font color="#FF0000">*</font>
                                                                        <input type="text" class="form-control" name="subname" placeholder="การงานอาชีพและเทคโนโลยี" required>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>subterm</label>
                                                                        <input type="text" class="form-control" name="subterm" placeholder="1/2559">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>subdate</label>
                                                                        <input type="date" class="form-control" name="subdate" >
                                                                    </div>
                                                                </div>
                                                            </div>

                                                           



                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label>Subdetail</label>
                                                                        <textarea rows="3" class="form-control" name="subdetail" id="mytextarea"></textarea>
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
