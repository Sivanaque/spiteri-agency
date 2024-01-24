<?php
    require '../db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="post.css">
    <title>Administration Panel</title>
</head>
<body>
    
<div id="container">
        <div class="body-form add-product space">
            <h1>Ajouter un utilisateur</h1><hr>
            <form method="post">
                <div class="des-form">
                    <label for="designation">Nom d'utilisateur : </label>
                    <input type="text" name="designation" id="designation" required>
                </div>
                <div class="des-form">
                    <label for="designation">Adresse mail : </label>
                    <input type="text" name="designation" id="designation" required>
                </div>
                <div class="prix-form">
                    <label for="prix">Mot de passe : </label>
                    <input type="password" name="prix" id="prix" required>
                </div>
                <div class="stock-form">
                    <label for="stock">Confirmer :</label>
                    <input type="password" name="stock" id="stock" required>
                </div>
                <div class="four-form">
                    <label for="fournisseur">Rôle : </label>
                    <select class="form-control form-select form-control-a" name="role" id="role" required>
                        <option value="3">Administrateur</option>
                        <option value="2">Agent</option>
                        <option value="1">Inscrit</option>
                        <option value="0">Banni</option>
                    </select>
                </div>
                <div class="confirm">
                    <input type="submit" class="submit" value="Valider">
                </div>
            </form>
        </div>
        <div class="body-form add-ad">
            <h1>Modification utilisateur</h1><hr>
            <form method="post">
                    <select class="form-control form-select form-control-a" name="role" id="role" required>
                        <?php
                            $request = $AgencyDB->query("SELECT name, amail FROM users");

                            while ($answer = $request->fetch()) {
                                echo '<option value="' . $answer['name'] . '">' . $answer['name'] . ' (' . $answer['amail'] . ')</option>';
                            }
                        ?>
                        
                    </select>
                <div class="confirm">
                    <input type="submit" class="action-admin" name="user" value="Nom d'utilisateur">
                </div>
                <div class="confirm">
                    <input type="submit" class="action-admin" name="passwd" value="Mot de passe">
    </div>
            </form>
        </div>
        <div class="body-form add-product space">
            <h1>Supprimer un utilisateur</h1><hr>
            <form method="post">
                <div class="prix-form">
                    <label style="margin-top: 1em;">Utilisateur à bannir :</label>
                </div>
                <select class="form-control form-select form-control-a" name="role" id="role" required>
                        <?php
                            $request = $AgencyDB->query("SELECT name FROM users");

                            while ($answer = $request->fetch()) {
                            echo '<option name="" value="' . $answer['name'] . '">' . $answer['name'] . '</option>';
                            }
                        ?>
                    </select>
                <div class="confirm">
                    <input type="submit" class="submit" name="bannir" value="Bannir">
                </div>
                <?php
                            
                        ?>
            </form>
            
            
            
            
            
</body>
</html>