  <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
      <div class="container">
        <a class="navbar-brand" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Login Con PHP
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php">Principal</a>
            </li>
          <?php if (!isset($_SESSION['usuario'])) { ?>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="registro.php">Registro</a>
            </li>
          <?php }else{ ?>
              <?php if ($_SESSION['usuario']['privilegio'] == 1) { ?>
                <li class="nav-item">
                  <a class="nav-link" href="admin.php">Admin</a>
                </li>
              <?php }else{ ?>
                <li class="nav-item">
                  <a class="nav-link" href="usuario.php">Usuario</a>
                </li>
              <?php }
          } ?>
          </ul>
        </div>
      </div>
    </nav>