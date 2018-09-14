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

        <!-- //header -->
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
                    <div class="col-md-4">
                        
                        <div class="panel panel-primary">
                            <div class="panel-heading ">Serch Doctor Online</div>
                            <div class="panel-body">
                                     <form class="form-horizontal" action="doctor-search.php" method="post">
                            <div class="form-group">
                                <label for="select" class="control-label col-xs-4">Select</label> 
                                <div class="col-xs-8">

                                    <select id="select" name="specialist" class="select form-control">
                                        <option value="">--select--</option>
                                        <?php
                                        $sql = "SELECT * FROM hms_specialist";
                                        $data = getData($sql);
                                        foreach ($data as $value) {
                                            ?>
                                            <option value="<?php echo $value['id']; ?>"><?php echo $value['specialist']; ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div> 
                            <div class="form-group row">
                                <div class="col-xs-offset-4 col-xs-8">
                                    <button name="btnGetSp" type="submit" class="btn btn-primary">Search</button>
                                </div>
                            </div>
                        </form>
                            </div>
                        </div>
                        
                        
                   
                    </div>
                    <div class="col-md-8">

                        
                        
                       
                        
                        

                        <?php
                        if (isset($_POST['btnGetSp'])) {
                            ?>
                        
                        <div class="panel panel-success">
                            <div class="panel-heading ">Doctor Details</div>
                            <div class="panel-body">
                                    <table id="example" class="display" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>Doctor</th>
                                        <th>Availability</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = " SELECT * FROM hms_doctor WHERE specialist_id = '" . $_POST['specialist'] . "' ";
                                    $resultx = getData($sql);
                                    if ($resultx != FALSE) {
                                        while ($row = mysqli_fetch_assoc($resultx)) {
                                            ?>
                                            <tr>
                                                <td><?= $row['first_name']; ?>
                                                    <?php if(isset($_SESSION['userbean'])){ 
                                                        ?>
                                                    <!--<a href="new-appointment.php?doctor_id=<?= $row['id']; ?>&doctor_name=<?= $row['first_name']; ?> <?= $row['last_name']; ?>&doc_fee=<?= $row['doc_fee']; ?>&hospital_fee=1000" class="btn btn-success">New Appointment</a>-->
                                                    <?php }?>
                                                </td>
                                                <td><?php
                                $sql2 = "SELECT * FROM hms_doctor_availability WHERE doctor_id  = '" . $row['id'] . "'";
                                $result2 = getData($sql2);
                                if ($result2 != null) {
                                                ?>
                                                        <table border="1">
                                                            <thead>
                                                                <tr>
                                                                    <th>Date</th>
                                                                    <th>From</th>
                                                                    <th>To</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                foreach ($result2 as $value) {
                                                                    ?>
                                                                    <tr>
                                                                        <td><?= $value['day_available'] ?></td>
                                                                        <td><?= $value['from_time'] ?></td>
                                                                        <td><?= $value['to_time'] ?></td>
                                                                    </tr>
                                                                    <?php
                                                                }
                                                            }
                                                            ?>
                                                        </tbody>
                                                    </table>       
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>
                            </div>
                        </div>
                        
                            <?php
                        }else{
                            ?>
                         <div class="panel panel-success">
                            <div class="panel-heading ">Doctor Details</div>
                            <div class="panel-body">
                                <img src="images/doctor.png">
                            </div>
                        </div>
                        <?php
                            
                        }
                        ?>


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



        <!--login-signup-->
        <?php include_once './_login_signup.php'; ?>
        <!--login-signup-->




        <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
    </body>
</html>

