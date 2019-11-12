<?php 
	session_start();
  require_once 'db/config.php';
  error_reporting(0);
  if(strlen($_SESSION['login'])==0)
	{	
header('location:index.php');
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
								Tour History				
							</h1>	
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->
<div class="privacy">
	<div class="container">
		<form name="chngpwd" method="post" onSubmit="return valid();">
		 <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
	<p>
	<table border="1" width="100%">
<tr align="center">
<th style="width: 180px;">Booking Id</th>
<th style="width: 400px;">Package Name</th>	
<th style="width: 180px;">From</th>
<th style="width: 180px;">To</th>
<th style="width: 140px;">No of Travellers</th>
<th style="width: 180px;">Total Amount</th>
</tr>
<?php 

$email=$_SESSION['login'];
$sql = "SELECT booking.booking_id,booking.package_id,tourpackages.name,booking.fromDate,booking.toDate,booking.NoOfPassengers,booking.TotalPrice from booking join tourpackages on tourpackages.package_id=booking.package_id where email='$email'";
$result = $conn->query($sql);
while($row=$result->fetch_assoc())
{
?>
<tr align="center">
<td>#BK<?php echo htmlentities($row['booking_id']);?></td>
<td><a href="package-details.php?pkgid=<?php echo htmlentities($row['package_id']);?>"><?php echo htmlentities($row['name']);?></a></td>
<td><?php echo htmlentities($row['fromDate']);?></td>
<td><?php echo htmlentities($row['toDate']);?></td>
<td><?php echo htmlentities($row['NoOfPassengers']);?></td>
<td><?php echo htmlentities($row['TotalPrice']);?></td>
</tr>
<?php } ?>
	</table>
		
			</p>
			</form>

		
	</div>
</div>
<br>

			<!-- start home-about Area -->
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
								inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach. inappropriate behavior is often laughed.
							</p>
							<a href="#" class="primary-btn text-uppercase">request custom price</a>
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
