<?php 
  session_start();
  require_once 'db/config.php';
  error_reporting(0);

  if(isset($_POST['submit2']))
{
$pid=intval($_GET['pkgid']);
$useremail=$_SESSION['email'];
$fromdate=$_POST['fromdate'];
$todate=$_POST['todate'];
$sql="INSERT INTO booking(package_id,email,fromDate,toDate) VALUES(:pid,:useremail,:fromdate,:todate,:comment,:status)";
$query = $conn->prepare($sql);
$query->bindParam(':pid',$pid,PDO::PARAM_INT);
$query->bindParam(':useremail',$useremail,PDO::PARAM_STR);
$query->bindParam(':fromdate',$fromdate,PDO::PARAM_STR);
$query->bindParam(':todate',$todate,PDO::PARAM_STR);
$query->bindParam(':comment',$comment,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $conn->lastInsertId();
if($lastInsertId)
{
$msg="Booked Successfully";
}
else 
{
$error="Something went wrong. Please try again";
}

}
  ?>

<!DOCTYPE html>
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
  <!-- Navbar -->
  <div class="navbar-fixed">
    <nav class="grey darken-3">
      <div class="container">
        <div class="nav-wrapper">
          <a href="#" class="brand-logo" style="letter-spacing: 4px;">Outlines</a>
          <a href="#" data-target="mobile-nav" class="sidenav-trigger">
            <i class="material-icons">menu</i>
          </a>
          <ul class="right hide-on-med-and-down">
            <li>
              <a href="index.php">Home</a>
            </li>
            <li>
              <a href="services.php">Services</a>
            </li>
            <li>
              <a href="gallery.php">Gallery</a>
            </li>
            <li>
              <a href="contact.php">Contact</a>
            </li>
            <li>
              <a href="login.php">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <ul class="sidenav" id="mobile-nav">
    <li>
      <a href="index.php">Home</a>
    </li>
    <li>
      <a href="services.php">Services</a>
    </li>
    <li>
      <a href="gallery.php">Gallery</a>
    </li>
    <li>
      <a href="contact.php">Contact</a>
    </li>
    <li>
      <a href="login.php">Login</a>
    </li>
  </ul>

  <!--- selectroom ---->
<div class="selectroom">
  <div class="container"> 

<?php 
$pid=intval($_GET['pkgid']);
$sql = "SELECT * from tourpackages where package_id=$pid";
$result = $conn->query($sql);
//$query->bind_param('i', $pid);
//$query->execute();
$cnt=1;
$row=$result->fetch_assoc()
    ?>

<form name="book" method="post">
    <div class="selectroom_top">
      <div class="col-md-4 selectroom_left wow fadeInLeft animated" data-wow-delay=".5s">
        <img src="images/<?php echo htmlentities($row['image']);?>" class="img-responsive" alt="">
      </div>
      <div class="col-md-8 selectroom_right wow fadeInRight animated" data-wow-delay=".5s">
        <h2><?php echo htmlentities($row['name']);?></h2>
        <p class="dow">#PKG-<?php echo htmlentities($row['package_id']);?></p>
        <p><b>Type :</b> <?php echo htmlentities($row['type']);?></p>
        <p><b>Location :</b> <?php echo htmlentities($row['location']);?></p>
          <p><b>Features: </b> <?php echo htmlentities($row['features']);?></p>
          <div class="ban-bottom">
        <div class="bnr-right">
        <label class="inputLabel">From</label>
        <input class="date" id="datepicker" type="text" placeholder="dd-mm-yyyy"  name="fromdate" required="">
      </div>
      <div class="bnr-right">
        <label class="inputLabel">To</label>
        <input class="date" id="datepicker1" type="text" placeholder="dd-mm-yyyy" name="todate" required="">
      </div>
      </div>
            <div class="clearfix"></div>
        <div class="grand">
          <p>Grand Total</p>
          <h3>USD.800</h3>
        </div>
      </div>
    <h3>Package Details</h3>
        <p style="padding-top: 1%"><?php $row['details'];?> </p> 
        <div class="clearfix"></div>
    </div>


    <div class="selectroom_top">
<?php if($_SESSION['login'])
          {?>
            <li class="spe" align="center">
          <button type="submit" name="submit2" class="btn-primary btn">Book</button>
            </li>
            <?php } else {?>
              <li class="sigi" align="center" style="margin-top: 1%">
              <a href="#" data-toggle="modal" data-target="#myModal4" class="btn-primary btn" >Book</a></li>
              <?php } ?>
          <div class="clearfix"></div>
        </ul>
      </div>
      
    </div>

  </form>


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