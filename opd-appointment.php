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
        <?php
        if (isset($_SESSION['userbean'])) {
            include './_header_top.php';
            include './_header.php';
        } else {
            include './_top_pre_login.php';
            include './_header_pre_login.php';
        }
        ?>

        <!-- content -->
        <div class="content">
            <div class="container">
                <div class="panel panel-warning">
                    <div class="panel-heading ">OPD Appointment Placement</div>
                    <div class="panel-body">
                                  <div class="row">
                    <div class="col-md-6">
                        <form class="form-horizontal" action="new-appointment-complete.php" method="post">
                            <div class="form-group">
                                <label for="text" class="control-label col-xs-4">Doctor Name</label> 
                                <div class="col-xs-8">
                                    <input id="text" name="text" type="text" readonly="" class="form-control" value="<?php echo $_GET['doctor_name']?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="text1" class="control-label col-xs-4">Doctor Fee</label> 
                                <div class="col-xs-8">
                                    <input id="text1" name="text1" type="text" readonly="" class="form-control" value="<?php echo $_GET['doc_fee']?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-xs-offset-4 col-xs-8">
                                    <!--<button name="submit" type="submit" class="btn btn-primary">Submit</button>-->
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6">
                        
                        <form class="form-horizontal" action="opd-appointment-complete.php" method="post">
                            <input type="hidden" name="doctor_id" value="<?php echo $_GET['doctor_id']?>" />
                            <input type="hidden" name="doctor_fee" value="<?php echo $_GET['doc_fee']?>" />
                            <div class="form-group">
                                <label for="text" class="control-label col-xs-4">Appointment Date</label> 
                                <div class="col-xs-8">
                                    <input id="text" required="" name="appointment_date" min="<?= $_SESSION['today']?>" type="date" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Amount" class="control-label col-xs-4">Amount</label> 
                                <div class="col-xs-8">
                                    <input id="Amount" name="fee" type="text" readonly="" class="form-control" value="<?php echo $_GET['doc_fee']?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="text2" class="control-label col-xs-4">Card Number</label> 
                                <div class="col-xs-8">
                                    <input id="text2" name="text2" type="text" class="form-control">
                                </div>
                            </div> 
                            <div class="form-group row">
                                <div class="col-xs-offset-4 col-xs-8">
                                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                  
                    </div>
                </div>
                    </div>
                </div>
                
                
      
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- //content -->
        <?php include './_footer.php'; ?>
        <!-- contact -->




        <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
    </body>
</html>

