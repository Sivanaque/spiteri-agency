<?php
require '../db.php';
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500&display=swap" rel="stylesheet">
    <title>SpiteriAgency - Connexion</title>
</head>
<body>
    <div id="container">
        <div class="body-form add-product">
            <a href="../index.php">< Retour</a>
            <h1>Connexion</h1><hr>
            <form method="post">
                <div class="des-form">
                    <label for="designation">Identifiant : </label>
                    <input type="text" name="user" id="user" required>
                </div>
                <div class="prix-form">
                    <label for="prix">Mot de passe : </label>
                    <input type="password" name="passwd" id="passwd" required>
                </div>
                <div class="confirm">
                        <input type="submit" class="submit" name="submit" value="Valider">
                </div>

            </form>
<?php
    if(isset($_POST['submit'])) {
        $user = $_POST['user'];
        $passwd = sha1($_POST['passwd']);

        $request = $AgencyDB->prepare("SELECT * FROM users WHERE name = ? AND passwd = ?");
        $request->execute([$user, $passwd]);

        $answer = $request->fetch();
        if ($answer) {
            if ($answer['level'] == 0) {
                echo '<h3 style="text-align: center";>Vous ne possédez pas les priviléges nécessaires.</h3>';
            } else {
                $_SESSION['user'] = $user;
                $_SESSION['passwd'] = $passwd;
                $_SESSION['level'] = $answer['level'];
                $_SESSION['id_u'] = $answer['id'];
                header('location: post-admin.php');
        }
    } else {
            echo '<h3 style="text-align: center";>Identifiants incorrects.</h3>';
    }
}           
?>
            
    </body>
</html>
    