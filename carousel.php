<?php

$dsn = 'mysql:host=localhost;dbname=agence;charset=utf8';
$user = 'antoine';
$passwd = 'root';

try {
    $AgencyDB = new PDO($dsn, $user, $passwd);
}

catch (Exception $e){
    echo '<h1 style="color: red; text-align: center; font-size: 48px;">' . "Oops... La Base de donnée n'a plus les pieds sur terres !</h1>";
    echo '<p style="text-align: center; font-size: 36px; ">Notre base de donnée semble être parti rever ailleurs ! <br> Son retour ne devrait pas être long :D</p><br><br><br>' . "\n";
    die('<b>Erreur</b> : ' . $e->getMessage());
}

$request = $AgencyDB->query("SELECT * FROM annonces ORDER BY rand() LIMIT 3;");

while ($answer = $request->fetch()) {
    echo 
    '
        <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(' . $answer['img'] . ')">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">' . $answer['city'] . '
                      <br> ' . $answer['cp'] . '
                    </p>
                    <h1 class="intro-title mb-4 ">
                      <span>' . $answer['address'] . ' </span>
                    </h1>
                    <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">Louer | ' . $answer['price'] . ' €</span></a>
                    </p>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      ';
}

?>