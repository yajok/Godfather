<?php
session_start();
include("connectdb.php");

$stdid=$_GET['stdid'];

$mysql = "select * from student where stdid='$stdid'";
$result = mysqli_query($link,$mysql);
$mydata = mysqli_fetch_array($result,MYSQLI_ASSOC);
?>
    <!doctype html>
    <html lang="en">

    <head>
        <title>Admin | Editteacher</title>

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
                                                <h4>แก้ไขข้อมูลนักเรียน</h4>

                                            </div>
                                            <div class="content">
                                                <form method="post" action="updatestudent.php">
                                                    <div class="row">

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Student ID </label>
                                                                <font color="#FF0000">*</font>
                                                                <input type="text" class="form-control" name="stdid" value="<?php echo $mydata['stdid']?>" disabled>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Password</label>
                                                                <font color="#FF0000">*</font>
                                                                <input type="text" class="form-control" name="stdpass" value="<?php echo $mydata['stdpass']?>">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Name</label>
                                                                <input type="text" class="form-control" name="stdname" value="<?php echo $mydata['stdname']?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>E-mail</label>
                                                                <input type="text" class="form-control" name="stdmail" value="<?php echo $mydata['stdmail']?>">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Phone</label>
                                                                <input type="text" class="form-control" name="stdtel" value="<?php echo $mydata['stdtel']?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Class</label>
                                                                <input type="text" class="form-control" name="stdclass" value="<?php echo $mydata['stdclass']?>">
                                                            </div>
                                                        </div>
                                                    </div>



                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label>About Me</label>
                                                                <textarea rows="5" class="form-control" name="stdtxt" ><?php echo $mydata['stdtxt']?></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button type="submit" name="button" value="update" class="btn btn-info btn-fill pull-right">อัพเดตข้อมูล</button>
                                                    
                                                </form>
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
