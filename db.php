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

// ---------------------------------------

?>