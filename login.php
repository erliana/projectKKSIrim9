<?php
include("koneksi.php");
session_start();
if(isset($_POST['Login'])) {
  $user = $_POST['user'];
  $pass = ($_POST['pass']);
  $data = mysqli_query($conn, "SELECT * from user ");
  while ($d=mysqli_fetch_array($data)) {
    if($user == $d['username'] && $pass == $d['password']){
    $_SESSION['sessionLogin'] = $user;
    header("location:data_siswa.php");
  } else {
    echo '
    <script type="text/javascript">
      alert("Username dan password salah!");
      window.location.href="login.php";
    </script> ';  
  }
  }
  
} else {
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  

    <title>Plataforma - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/plataforma/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="assets/plataforma/css/animate.css">
    
    <link rel="stylesheet" href="assets/plataforma/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/plataforma/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/plataforma/css/magnific-popup.css">

    <link rel="stylesheet" href="assets/plataforma/css/aos.css">

    <link rel="stylesheet" href="assets/plataforma/css/ionicons.min.css">

    <link rel="stylesheet" href="assets/plataforma/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="assets/plataforma/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="assets/plataforma/css/flaticon.css">
    <link rel="stylesheet" href="assets/plataforma/css/icomoon.css">
    <link rel="stylesheet" href="assets/plataforma/css/style.css">
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.html"><img src="jibas.png" style="width: 100px; height: 100px;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="beranda.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="data_siswa.php" class="nav-link">Data Siswa</a></li>
            <li class="nav-item"><a href="jadwal.php" class="nav-link">Jadwal</a></li>
            <li class="nav-item"><a href="data_pribadi.php" class="nav-link">Info Siswa</a></li>
            <li class="nav-item cta mr-md2"><a href="galery.php" class="nav-link">Galery</a></li>
          

          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
    
    <div class="hero-wrap" style="background-image: url('assets/plataforma/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-lg-6 col-md-6 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <p class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="icon-calendar mr-2"></span>20-23 November 2019 - Indonesia</p>
            <div id="timer" class="d-flex">
              <div class="time" id="days"></div>
              <div class="time pl-3" id="hours"></div>
              <div class="time pl-3" id="minutes"></div>
              <div class="time pl-3" id="seconds"></div>
            </div>
          </div>
          <div class="col-lg-2 col"></div>
          <div class="col-lg-4 col-md-6 mt-0 mt-md-5">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="request-form ftco-animate">
              <h2>LOGIN</h2>
              <div class="form-group">
                <input type="text" name="user" class="form-control" placeholder="Enter your Username">
              </div>
              <div class="form-group">
                <input class="form-control" type="password" name="pass" placeholder="Enter your Password">
              </div>
              <div class="form-group">
                <input type="submit" value="Login" name="Login" class="btn btn-success py-3 px-4">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
   <footer class="ftco-footer ftco-bg-success ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">JIBASKU</h2>
              <p>Help students to more easily find out information from their school.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Useful Links</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Data Siswa</a></li>
                <li><a href="#" class="py-2 d-block">Jadwal</a></li>
                <li><a href="#" class="py-2 d-block">Info Siswa</a></li>
                <li><a href="#" class="py-2 d-block">Galery</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Have a Questions?</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text">Sukaraja. Bogor, West Java, Indonesia</span></li>
                  <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                  <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="assets/plataforma/js/jquery.min.js"></script>
  <script src="assets/plataforma/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="assets/plataforma/js/popper.min.js"></script>
  <script src="assets/plataforma/js/bootstrap.min.js"></script>
  <script src="assets/plataforma/js/jquery.easing.1.3.js"></script>
  <script src="assets/plataforma/js/jquery.waypoints.min.js"></script>
  <script src="assets/plataforma/js/jquery.stellar.min.js"></script>
  <script src="assets/plataforma/js/owl.carousel.min.js"></script>
  <script src="assets/plataforma/js/jquery.magnific-popup.min.js"></script>
  <script src="assets/plataforma/js/aos.js"></script>
  <script src="assets/plataforma/js/jquery.animateNumber.min.js"></script>
  <script src="assets/plataforma/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="assets/plataforma/js/google-map.js"></script>
  <script src="assets/plataforma/js/main.js"></script>
    
  </body>
</html>
<?php
}
?>