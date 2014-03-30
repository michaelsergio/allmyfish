<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="stylesheet" href="styles/main.css">
        <!-- build:js scripts/vendor/modernizr.js -->
        <script src="bower_components/modernizr/modernizr.js"></script>
        <!-- endbuild -->
        <script src="bower_components/jquery/jquery.js"></script>

        <!-- build:css styles/vendor/bootstrap.css -->
        <link rel="stylesheet" href="styles/vendor/bootstrap/bootstrap.css">

        <link rel="stylesheet" href="styles/meowornot.css">
        <!-- endbuild -->
        <script src="scripts/meowornot.js"></script>
        <!-- endbuild -->

</head>

    <!-- Page content of course! -->
    <!-- Custom styles for this template -->
<style>
  /* Move down content because we have a fixed navbar that is 50px tall */
  body {
    padding-top: 50px;
    padding-bottom: 20px;
  }

  /* Set widths on the navbar form inputs since otherwise they're 100% wide */
  .navbar-form input[type="text"],
  .navbar-form input[type="password"] {
    width: 180px;
  }

  /* Wrapping element */
  /* Set some basic padding to keep content from hitting the edges */
  .body-content {
    padding-left: 15px;
    padding-right: 15px;
  }

  /* Responsive: Portrait tablets and up */
  @media screen and (min-width: 768px) {
    /* Let the jumbotron breathe */
    .jumbotron {
      margin-top: 20px;
    }
    /* Remove padding from wrapping element since we kick in the grid classes here */
    .body-content {
      padding: 0;
    }
  }
</style>

<body>
<div class="navbar navbar-fixed-top">
  <div class="container">
    <a class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </a>

    <span>
      <a href="/">
        <img class="logo pull-left" src="images/catlogopng.png" alt="Logo">
      </a>
    </span>

    <a class="navbar-brand" href="#">Meow Or Not</a>
    <div class="nav-collapse collapse">
      <ul class="nav navbar-nav">
        <li><a href="#about">About</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </div><!--/.nav-collapse -->

  </div>
</div>

<div class="container-fluid center-block">
  <div id="cat">
    <img id="cat-img" src="<?php echo $image_url ?>" class="img-responsive" alt="Responsive image">

    <br/>
    <div class="btn-group mw-btn-group container-fluid">
      <br/>
      <form action="http://plentyofcats.com/poc/cats.php" method="GET">
        <button id="meow" type="submit" class="btn btn-large btn-success meow-btn">Meow</button>
        <button id="notmeow" type="submit" class="btn btn-large btn-warning not-btn">Not</button>
      </form>
      <br />
    </div>

  <div class="name">
      <?php echo $cat_name ?>
  </div>

  <div class="info">
      At <?php echo $location ?>. <?php echo $breed ?> <?php echo $size ?> <?php echo $age ?>
  </div>

    <div id="cat-description" >
      <?php echo $desc ?>
    </div>

    <div class="adopt">
    Adopt Here: 
    <a href="<?php echo $adoption_url ?>"><?php echo $adoption_url ?></a>
    </div>
  </div>
</div> <!-- /container -->


    <!-- JS and analytics only. -->
    <!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->



        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>

        <!-- build:js scripts/main.js -->
        <script src="bower_components/jquery/jquery.js"></script>
        <script src="scripts/main.js"></script>
        <!-- endbuild -->


        <!-- build:js scripts/fastclick.js -->
        <script src="scripts/fastclick.js"></script>
        <script src="scripts/fastclick.example.js"></script>
        <!-- endbuild -->
</body>
</html>
