<?php
if(isset($_GET['flag'])){
    $_SESSION['menu_flag'] = $_GET['flag'];
}
?>

<div class="header-bottom ">
    <div class="container">
        <nav class="navbar navbar-default">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="logo grid">
                    <div class="grid__item color-3">
                        <h1><a class="link link--nukun" href="index.html"><i></i>INFI<span>R</span>MARY</a></h1>
                    </div>
                </div>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                <nav class="menu menu--horatio">
                    <ul class="nav navbar-nav menu__list">
                        <li class="menu__item <?php if($_SESSION['menu_flag'] == 'home'){ echo 'menu__item--current'; } ?> "><a href="home.php?flag=home" class="menu__link">Home</a></li>
                        <li class="menu__item <?php if($_SESSION['menu_flag'] == 'finddoctor'){ echo 'menu__item--current'; } ?>"><a href="doctor-search.php?flag=finddoctor" class="menu__link">Find Doctor</a></li>
                        <li class="menu__item <?php if($_SESSION['menu_flag'] == 'myappointment'){ echo 'menu__item--current'; } ?>"><a href="my-appointment.php?flag=myappointment" class="menu__link">My Appointment</a></li> 
                        <li class="menu__item <?php if($_SESSION['menu_flag'] == 'doctors'){ echo 'menu__item--current'; } ?>"><a href="doctor-list.php?flag=doctors" class="menu__link">Doctors</a></li> 
                        <li class="menu__item <?php if($_SESSION['menu_flag'] == 'labtest'){ echo 'menu__item--current'; } ?>"><a href="lab-test.php?flag=labtest" class="menu__link">Lab Test</a></li>
                        <li class="menu__item <?php if($_SESSION['menu_flag'] == 'feedback'){ echo 'menu__item--current'; } ?>"><a href="feedback.php?flag=feedback" class="menu__link">Feedback</a></li> 
                        <li class="menu__item <?php if($_SESSION['menu_flag'] == 'report'){ echo 'menu__item--current'; } ?>"><a href="report-appointment.php?flag=report" class="menu__link">Report</a></li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
</div>
