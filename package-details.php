<?php
  session_start();
  require_once 'db/config.php';
  error_reporting(0);
/*if(isset($_POST['submit2']))
{



$pid=intval($_GET['pkgid']);
$email=$_SESSION['login'];
$fromDate=$_POST['fromDate'];
$toDate=$_POST['toDate'];
$noOfPassengers=$_POST['noOfPassengers'];


$sql="INSERT INTO booking(package_id, email, fromDate, toDate, NoOfPassengers) VALUES('$pid', '$email', '$fromDate', '$toDate', '$noOfPassengers')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$lastInsertId = $conn->lastInsertId();
if(isset($lastInsertId))
{
$msg="Booked Successfully";
}
else 
{
$error="Something went wrong. Please try again";
}
*/

?>
<!DOCTYPE HTML>
<html>
<head>
        <title>
            Intelligent Tourist System
        </title>
        <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
        <link href="css/animate.css" rel="stylesheet" type="text/css" media="all">-->
        <script src="js/jquery-1.12.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/jquery-ui.js"></script>
        <link rel="stylesheet" href="css/jquery-ui.css" />
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
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

      <meta charset = "utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>

          <script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
          <script>
     new WOW().init();
  </script>
        </script>
          <script>
            $(function() {
            $( "#datepicker,#datepicker1" ).datepicker();
            });
          </script>

  </head>

 <body id="home" class="scrollspy">

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
							<!--<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="packages.html"> Tour Packages</a></p>-->
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->

<?php if($error){?>
	<div class="errorWrap">
		<strong>ERROR</strong>:
		<?php echo htmlentities($error); ?> 
	</div>
<?php } 
	else if($msg){?>
		<div class="succWrap">
			<strong>SUCCESS</strong>:
			<?php echo htmlentities($msg); ?>
		</div>
<?php }?>

<!--- selectroom ---->
<div class="selectroom">
	<div class="container">	
		 
<?php 
$pid=intval($_GET['pkgid']);
$sql = "SELECT * from tourpackages where package_id=$pid";
$result = $conn->query($sql);
//$query->bind_param('i', $pid);
//$query->execute();
while($row=$result->fetch_assoc())
{	?>


		<div class="selectroom_top">
			<div class="col-md-4 selectroom_left" data-wow-delay=".5s">
				<img src="img/<?php echo htmlentities($row['image']);?>" class="img-responsive" alt="">
			</div>
			<div class="col-md-8 selectroom_right" data-wow-delay=".5s">
				<h2><?php echo htmlentities($row['name']);?></h2>
				<p class="dow">#PKG-<?php echo htmlentities($row['package_id']); $package_id=$row['package_id'];?></p>
				<p><b>Type :</b> <?php echo htmlentities($row['type']);?></p>
				<p><b>Location :</b> <?php echo htmlentities($row['location']);?></p>
					<p><b>Features</b> <?php echo htmlentities($row['features']);?></p>
		
						<div class="clearfix"></div>
				<div>
					<p style="color: #424242;">Amount</p>
					<h4>&#x20b9; <?php echo htmlentities($row['price']); $price=$row['price']; ?></h4>
				</div>
				<br>
			</div>

		<h3>Details</h3>
				<p style="padding-top: 1%"><?php echo htmlentities($row['details']);?> </p>	
				<div class="clearfix"></div>
		</div>
<?php } ?>

		<div class="selectroom_top" id="tour_details_form">
			<h2>Enter your Details</h2>
			<div class="selectroom-info" style="visibility: visible; margin-top: 30px">


 <!--<div class="tab-pane fade show active" id="flight" role="tabpanel" aria-labelledby="flight-tab">
								<form class="form-wrap">
									<input type="text" class="form-control" name="name" placeholder="From " onfocus="this.placeholder = ''" onblur="this.placeholder = 'From '">									
									<input type="text" class="form-control" name="to" placeholder="To " onfocus="this.placeholder = ''" onblur="this.placeholder = 'To '">
									<input type="text" class="form-control date-picker" name="start" placeholder="Start " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Start '">
									<input type="text" class="form-control date-picker" name="return" placeholder="Return " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Return '">
									<input type="number" min="1" max="20" class="form-control" name="adults" placeholder="Adults " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Adults '">
									<input type="number" min="1" max="20" class="form-control" name="child" placeholder="Child " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Child '">							
									<a href="#" class="primary-btn text-uppercase">Search flights</a>									
								</form>
							  </div>-->


			<form name="book" class="form-wrap" method="post" action="payment-details.php">

			<div class="bnr-right">
				<label class="inputLabel">Package ID</label>
				<input id="package_id" class="form-control" type="number" name="package_id" value="<?php echo $package_id; ?>" required="" readonly="">
			</div><br>

			<div class="bnr-right">
				<label class="inputLabel">Package Price</label>
				<input id="price" class="form-control" type="number" name="price" value="<?php echo $price; ?>" required="" readonly="">
			</div><br>

					<div class="ban-bottom">
				<div class="bnr-right">
				<label class="inputLabel">From</label>
				<input class="date form-control date-picker" id="datepicker" type="text" placeholder="yyyy-mm-dd"  name="fromDate" required="">
			</div><br>
			<div class="bnr-right">
				<label class="inputLabel">To</label>
				<input class="date form-control date-picker" id="datepicker1" type="text" placeholder="yyyy-mm-dd" name="toDate" required="">
			</div><br>
			<div class="bnr-right">
				<label class="inputLabel">No of Travellers</label>
				<input id="noOfPassengers" class="form-control"s type="number" name="noOfPassengers" required="">
			</div><br>
					
					<?php if(isset($_SESSION['login']))
					{?>
						
							<div class="spe" align="center">
								<a href="payment-details.php">
								<button type="submit" name="submit2" class="btn grey darken-3">Book</button></a>
						</div>
						<?php } else { ?>
							<div class="sigi" align="center" style="margin-top: 1%">
							<a href="login.php" class="btn grey darken-3" > Book</a></div>
							<?php } ?>
					<div class="clearfix"></div>
				</ul>
		</form>
			</div>
			
		</div>

</div>
<!--- /selectroom ---->

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
