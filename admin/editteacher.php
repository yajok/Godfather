<?php
session_start();
include("connectdb.php");

$tid=$_GET['tid'];

$mysql = "select * from teacher where tid='$tid'";
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
                                             <h4>แก้ไขข้อมูลครู</h4>

                                            </div>
                                            <div class="content">
                                                <form method="post" action="updateteacher.php">
                                                    

                                                    <div class="row">

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Username</label>
                                                                <font color="#FF0000">*</font>
                                                                <input type="text" class="form-control" name="tuser"  value="<?php echo $mydata['tuser']?>" required>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Password</label>
                                                                <font color="#FF0000">*</font>
                                                                <input type="text" class="form-control" name="tpass"  value="<?php echo $mydata['tpass']?>" required>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Name</label>
                                                                <input type="text" class="form-control" name="tname"  value="<?php echo $mydata['tname']?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>E-mail</label>
                                                                <input type="text" class="form-control" name="tmail"  value="<?php echo $mydata['tmail']?>">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Phone</label>
                                                                <input type="text" class="form-control" name="ttel"  value="<?php echo $mydata['ttel']?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Room</label>
                                                                <input type="text" class="form-control" name="troom"  value="<?php echo $mydata['troom']?>">
                                                            </div>
                                                        </div>
                                                    </div>



                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label>About Me</label>
                                                                <textarea rows="5" class="form-control" name="ttxt" ><?php echo $mydata['ttxt']?></textarea>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <input type="hidden" name="tid" value="<?php echo $mydata['tid']?>">
                                                    <button type="submit" name="button" value="update" class="btn btn-info btn-fill pull-right">อัพเดตข้อมูล</button>
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
