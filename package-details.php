<?php
  session_start();
  require_once 'db/config.php';
  error_reporting(0);
/*if(isset($_POST['submit2']))
{

echo 'hi';

$pid=intval($_GET['pkgid']);
$email=$_SESSION['login'];
$fromDate=$_POST['fromDate'];
$toDate=$_POST['toDate'];
$noOfPassengers=$_POST['noOfPassengers'];
$comment=$_POST['comment'];


$sql="INSERT INTO booking(package_id, email, fromDate, toDate, NoOfPassengers, comment) VALUES($pid, $email, $fromDate, $toDate, $noOfPassengers, $comment)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
/*s
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
					<p>Amount</p>
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


			<form name="book" class="form-wrap" method="post" action="package-details.php">

			<div class="bnr-right">
				<label class="inputLabel">Package ID</label>
				<input id="package_id" class="form-control" type="number" name="package_id" value="<?php echo $package_id; ?>" required="">
			</div><br>

			<div class="bnr-right">
				<label class="inputLabel">Package Price</label>
				<input id="price" class="form-control" type="number" name="price" value="<?php echo $price; ?>" required="">
			</div><br>

					<div class="ban-bottom">
				<div class="bnr-right">
				<label class="inputLabel">From</label>
				<input class="date form-control" id="datepicker" type="text" placeholder="yyyy-mm-dd"  name="fromDate" required="">
			</div><br>
			<div class="bnr-right">
				<label class="inputLabel">To</label>
				<input class="date form-control" id="datepicker1" type="text" placeholder="yyyy-mm-dd" name="toDate" required="">
			</div><br>
			<div class="bnr-right">
				<label class="inputLabel">No of Travellers</label>
				<input id="noOfPassengers" class="form-control"s type="number" name="noOfPassengers" required="">
			</div><br>
					<div class="spe">
						<label class="inputLabel">Comment</label>
						<input class="special form-control" type="text" name="comment" required="">
					</div> <br>
					<?php if(isset($_SESSION['login']))
					{?>
						
							<div class="spe" align="center">
								<button type="submit" name="submit2" class="btn grey darken-3" onclick="openPayment()">Book</button>
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

	<script>
		function openPayment() {
			document.getElementById("tour_details_form").style.display = "none";
			document.getElementById("payment_form").style.display = "block";
		}
	</script>

	<?php
	if(isset($_POST['noOfPassengers']) && isset($_POST['price']))
	{
	    $noOfPassengers = $_POST['noOfPassengers'];
	    $price = $_POST['price'];
	    $totalPrice = $price * $noOfPassengers;
	}
	 ?>

		<div class="selectroom_top" id="payment_form" style="display: none;">
			<h2>Enter your Details</h2>
			<div class="selectroom-info" data-wow-duration="1200ms" data-wow-delay="500ms" style="visibility: visible; margin-top: -70px">
				<br>
				<br>

			<form method="post" action="Paytm/PaytmKit/pgRedirect.php">
			   <!-- <label class="inputLabel">ORDER_ID::*</label> -->
			    <input type="hidden" id="ORDER_ID" tabindex="1" maxlength="20" size="20"
			            name="ORDER_ID" autocomplete="off"
			            value="<?php echo  "ORDS" . rand(10000,99999999)?>" required>
			    
			    <label class="inputLabel">USER ID ::*</label>
			    <input id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="<?php echo $_SESSION['login'] ?>" required>
			            
			    <label class="inputLabel">INDUSTRY_TYPE_ID ::*</label>
			    <input id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail" required="">

			    <label class="inputLabel">Channel ::*</label>
			    <input id="CHANNEL_ID" tabindex="4" maxlength="12" size="12" name="CHANNEL_ID" autocomplete="off" value="WEB" required="">
			    
			    <label class="inputLabel">txnAmount*</label>
			    <input id="TXN_AMOUNT" title="TXN_AMOUNT" tabindex="10" type="number" name="TXN_AMOUNT" value="<?php echo $totalPrice ?>">
			    
			    <input value="CheckOut" type="submit" class="btn grey darken-3" onclick="">
			  </form>

		</div>


	</div>
</div>
<!--- /selectroom ---->

<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">

					<div class="row">
						<div class="col-lg-3  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>About Agency</h6>
								<p>
									The world has become so fast paced that people don’t want to stand by reading a page of information, they would much rather look at a presentation and understand the message. It has come to a point 
								</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Navigation Links</h6>
								<div class="row">
									<div class="col">
										<ul>
											<li><a href="#">Home</a></li>
											<li><a href="#">Feature</a></li>
											<li><a href="#">Services</a></li>
											<li><a href="#">Portfolio</a></li>
										</ul>
									</div>
									<div class="col">
										<ul>
											<li><a href="#">Team</a></li>
											<li><a href="#">Pricing</a></li>
											<li><a href="#">Blog</a></li>
											<li><a href="#">Contact</a></li>
										</ul>
									</div>										
								</div>							
							</div>
						</div>							
						<div class="col-lg-3  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Newsletter</h6>
								<p>
									For business professionals caught between high OEM price and mediocre print and graphic output.									
								</p>								
								<div id="mc_embed_signup">
									<form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscription relative">
										<div class="input-group d-flex flex-row">
											<input name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
											<button class="btn bb-btn"><span class="lnr lnr-location"></span></button>		
										</div>									
										<div class="mt-10 info"></div>
									</form>
								</div>
							</div>
						</div>
						<div class="col-lg-3  col-md-6 col-sm-6">
							<div class="single-footer-widget mail-chimp">
								<h6 class="mb-20">InstaFeed</h6>
								<ul class="instafeed d-flex flex-wrap">
									<li><img src="img/i1.jpg" alt=""></li>
									<li><img src="img/i2.jpg" alt=""></li>
									<li><img src="img/i3.jpg" alt=""></li>
									<li><img src="img/i4.jpg" alt=""></li>
									<li><img src="img/i5.jpg" alt=""></li>
									<li><img src="img/i6.jpg" alt=""></li>
									<li><img src="img/i7.jpg" alt=""></li>
									<li><img src="img/i8.jpg" alt=""></li>
								</ul>
							</div>
						</div>						
					</div>

					<div class="row footer-bottom d-flex justify-content-between align-items-center">
						<p class="col-lg-8 col-sm-12 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
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

</body>
</html>