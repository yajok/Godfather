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
    <title>God Father Admin</title>
    
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
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-warning text-center">
                                            <i class="ti-server"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>ข่าวสาร</p>
											<?php
                                        
                                        $sql="SELECT idnews FROM news ";
                                        if ($result=mysqli_query($link,$sql))
                                          {
                                          
                                          $rowcount=mysqli_num_rows($result);
                                          mysqli_free_result($result);
                                          }
                                        
                                        ?>
                                         <?php echo "$rowcount"; ?>  ข่าวสาร
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-reload"></i> Updated now
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-success text-center">
                                            <i class="ti-wallet"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>รายวิชา</p>
                                            <?php
                                        
                                        $sql="SELECT subid FROM subject ";
                                        if ($result=mysqli_query($link,$sql))
                                          {
                                          
                                          $rowcount=mysqli_num_rows($result);
                                          mysqli_free_result($result);
                                          }
                                        
                                        ?>
                                        <?php echo "$rowcount"; ?> รายวิชา 
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-calendar"></i> Updated now
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-danger text-center">
                                            <i class="ti-pulse"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>เนื้อหา</p>
                                            <?php
                                        
                                        $sql="SELECT conid FROM content ";
                                        if ($result=mysqli_query($link,$sql))
                                          {
                                          
                                          $rowcount=mysqli_num_rows($result);
                                          mysqli_free_result($result);
                                          }
                                        
                                        ?>
                                         <?php echo "$rowcount"; ?> เนื้อหา
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-timer"></i> Updated now
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-info text-center">
                                            <i class="ti-twitter-alt"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>นักเรียน</p>
											<?php
                                        
                                        $sql="SELECT stdid FROM student ";
                                        if ($result=mysqli_query($link,$sql))
                                          {
                                          
                                          $rowcount=mysqli_num_rows($result);
                                          mysqli_free_result($result);
                                          }
                                        
                                        ?>
                                           
                                        <?php echo "$rowcount"; ?> คน
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-reload"></i> Updated now
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				
				
                    



                    <div class="row">
                        <div class="col-md-6">
                            <div class="card ">
                                <div class="header">
                                    <h4 class="title">จำนวนผู้เข้าชมเว็บไซต์</h4>
                                    <p class="category"></p>
                                </div>
                                <div class="content">
                                    <div id="chartActivity" class="ct-chart"></div>

                                    <div class="footer">
                                        <div class="legend">
                                            <i class="fa fa-circle text-info"></i> ในปี 2016
                                            
                                        </div>
                                        <hr>
                                        <div class="stats">
                                            <i class="fa fa-check"></i> ดูข้อมูลเพิ่มเติม
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card ">
                                <div class="header">
                                    <h4 class="title">คำแนะนำผู้ใช้งานและปัญหา</h4>
                                    <p class="category"></p>
                                </div>
                                <div class="content">
                                    <div class="table-full-width">
                                        <table class="table">
                                            <tbody>
				<?php
				$mysql = "select * from about";
				$result = mysqli_query($link,$mysql);
	
				while($mydata = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
				
				?>
                                                <tr>
                                                    
                                                    <td><?php echo $mydata['abtxt']?></td>
                                                    <td class="td-actions text-right">
                                                       <?php echo $mydata['abmail']?>
                                                    </td>
                                                </tr>
                      <?php 
				}
							?>
                                                
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="footer">
                                        <hr>
                                        <div class="stats">
                                            <i class="fa fa-history"></i> Updated now
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


</body>

<?php
    include("include/script.php");
?>


<script type="text/javascript">
    $(document).ready(function() {

        demo.initChartist();

        $.notify({
            icon: 'pe-7s-smile',
            message: "สวัสดี <b><?php echo $_SESSION['tname']; ?></b> <br> ยินดีต้อนรับเข้าสู่ระบบจัดการข้อมูลเว็บ God Father."

        }, {
            type: 'success',
            timer: 4000
        });

    });

</script>

</html>
