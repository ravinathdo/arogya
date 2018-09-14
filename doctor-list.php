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

        <div class="content" style="min-height: 450px">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <table id="example" class="display" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Doctor</th>
                                    <th>Specilist</th>
                                    <th>Fee</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>


                                <?php
                                $sql = "SELECT hms_doctor .*,hms_specialist.specialist FROM hms_doctor INNER JOIN hms_specialist
ON hms_doctor.specialist_id = hms_specialist.id";
                                $data = getData($sql);
                                foreach ($data as $value) {
                                    ?>
                                    <tr>
                                        <td><?= $value['first_name']; ?> <?= $value['last_name']; ?></td>
                                        <td><?= $value['specialist']; ?></td>
                                        <td><?= $value['doc_fee']; ?></td>
                                        <td>
                                            <?php if ($value['specialist'] == 'OPD') { ?>
                                            <a href="opd-appointment.php?doctor_id=<?= $value['id']; ?>&doctor_name=<?= $value['first_name']; ?>&doc_fee=<?= $value['doc_fee']; ?>" class="btn btn-warning btn-sm">OPD Appointment</a>
                                            <?php } else {
                                                ?>
                                                <a href="new-appointment.php?doctor_id=<?= $value['id']; ?>&doctor_name=<?= $value['first_name']; ?>&doc_fee=<?= $value['doc_fee']; ?>&hospital_fee=1000" class="btn btn-success btn-sm">Clinic Appointment</a>
                                                <?php }
                                            ?>
                                        </td>
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

