<?php
session_start();
include './DB.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Arogya</title>
        <!-- for-mobile-apps -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="arogya" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
            function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- //for-mobile-apps -->
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link rel="stylesheet" href="css/jquery-ui.css" />
        <link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
        <!-- js -->
        <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
        <script type="text/javascript" src="js/numscroller-1.0.js"></script>

        <!-- //js -->


        <!-- fonts -->
        <link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Viga' rel='stylesheet' type='text/css'>

        <!-- start-smoth-scrolling -->
        <script type="text/javascript" src="js/move-top.js"></script>
        <script type="text/javascript" src="js/easing.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                $(".scroll").click(function (event) {
                    event.preventDefault();
                    $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
                });
            });
        </script>
        <!-- start-smoth-scrolling -->

        <!--start-date-piker-->
        <script src="js/jquery-ui.js"></script>
        <script>
            $(function () {
                $("#datepicker,#datepicker1").datepicker();
            });
        </script>
        <!--/End-date-piker-->
        <script src="js/responsiveslides.min.js"></script>
        <!--animate-->
        <link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
        <script src="js/wow.min.js"></script>
        <script>
            new WOW().init();
        </script>
        <!--//end-animate-->
    </head>
    <body>
        <!-- header -->
        <?php include './_header_top.php'; ?>
        <!-- //header -->
        <?php include './_header.php'; ?>
        <!-- content -->

        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h3>User Profile</h3>


                        <?php
                        if (isset($_POST['btnEditProfile'])) {
                            $sql = "UPDATE `hms_patient`
SET 
  `first_name` = '" . $_POST['first_name'] . "',
  `last_name` = '" . $_POST['last_name'] . "',
  `telephone` = '" . $_POST['telephone'] . "',
  `dob` = '" . $_POST['dob'] . "'
WHERE `id` = '" . $_POST['id'] . "';";
                            if (setUpdate($sql, TRUE)) {
                                $_SESSION['userbean']['first_name'] = $_POST['first_name'];
                                $_SESSION['userbean']['last_name'] = $_POST['last_name'];
                                $_SESSION['userbean']['telephone'] = $_POST['telephone'];
                                $_SESSION['userbean']['dob'] = $_POST['dob'];
                            }
                        }



                        
                        
                        
                        if (isset($_POST['btnChangePassword'])) {
                            $new_password = $_POST['new_password'];
                            $retype_password = $_POST['retype_password'];
                            if (strlen($new_password) >= 6 && ($new_password == $retype_password)) {


                                $sqlRead = "SELECT * FROM hms_patient WHERE id = '" . $_POST['id'] . "' AND pword = PASSWORD('" . $_POST['old_password'] . "');";
                                $data = getData($sqlRead);
                                if ($data != null) {
                                    $sql = "UPDATE `hms_patient`
SET 
  `pword` = PASSWORD('" . $_POST['new_password'] . "')
WHERE `id` = '".$_SESSION['userbean']['id']."' AND pword = PASSWORD('" . $_POST['old_password'] . "');";
//                                    echo $sql;
                                    setUpdate($sql, TRUE);
                                } else {
                                    echo 'Invalid password';
                                }
                            } else {
                                echo 'Invalid password constrains';
                            }
                        }
                        
                        
                        
                        
                        
                        ?>



                        <form class="form-horizontal" action="" method="post">
                            <input type="hidden" name="id" value="<?= $_SESSION['userbean']['id'] ?>" />
                            <div class="form-group">
                                <label for="text" class="control-label col-xs-4">First Name</label> 
                                <div class="col-xs-8">
                                    <input id="text" name="first_name"  required="" type="text" class="form-control" value="<?= $_SESSION['userbean']['first_name'] ?>" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="text1" class="control-label col-xs-4">Last Name</label> 
                                <div class="col-xs-8">
                                    <input id="text1" name="last_name" required=""  type="text" class="form-control" value="<?= $_SESSION['userbean']['last_name'] ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="control-label col-xs-4">User Role</label> 
                                <div class="col-xs-8">
                                    <input id="" name="" type="text" required=""  class="form-control" readonly="" value="<?= $_SESSION['userbean']['user_role'] ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="text3" class="control-label col-xs-4">Telephone</label> 
                                <div class="col-xs-8">
                                    <input id="text3" name="telephone" type="text" class="form-control" value="<?= $_SESSION['userbean']['telephone'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="text3" class="control-label col-xs-4">Date of Birth</label> 
                                <div class="col-xs-8">
                                    <input id="text3" name="dob" type="date" class="form-control" value="<?= $_SESSION['userbean']['dob'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="text4" class="control-label col-xs-4">Email</label> 
                                <div class="col-xs-8">
                                    <input id="text4" name="text4" type="text" class="form-control" readonly="" value="<?= $_SESSION['userbean']['email'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="text5" class="control-label col-xs-4">Status</label> 
                                <div class="col-xs-8">
                                    <input id="text5" name="text5" type="text" class="form-control" readonly="" value="<?= $_SESSION['userbean']['status_code'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="text6" class="control-label col-xs-4">Created Date</label> 
                                <div class="col-xs-8">
                                    <input id="text6" name="text6" type="text" readonly="" class="form-control" value="<?= $_SESSION['userbean']['created_date'] ?>" >
                                </div>
                            </div> 
                            <div class="form-group row">
                                <div class="col-xs-offset-4 col-xs-8">
                                    <button name="btnEditProfile" type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>


                    </div>
                    <div class="col-md-4">
                        <h3>Change Password</h3>
                        <form class="form-horizontal" action="profile.php" method="post">
                            <input type="hidden" name="id" value="<?= $_SESSION['userbean']['id']?>"/>
     
                            <div class="form-group">
                                <label for="text" class="control-label col-xs-4">Old Password</label> 
                                <div class="col-xs-8">
                                    <input id="text" name="old_password" required=""  type="password" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="text1" class="control-label col-xs-4">New Password</label> 
                                <div class="col-xs-8">
                                    <input id="text1" name="new_password" required=""  type="password" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="text2" class="control-label col-xs-4">Retype Password</label> 
                                <div class="col-xs-8">
                                    <input id="text2" name="retype_password" required=""  type="password" class="form-control">
                                </div>
                            </div> 
                            <div class="form-group row">
                                <div class="col-xs-offset-4 col-xs-8">
                                    <button name="btnChangePassword" type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- //content -->

        <!-- contact -->
<?php include './_footer.php'; ?>
        <!-- //contact -->

        <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
    </body>
</html>

