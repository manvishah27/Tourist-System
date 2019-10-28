<?php
  session_start();
  require_once 'db/config.php';
  error_reporting(0);
if(isset($_POST['submit2']))
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
}
?>
<!DOCTYPE HTML>
<html>
<head>
        <title>
            Intelligent Tourist System
        </title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/packages_styles.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
        <link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
        <script src="js/jquery-1.12.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/jquery-ui.js"></script>
        <link rel="stylesheet" href="css/jquery-ui.css" />

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

<?php include('header.php'); ?>

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
			<div class="col-md-4 selectroom_left wow fadeInLeft animated" data-wow-delay=".5s">
				<img src="images/<?php echo htmlentities($row['image']);?>" class="img-responsive" alt="">
			</div>
			<div class="col-md-8 selectroom_right wow fadeInRight animated" data-wow-delay=".5s">
				<h2><?php echo htmlentities($row['name']);?></h2>
				<p class="dow">#PKG-<?php echo htmlentities($row['package_id']); $package_id=$row['package_id'];?></p>
				<p><b>Type :</b> <?php echo htmlentities($row['type']);?></p>
				<p><b>Location :</b> <?php echo htmlentities($row['location']);?></p>
					<p><b>Features</b> <?php echo htmlentities($row['features']);?></p>
		
						<div class="clearfix"></div>
				<div class="grand">
					<p>Amount</p>
					<h3>&#x20b9; <?php echo htmlentities($row['price']); $price=$row['price']; ?></h3>
				</div>
			</div>

		<h3>Details</h3>
				<p style="padding-top: 1%"><?php echo htmlentities($row['details']);?> </p>	
				<div class="clearfix"></div>
		</div>
<?php } ?>

		<div class="selectroom_top" id="tour_details_form">
			<h2>Travels</h2>
			<div class="selectroom-info animated wow fadeInUp animated" data-wow-duration="1200ms" data-wow-delay="500ms" style="visibility: visible; animation-duration: 1200ms; animation-delay: 500ms; animation-name: fadeInUp; margin-top: -70px">
				<br>
				<br>
			<form name="book" method="post" action="package-details.php?pkgid=<?php echo htmlentities($package_id);?>">

			<div class="bnr-right">
				<label class="inputLabel">Package ID</label>
				<input id="package_id" type="number" name="package_id" value="<?php echo $package_id; ?>" required="" readonly="">
			</div>

			<div class="bnr-right">
				<label class="inputLabel">Package Price</label>
				<input id="price" type="number" name="price" value="<?php echo $price; ?>" required="" readonly="">
			</div>

					<div class="ban-bottom">
				<div class="bnr-right">
				<label class="inputLabel">From</label>
				<input class="date" id="datepicker" type="text" placeholder="yyyy-mm-dd"  name="fromDate" required="">
			</div>
			<div class="bnr-right">
				<label class="inputLabel">To</label>
				<input class="date" id="datepicker1" type="text" placeholder="yyyy-mm-dd" name="toDate" required="">
			</div>
			</div>
			<div class="bnr-right">
				<label class="inputLabel">No of Travellers</label>
				<input id="noOfPassengers" type="number" name="noOfPassengers" required="">
			</div>
					<div class="spe">
						<label class="inputLabel">Comment</label>
						<input class="special" type="text" name="comment" required="">
					</div> 
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
			<h2>Travels</h2>
			<div class="selectroom-info animated wow fadeInUp animated" data-wow-duration="1200ms" data-wow-delay="500ms" style="visibility: visible; animation-duration: 1200ms; animation-delay: 500ms; animation-name: fadeInUp; margin-top: -70px">
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

<footer class="section grey darken-3 white-text">
    <div class="container">
        <div class="row center">
            <div class="col s6" style="font-size: 1.2em">
                <h5>Contact:</h5>
                <p>Mo : +9102221642356</p>
                <p>Email : info@outlines.com</p>
            </div>
            <div class="col s6">
                <p class="flow-text">&copy; 2019 Outlines</p>
                <a href="#" class="white-text">
                    <i class="fab fa-facebook fa-2x"></i>
                </a>
                <a href="#" class="white-text">
                    <i class="fab fa-twitter fa-2x"></i>
                </a>
                <a href="#" class="white-text">
                    <i class="fab fa-linkedin fa-2x"></i>
                </a>
                <a href="#" class="white-text">
                    <i class="fab fa-google-plus fa-2x"></i>
                </a>
            </div>
        </div>
    </div>
    </footer>

</body>
</html>