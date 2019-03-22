
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
      			<form action="registroCode.php" method="post">
      				<legend>Registro de Usuario</legend>
              <fieldset class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="txtNombre" required="" autofocus="" class="form-control" id="nombre" placeholder="Ingrese Nombre">
              </fieldset>
              <fieldset class="form-group">
                <label for="email">E-mail</label>
                <input type="email" name="txtEmail" required="" class="form-control" id="email" placeholder="Ingrese e-mail">
              </fieldset>
      				<fieldset class="form-group">
      					<label for="usuario">Usuario</label>
      					<input type="text" name="txtUsuario" required="" class="form-control" id="usuario" placeholder="Ingrese usuario">
      				</fieldset>
      				<fieldset class="form-group">
      					<label for="password">Contraseña</label>
      					<input type="password" name="txtPassword" required="" class="form-control" id="password" placeholder="Ingrese contraseña">
      				</fieldset>
              <fieldset class="form-group">
                <label for="privilegio">Estado</label>
                <input type="number" name="txtPrivilegio" min="1" max="2" required="" class="form-control" id="privilegio" placeholder="Ingrese estado: 1 Admin | 2 Cliente">
              </fieldset>
      				<button type="submit" class="btn btn-success">Registrar</button>
      			</form>
      		</div>
      	</div>
      </div>
    </div>

<?php include 'partials/footer.php'; ?>
