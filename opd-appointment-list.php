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


        <div class="content"  style="min-height: 450px">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <table id="example" class="display" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>OPD AppointmentNo</th>
                                    <th>Appointment Date</th>
                                    <th>Staus</th>
                                    <th>Created Date</th>
                                    <th>Fee</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql = "SELECT * FROM hms_opd_appointment WHERE created_user = '" . $_SESSION['userbean']['id'] . "'";
                                $data = getData($sql);
                                if($data!=null)
                                foreach ($data as $row) {
                                    ?>
                                    <tr>
                                        <td><?= $row['id']; ?></td>
                                        <td><?= $row['appointment_date']; ?></td>
                                        <td><?= $row['status_code']; ?></td>
                                        <td><?= $row['created_date']; ?></td>
                                        <td><?= $row['fee']; ?></td>
                                    </tr>

                                    <?php
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

