<?php
session_start();
include("connectdb.php");
if(!isset($_SESSION['stdid'])){
    
    echo "<meta http-equiv= refresh content=0;URL=login.html>";
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>Iifo</title>
    
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
                                   <h5 class="page-header text-center"><a href="">Web Info</a></h5>
                               </div>
                               <div class="content">
                                   <ul>
            <li>เว็บไซต์นี้เป็นเว็บเรียนออนไลน์ หรือ E-learning จัดทำขึ้นเพื่อเผยแพร่เนื้อหา บทเรียน รวมทั้งสร้างกระบวนการเรียนรู้ผ่านอินเทอร์เน็ต สำหรับนักเรียน นักศึกษา และบุคคลที่สนใจได้เข้าเรียนตมาความสะดวกและตามอัธยาศัย</li>
            <li>การจัดทำเว็บไซต์นี้ เป็นส่วนหนึ่งของรายวิชา การออกแบบและพัฒนาการสอนบนเว็บ (4123643)</li>
            <li>การจัดทำเว็บไซต์นี้ หากผิดพลาดประการใด หรือการใช้ภาพ ข้อความ เนื้อหา ที่ไม่เหมาะสม ติดลิขสิทธิ์ ก็ขออภัยมา ณ ที่นี้ด้วยครับ</li>
        </ul>
        <p class="text-right">ด้วยความเคารพ...<a href="about.php">คณะผู้จัดทำ</a></p>
        <div align="center">
            <img class="img-responsive " align="center" src="admin/assets/img/banana.png" alt="banana" width="600" height="400">
            
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
