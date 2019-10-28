<!DOCTYPE html>
<html>
    <head>
        <title>
            Intelligent Tourist System
        </title>
        <link rel="stylesheet" type="text/css" href="css/styles.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
      <meta charset = "utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
  </head>

   <body id="home" class="scrollspy">

   <?php include('header.php'); ?>

  <!-- Section: Gallery -->
  <section id="gallery" class="section section-gallery scrollspy">
    <div class="container">
      <h4 class="center">Gallery</h4>
      <div class="row">
        <div class="col s12 m4">
          <img src="images/gallery1.jpg" alt="" class="materialboxed responsive-img">
        </div>
        <div class="col s12 m4">
          <img src="images/gallery2.jpg" alt="" class="materialboxed responsive-img">
        </div>
        <div class="col s12 m4">
          <img src="images/gallery3.jpg" alt="" class="materialboxed responsive-img">
        </div>
      </div>

      <div class="row">
        <div class="col s12 m4">
          <img src="images/gallery4.jpg" alt="" class="materialboxed responsive-img">
        </div>
        <div class="col s12 m4">
          <img src="images/galler5.jpg" alt="" class="materialboxed responsive-img">
        </div>
        <div class="col s12 m4">
          <img src="images/gallery6.jpg" alt="" class="materialboxed responsive-img">
        </div>
      </div>

      <div class="row">
        <div class="col s12 m4">
          <img src="images/gallery7.jpg" alt="" class="materialboxed responsive-img">
        </div>
        <div class="col s12 m4">
          <img src="images/gallery8.jpg" alt="" class="materialboxed responsive-img">
        </div>
        <div class="col s12 m4">
          <img src="images/gallery9.jpg" alt="" class="materialboxed responsive-img">
        </div>
      </div>

      <div class="row">
        <div class="col s12 m4">
          <img src="images/gallery10.jpg" alt="" class="materialboxed responsive-img">
        </div>
        <div class="col s12 m4">
          <img src="images/gallery11.jpg" alt="" class="materialboxed responsive-img">
        </div>
        <div class="col s12 m4">
          <img src="images/gallery12.jpg" alt="" class="materialboxed responsive-img">
        </div>
      </div>
    </div>
  </section>

  <script>
    // Material Boxed
    const mb = document.querySelectorAll('.materialboxed');
    M.Materialbox.init(mb, {});

    const ss = document.querySelectorAll('.scrollspy');
    M.ScrollSpy.init(ss, {});

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