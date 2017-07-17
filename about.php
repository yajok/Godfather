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
    <title> About</title>
    
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
                                   <h4 class="page-header text-center">Developer</h4>
                               </div>
                               
        <div class="row">
            <div class="col-sm-4">
                <img class="img-responsive img-rounded" src="admin/assets/img/seksak.png" alt="tumblr" width="400" height="300">
            </div>
            <div class="col-sm-8 ">
                <div class="container">
                    <blockquote>
                        <p>Name : Mr.Seaksak Kanjan</p>
                        <p>Study : Computer Education And Technology</p>
                        <p>Telephone : 087-358-5788</p>
                        <p>E-mail : mos.seksak@gmail.com</p>
                        <p>Facebook : <a href="https://www.facebook.com/seksak.kanjan">Seaksak Kanjan</a> </p>
                        <p>Line : mossi1994</p>
                        <p>Instagram : <a href="https://www.instagram.com/mossi_17/">mossi_17</a> </p>
                    </blockquote>
                </div>
            </div>
        </div>
        <h5 class="page-header text-center"></h5>
        <div class="row">
            <div class="col-sm-8">
                <blockquote class="blockquote-reverse">
                    <p>Name : Mr.wittaya kakam</p>
                    <p>Study : Computer Education And Technology</p>
                    <p>Telephone : 098-141-0908</p>
                    <p>E-mail : dr.yababa@gmail.com</p>
                    <p>Facebook : <a href="https://www.facebook.com/yajokphoto">wittaya kakam</a></p>
                    <p>Line : wittayanajra</p>
                    <p>Instagram : <a href="https://www.instagram.com/apotoxin1994/">apotoxin1994</a></p>

                </blockquote>
            </div>
            <div class="col-sm-4" align="center">
                <img class="img-responsive img-rounded" src="admin/assets/img/wittaya.png" alt="tumblr" width="300" height="250">

            </div>
        </div>

        <div class="row">
            <div class="container-fluid">
                <h5 class="page-header text-center">Contact us</h5>
                <form id="formabout" class="form-horizontal" method="post" action="formabout.php">
                    <fieldset>
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="email">E-mail :</label>
                            <div class="col-sm-6">
                                <input type="email" class="form-control" name="txtemail"  required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="email">Suggestion :</label>
                            <div class="col-sm-6">
                                <textarea class="form-control" rows="5" id="comment" name="abtxt"></textarea>
                            </div>
                        </div>

                        <div class="form-actions">
                            <div class="col-sm-6">
                            </div>
                            <div class="col-sm-4">
                                <button type="submit" class=" btn btn-primary" name="button" value="Save">Save</button>
                                <button class="btn">Cancel</button>
                                <br>
                                <br>
                            </div>
                        </div>
                    </fieldset>
                </form>
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
