<?php
session_start();
include("connectdb.php");

$idnews=$_GET['idnews'];

$mysql = "select * from news where idnews='$idnews'";
$result = mysqli_query($link,$mysql);
$mydata = mysqli_fetch_array($result,MYSQLI_ASSOC);
?>
    <!doctype html>
    <html lang="en">

    <head>
        <title>Admin | Editnews</title>

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
                                                <h4>แก้ไขข้อมูลข่าวสาร</h4>

                                            </div>
                                            <div class="content">
                                                <form method="post" action="updatenews.php">
                                                    

                                                    <div class="row">

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>New title</label>
                                                                <font color="#FF0000">*</font>
                                                                <input type="text" class="form-control" name="namenews" value="<?php echo $mydata['namenews']?>" required>

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
                                                                <input type="date" class="form-control" name="datenews" value="<?php echo $mydata['datenews']?>">
                                                            </div>
                                                        </div>

                                                    </div>


                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label>Content</label>
                                                                <font color="#FF0000">*</font>
                                                                <textarea rows="5" class="form-control" name="newsdata" id="mytextarea"><?php echo $mydata['newsdata']?></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" name="tid" value="<?php echo $mydata['idnews']?>">

                                                    <button type="submit" name="button" value="save" class="btn btn-info btn-fill pull-right">อัพเดตข้อมูล</button>
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
