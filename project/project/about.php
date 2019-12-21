	<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: ../index.php");
  }
?>



	<!DOCTYPE html>
	<html>
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>About</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/jquery-ui.css">				
			<link rel="stylesheet" href="css/nice-select.css">							
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">				
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body>	
			<header id="header">
				<div class="header-top">
					<div class="container">
				  		<div class="row justify-content-center">
						      <div id="logo">
						        <a href="index_1.php"><img src="img/restaurent_cheif_food_hotel_vector_logo.png" alt="" title="" /></a>
						      </div>
				  		</div>			  					
					</div>
				</div>
				<div class="container main-menu">
					<div class="row align-items-center justify-content-center d-flex">			
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li><a href="index_1.php">Home</a></li>
				          <li><a href="search.php">Search</a></li>
				          <li><a href="gallery.php">Gallery</a></li>
				          <li><a href="about.php">About</a></li>					           				 <li><a href="contact.php">Contact</a></li>
				          <li class="menu-has-children"><a href="index_1.php?logout='1'"><?php echo $_SESSION['username']; ?> (Log out)</a></li>
				        </ul>
				      </nav><!-- #nav-menu-container -->					      		  
					</div>
				</div>
			</header><!-- #header -->
			
			<!-- start banner Area -->
			<section class="about-banner relative">
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								About Us				
							</h1>	
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<!-- Start home-about Area -->
			<section class="home-about-area section-gap">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6 home-about-left">
							<h1>About Our Story</h1>
							<p>
								We are students of EAST WEST UNIVERSITY. This is our final project for CSE411 course.
							</p>
							<a href="contact.php" class="primary-btn">view full</a>
						</div>
						<div class="col-lg-6 home-about-right">
							<img class="img-fluid" src="img/ewu.jpg" alt="">
						</div>
					</div>
				</div>	
			</section>
			<!-- End home-about Area -->	

			<!-- Start services Area -->
			<section class="services-area pb-120">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">What Kind of Services we Offer</h1>
								<p>Who are in extremely love with eco friendly system.</p>
							</div>
						</div>
					</div>						
					<div class="row">
						<div class="col-lg-4">
							<div class="single-service">
								<div class="thumb">
									<img src="img/about/s1.jpg" alt="">
								</div>
								<a href="https://www.yummly.com/" target="blank">
									<h4>popular recipe</h4>
								</a>
								<p>
									Recipe search, diet and nutrition, cooking articles and community forum.
								</p>								
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-service">
								<div class="thumb">
									<img src="img/about/rest.jpg" alt="">
								</div>
								<a href="search.php">
									<h4>restaurant search</h4>
								</a>	
								<p>
									We offer you to search your desire website without any distractions...
								</p>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-service">
								<div class="thumb">
									<img src="img/about/rev.jpg" alt="">
								</div>
								<a href="https://www.facebook.com/groups/foodbloggersbd/" target="blank">
									<h4>Restaurents reviews</h4>
								</a>	
								<p>
									we give you reviews of populer food bloggers on each restaurents..
								</p>
							</div>
						</div>												
					</div>
				</div>	
			</section>
			<!-- End services Area -->

			<!-- Start review Area -->
			<section class="review-area section-gap">
				<div class="container">
					<div class="row">
						<div class="active-review-carusel">
							<div class="single-review">
								<img src="img/user.png" alt="">
								<h4>Hulda Sutton</h4>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>								
								</div>	
								<p>
									“Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.”
								</p>
							</div>
							<div class="single-review">
								<img src="img/user.png" alt="">
								<h4>Alice</h4>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
																	
								</div>	
								<p>
									“Oh my God.. i never felt so cheated of my money before. Hundreds gone just because of storage at another website!. I Almost give up till i was surfing the web for cheaper to almost free options and i found website.com. Migrating all 5 of my websites here. WITH 3 on THE PAID PLAN and 2 on FREE”
								</p>
							</div>	
							<div class="single-review">
								<img src="img/user.png" alt="">
								<h4>Bob</h4>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>								
								</div>	
								<p>
									“well, good job website.com! u know what? giving people 10 pages for their website is like giving people a chance to build something out of nothing. website.com is more special than any other websitemaker service like wix.com and wordpress. in my personal opinion, website.com is the best one.”
								</p>
							</div>
							<div class="single-review">
								<img src="img/user.png" alt="">
								<h4>Tom</h4>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>								
								</div>	
								<p>
									“its amazing and has the best features ever..”
								</p>
							</div>														
						</div>
					</div>
				</div>	
			</section>
			<!-- End review Area -->				

			<!-- start footer Area -->		
			<footer class="footer-area">
				<div class="footer-widget-wrap">
					<div class="container">
						<div class="row section-gap">
							
							<div class="col-lg-4  col-md-6 col-sm-6">
								<div class="single-footer-widget">
									<h4>Contact Us</h4>
									<p>
										46, Amenapolli, Bodho Mondir, Dhaka 1219
									</p>
									<p class="number">
										0167-7556241 <br>
										0155-25*****
									</p>
								</div>
							</div>						
												
						</div>					
					</div>					
				</div>
				<div class="footer-bottom-wrap">
					<div class="container">
						<div class="row footer-bottom d-flex justify-content-between align-items-center">
							<p class="col-lg-8 col-mdcol-sm-6 -6 footer-text m-0">All rights reserved to PAUL</p>
							<ul class="col-lg-4 col-mdcol-sm-6 -6 social-icons text-right">
	                            <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
	                            <li><a href="https://twitter.com/?lang=en"><i class="fa fa-twitter"></i></a></li>         
	                        </ul>
						</div>						
					</div>
				</div>
			</footer>
			<!-- End footer Area -->

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="js/popper.min.js"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>		
 			<script src="js/jquery-ui.js"></script>					
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>						
			<script src="js/jquery.nice-select.min.js"></script>					
			<script src="js/owl.carousel.min.js"></script>			
            <script src="js/isotope.pkgd.min.js"></script>								
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
		</body>
	</html>