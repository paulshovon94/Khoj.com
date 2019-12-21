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
		<title>Home</title>

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
				          <li><a href="gallery.php">Gallery</a></li>
				          <li><a href="about.php">About</a></li>					           				 <li><a href="contact.php">Contact</a></li>
				          <li class="menu-has-children"><a href="index_1.php?logout='1'"><?php echo $_SESSION['username']; ?> (Log out)</a></li>
				        </ul>
				      </nav><!-- #nav-menu-container -->					      		  
					</div>
				</div>
			</header><!-- #header -->
			
			<!-- start banner Area -->
			<section class="banner-area">		
				<div class="container">
					<div class="row fullscreen align-items-center justify-content-between">
						<div class="col-lg-12 banner-content">
							<h6 class="text-white">Wide Options of Choice</h6>
							<h1 class="text-white">Cool Restaurant</h1>
							<p class="text-white">
								Best Dining in Dhaka City, Dhaka Division: See 1Dhaka City restaurants and search by cuisine, price, location, and more.
							</p>
							
							<div class="widget-wrap">
								<div class="single-sidebar-widget search-widget">
									<form class="search-form" method="post" action="search.php" >
			                            <input placeholder="restarun name , area" name="search" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Posts'" >
			                            <button type="submit"><i class="fa fa-search"></i></button>
			                        </form>
								</div>
							</div>
							<!--<a href="#" class="primary-btn text-uppercase">Search</a>-->
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
							<h1>Top Demand</h1>
							<p>
								ONE OF A KIND!<br><br>

								The BIG KING™ is one of the biggest in our family. With two freshly flame-grilled beef patties, cheese, onions, pickles and the unique BIG KING™ sauce, it just tastes amazing!<br><br>

								Try it today!
							</p>
							<a href="https://www.facebook.com/BurgerKingBangladesh/" target='blank' class="primary-btn">view restaurant</a>
						</div>
						<div class="col-lg-6 home-about-right">
							<img class="img-fluid" src="img/about-img.jpg" alt="">
						</div>
					</div>
				</div>	
			</section>
			<!-- End home-about Area -->			

			<!-- Start menu-area Area -->
            <section class="menu-area section-gap" id="menu">
                <div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Restaurent Shortlist</h1>
								<p>most popural</p>
							</div>
						</div>
					</div>	

                    <ul class="filter-wrap filters col-lg-12 no-padding">
                        <li class="active" data-filter="*">All Restaurent</li>
                        <li data-filter=".breakfast">Khilgaon</li>
                        <li data-filter=".lunch">Uttara</li>
                        <li data-filter=".dinner">Dhanmondi</li>
                        <li data-filter=".budget-meal">Mirpur</li>
                        <li data-filter=".buffet">Poribagh</li>
                    </ul>
                    
                    <div class="filters-content">
                        <div class="row grid">
                            <a href="https://www.facebook.com/pg/Popeyes-Cold-Coffee-507956402682645/reviews/?ref=page_internal">
                            <div class="col-md-6 all breakfast">
								<div class="single-menu">
									<div class="title-wrap d-flex justify-content-between">
										<h4>Popeyes Coffee House</h4>
										<h4 class="price">5</h4>
									</div>			
									<p>
										Popeyes Coffee House, Dhaka, Bangladesh
									</p>									
								</div>													                           
							</div>
							</a>
							<a href="https://www.facebook.com/pg/apon.coffee.house/reviews/?ref=page_internal">                           
                            <div class="col-md-6 all dinner">
								<div class="single-menu">
									<div class="title-wrap d-flex justify-content-between">
										<h4>Apon Coffee House, Dhaka, Bangladesh</h4>
										<h4 class="price">3.5</h4>
									</div>			
									<p>
										 c, Khilgaon Taltola, 566/A শহীদ বাকি রোড, Dhaka 1219
									</p>									
								</div>
                            </div>
                            </a>
                            <a href="https://www.facebook.com/pg/cafecherrydrops/reviews/?ref=page_internal">
                            <div class="col-md-6 all budget-meal">
								<div class="single-menu">
									<div class="title-wrap d-flex justify-content-between">
										<h4>Cafe Cherry Drops</h4>
										<h4 class="price">3.9</h4>
									</div>			
									<p>
										572/A, Block - C, Khilgaon, Chowdhury Para, Dhaka 1219
									</p>									
								</div>
                            </div>
                            </a>
                            <a href="https://www.facebook.com/pg/Alfrescorooftop/reviews/?ref=page_internal">
                            <div class="col-md-6 all breakfast">
								<div class="single-menu">
									<div class="title-wrap d-flex justify-content-between">
										<h4>Alfresco</h4>
										<h4 class="price">4.1</h4>
									</div>
									<p>
										566/A (Rooftop), Block - C, Level 6 & 7, Shahid Baki Road, Khilgaon Taltola, Dhaka 1219
									</p>									
								</div>
                            </div>
                            </a>
                            <a href="https://www.facebook.com/pg/TraditionBd.Dhaka.khilgaon/reviews/?ref=page_internal">
                            <div class="col-md-6 all lunch">
								<div class="single-menu">
									<div class="title-wrap d-flex justify-content-between">
										<h4>TraditionBD</h4>
										<h4 class="price">4.1</h4>
									</div>
									<p>
										568/C, Block C, Shahid Baki Road, Khilgaon, Dhaka 1219.
									</p>									
								</div>
                            </div>
                            </a>
                            <a href="https://www.facebook.com/cafetheatrebd/">
                            <div class="col-md-6 all buffet">
								<div class="single-menu">
									<div class="title-wrap d-flex justify-content-between">
										<h4>Cafe Theatre</h4>
										<h4 class="price">3.7</h4>
									</div>
									<p>
										House - 566/A, Block-C, Khilgaon Taltola(4th Floor), Shahid Baki Road, Dhaka 1219
									</p>									
								</div>
                            </div>
                            </a>                            
                        </div>
                    </div>
                    
                </div>
            </section>
            <!-- End menu-area Area -->			

			<!-- Start reservation Area -->
			<section class="reservation-area section-gap relative">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row justify-content-between align-items-center">

						<div class="col-lg-6 reservation-left">
							<h1 class="text-white">Reserve Your Seats
							to Confirm if You Come
							with Your Family</h1>
							<div class="widget-wrap">
								<div class="single-sidebar-widget search-widget">
									<form class="search-form" method="post" action="reserve.php" >
			                            <input placeholder="restarun name.." name="search" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Posts'" >
			                            <button type="submit" name="submit"><i class="fa fa-search"></i></button>
			                        </form>
								</div>
							</div>

						</div>
					
					</div>
				</div>	
			</section>
			<!-- End reservation Area -->
			
			<!-- Start gallery-area Area -->
            <section class="gallery-area section-gap" id="gallery">
                <div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Food and Customer Gallery</h1>
								<p>Who are in extremely foodies.....</p>
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
                            	<div class="single-gallery">
                            		<img class="img-fluid" src="img/g1.jpg" alt="">
                            	</div>	                          
                            </div>                           
                            <div class="col-lg-4 col-md-6 col-sm-6 all dinner">
                            	<div class="single-gallery">
                            		<img class="img-fluid" src="img/g2.jpg" alt="">
                            	</div>                            
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 all budget-meal">
                            	<div class="single-gallery">
                            		<img class="img-fluid" src="img/g3.jpg" alt="">
                            	</div>                            
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 all breakfast">
                            	<div class="single-gallery">
                            		<img class="img-fluid" src="img/g4.jpg" alt="">
                            	</div>                            
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 all lunch">
                            	<div class="single-gallery">
                            		<img class="img-fluid" src="img/g5.jpg" alt="">
                            	</div>                            
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 all buffet">
                            	<div class="single-gallery">
                            		<img class="img-fluid" src="img/g6.jpg" alt="">
                            	</div>                            
                            </div>                            
                        </div>
                    </div>
                    
                </div>
            </section>
            <!-- End gallery-area Area -->			

			<!-- Start review Area -->

			<!-- End review Area -->					

			<!-- Start blog Area -->
			<section class="blog-area section-gap" id="blog">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Latest From Our Blog</h1>
								<p>From food porn to real facts about diet and nutrition trends, these blogs have everything you need to embrace healthy eating.</p>
							</div>
						</div>
					</div>					
					<div class="row">
						<div class="col-lg-3 col-md-6 col-sm-6 single-blog">
							<div class="thumb">
								<img class="img-fluid" src="img/b1.jpg" alt="">								
							</div>
							<p class="date">6 Jul 2018</p>
							<a href="https://thetakeout.com/how-to-make-perfect-fried-rice-and-i-mean-perfect-1826027558" target='blank'><h4>Cooking Perfect Fried Rice
							in minutes</h4></a>
							<p>
								Heat 1 tbsp oil in wok; add selected meat to wok, along with carrots, peas, and cooked onion; stir-fry for 2 minutes. Add rice, green onions, and bean sprouts, tossing to mix well; stir-fry for 3 minutes. Add 2 tbsp of light soy sauce and chopped egg to rice mixture and fold in; stir-fry for 1 minute more; serve.
							</p>
																
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 single-blog">
							<div class="thumb">
								<img class="img-fluid" src="img/b2.jpg" alt="">								
							</div>
							<p class="date">6 Jul 2018</p>
							<a href="https://steptohealth.com/make-eggs-shape-heart/" target='blank'><h4>Secret of making Heart 
							Shaped eggs</h4></a>
							<p>
								Using a 3-inch heart-shaped cookie cutter, remove the center of a thick slice of bread, and toast it. Melt 1 1/2 teaspoons butter in a small skillet over medium heat. Place bread slice in skillet, and cook until underside is lightly browned. Add another 1 1/2 teaspoons butter, and flip bread. Fit cookie cutter, coated with cooking spray, in bread's cutout heart, and crack an egg into cutter. Cover skillet, and cook until egg is set, 2 to 3 minutes. Use tongs to remove cutter. Serve with toasted heart for dipping into yolk.
							</p>
																
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 single-blog">
							<div class="thumb">
								<img class="img-fluid" src="img/b3.jpg" alt="">								
							</div>
							<p class="date">6 Jul 2018</p>
							<a href="https://barbecuebible.com/2014/09/29/tender-steak/" target='blank'><h4>How to check steak if 
							it is tender or not</h4></a>
							<p>
								There are a couple of clever knife tricks that can make meat seem more tender. One is scoring. That's when you make shallow cuts (not cutting all the way through) across the surface of a thin steak like skirt or flank. This method can help break up tough proteins and also helps the meat absorb tenderizing marinades more easily.

								The second meat-tenderizing knife trick is slicing cooked steak thinly, across the grain. The idea is to break up the long, tough meat fibers so they are shorter and thus easier to chew.
							</p>
															
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 single-blog">
							<div class="thumb">
								<img class="img-fluid" src="img/b4.jpg" alt="">								
							</div>
							<p class="date">6 Jul 2018</p>
							<a href="https://www.westonfoodservice.com/en-ca/products/buns/black-white-sesame-burger-bun" target='blank'><h4>Seaseme and black seed
							Flavored Bun Rocks</h4></a>
							<p>
								A tiny flat seed harvested initially for its nutty oil used in cooking. Black sesame seeds make a strikingly different garnish and have a slightly richer flavor than their white counterparts. For extra crunch, roll meat/seafood in a bowl of these seeds before cooking, use for tuna steaks and sushi, mix into rice and noodle dishes, or toss into a salad!
							</p>
																
						</div>							
					</div>
				</div>	
			</section>
			<!-- End blog Area -->							

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
	                            <li><a href="https://www.facebook.com/" target='blank'><i class="fa fa-facebook"></i></a></li>
	                            <li><a href="https://twitter.com/?lang=en" target='blank'><i class="fa fa-twitter"></i></a></li>         
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