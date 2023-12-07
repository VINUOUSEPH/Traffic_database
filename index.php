<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, maximum-scale=1">

	<title>Homepage</title>
	<link rel="icon" href="img/policelogo.png" type="image/png">
	<link rel="shortcut icon" href="img/policelogo.png" type="img/x-icon">

	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
	<link href="css/responsive.css" rel="stylesheet" type="text/css">
	<link href="css/magnific-popup.css" rel="stylesheet" type="text/css">
	<link href="css/animate.css" rel="stylesheet" type="text/css">

	<script type="text/javascript" src="js/jquery.1.8.3.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/jquery.isotope.js"></script>
	<script type="text/javascript" src="js/wow.js"></script>
	<script type="text/javascript" src="js/classie.js"></script>
	<script type="text/javascript" src="js/magnific-popup.js"></script>
	<script src="contactform/contactform.js"></script>

	<!-- =======================================================
    Theme Name: Knight
    Theme URL: https://bootstrapmade.com/knight-free-bootstrap-theme/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
	======================================================= -->

</head>

<body>
	<header class="header" id="header">
		<!--header-start-->
		<div class="container">
			<figure class="logo animated fadeInDown delay-07s">
				<a href="#"><img src="img/policelogo.png" alt=""></a>
			</figure><h><b>KERALA POLICE</b></h>
			<h1 class="animated fadeInDown delay-07s">WELCOME  TO  KERALA  TRAFFIC  CONTROL</h1>
			<a class="link animated fadeInUp delay-1s servicelink" href="login/login.php">LOGIN NOW</a>
		</div>
	</header>
	<!--header-end-->

	<nav class="main-nav-outer" id="test">
		<!--main-nav-start-->
		<div class="container">
			<ul class="main-nav">
				<li><a href="#header">Home</a></li>
				<li><a href="login/login.php">Login Now</a></li>
				<li><a href="#Traffic">Traffic Rules</a></li>
			</ul>
			<a class="res-nav_click" href="#"><i class="fa fa-bars"></i></a>
		</div>
	</nav>
	<!--main-nav-end-->

	</section>
	<!--main-section-end-->



	<section class="main-section alabaster" id="Traffic">
		<!--main-section alabaster-start-->
		<div class="container">
			<div class="row">
				<figure class="col-lg-5 col-sm-4 wow fadeInLeft">
					<img src="img/policelogo.png" alt="">
				</figure>
				<div class="col-lg-7 col-sm-8 featured-work">
					<h2>Traffic Rules</h2>
					<div class="featured-box">
						<div class="featured-box-col1 wow fadeInRight delay-02s">
							<i class="fa fa-magic"></i>
						</div>
						<div class="featured-box-col2 wow fadeInRight delay-02s">
							<h3>Traffic signs that provide information: </h3>
							<p>The distance left to cover to reach a specific destination.<br>
Alternative routes to the specific destination, if any.<br>
Locations on the cautionary traffic signs are also displayed such as schools, colleges, workplaces, clubs, public places and restaurants.  </p>
						</div>
					</div>
					<div class="featured-box">
						<div class="featured-box-col1 wow fadeInRight delay-04s">
							<i class="fa fa-gift"></i>
						</div>
						<div class="featured-box-col2 wow fadeInRight delay-04s">
							<h3>Functions of traffic signs</h3>
							<p>Knowledge of traffic signs for any driver is necessary as they perform certain functions which are essential for road safety.<br> The functions performed by traffic signs are:<br>

    The distance left to cover to reach a specific destination.<br>
    Alternative routes to the specific destination, if any.<br>
    Locations on the cautionary traffic signs are also displayed such as schools, colleges, workplaces, clubs, public places and restaurants.
 <br></p>
						</div>
					</div>
					<div class="featured-box">
						<div class="featured-box-col1 wow fadeInRight delay-06s">
							<i class="fa fa-dashboard"></i>
						</div>
						<div class="featured-box-col2 wow fadeInRight delay-06s">
							<h3>Do not Drive without these Documents </h3>
							
							
							<p>     Valid driving license<br>
    Vehicle registration certificate ( Form 23)<br>
    Valid vehicle's insurance certificate<br>
    Permit and vehicle's certificate of fitness (applicable only to transport vehicles)<br>
    Valid Pollution Under Control Certificate On demand by a police officer in uniform or an officer of the Transport Department, produce these documents for inspection</p>
						</div>
					</div>
					<a class="Learn-More" href="#">Learn More</a>
				</div>
			</div>
		</div>
	</section>
	<!--main-section alabaster-end-->



	<!--main-section-end-->


	
	
	



	<section class="business-talking">
		<!--business-talking-start-->
		<div class="container">
			<h2>Don't Drink And Drive</h2>
		</div>
	</section>
	
	<script type="text/javascript">
		$(document).ready(function(e) {

			$('#test').scrollToFixed();
			$('.res-nav_click').click(function() {
				$('.main-nav').slideToggle();
				return false

			});

      $('.Portfolio-box').magnificPopup({
        delegate: 'a',
        type: 'image'
      });

		});
	</script>

	<script>
		wow = new WOW({
			animateClass: 'animated',
			offset: 100
		});
		wow.init();
	</script>


	<script type="text/javascript">
		$(window).load(function() {

			$('.main-nav li a, .servicelink').bind('click', function(event) {
				var $anchor = $(this);

				$('html, body').stop().animate({
					scrollTop: $($anchor.attr('href')).offset().top - 102
				}, 1500, 'easeInOutExpo');
				/*
				if you don't want to use the easing effects:
				$('html, body').stop().animate({
					scrollTop: $($anchor.attr('href')).offset().top
				}, 1000);
				*/
				if ($(window).width() < 768) {
					$('.main-nav').hide();
				}
				event.preventDefault();
			});
		})
	</script>

	<script type="text/javascript">
		$(window).load(function() {


			var $container = $('.portfolioContainer'),
				$body = $('body'),
				colW = 375,
				columns = null;


			$container.isotope({
				// disable window resizing
				resizable: true,
				masonry: {
					columnWidth: colW
				}
			});

			$(window).smartresize(function() {
				// check if columns has changed
				var currentColumns = Math.floor(($body.width() - 30) / colW);
				if (currentColumns !== columns) {
					// set new column count
					columns = currentColumns;
					// apply width to container manually, then trigger relayout
					$container.width(columns * colW)
						.isotope('reLayout');
				}

			}).smartresize(); // trigger resize to set container width
			$('.portfolioFilter a').click(function() {
				$('.portfolioFilter .current').removeClass('current');
				$(this).addClass('current');

				var selector = $(this).attr('data-filter');
				$container.isotope({

					filter: selector,
				});
				return false;
			});

		});
	</script>

</body>

</html>
