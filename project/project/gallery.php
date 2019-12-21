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
		<title>Gallery</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/lightcase.css">
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
								Gallery				
							</h1>	
							
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->			

			<!-- Start gallery-area Area -->
            <section class="gallery-area section-gap" id="gallery">
                <div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Food and Customer Gallery</h1>
								<p>Who are in extremely love with eco friendly system.</p>
							</div>
						</div>
					</div>	
                    
                    <ul class="filter-wrap filters col-lg-12 no-padding">
                        <li class="active" data-filter="*">All Menu</li>
                        <li data-filter=".breakfast">Breakfast</li>
                        <li data-filter=".lunch">Lunch</li>
                        <li data-filter=".dinner">Dinner</li>
                        <li data-filter=".budget-meal">Budget Meal</li>
                        <li data-filter=".buffet">Buffet</li>
                    </ul>
     
                    <div class="filters-content">
                        <div class="row grid">
                            <div class="col-lg-4 col-md-6 col-sm-6 all breakfast">
                            	<div class="showcase-list">
                            		<img class="img-fluid" src="img/g1.jpg" alt="">
                            		<a href="img/g1.jpg" data-rel="lightcase:myCollection:slideshow" title="Your title">*</a>
                            	</div>	                          
                            </div>                           
                            <div class="col-lg-4 col-md-6 col-sm-6 all dinner">
                            	<div class="showcase-list">
                            		<img class="img-fluid" src="img/g2.jpg" alt="">
                            		<a href="img/g2.jpg" data-rel="lightcase:myCollection:slideshow" title="Your title">*</a>
                            	</div>                            
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 all budget-meal">
                            	<div class="showcase-list">
                            		<img class="img-fluid" src="img/g3.jpg" alt="">
                            		<a href="img/g3.jpg" data-rel="lightcase:myCollection:slideshow" title="Your title">*</a>
                            	</div>                            
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 all breakfast">
                            	<div class="showcase-list">
                            		<img class="img-fluid" src="img/g4.jpg" alt="">
                            		<a href="img/g4.jpg" data-rel="lightcase:myCollection:slideshow" title="Your title">*</a>
                            	</div>                            
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 all lunch">
                            	<div class="showcase-list">
                            		<img class="img-fluid" src="img/g5.jpg" alt="">
                            		<a href="img/g5.jpg" data-rel="lightcase:myCollection:slideshow" title="Your title">*</a>
                            	</div>                            
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 all buffet">
                            	<div class="showcase-list">
                            		<img class="img-fluid" src="img/g6.jpg" alt="">
                            		<a href="img/g6.jpg" data-rel="lightcase:myCollection:slideshow" title="Your title">*</a>
                            	</div>                           
                            </div>                            
                        </div>
                    </div>
                    
                </div>
            </section>
            <!-- End gallery-area Area -->					

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
			<script src="js/lightcase.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>						
			<script src="js/jquery.nice-select.min.js"></script>					
			<script src="js/owl.carousel.min.js"></script>			
            <script src="js/isotope.pkgd.min.js"></script>								
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
		</body>
	</html>