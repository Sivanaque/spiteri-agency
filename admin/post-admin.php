<?php
    require '../db.php';
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="post.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<div class="title">
<a class="text-brand" href="post-admin.php">Spiteri<span class="color-b">Agency Panel</span></a>
</div>


<h1 class="name">Bienvenue, <?php echo $_SESSION['user']; ?> !</h1>
<hr style="width: 50%"/>
<?php
    if ($_SESSION['level'] == 2) {
        echo '
        <div id="post-container">       
        <div class="body-form add-ad">
            <h1>Administration</h1><hr>
            <form action="">
                <div class="confirm">
                    <input type="button" class="action-admin" value="Utilisateurs">
                </div>
                <div class="confirm">
                    <input type="button" class="action-admin" value="Annonces">
                </div>
            </form>
        </div>
        <div style="border-left:1px solid #000;height:450px;">
        ';
    }

?>
</div>
        <div id="post-container">      
        <div class="body-form add-ad">
            <h1>Ajouter une annonce</h1><hr>
            <form method="post">
                <div class="des-form">
                    <label for="designation">Adresse : </label>
                    <input type="text" name="address" id="address" required>
                </div>
                <div class="prix-form">
                    <label for="prix">Ville : </label>
                    <input type="text" name="city" id="city" required>
                </div>
                <div class="stock-form">
                    <label for="stock">Code Postal : </label>
                    <input type="text" name="zip" id="zip" required>
                </div>
                <div class="four-form">
                    <label for="fournisseur">Surface : </label>
                    <input type="text" name="square" id="square" required>
                </div>
                <div class="type-form">
                    <label for="type">Nombres de pièces : </label>
                    <input type="text" name="rooms" id="rooms" required>
                </div>
                <div class="type-form">
                    <label for="type">Prix (Louer) : </label>
                    <input type="text" name="price" id="price" required>
                </div>
                <div class="type-form">
                    <label for="type">Image (URL) : </label>
                    <input type="text" name="img" id="img" required>
                </div>
                <div class="confirm">
                    <input type="submit" class="submit" name="submit" value="Valider">
                </div>
            </form>
            <?php
            if (isset($_POST['submit'])) {
                $address = $_POST['address'];
                $city = $_POST['city'];
                $zip = $_POST['zip'];
                $square = $_POST['square'];
                $rooms = $_POST['rooms'];
                $price = $_POST['price'];
                $img = $_POST['img'];
                
                    $request = $AgencyDB->prepare("INSERT INTO annonces ('img', 'address', 'city', 'cp', 'squarem', 'rooms', 'price', 'id_u') values (?, ?, ?, ?, ?, ?, ?, ?)");
                    $request->execute([$img, $address, $city, $zip, $square, $rooms, $price, $_SESSION['id_u']]);

            }
            ?>
        </div>
</div>
</body>
</html>
                
                    