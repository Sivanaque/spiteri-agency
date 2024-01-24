<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<?php
  require 'db.php';
?>


<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SpiteriAgency - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/img.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: EstateAgency
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Property Search Section ======= -->
  <div class="click-closed"></div>
  <!--/ Form Search Star /-->
  <div class="box-collapse">
    <div class="title-box-d">
      <h3 class="title-d">Rechercher</h3>
    </div>
    <span class="close-box-collapse right-boxed bi bi-x"></span>
    <div class="box-collapse-wrap form">
      <form class="form-a" action="search.php" method="GET">
        <div class="row">
          <div class="col-md-6 mb-2">
            <div class="form-group mt-3">

    
              <label class="pb-2" for="city">Ville</label>
              <select class="form-control form-select form-control-a" id="city" name="city" required>
              <?php
              $request = $AgencyDB->query("SELECT city FROM annonces ORDER BY city ASC");

              while ($answer = $request->fetch()) {
                  echo "<option> " . $answer['city'] . " </option>";
              }
            ?>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group mt-3">
              <label class="pb-2" for="bathrooms">Pièces</label>
              <select class="form-control form-select form-control-a" id="rooms" name="rooms" required>
                <?php
                  $request = $AgencyDB->query("SELECT DISTINCT rooms FROM annonces ORDER BY rooms asc");

                  while ($answer = $request->fetch()) {
                    echo '<option>' . $answer['rooms'] . '</option>';
                  }
                ?>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group mt-3">
              <label class="pb-2" for="bedrooms">Surface minimale</label>  
              <input type="text" class="form-control form-control-lg form-control-a" placeholder="48" name="squaremin" required>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group mt-3">
              <label class="pb-2" for="bedrooms">Surface maximale</label>  
              <input type="text" class="form-control form-control-lg form-control-a" placeholder="90" name="squaremax" required>
            </div>
          </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group mt-3">
              <label class="pb-2" for="Type">Prix maximum (en €)</label>
              <input type="text" class="form-control form-control-lg form-control-a" placeholder="1200" name="pricemax" required>
            </div>
          </div>
          <div class="col-md-12">
            <button type="submit" class="btn btn-b">Chercher !</button>
          </div>
        </div>
      </form>
    </div>
  </div><!-- End Property Search Section -->>

  <!-- ======= Header/Navbar ======= -->

  <?php
    require('header.php');
  ?>
  <!-- End Header/Navbar -->

  <main id="main">

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">Nos biens</h1>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="#">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Properties Grid
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->

    <!-- ======= Property Grid ======= -->
    <section class="property-grid grid">
      <div class="container">
        <div class="row">
        <div class="col-sm-12">
                </div>
          