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
        <title>Admin | Student</title>

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
                                                <h4 class="title">จัดการผู้เรียน</h4>

                                            </div>
                                            <div class="content">
                                                <ul class="nav nav-tabs">
                                                    <li class="active"><a data-toggle="tab" href="#studentname">รายชื่อผู้เรียน</a></li>
                                                    <li><a data-toggle="tab" href="#studentadd">เพิ่มผู้เรียน</a></li>

                                                </ul>
                                                <div class="tab-content">
                                                    <div id="studentname" class="tab-pane fade in active">
                                                        <div class="row">

                                                            <?php
				$mysql = "select * from student";
				$result = mysqli_query($link,$mysql);
	
				while($mydata = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
				
				?>

                                                                <div class="col-md-4">
                                                                    <br>
                                                                    <br>
                                                                    <div class="card card-user">
                                                                        <div class="image">
                                                                            <img src="assets/img/sidebar-5.jpg" alt="">
                                                                        </div>
                                                                        <div class="content">
                                                                            <div class="author">
                                                                                <a href="#">
                                                                                    <img class="avatar border-gray" src="assets/img/avatar.png" alt="..." />

                                                                                    <h4 class="title"><?php echo $mydata['stdname']?><br />
                                                                                 <small><?php echo $mydata['stdid']?></small>
                                                                                </h4>
                                                                                </a>
                                                                            </div>
                                                                            <p class="description text-center">
                                                                                <?php echo $mydata['stdmail']?>
                                                                                    <br>
                                                                                    <?php echo $mydata['stdtel']?>
                                                                                        <br>
                                                                                        <?php echo $mydata['stdclass']?>
                                                                            </p>
                                                                        </div>
                                                                        <hr>
                                                                        <div class="text-center">
                                                                            <br>
                                                                            <a href="editstudent.php?stdid=<?php echo $mydata['stdid'];?>" class="btn btn-large btn-warning"> Edit </a> &nbsp; &nbsp;

                                                                            <a href="managestudent.php?stdid=<?php echo $mydata['stdid'];?>&button=delete" class="btn btn-danger btn-large"> Delete </a>

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


                                                    <div id="studentadd" class="tab-pane fade">

                                                        <form method="post" action="managestudent.php">
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
                                                                        <label>Student ID</label>
                                                                        <font color="#FF0000">*</font>
                                                                        <input type="text" class="form-control" name="stdid" placeholder="56181740xxx" required>

                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1">Password</label>
                                                                        <font color="#FF0000">*</font>
                                                                        <input type="text" class="form-control" name="stdpass" placeholder="*********" required>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Name</label>
                                                                        <input type="text" class="form-control" name="stdname" placeholder="นายวิทยา  กะก่ำ">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>E-mail</label>
                                                                        <input type="text" class="form-control" name="stdmail" placeholder="wittaya@gmail.com">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Phone</label>
                                                                        <input type="text" class="form-control" name="stdtel" placeholder="09814109xx">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Class</label>
                                                                        <input type="text" class="form-control" name="stdclass" placeholder="6/2">
                                                                    </div>
                                                                </div>
                                                            </div>



                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label>About Me</label>
                                                                        <textarea rows="5" class="form-control" name="stdtxt" placeholder="เล่าอะไรเกียวกับตัวคุณ"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <button type="submit" name="button" value="save" class="btn btn-info btn-fill pull-right">เพิ่มข้อมูล</button>
                                                            
                                                        </form>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>




                                </div>
                                <!-- ปิด row -->


                            </div>
                            <!-- container-fluid -->
                        </div>
                        <!--content -->

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
