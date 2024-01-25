<nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="index.php">Spiteri<span class="color-b">Agency</span></a>

      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">

          <li class="nav-item">
            <a class="nav-link " href="index.php">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="property-grid.php">Propriétés</a>
          </li>

          <li class="nav-item">
            <?php
                if(isset($_SESSION['connecte']) && $_SESSION['connecte'] == true)
                {
                  echo '<a class="nav-link" name="deconnexion" href="./admin/logout.php">Se déconnecter</a><i class="fa-solid fa-user fa-lg"></i>';
                } else {
                  echo '<a class="nav-link" name="connexion" href="./admin/admin.php">Se connecter</a>';
                }
            ?>
          </li>

         
        </ul>
      </div>

      <button type="button" class="btn btn-b-n navbar-toggle-box navbar-toggle-box-collapse" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01">
        <i class="bi bi-search"></i>
      </button>

    </div>
  </nav>
