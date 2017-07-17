<?php
session_start();
include("connectdb.php");

$subid=$_GET['subid'];

$mysql = "select * from subject where subid='$subid'";
$result = mysqli_query($link,$mysql);
$mydata = mysqli_fetch_array($result,MYSQLI_ASSOC);
?>
    <!doctype html>
    <html lang="en">

    <head>
        <title>Admin | Editsubject</title>

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
                                                <h4>แก้ไขข้อมูลรายวิชา</h4>

                                            </div>
                                            <div class="content">
                                                <form method="post" action="updatesubject.php">
                                            

                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Subject ID</label>
                                                            <font color="#FF0000">*</font>
                                                            <input type="text" class="form-control" name="subid" value="<?php echo $mydata['subid']?>" disabled>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Subject name</label>
                                                            <font color="#FF0000">*</font>
                                                            <input type="text" class="form-control" name="subname" value="<?php echo $mydata['subname']?>">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>subterm</label>
                                                            <input type="text" class="form-control" name="subterm" value="<?php echo $mydata['subterm']?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>subdate</label>
                                                            <input type="date" class="form-control" name="subdate" value="<?php echo $mydata['subdate']?>">
                                                        </div>
                                                    </div>
                                                </div>





                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Subdetail</label>
                                                            <textarea rows="3" class="form-control" name="subdetail" id="mytextarea"><?php echo $mydata['subdetail']?></textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                                <button  name="button" value="update" class="btn btn-info btn-fill pull-right">อัพเดตข้อมูล</button>
                                                <div class="clearfix"></div>
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
