<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>BizPage Bootstrap Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{url('/')}}/template/img/favicon.png" rel="icon">
  <link href="{{url('/')}}/template/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{url('/')}}/template/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{url('/')}}/template/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="{{url('/')}}/template/lib/animate/animate.min.css" rel="stylesheet">
  <link href="{{url('/')}}/template/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="{{url('/')}}/template/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="{{url('/')}}/template/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{url('/')}}/template/css/style.css" rel="stylesheet">

  @yield('head')
</head>


<body>

  <!--==========================
    Header
  ============================-->
    @yield('content')

<header id="header">
    <div class="container-fluid">
      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">Idekita</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Jendela Ide</a></li>
          <li><a href="#contact">Contact</a></li>
          <li class="menu-has-children"><a href="">Profile</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->   
 <!--==========================
    Intro Section
  ============================-->

    

      
 



  <!-------->

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>Idekita</h3>
            <p>Idekita merupakan sebuah platform untuk tempat para kreator yang memiliki ide-ide kreatif untuk perbaikan kehidupan yang lebih baik. </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Links</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Home</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">About us</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Services</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              Universitas Gadjah Mada <br>
              Yogyakarta<br>
              Indonesia <br>
              <strong>Phone:</strong> 083849971010<br>
              <strong>Email:</strong> Bajaweb@mail.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Tentang Tim</h4>
            <p>Kami adalah sekumpulan anak yang tertarik terhadap design website dan juga back end website, dan kami tertarik untuk melakukan perubahan untuk menjadi yang lebih baik.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit"  value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Web B Aja</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
        -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src="{{url('/')}}/template/lib/jquery/jquery.min.js"></script>
  <script src="{{url('/')}}/template/lib/jquery/jquery-migrate.min.js"></script>
  <script src="{{url('/')}}/template/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{url('/')}}/template/lib/easing/easing.min.js"></script>
  <script src="{{url('/')}}/template/lib/superfish/hoverIntent.js"></script>
  <script src="{{url('/')}}/template/lib/superfish/superfish.min.js"></script>
  <script src="{{url('/')}}/template/lib/wow/wow.min.js"></script>
  <script src="{{url('/')}}/template/lib/waypoints/waypoints.min.js"></script>
  <script src="{{url('/')}}/template/lib/counterup/counterup.min.js"></script>
  <script src="{{url('/')}}/template/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="{{url('/')}}/template/lib/isotope/isotope.pkgd.min.js"></script>
  <script src="{{url('/')}}/template/lib/lightbox/js/lightbox.min.js"></script>
  <script src="{{url('/')}}/template/lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="{{url('/')}}/template/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="{{url('/')}}/template/js/main.js"></script>
  @yield('java')

</body>
</html>
