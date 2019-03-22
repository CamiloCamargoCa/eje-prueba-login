
<?php include 'partials/head.php'; ?>
<?php 
if (isset($_SESSION['usuario'])) {
  if ($_SESSION['usuario']['privilegio'] == 2) {
      header("location:usuario.php");
  }
}else{
header("location:login.php");
}
?>
<?php include 'partials/menu.php'; ?>  


    <!-- Page Content -->
    <div class="container">
      <div class="starter-template">
                <div class="jumbotron">
              <div class="container text-center">
                <h1 class="display-3"><strong>Bienvenido <?php echo $_SESSION['usuario']['nombre']; ?></strong></h1>
                <p class="lead">Panel de Control | <?php echo $_SESSION['usuario']['privilegio'] == 1 ? 'Admin' : 'Cliente'; ?></p>
                <p><a href="cerrar-sesion.php" class="btn btn-primary btn-lg">Cerrar Sesión</a></p>
              </div>
            </div>
      </div>
    </div>

<?php include 'partials/footer.php'; ?>
