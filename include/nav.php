<nav class="navbar navbar-default navbar-fixed">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">God Father</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-left">
				


            </ul>

            <ul class="nav navbar-nav navbar-right">
 <?php
if(!isset($_SESSION['stdid'])){
                       
  ?>
				<li>
                    <a href="logout.php">
                        กรุณาเข้าสู่ระบบ
                    </a>
                </li>
  
  <?php
     }
     else{
  ?>
               <li>
                    <a>
                        <?php echo $_SESSION['stdname']; ?>
                    </a>
                </li>

                <li>
                    <a href="logout.php">
                        Log out
                    </a>
                </li>
<?php
        }
    ?>
               
            </ul>
        </div>
    </div>
</nav>
