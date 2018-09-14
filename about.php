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

	<script src="js/responsiveslides.min.js"></script>
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

<!-- banner -->
<div class="banner page_head">

</div>
<!-- //banner -->
<div class="about-page">
	<div class="container">
		<h3 class="tittle">About</h3>
            <div class="col-md-6 about_img wow fadeInRight animated" data-wow-delay=".5s">
				<img src="images/g1.jpg" alt="">
            </div>
			<div class="col-md-6 about_img about_img_left">
				<div class="choose-grid wow fadeInRight animated" data-wow-delay=".5s">
					<h4>Temporibus autem quibusdam et aut officiis saepe eveniet ut et voluptates</h4>
					<p>Aenean ac leo eget nunc fringilla fringilla a non nulla! Nunc orci mi, venenatis quis ultrices vitae, congue non nibh. Nulla bibendum justo eget.</p>
				</div>
				<div class="choose-grid wow fadeInLeft animated" data-wow-delay=".5s">
					<h4>Necessitatibus saepe eveniet ut et </h4>
					<p>Aenean ac leo eget nunc fringilla fringilla a non nulla! Aenean ac leo eget nunc fringilla fringilla a non nulla! Nunc orci mi, venenatis quis ultrices vitae, congue non nibh. Nulla bibendum justo eget.</p>
				</div>
            </div>
			<div class="clearfix"></div>
		<p class="para_abt wow fadeInUp animated" data-wow-delay=".5s">Temporibus autem quibusdam et aut officiis 
		debitis aut rerum necessitatibus saepe eveniet ut et voluptates 
		repudiandae sint et molestiae non recusandae. Sed ut perspiciatis
		unde omnis iste natus error sit voluptatem accusantium.</p>
	</div>
</div>
<!-- testimonials -->
	<div class="testimonials">
		<div class="container">
			<h3 class="tittle">Testimonials</h3>
			<div class="testimonials-grids">
				<div class="col-md-6 testimonials-grid animated wow slideInLeft" data-wow-delay=".5s">
					<div class="testimonials-grid1">
						<img src="images/3.png" alt=" " class="img-responsive" />
						<p>Chris Won</p>
					</div>
					<div class="testimonials-grid2">
						<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis 
							suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur
							quis nostrum exercitationem ullam corporis suscipit laboriosam.</p>
					</div>
				</div>
				<div class="col-md-6 testimonials-grid">
					<div class="testimonials-grid1">
						<img src="images/4.png" alt=" " class="img-responsive" />
						<p>James Alley</p>
					</div>
					<div class="testimonials-grid2">
						<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis 
							suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur
							quis nostrum exercitationem ullam corporis suscipit laboriosam.</p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //testimonials -->
<div class="ind-team">
	<div class="container">
		<h3>Meet Our Team</h3>
		<div class="col-md-4 ind-gds text-center ">
			<div class="team-img">
				<img class="img-responsive" src="images/pic4.jpg" alt=" ">
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
		<div class="col-md-4 ind-gds text-center ">
			<div class="team-img">
				<img class="img-responsive" src="images/pic5.jpg" alt=" ">
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
		<div class="col-md-4 ind-gds text-center">
			<div class="team-img">
				<img class="img-responsive" src="images/pic6.jpg" alt=" ">
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



<!-- contact -->
        <?php include './_footer.php'; ?>
        <!-- //contact -->

        <!--login-signup-->
        <?php include_once './_login_signup.php'; ?>
        <!--login-signup-->
        
</body>
</html>

