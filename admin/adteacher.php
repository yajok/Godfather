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
        <title>Admin | Teacher</title>

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
                                                <h4 class="title">จัดการผู้สอน</h4>

                                            </div>
                                            <div class="content">
                                                <ul class="nav nav-tabs">
                                                    <li class="active"><a data-toggle="tab" href="#teachername">รายชื่อผู้สอน</a></li>
                                                    <li><a data-toggle="tab" href="#teacheradd">เพิ่มผู้สอน</a></li>

                                                </ul>
                                                <div class="tab-content">
                                                    <div id="teachername" class="tab-pane fade in active">
                                                        <div class="row">

                <?php
				$mysql = "select * from teacher";
				$result = mysqli_query($link,$mysql);
	
				while($mydata = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
				
				?>

                                                                <div class="col-md-4">
                                                                    <br>
                                                                    <br>
                                                                    <div class="card card-user">
                                                                        <div class="image">
                                                                            <img src="assets/img/sidebar-3.jpg" alt="">
                                                                        </div>
                                                                        <div class="content">
                                                                            <div class="author">
                                                                                <a href="#">
                                                                                    <img class="avatar border-gray" src="assets/img/avatar.png" alt="..." />

                                                                                    <h4 class="title"><?php echo $mydata['tname']?><br />
                                                                                 <small><?php echo $mydata['tuser']?></small>
                                                                                </h4>
                                                                                </a>
                                                                            </div>
                                                                            <p class="description text-center">
                                                                                <?php echo $mydata['tmail']?>
                                                                                    <br>
                                                                                    <?php echo $mydata['ttel']?>
                                                                                        <br>
                                                                                        <?php echo $mydata['troom']?>
                                                                            </p>
                                                                        </div>
                                                                        <hr>
                                                                        <div class="text-center">
                                                                           <br>
                                                                            <a href="editteacher.php?tid=<?php echo $mydata['tid'];?>" class="btn btn-large btn-warning"> Edit </a>
                                                                            
                                                                          &nbsp; &nbsp;
                                                                           
                                                                            <a href="manageteacher.php?tid=<?php echo $mydata['tid'];?>&button=delete" class="btn btn-danger btn-large"> Delete </a>
                                                                            
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


                                                    <div id="teacheradd" class="tab-pane fade">

                                                        <form method="post" action="manageteacher.php">
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
                                                                        <label>Username</label>
                                                                        <font color="#FF0000">*</font>
                                                                        <input type="text" class="form-control" name="tuser" placeholder="wittaya" required>

                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1">Password</label>
                                                                        <font color="#FF0000">*</font>
                                                                        <input type="text" class="form-control" name="tpass" placeholder="*********" required>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Name</label>
                                                                        <input type="text" class="form-control" name="tname" placeholder="นายวิทยา  กะก่ำ">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>E-mail</label>
                                                                        <input type="text" class="form-control" name="tmail" placeholder="wittaya@gmail.com">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Phone</label>
                                                                        <input type="text" class="form-control" name="ttel" placeholder="09814109xx">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Room</label>
                                                                        <input type="text" class="form-control" name="troom" placeholder="32.301">
                                                                    </div>
                                                                </div>
                                                            </div>



                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label>About Me</label>
                                                                        <textarea rows="5" class="form-control" name="ttxt" placeholder="เล่าอะไรเกียวกับตัวคุณ"></textarea>
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




                                </div><!-- ปิด row -->



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
