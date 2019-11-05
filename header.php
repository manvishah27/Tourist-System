<?php 
	session_start();
  require_once 'db/config.php';
  error_reporting(0);
  ?>

	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
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

	<style>
		.dropdown {
		  float: left;
		  overflow: hidden;
		}
		.dropdown .dropbtn {
		  cursor: pointer;
		  border: none;
		  outline: none;
		  color: white;
		  background-color: inherit;
		 /* font-size: 16px;  
		  padding: 14px 16px;
		  font-family: inherit;
		  margin: 0;*/
		}
		.dropdown-content {
		  position: absolute;
		  background-color: #f9f9f9;
		  min-width: 160px;
		  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		  z-index: 1;
		}
		#myDropdown {
			display: none;
		}
		.dropdown-content a {
		  float: none;
		  color: black;
		  padding: 12px 16px;
		  text-decoration: none;
		  display: block;
		  text-align: left;
		}
		.dropdown-content a:hover {
		  background-color: #ddd;
		}

	</style>

	



		</head>
	<body>
<header id="header">
				
				<div class="container main-menu">
					<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <h1 style="color:white;">Outlines</h1>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li><a href="index.php">Home</a></li>
				          <li><a href="about.php">About</a></li>
				          <li><a href="packages.php">Packages</a></li>
				          <li><a href="hotels.php">Hotels</a></li>
				          <li><a href="contact.php">Contact</a></li>

				          <?php 
				          if(isset($_SESSION['login']))
				            {  ?>

				            	<li><a href="logout.php">Logout</a></li>

				            	<li><a href="tour-history.php">Tour History</a></li>
				            <!--<li class="dropdown">
				            	<button class="dropbtn" onclick="openAccount()">Account </button>
				            	<div class="dropdown-content" id="myDropdown">
				            		<a href="profile.php">Profile</a>
				            		<a href="tour-history.php">Tour History</a>
				            	</div>
				            </li>-->
				            <script>
function openAccount() {
  //document.getElementById("myDropdown").classList.toggle("show");
  var div = document.getElementById('myDropdown');
  		if (div.style.display == 'none') {
  			div.style.display = 'block';
  		}
  		else {
  			div.style.display = 'none';
  		}
  		closeAccount();
}

function closeAccount() {
	document.getElementById("myDropdown").style.display == 'none';
}

/*window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
  var myDropdown = document.getElementById("myDropdown");
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
  }
}*/
</script>
				            <?php 
				              }
				              else {
				            ?>
				            <li>
				              <a href="login.php">Login</a>
				            </li>
				            <?php
				              } ?>

				        </ul>
				      </nav><!-- #nav-menu-container -->					      		  
					</div>
				</div>
			</header><!-- #header -->



		</body>
		</html>
