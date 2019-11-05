<?php 
	session_start();
  require_once 'db/config.php';
  error_reporting(0);

  if(isset($_POST['holiday-search']))
{
  $place = $_POST['destination'];
  $start = $_POST['start'];
  $return = $_POST['return'];
  $travellers = $_POST['travellers'];
}
  ?>
  	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
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
		<title>Intelligent Tourist System</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/jquery-ui.css">				
			<link rel="stylesheet" href="css/nice-select.css">							
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">				
			<link rel="stylesheet" href="css/main.css">			
			<link rel="stylesheet" href="css/packages.css">
		</head>
		<body>
			<?php
			include('header.php');
			?>
			  
			<!-- start banner Area -->
			<section class="about-banner relative">
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Tour Packages				
							</h1>	
							<p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="packages.php"> Packages</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
			

			<!-- Start destinations Area -->
			<section class="destinations-area section-gap">
				<div class="container">
		            <div class="row d-flex justify-content-center">
		                <div class="menu-content pb-40 col-lg-8">
		                    <div class="title text-center">
		                        <h1 class="mb-10">Our Packages</h1>
		                        <p>Find the Best Packages at the Best Prices here</p>
		                    </div>
		                </div>
		            </div>			

		        	<div class="row">
		           <?php
		           		$sql = "SELECT from tourpackages where location='$place'";
						$result = $conn->query($sql);
						while($row=$result->fetch_assoc())
						{
		           ?>		
			
						<div class="col-lg-4">
							<div class="single-destinations">
								<div class="thumb">
									<img src="img/<?php echo htmlentities($row['image']);?>" alt="">
								</div>
								<div class="details">
									<h4><?php echo htmlentities($row['name']);?></h4>
									<p>
										<?php echo htmlentities($row['location']);?>
									</p>
									<ul class="package-list">
										<li class="d-flex justify-content-between align-items-center">
											<span>Type</span>
											<span><?php echo htmlentities($row['type']);?></span>
										</li>
										<li class="d-flex justify-content-between align-items-center">
											<span>Price</span>
											<span>&#x20b9; <?php echo htmlentities($row['price']);?></span>
										</li>
										<li class="d-flex justify-content-between align-items-center">
											<span>Extras</span>
											<span>All Inclusive</span>
										</li>
										<li class="d-flex justify-content-between align-items-center">
											<a href="package-details.php?pkgid=<?php echo htmlentities($row['package_id']);?>" class="details-btn">Details</a>
										</li>													
									</ul>
								</div>
							</div>
						</div>
                       
					<?php } ?>
						</section>



			

			<section class="home-about-area">
				<div class="container-fluid">
					<div class="row align-items-center justify-content-end">
						<div class="col-lg-6 col-md-12 home-about-left">
							<h1>
								Did not find your Package? <br>
								Feel free to ask us. <br>
								We‘ll make it for you
							</h1>
							<p>
								Customized Tours Just for YOU!<br>At the best Prices.
							</p>
							<a href="contact.html" class="primary-btn text-uppercase">request custom price</a>
						</div>
						<div class="col-lg-6 col-md-12 home-about-right no-padding">
							<img class="img-fluid" src="img/hotels/about-img.jpg" alt="">
						</div>
					</div>
				</div>	
			</section>
			<!-- End home-about Area -->

			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">

					
					<div class="row footer-bottom d-flex justify-content-between align-items-center">
						<p class="col-lg-8 col-sm-12 footer-text m-0">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This Website is made by Outlines</p>
					
						<div class="col-lg-4 col-sm-12 footer-social">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
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
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
		</body>
	</html>
