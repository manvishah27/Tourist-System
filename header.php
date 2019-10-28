<?php
  session_start();
  require_once 'db/config.php';
  error_reporting(0);
  ?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            Intelligent Tourist System
        </title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
	    <meta charset = "utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
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

            <?php if(isset($_SESSION['login']))
            {
            ?>
            <li>
              <a href="logout.php">Logout</a>
            </li>
            <?php 
              }
              else {
            ?>
            <li>
              <a href="login.php">Login</a>
            </li>
            <?php
              }
            ?>
            
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
    
     <?php if(isset($_SESSION['login']))
            {
            ?>
            <li>
              <a href="logout.php">Logout</a>
            </li>
            <?php 
              }
              else {
            ?>
            <li>
              <a href="login.php">Login</a>
            </li>
            <?php
              }
            ?>

  </ul>

</body>
</html>
