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
//            echo 'xxx';
            include './_top_pre_login.php';
            include './_header_pre_login.php';
        }
        ?>

        <div class="content" style="min-height: 450px">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div style="width: 50%">
                          
                            <div class="panel panel-warning">
                                <div class="panel-heading ">Appointment Report</div>
                                <div class="panel-body">
                                    
                                    <form class="form-horizontal" action="report-appointment.php" method="post">
                            <div class="form-group">
                                <label for="text" class="control-label col-xs-4">From Date</label> 
                                <div class="col-xs-8">
                                    <input id="text" name="from_date" type="date" class="form-control">
                           
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="text1" class="control-label col-xs-4">To Date</label> 
                                <div class="col-xs-8">
                                    <input id="text1" name="to_date" type="date" class="form-control">
                                </div>
                            </div> 
                            <div class="form-group row">
                                <div class="col-xs-offset-4 col-xs-8">
                                    <button name="btnSubmit" type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                                </div>
                            </div>
                            
                            
                            
                        </div>
                        


                        <?php
                        if (isset($_POST['btnSubmit'])) {
                            ?>
                          <a href="#" onclick="PrintElem('printdiv')">print</a>
                            <div id="printdiv">
                                <table border="1" style="width: 100%">
                                    <thead>
                                        <tr>
                                            <th colspan="4" style="text-align: center">Appointment Report <br>
                                                From : <?= $_POST['from_date'] ?>
                                                To : <?= $_POST['to_date'] ?> 
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>Appointment No</th>
                                            <th>Appointment Date</th>
                                            <th>Fee</th>
                                            <th>Request Date Time</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if (isset($_POST['btnSubmit'])) {
                                            $sql = "SELECT * FROM hms_doctor_appointment WHERE created_user = '" . $_SESSION['userbean']['id'] . "' AND DATE(appointment_date) >= '" . $_POST['from_date'] . "' AND DATE(appointment_date) <= '" . $_POST['to_date'] . "'";

                                            $data = getData($sql);
                                            foreach ($data as $value) {
                                                ?>
                                                <tr>
                                                    <td><?= $value['id'] ?></td>
                                                    <td><?= $value['appointment_date'] ?></td>
                                                    <td><?= $value['fee'] ?></td>
                                                    <td><?= $value['created_date'] ?></td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>    
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



                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- //content -->
        <br>
        <br>
        <br>
        <!-- contact -->
        <?php include './_footer.php'; ?>
        <!-- //contact -->

        <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
    </body>
</html>

