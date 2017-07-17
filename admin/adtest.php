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
    <title>Admin | Test</title>
    
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
                                   
                               </div>
                               <div class="content">
                                   
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
