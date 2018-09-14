
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
        <?php include './_top_pre_login.php'; ?>

        <!-- //header -->
        <?php include './_header_pre_login.php'; ?>

        <!-- banner -->
        <div class="banner">









            <script>
                // You can also use "$(window).load(function() {"
                $(function () {
                    // Slideshow 4
                    $("#slider3").responsiveSlides({
                        auto: true,
                        pager: true,
                        nav: false,
                        speed: 500,
                        namespace: "callbacks",
                        before: function () {
                            $('.events').append("<li>before event fired.</li>");
                        },
                        after: function () {
                            $('.events').append("<li>after event fired.</li>");
                        }
                    });
                });
            </script>
            <div  id="top" class="callbacks_container">
                <ul class="rslides" id="slider3">
                    <li>
                        <div class="banner1">
                            <div class="container">
                                <div class="banner-info">
                                    <h3>Providing<span> Appropriate Health Care </span> For Adult, Seniors and children</h3>
                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
                                        sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. 
                                        Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, 
                                        adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et 
                                        dolore magnam aliquam quaerat voluptatem.</p>
                                    <a href="#book" class="hvr-outline-out button2 scroll">Book an appointment</a>
                                </div>
                            </div>
                        </div>
                    </li> 
                    <li>
                        <div class="banner2">
                            <div class="container">
                                <div class="banner-info2 text-center">
                                    <h3>Providing Eye Care <span>Treatments & Surgeries For All Problems</span></h3>
                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
                                        sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. 
                                        Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, 
                                        adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et 
                                        dolore magnam aliquam quaerat voluptatem.</p>
                                    <a href="#book" class="hvr-outline-out button2 scroll">Book an appointment</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="banner1">
                            <div class="container">
                                <div class="banner-info">
                                    <h3>Providing<span> Appropriate Health Care </span> For Adult, Seniors and children</h3>
                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
                                        sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. 
                                        Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, 
                                        adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et 
                                        dolore magnam aliquam quaerat voluptatem.</p>
                                    <a href="#book" class="hvr-outline-out button2 scroll">Book an appointment</a>
                                </div>
                            </div>
                        </div>
                    </li> 
                    <li>
                        <div class="banner2">
                            <div class="container">
                                <div class="banner-info2 text-center">
                                    <h3>Providing Eye Care <span>Treatments & Surgeries For All Problems</span></h3>
                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
                                        sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. 
                                        Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, 
                                        adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et 
                                        dolore magnam aliquam quaerat voluptatem.</p>
                                    <a href="#book" class="hvr-outline-out button2 scroll">Book an appointment</a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
        <!-- //banner -->
        <!-- content -->
        <div class="content">
            <div class="container">
                <div class="col-md-4 content_right wow flipInY" data-wow-duration="1.5s" data-wow-delay="0.1s">
                    <img class="img-responsive" src="images/pic1.jpg" alt=" " />
                </div>
                <div class="col-md-4 content_left wow flipInY" data-wow-duration="1.5s" data-wow-delay="0.2s">
                    <div class="welcome">
                        <h3>Welcome To Infirmary</h3>
                        <ul>
                            <li><a href="#">Accusantium Doloremque Accus</a></li>
                            <li><a href="#">Molestiae Consequatur Molestiae</a></li>
                            <li><a href="#">Nostrum Exercitationem Nostrum</a></li>
                            <li><a href="#">Consequuntur Magnidolor Nostrum</a></li>
                            <li><a href="#">Molestiae Consequatur Molestiae</a></li>
                            <li><a href="#">Nostrum Exercitationem Nostrum</a></li>
                            <li><a href="#">Consequuntur Magnidolor Nostrum</a></li>
                        </ul>
                    </div>
                </div>
                <div id="book" class="col-md-4 content_middle wow flipInY" data-wow-duration="1.5s" data-wow-delay="0.3s">
                    <h3>Book An Appointment</h3>
                    <form action="#" method="post">
                        <input type="text" name="Name" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {
                                    this.value = 'Name';
                                }" required="">
                        <input type="text" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {
                                    this.value = 'Email';
                                }" required="">
                        <input class="date" name="19/10/2016" id="datepicker" type="text" value="19/10/2016" onfocus="this.value = '';" onblur="if (this.value == '') {
                                    this.value = '19/10/2016';
                                }" required="">
                        <select id="country" onchange="change_country(this.value)" class="frm-field required sect">
                            <option value="null">Select Department</option>
                            <option value="null">Health Care</option> 
                            <option value="null">Body Checkup</option>					
                            <option value="null">Out Patient</option>
                            <option value="null">Surgery</option>											
                        </select>
                        <input type="submit" value="Book Now">
                    </form>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- //content -->
        <!-- services -->
        <div class="services">
            <div class="container">
                <div class="col-md-4 services_left wow bounceInDown" data-wow-duration="1.5s" data-wow-delay="0s">
                    <h3>Our Best Services</h3>
                    <p class="ser-para" >Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
                        sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
                    <a href="about.html" class="hvr-outline-out button2">See More About Us</a>
                    <script>
                        // You can also use "$(window).load(function() {"
                        $(function () {
                            // Slideshow 4
                            $("#slider4").responsiveSlides({
                                auto: true,
                                pager: true,
                                nav: false,
                                speed: 500,
                                namespace: "callbacks",
                                before: function () {
                                    $('.events').append("<li>before event fired.</li>");
                                },
                                after: function () {
                                    $('.events').append("<li>after event fired.</li>");
                                }
                            });
                        });
                    </script>
                    <div  class="callbacks_container">
                        <ul class="rslides" id="slider4">
                            <li>
                                <div class="ser-bottom">
                                    <h5>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
                                        sed quia consequuntur magni dolores eos qui </h5>
                                    <p>- Alia Smith</p>
                                </div>
                            </li>
                            <li>
                                <div class="ser-bottom">
                                    <h5>Voluptas sit aspernatur aut odit aut fugit,sed quia consequuntur magni dolores 
                                        eos qui ratione voluptatem sequi nesciunt</h5>
                                    <p>- Thompson</p>
                                </div>
                            </li>
                            <li>
                                <div class="ser-bottom">
                                    <h5>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
                                        sed quia consequuntur magni dolores eos qui </h5>
                                    <p>- Federic</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-8 services_right ">
                    <div class="list-left text-center wow bounceInDown" data-wow-duration="1.5s" data-wow-delay="0.1s">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                        <h4>Voluptatem</h4>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
                            sed quia consequuntur magni dolores eos qui</p>
                    </div>
                    <div class="list-left text-center wow bounceInDown" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <span class="glyphicon glyphicon-scissors" aria-hidden="true"></span>
                        <h4>Voluptatem</h4>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
                            sed quia consequuntur magni dolores eos qui</p>
                    </div>
                    <div class="list-left text-center no_marg wow bounceInDown" data-wow-duration="1.5s" data-wow-delay="0.3s">
                        <span class="glyphicon glyphicon-apple" aria-hidden="true"></span>
                        <h4>Voluptatem</h4>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
                            sed quia consequuntur magni dolores eos qui</p>
                    </div>
                    <div class="list-left text-center no_marg wow bounceInDown" data-wow-duration="1.5s" data-wow-delay="0.4s">
                        <span class="glyphicon glyphicon-education" aria-hidden="true"></span>
                        <h4>Voluptatem</h4>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
                            sed quia consequuntur magni dolores eos qui</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- //services -->
        <!-- team -->
        <div class="ind-team">
            <div class="container">
                <h3>Meet Our Team</h3>
                <div class="col-md-4 ind-gds text-center wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s">
                    <div class="team-img">
                        <img class="img-responsive" src="images/pic4.jpg" alt=" "/>
                        <div class="team-info">
                            <ul>
                                <li class="hvr-rectangle-out"><a class="eco1" href="#"></a></li>
                                <li class="hvr-rectangle-out"><a class="eco2" href="#"></a></li>
                                <li class="hvr-rectangle-out"><a class="eco3" href="#"></a></li>
                                <li class="hvr-rectangle-out"><a class="eco4" href="#"></a></li>
                                <li class="hvr-rectangle-out"><a class="eco5" href="#"></a></li>
                            </ul>
                        </div>
                    </div>
                    <h4>Dr. Federica</h4>
                    <p>Dental Surgeon</p>
                </div>
                <div class="col-md-4 ind-gds text-center wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s">
                    <div class="team-img">
                        <img class="img-responsive" src="images/pic5.jpg" alt=" "/>
                        <div class="team-info">
                            <ul>
                                <li class="hvr-rectangle-out"><a class="eco1" href="#"></a></li>
                                <li class="hvr-rectangle-out"><a class="eco2" href="#"></a></li>
                                <li class="hvr-rectangle-out"><a class="eco3" href="#"></a></li>
                                <li class="hvr-rectangle-out"><a class="eco4" href="#"></a></li>
                                <li class="hvr-rectangle-out"><a class="eco5" href="#"></a></li>
                            </ul>
                        </div>
                    </div>
                    <h4>Dr. Thompson</h4>
                    <p>Cardiology</p>

                </div>
                <div class="col-md-4 ind-gds text-center wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s">
                    <div class="team-img">
                        <img class="img-responsive" src="images/pic6.jpg" alt=" "/>
                        <div class="team-info">
                            <ul>
                                <li class="hvr-rectangle-out"><a class="eco1" href="#"></a></li>
                                <li class="hvr-rectangle-out"><a class="eco2" href="#"></a></li>
                                <li class="hvr-rectangle-out"><a class="eco3" href="#"></a></li>
                                <li class="hvr-rectangle-out"><a class="eco4" href="#"></a></li>
                                <li class="hvr-rectangle-out"><a class="eco5" href="#"></a></li>
                            </ul>
                        </div>
                    </div>
                    <h4>Dr. Victoria</h4>
                    <p>Neurology</p>
                </div>

                <div class="clearfix"></div>
            </div>
        </div>
        <!-- team -->
        <!-- capabilities -->
        <div class="capacity">
            <div class="container">
                <h3>Capabilities</h3>
                <div class="col-md-3 capabil_grid1 wow fadeInDownBig animated animated text-center" data-wow-delay="0.4s">
                    <div class="capil_text">
                        <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='5700' data-delay='.5' data-increment="100">5700</div>
                        <p>Happy Patients</p>	
                    </div>
                </div>
                <div class="col-md-3 capabil_grid2 wow fadeInUpBig animated animated text-center" data-wow-delay="0.4s">
                    <div class="capil_text">
                        <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='1700' data-delay='.5' data-increment="5">1700</div>
                        <p>Our Staff</p>	
                    </div>
                </div>
                <div class="col-md-3 capabil_grid3 wow fadeInDownBig animated animated text-center" data-wow-delay="0.4s">
                    <div class="capil_text">
                        <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='0021' data-delay='.5' data-increment="100">0021</div>				
                        <p>Foundation</p>
                    </div>
                </div>
                <div class="col-md-3 capabil_grid4 wow fadeInUpBig animated animated text-center" data-wow-delay="0.4s">
                    <div class="capil_text">
                        <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='2500' data-delay='.5' data-increment="1">2500</div>
                        <p>Clients</p>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- //capabilities -->


        <!-- contact -->
        <?php include './_footer.php'; ?>
        <!-- //contact -->




        <!--login-signup-->
        <?php include_once './_login_signup.php'; ?>
        <!--login-signup-->




        <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
    </body>
</html>

