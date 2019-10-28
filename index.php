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

  <?php include('header.php'); ?>

  <!-- Section: Slider -->
  <section class="slider">
    <ul class="slides">
      <li>
        <img src="images/resort1.jpg">
        <!-- random image -->
        <div class="caption center-align">
          <h2>Take Your Dream Vacation</h2>
          <h5 class="light grey-text text-lighten-3 hide-on-small-only">Work, Travel, Save, Repeat</h5>
        </div>
      </li>
      <li>
        <img src="images/resort2.jpg">
        <!-- random image -->
        <div class="caption left-align">
          <h2>We Work With All Budgets</h2>
          <h5 class="light grey-text text-lighten-3 hide-on-small-only">Just travel for travel's sake.</h5>
        </div>
      </li>
      <li>
        <img src="images/resort3.jpg">
        <!-- random image -->
        <div class="caption right-align">
          <h2>Group & Individual Getaways</h2>
          <h5 class="light grey-text text-lighten-3 hide-on-small-only">Roll under the stars!</h5>
        </div>
      </li>
    </ul>
  </section><br>

  <?php
  include('search-bar.php');
  ?>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>

  <script>
    // Sidenav
    const sideNav = document.querySelector('.sidenav');
    M.Sidenav.init(sideNav, {});

    // Slider
    const slider = document.querySelector('.slider');
    M.Slider.init(slider, {
      indicators: false,
      height: 500,
      transition: 500,
      interval: 6000
    });

  </script>

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