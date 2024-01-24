<?php
    require 'header-property-display.php';
?>

<!DOCTYPE html>
<html lang="en">
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

<?php
    require('header.php');
?>

<?php
    $request = $AgencyDB->prepare("SELECT * FROM annonces where id = ?");
    $request->execute([$_GET['id_a']]);

    while ($answer = $request->fetch()) {
        echo 
               
              '
              <div class="col-md-4">
              <div class="card-box-a card-shadow">
                <div class="img-box-a">
                  <img src="' . $answer['img'] . '" alt="" class="img-a img-fluid custom-height">
                </div>
                
                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                    <div class="card-header-a">
                      <h2 class="card-title-a">
                        <a href="#">' . $answer['address'] . '
                          <br /> ' . $answer['cp'] .  '</a>
                      </h2>
                    </div>
                    <div class="card-body-a">
                      <div class="price-box d-flex">
                        <a href=""><span class="price-a">Louer | ' . $answer['price'] . ' € ></span></a>
                      </div>
                    </div>
                    <div class="card-footer-a">
                      <ul class="card-info d-flex justify-content-around">
                        <li>
                          <h4 class="card-info-title">Surface</h4>
                          <span>' . $answer['squarem'] . ' m<sup>2</sup>
                          </span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Pièces</h4>
                          <span>' . $answer['rooms'] . '</span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Ville</h4>
                          <span>' . $answer['city'] . '</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
              
              ';
    }

if(isset($_SESSION['connecte']) && $_SESSION['connecte'] == true)
{
        
?>

<form method="POST">
    <label for="textarea">Entrez message :</label>
    <textarea name="textarea" id="textarea" cols="30" rows="10"></textarea>
    <input type="submit" name="submit">
</form>
</body>
</html>
<?php
}
?>