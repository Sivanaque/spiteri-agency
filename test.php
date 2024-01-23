<?php
    require 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                    $passwd = $_POST['passwd'];

                    $request = $AgencyDB->prepare('INSERT INTO thistest(nom, passwd) values (?, ?)');
                    $request->execute([$user, $passwd]);
                }
            ?>
</body>
</html>    
