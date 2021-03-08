<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Online Telemedicine</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
   <link href="assets/img/fav.jpg" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
      <div class="d-flex align-items-center">
      <!-- <i class="icofont-clock-time"></i> Monday - Saturday, -->
      </div>
      <div class="d-flex align-items-center">
      <!--  <i class="icofont-phone"></i> Call us now-->
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <!--<a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt=""></a> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <h1 class="logo mr-auto"><a href="doctor-index.php">Telemedicine</a></h1>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="doctor-index.php">Home</a></li>
          <li><a href="doctor-applist.php">Appointment List</a></li>
          <li class="drop-down"><a href="">Blog</a>
          <ul>
            <li><a href="doctor-myblog.php">My Blog</a></li>
            <li><a href="doctor-newblog.php">New Blog</a></li>
          </ul>
        </li>


            <!--  <meta name="viewport" content="width=device-width, initial-scale=1">
              <style>
              body {
                padding: 25px;
                background-color: white;
                color: black;
                font-size: 25px;
              }

              .dark-mode {
                background-color: black;
                color: white;
              }
              </style>
              </head>
              <body>

              <button onclick="myFunction()">Mode</button>

              <script>
              function myFunction() {
                 var element = document.body;
                 element.classList.toggle("dark-mode");
              }
            </script> -->


        <?php
          // connecting database
                   include "db.php";
                   // showing login info
                   if (isset($_SESSION["uid"])) {
                          $sql = "SELECT f_name FROM info_doc WHERE id_doc = '$_SESSION[uid]'";
                          $query = mysqli_query($con,$sql);
                          $row = mysqli_fetch_array($query);
                          echo '
                          <li class="drop-down"><a href="">Hi  '.$row["f_name"].'</a>
                          <ul>
                            <li><a href="">My Account</a></li>
                            <li><a href="edit-doctorprofile.php">Edit Account</a></li>
                            <li><a href="logout.php">Logout</a></li>
                          </ul>
                        </li>
                           ';
                      } else {
                          echo '
                          <li><a href="login-doctor.php">Login</a></li>
                          ';
                      }
                    ?>
        </ul>
      </nav><!-- .nav-menu -->






    </div>

  </header><!-- End Header -->

  <!-- ======= Breadcrumbs Section ======= -->
  <main id="main">
    <section class="breadcrumbs"></section>
  </main>

</body>
</html>
