<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <style type="text/css">
    img{
      height: 200px;
      width: 100%;
      border-radius: 6px;
    }
  </style>

</head>

<body>
  <?php include('nav.php')?>

 <!--  <header id="header" class="fixed-top">
    <div class="container-fluid d-flex justify-content-between align-items-center">

      <h1 class="logo me-auto me-lg-0"><a href="index.html">Food Share</a></h1>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="active" href="index.php">Home</a></li>
          <li><a href="help.php">Get Help</a></li>
          <li><a href="donate.php">Donate</a></li>
          <li><a href="contact.php">contact</a></li>
          <li><a href="about.php">About Us</a></li>
          <li><a href="login.php" class="btn-about">Login</a></li>
          <li><a href="register.php" class="btn-about">SignUp</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

      

    </div>

  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container d-flex flex-column align-items-center" data-aos="zoom-in" data-aos-delay="100">
      <h1>Fodd Share</h1>
      <h2>Sharing is caring</h2>
      <a href="about.php" class="btn-about">About Us</a>
    </div>
  </section>


    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Donations</h2>
        </div>

  <div class="row">
  <?php
    require_once('connection.php');
    $q = "SELECT * FROM Rooms ORDER BY Rooms.id ASC";
    $run = mysqli_query($con, $q);
    $count = 0;
    if(mysqli_num_rows($run) > 0){
        while($row = mysqli_fetch_array($run)){
  ?>
  <div class="col-sm-6 wowload fadeInUp">
      <div class="Rooms">
       <div class="card" style="width: 30rem;">
      <img src="images/photos/<?php echo $row['image1']; ?>" class="img-responsive" class="card-img-top" alt="...">
      <div class="card-body">
    <h5 class="card-title"><?php echo $row['Name']; ?></h5>
    <p class="card-text">Location: <?php echo $row['Location']; ?><br> Posted: <?php echo $row['Time']; ?></p>
    <a href="Food-details.php?id=<?php echo $row['id']; ?>" class="btn btn-success">Contact Owner</a>
  </div>
</div>
      </div>
  </div>
  <?php
        }
    }
  ?>
  
  
</div>
  
</div>

 
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>foodshare</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer>

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>