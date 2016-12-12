<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>
    <?php echo $title; ?>
  </title>
  <!--Import Google Icon Font-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/materialize.min.css" media="screen,projection"
  />
  <!-- Custom main css -->
  <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css" media="screen,projection" />
  <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/style.css" media="screen,projection" />
</head>

<body>
  <header>
    <nav class="white">
      <div class="nav-wrapper container">
        <a href="#!" class="brand-logo">Logo</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="#">Home</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="#">Bookings</a></li>
          <li><a href="#">Locations</a></li>
          <li><a href="#">Gallery</a></li>
          <li><a href="#">Contact</a></li>
          <li><a class="waves-effect waves-light btn">Sign In</a></li>
        </ul>
        <ul class="side-nav" id="mobile-demo">
          <li><a href="#">Home</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="#">Bookings</a></li>
          <li><a href="#">Locations</a></li>
          <li><a href="#">Gallery</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </div>
    </nav>
  </header>

  <section>
    <div id="index-banner" class="parallax-container">
      <div class="section no-pad-bot">
        <div class="container">
          <br><br>
          <h1 class="header center teal-text text-lighten-2">Hotel & Travel</h1>
          <div class="row center">
            <h5 class="header col s12 light">The best service at the lowest price</h5>
          </div>
          <div class="row center">
            <a href="#" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Start Booking</a>
          </div>
          <br><br>
        </div>
      </div>
      <div class="parallax"><img src="<?php echo base_url(); ?>assets/images/img-hotel.jpg" alt="Unsplashed background img 1"></div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="section">
        <div class="row">
          <h3 class="thin center">Welcome Hotel & Travel</h3>
        </div>
        <!--   Icon Section   -->
        <div class="row">
          <div class="col s12 m6 center">
            <img class="card lighten-1" width="100%" src="http://www.thefloridahotelorlando.com/var/floridahotelorlando/storage/images/media/images/photo-gallery/hotel-images/florida-hotel-exteriror-shot-pool/26985-1-eng-US/Florida-Hotel-Exteriror-Shot-Pool.jpg"
              alt="">
          </div>

          <div class="col s12 m6">
            <p class="light welcome-message">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates
              components and animations that provide more feedback to users. Additionally, a single underlying responsive
              system across all platforms allow for a more unified user experience.</p>
          </div>
        </div>
      </div>

      <div class="section">
        <!-- Feature List -->
        <div class="row center" id="feature">
          <span id="features" class="scrollspy"></span>
          <h3 class="thin">Tour Guides</h3>

          <div id="feature-table" class="card light">
            <div class="feature-item">
              <p class="flow-text">Unlimited Messages<i class="mdi-navigation-check"></i></p>
            </div>
            <div class="feature-item">
              <p class="flow-text"><a href="/message-archive">Message Archive</a><i class="mdi-navigation-check"></i></p>
            </div>
            <div class="feature-item">
              <p class="flow-text"><a href="/delivery-reports">Delivery Reports</a><i class="mdi-navigation-check"></i></p>
            </div>
            <div class="feature-item">
              <p class="flow-text"><a href="/online-signup">Web Signups</a><i class="mdi-navigation-check"></i></p>
            </div>
            <div class="feature-item">
              <p class="flow-text"><a href="/daily-digest-email">Daily Digest</a><i class="mdi-navigation-check"></i></p>
            </div>
            <div class="feature-item">
              <p class="flow-text"><a href="/custom-email-footer">Custom Footers</a><i class="mdi-navigation-check"></i></p>
            </div>
            <div class="feature-item">
              <p class="flow-text">Import/Export Members<i class="mdi-navigation-check"></i></p>
            </div>
            <div class="feature-item">
              <p class="flow-text"><a href="/custom-domains">Custom Domains</a><i class="mdi-navigation-check"></i></p>
            </div>
            <a href="#create" class="btn btn-large create-list-link">Get Started <svg style="width:24px;height:24px;top: 6px; position: relative; right: 2px;" viewBox="0 0 24 24">
<path fill="#ffffff" d="M5.59,7.41L7,6L13,12L7,18L5.59,16.59L10.17,12L5.59,7.41M11.59,7.41L13,6L19,12L13,18L11.59,16.59L16.17,12L11.59,7.41Z" />
</svg>


</a>
          </div>

          <!--   Icon Section   -->
          <div class="row">
            <p class="light center">By utilizing elements <br> and principles of Material Design, we were able to create a framework that incorporates
              components and animations that provide more feedback to users. Additionally, a single underlying responsive
              system across all platforms allow for a more unified user experience.</p>
          </div>
        </div>

      </div>
  </section>

  <footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Company Bio</h5>
          <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support
            and continue development on this project and is greatly appreciated.</p>

        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
  </footer>

  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/materialize.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/grayscale.js"></script>
  <!-- Custom jQuery -->
  <script type="text/javascript">
      $( document ).ready(function(){
        $(".button-collapse").sideNav();
        $(".parallax").parallax();
      });

    </script>
</body>

</html>