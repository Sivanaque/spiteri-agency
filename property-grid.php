<?php
    require 'header-property-display.php';
?>
          <?php

          $requete = $AgencyDB->query("SELECT * from annonces");

          while ($answer = $requete->fetch()) {
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
                        <span>' . $answer['address'] . '</span>
                          <br /> ' . $answer['cp'] .  '</a>
                      </h2>
                    </div>
                    <div class="card-body-a">
                      <div class="price-box d-flex">
                      <a href="advertisment.php?id=' . $answer['id'] . '"><span class="price-a">Louer | ' . $answer['price'] . ' € ></span></a>
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

          ?>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
          </div>
        </div>
      </div>
    </section><!-- End Property Grid Single-->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <section class="section-footer">
    <div class="container">
      <div class="row">
          <h1 style="text-align: center;">SPITERI AGENCY</h1>
  </section>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <nav class="nav-footer">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="index.php">Home</a>
              </li>
              <li class="list-inline-item">
                <a href="property-grid.php">Property</a>
              </li>
            </ul>
          </nav>
          
          <div class="copyright-footer">
            <p class="copyright color-text-a">
              &copy; Copyright
              <span class="color-a">Spiteri Agency</span> All Rights Reserved.
            </p>
          </div>
          <div class="credits">
            <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=EstateAgency
          -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>