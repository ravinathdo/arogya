<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Arogya</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Infirmary Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/jquery-ui.css" />
<link rel="stylesheet" href="css/swipebox.css">
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/numscroller-1.0.js"></script>
<!-- //js -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<!-- fonts -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Viga' rel='stylesheet' type='text/css'>

	<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
	<!-- start-smoth-scrolling -->

	<!-- swipe box js -->
	<script src="js/jquery.swipebox.min.js"></script> 
	    <script type="text/javascript">
			jQuery(function($) {
				$(".swipebox").swipebox();
			});
	</script>
<!-- //swipe box js -->

</head>
<body>
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


<!-- banner -->
<div class="banner page_head">

</div>
<!-- //banner -->
<!-- gallery -->
<div class="gallery">
	<div class="container">
		<h3 class="tittle">Gallery</h3>
				<div class="gallery-grids">
					<div class="col-md-6 baner-top wow fadeInRight animated" data-wow-delay=".5s">
						<a href="images/g1.jpg" class="b-link-stripe b-animate-go  swipebox">
							<div class="gal-spin-effect vertical ">
								<img src="images/g1.jpg" alt=" " />
								<div class="gal-text-box">
									<div class="info-gal-con">
										<h4>Infirmary</h4>
										<span class="separator"></span>
										<p>Sit accusamus, vel blanditiis iure minima ipsa molestias minus laborum velit, nulla nisi hic quasi enim.</p>
										<span class="separator"></span>
										
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-6 baner-top wow fadeInLeft animated" data-wow-delay=".5s">
						<a href="images/g2.jpg" class="b-link-stripe b-animate-go  swipebox">
							<div class="gal-spin-effect vertical ">
								<img src="images/g2.jpg" alt=" " />
								<div class="gal-text-box">
									<div class="info-gal-con">
										<h4>Infirmary</h4>
										<span class="separator"></span>
										<p>Sit accusamus, vel blanditiis iure minima ipsa molestias minus laborum velit, nulla nisi hic quasi enim.</p>
										<span class="separator"></span>
										
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-3 baner-top ban-mar wow fadeInUp animated" data-wow-delay=".5s">
						<a href="images/c1.jpg" class="b-link-stripe b-animate-go  swipebox">
							<div class="gal-spin-effect vertical ">
								<img src="images/c1.jpg" alt=" " />
								<div class="gal-text-box">
									<div class="info-gal-con">
										<h4>Infirmary</h4>
										<span class="separator"></span>
										<p>Sit accusamus, vel blanditiis iure minima ipsa.</p>
										<span class="separator"></span>
										
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-3 baner-top ban-mar wow fadeInDown animated" data-wow-delay=".5s">
						<a href="images/c2.jpg" class="b-link-stripe b-animate-go  swipebox">
							<div class="gal-spin-effect vertical ">
								<img src="images/c2.jpg" alt=" " />
								<div class="gal-text-box">
									<div class="info-gal-con">
										<h4>Infirmary</h4>
										<span class="separator"></span>
										<p>Sit accusamus, vel blanditiis iure minima ipsa.</p>
										<span class="separator"></span>
										
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-3 baner-top ban-mar wow fadeInUp animated" data-wow-delay=".5s">
						<a href="images/c3.jpg" class="b-link-stripe b-animate-go  swipebox">
							<div class="gal-spin-effect vertical ">
								<img src="images/c3.jpg" alt=" " />
								<div class="gal-text-box">
									<div class="info-gal-con">
										<h4>Infirmary</h4>
										<span class="separator"></span>
										<p>Sit accusamus, vel blanditiis iure minima ipsa.</p>
										<span class="separator"></span>
										
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-3 baner-top ban-mar wow fadeInUp animated" data-wow-delay=".5s">
						<a href="images/c4.jpg" class="b-link-stripe b-animate-go  swipebox">
							<div class="gal-spin-effect vertical ">
								<img src="images/c4.jpg" alt=" " />
								<div class="gal-text-box">
									<div class="info-gal-con">
										<h4>Infirmary</h4>
										<span class="separator"></span>
										<p>Sit accusamus, vel blanditiis iure minima ipsa.</p>
										<span class="separator"></span>
										
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-6 baner-top wow fadeInRight animated" data-wow-delay=".5s">
						<a href="images/g7.jpg" class="b-link-stripe b-animate-go  swipebox">
							<div class="gal-spin-effect vertical ">
								<img src="images/g7.jpg" alt=" " />
								<div class="gal-text-box">
									<div class="info-gal-con">
										<h4>Infirmary</h4>
										<span class="separator"></span>
										<p>Sit accusamus, vel blanditiis iure minima ipsa molestias minus laborum velit, nulla nisi hic quasi enim.</p>
										<span class="separator"></span>
										
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-6 baner-top wow fadeInLeft animated" data-wow-delay=".5s">
						<a href="images/g8.jpg" class="b-link-stripe b-animate-go  swipebox">
							<div class="gal-spin-effect vertical ">
								<img src="images/g8.jpg" alt=" " />
								<div class="gal-text-box">
									<div class="info-gal-con">
										<h4>Infirmary</h4>
										<span class="separator"></span>
										<p>Sit accusamus, vel blanditiis iure minima ipsa molestias minus laborum velit, nulla nisi hic quasi enim.</p>
										<span class="separator"></span>
										
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
	</div>
<!-- //gallery -->


<!-- contact -->
        <?php include './_footer.php'; ?>
        <!-- //contact -->

        <!--login-signup-->
        <?php include_once './_login_signup.php'; ?>
        <!--login-signup-->

</body>
</html>

