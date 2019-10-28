<?php 
  require_once 'db/config.php';
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

	    <meta charset = "utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
        <script>
          new WOW().init();
        </script>
	</head>

 <body id="home" class="scrollspy">
  
   <?php include('header.php'); ?>

  <div class="rooms">
  <div class="container">
    
    <div class="room-bottom">
      <h3>Package List</h3>

          
<?php 
$sql = "SELECT * from tourpackages";
$result = $conn->query($sql);
$cnt=1;
while($row=$result->fetch_assoc())
{ ?>
      <div class="rom-btm">
        <div class="col-md-3 room-left wow fadeInLeft animated" data-wow-delay=".5s">
          <img src="images/<?php echo htmlentities($row['image']);?>" class="img-responsive" alt="">
        </div>
        <div class="col-md-6 room-midle wow fadeInUp animated" data-wow-delay=".5s">
          <h4><?php echo htmlentities($row['name']);?></h4>
          <h6>Type: <?php echo htmlentities($row['type']);?></h6>
          <p><b>Location :</b> <?php echo htmlentities($row['location']);?></p>
          <p><b>Features:  </b> <?php echo htmlentities($row['features']);?></p>
        </div>
        <div class="col-md-3 room-right wow fadeInRight animated" data-wow-delay=".5s">
          <h5>&#x20b9; <?php echo htmlentities($row['price']);?></h5>
          <button btn waves-effect waves-light style="background-color: #424242; font-size: 1.2em;" name="action">
            <a style="color: #fff; text-decoration: none;" href="package-details.php?pkgid=<?php echo htmlentities($row['package_id']);?>" class="view">Details</a>
          </button>
        </div>
        <div class="clearfix"></div>
      </div>

<?php } ?>
      
    
    
    </div>
  </div>
</div>

  <footer class="section grey darken-3 darken-2 white-text">
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