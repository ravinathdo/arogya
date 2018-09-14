<?php
session_start();
include './DB.php';
include './core.php';
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
        <div class="content"  style="min-height: 450px">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">

                    </div>
                    <div class="col-md-8" >

                        <?php
                        $sql = "INSERT INTO `hms_opd_appointment`
            (`doctor_id`,
             `patient_id`,
             `appointment_date`,
             `status_code`,
             `fee`,
             `created_user`)
VALUES ('" . $_POST['doctor_id'] . "',
        '" . $_SESSION['userbean']['id'] . "',
        '" . $_POST['appointment_date'] . "',
        'OPEN',
        '" . $_POST['fee'] . "',
        '" . $_SESSION['userbean']['id'] . "');";
//                        echo $sql;
                        $msgArray = array('msgsuccess' => 'New OPD Appointment Created Successfuly', 'msgerror' => 'Invalid or duplicate entry input');
                        $last_id = setData($sql, $msgArray);

                        $appointmentDetails = getAppointmentDetails($last_id);

                        foreach ($appointmentDetails as $value) {
                            ?>
                            <div id="printdiv">
                                <table border="0" style="width: 70% ">
                                    <thead>
                                        <tr>
                                            <th colspan="2">Arogya Hospital,Applointment Placement Slip</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td><?php echo $value['created_date'] ?></td>
                                            <td>Appointment No <?= $value['id'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Patient Details</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Patient Name</td>
                                            <td><?= $value['patient_name'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Phone Number</td>
                                            <td><?= $value['telephone'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Appointment Date</td>
                                            <td><?= $value['appointment_date'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Doctor Name</td>
                                            <td><?= $value['doc_name'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Doctor Fee</td>
                                            <td>Rs <?= $value['doctor_fee'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Hospital Fee</td>
                                            <td>Rs <?= $value['hospital_fee'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Amount</td>
                                            <td>Rs <?= $value['fee'] ?></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <a href="#" onclick="PrintElem('printdiv')">print</a>
                            <?php
                        }
                        ?>






                    </div>
                    <script type="text/javascript">
                        function PrintElem(elem)
                        {
                            var mywindow = window.open('', 'PRINT', 'height=400,width=600');

                            mywindow.document.write('<html><head><title>' + document.title + '</title>');
                            mywindow.document.write('</head><body >');
                            mywindow.document.write('<h1>' + document.title + '</h1>');
                            mywindow.document.write(document.getElementById(elem).innerHTML);
                            mywindow.document.write('</body></html>');

                            mywindow.document.close(); // necessary for IE >= 10
                            mywindow.focus(); // necessary for IE >= 10*/

                            mywindow.print();
                            mywindow.close();

                            return true;
                        }
                    </script>
                    <div class="col-md-2">

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

