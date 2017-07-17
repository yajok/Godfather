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
        <title>Admin | Content</title>

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
                                                <h4 class="title">จัดการเนื้อหา</h4>

                                            </div>
                                            <div class="content">
                                                <ul class="nav nav-tabs">
                                                    <li class="active"><a data-toggle="tab" href="#contentname">เนื้อหา</a></li>
                                                    <li><a data-toggle="tab" href="#contentadd">เพิ่มเนื้อหา</a></li>

                                                </ul>
                                                <div class="tab-content">
                                                    <div id="contentname" class="tab-pane fade in active">
                                                        <div class="row">

                                                            <?php
				$mysql = "select * from content";
				$result = mysqli_query($link,$mysql);
				while($mydata = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
				
				?>

                                                                <div class="col-md-4">
                                                                    <br>
                                                                    <br>
                                                                    <div class="card card-user">
                                                                        <div class="image">
                                                                            <img src="assets/img/img%20(9).jpg" alt="">
                                                                        </div>
                                                                        <div class="content">
                                                                            <div class="text-center">

                                                                                <h4 class="title">
                                                                                <?php echo $mydata['contitle']?><br>
                                                                                 <small>
                                                                                 <?php echo $mydata['subid']?></small>
                                                                                </h4>
                                                                                <br>

                                                                            </div>
                                                                            <p class="description text-center">

                                                                                <br>เพิ่มเมื่อ :
                                                                                <?php echo $mydata['condate']?>
                                                                            </p>
                                                                        </div>
                                                                        <hr>
                                                                        <div class="text-center">
                                                                            <br>
                                                                            <a href="editcontent.php?conid=<?php echo $mydata['conid'];?>" class="btn btn-large btn-warning"> Edit </a> &nbsp; &nbsp;

                                                                            <a href="managecontent.php?conid=<?php echo $mydata['conid'];?>&button=delete" class="btn btn-danger btn-large"> Delete </a>

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


                                                    <div id="contentadd" class="tab-pane fade">

                                                        <form method="post" action="managecontent.php">
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
                                                                        <input type="text" class="form-control" name="contitle" required>

                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label >SUBJECT</label>
                                                                        <font color="#FF0000">*</font>
                                            <?php
                                            $mysql = "select * from subject";
				                            $result = mysqli_query($link,$mysql);
                                        
                                        
                                            ?>

                                                                            <select class="form-control" name="subid">
                                                                                <option value="">
                                                                                    กรุณาเลือกรายวิชา
                                                                                </option>
                                                                                <?php
                                                    while ($row =mysqli_fetch_array($result,MYSQLI_ASSOC)){
                                            
                                                ?>

                                                                                    <option value="<?php echo $row['subid']?>">
                                                                                        <?php echo $row['subid']?>
                                                                                    </option>
                                                                                    <?php
                                        }
                                                ?>
                                                                            </select>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                                <div class="row">
                                                                    
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label>date</label>
                                                                            <input type="date" class="form-control" name="condate">
                                                                        </div>
                                                                    </div>
                                                                </div>





                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label>contentdetail</label>
                                                                            <textarea rows="3" class="form-control" name="contxt" id="mytextarea"></textarea>
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
