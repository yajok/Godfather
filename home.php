<?php
session_start();
include("connectdb.php");
if(!isset($_SESSION['tid'])){
    
    //echo "<meta http-equiv= refresh content=0;URL=index.html>";
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>Home</title>
    
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
                           <h3 class="page-header"><a href="">ข่าวสาร</a></h3>
						   
                       </div>
            <?php
            $mysql = "select * from news";
            $result = mysqli_query($link,$mysql);
            while ($mydata =mysqli_fetch_array($result,MYSQLI_ASSOC)){
            ?>
			<div class="row">
			    <div class="col-sm-12">
			        <div class="card">
			            <div class="header">
                        <p><?php echo $mydata['namenews']?></p>    
			                <hr>
			            </div>
			            <div class="content">
                        <p>
			               ประกาศเมื่อ : <?php echo $mydata['datenews']?>
				            <?php echo $mydata['newsdata']?>
				        </p>
			            </div>
			        </div>
			    </div>
			</div>
                                   
			<?php
            }
            ?>
				   
					   
					   
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
<script type="text/javascript">
    $(document).ready(function() {

        demo.initChartist();

        $.notify({
            icon: 'pe-7s-smile',
            message: "สวัสดี <b><?php echo $_SESSION['stdname']; ?></b> <br> ยินดีต้อนรับเข้าสู่เว็บ God Father."

        }, {
            type: 'success',
            timer: 4000
        });

    });

</script>

</body>
</html>
