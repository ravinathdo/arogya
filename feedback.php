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
        <div class="header wow zoomIn">
            <div class="container">
                <div class="header_left" data-wow-duration="2s" data-wow-delay="0.5s">
                    <ul>
                        <li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>+123 456 7890</li>
                        <li><a href="mailto:info@example.com"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>info@example.com</a></li>
                    </ul>
                </div>
                <div class="header_right">
                    <div class="login">
                        <ul>
                            <li><a href="#" data-toggle="modal" data-target="#myModal4"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Sample User</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#myModal5"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Logout</a></li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- //header -->
        <?php include './_header.php'; ?>
        <!-- content -->

        <div class="content">
            <div class="container">
                <?php
                if (isset($_POST['btnfeedback'])) {
                    $sql = "INSERT INTO hms_feedback
            (`feedback`,
             `created_user`)
VALUES ('" . $_POST['feedback'] . "',
        '" . $_SESSION['userbean']['id'] . "');";
                    $msgArray = array('msgsuccess' => 'Feedback posted successfully', 'msgerror' => 'Invalid or duplicate entry input');
                    setData($sql, $msgArray);
                }
                
                if(isset($_GET['id'])){
                    $sql = "DELETE FROM hms_feedback WHERE id = '".$_GET['id']."'";
                    setDelete($sql);
                }
                ?>
                <div class="row">
                    <div class="col-md-4">
                        <form class="form-horizontal" action="feedback.php" method="post">
                            <div class="form-group">
                                <label for="" class="control-label col-xs-4">Feedback</label> 
                                <div class="col-xs-10">
                                    <textarea id="" name="feedback" cols="40" rows="5" class="form-control"></textarea>
                                </div>
                            </div> 
                            <div class="form-group row">
                                <div class="col-xs-offset-4 col-xs-8">
                                    <button name="btnfeedback" type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-8">
                        
                        
                        
                        
                        
                        <table id="example" class="display" cellspacing="0" width="100%" >
                            <tbody>
                                <?php
                                $sql = "SELECT * FROM hms_feedback WHERE created_user = '".$_SESSION['userbean']['id']."'";
                                $data = getData($sql);
                                if ($data != null) {
                                    foreach ($data as $value) {
                                        ?>
                                        <tr>
                                            <td><?= $value['created_date']?></td>
                                            <td><?= $value['feedback']?></td>
                                            <td><a href="feedback.php?id=<?= $value['id']?>">remove</a></td>
                                        </tr>
                                        <?php
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                        <link href="css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
                        <script src="js/jquery.dataTables.min.js" type="text/javascript"></script>
                        <script type="text/javascript">
                            $(document).ready(function () {
                                $('#example').DataTable();
                            });
                        </script>
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

