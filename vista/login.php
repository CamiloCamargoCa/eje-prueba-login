
<?php include 'partials/head.php'; ?>
<?php include 'partials/menu.php'; ?>  

    <!-- Page Content -->
    <div class="container">
      <br>
      <br>
      <br>
      <div class="row">
      	<div class="col-md-4 col-md-offset-4">
      		<div class="panel-body">
      			<form id="loginForm" action="validarCode.php" method="post">
      				<legend>Iniciar Sesión</legend>
      				<fieldset class="form-group">
      					<label for="usuario">Usuario</label>
      					<input type="text" name="txtUsuario" required="" autofocus="" class="form-control" id="usuario" placeholder="Ingrese usuario">
      				</fieldset>
      				<fieldset class="form-group">
      					<label for="password">Contraseña</label>
      					<input type="password" name="txtPassword" required="" class="form-control" id="password" placeholder="Ingrese contraseña">
      				</fieldset>
      				<button type="submit" class="btn btn-success">Ingresar</button>
      			</form>
      		</div>
      	</div>
      </div>
    </div>

<?php include 'partials/footer.php'; ?>
