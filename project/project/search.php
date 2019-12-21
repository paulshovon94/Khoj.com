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





$db = mysqli_connect('localhost', 'root', '', 'registration');

if(!$db){
	die("Connection failed: " .mysqli_connect_error());
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
		<title>Search</title>

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
				          <li><a href="reserve.php">Reserve</a></li>
				          <li><a href="gallery.php">Gallery</a></li>
				          <li><a href="about.php">About</a></li>	
				          <li><a href="contact.php">Contact</a></li>
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
								A restaurant or an eatery, is a business which prepares and serves food and drinks to customers in exchange for money.
							</p>
							
							<div class="widget-wrap">
								<div class="single-sidebar-widget search-widget">
									<form class="search-form" method="post" action="search.php" >
			                            <input placeholder="restarun name , area" name="search" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Posts'" >
			                            <button type="submit" name="submit"><i class="fa fa-search"></i></button>
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
						<div class="col-lg-12 home-about-left">
							<?php 			
			
							$search=$_POST['search'];
							$query="SELECT restaurent_name,menu,area_name,trade_mark_dish,rating,address,map,review FROM restaurent WHERE restaurent_name LIKE '%$search%' OR area_name LIKE '%$search%'";
							$result=mysqli_query($db,$query);
							
							if(mysqli_num_rows($result)>0)
							{
								echo"<table class='table table-bordered table-dark table-hover'> 
								<tr>
									<th>Restaurent Name</th> 
									<th>Area</th>
									<th>Trade Mark Dish</th>
									<th>Rating</th>
									<th>Address</th>
									<th>Review</th>
								</tr>";
								while($row=mysqli_fetch_assoc($result))
								{
									$rn=$row['restaurent_name'];
									$me=$row['menu'];
									$an=$row['area_name'];
									$tmd=$row['trade_mark_dish'];
									$r=$row['rating'];
									$a=$row['address'];
									$m=$row['map'];
									$re=$row['review'];

									echo"<tr>
									<td><a href='$me' target='blank'>$rn</a></td>
									<td>$an</td>
									<td>$tmd</td>
									<td>$r</td>
									<td><a href='$m' target='blank'>$a</a></td>
									<td><a href='$re' target='blank'>review</a></td>
									</tr>";
								}
								echo"</table>";
							}else{
								echo "No record found";
							}


		
							


							?>

						</div>
					</div>
				</div>	
			</section>
			<!-- End home-about Area -->			

								

			<!-- start footer Area -->		
			<footer class="footer-area">
				<div class="footer-widget-wrap">
					<div class="container">
						<div class="row section-gap">
							
							<div class="col-lg-4  col-md-6 col-sm-6">
								<div class="single-footer-widget">
									<h4>Contact Us</h4>
									<p>
										46, Amenapolli, Bodho Mondir, Dhaka=1219
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