<?php require 'header.php'; ?> 

<div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-sm-5 col-sm-offset-5 col-md-5 col-md-offset-5 main admin-usuarios">
				<?php if ($_SESSION['tipo']=='super'): ?>
				<h1 class="page-header">Registrar Usuario</h1>
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
                    <div class="mb-3">
                        <label for="ci" class="form-label">Cedula de Identida</label>
                        <input type="text" class="form-control" name="ci" id="ci">
                    </div>
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="nombre" id="nombre">
                    </div>
                    <div class="mb-3">
                        <label for="apellido" class="form-label">Apellido</label>
                        <input type="text" class="form-control" name="apellido" id="apellido">
                    </div>
                    <div class="mb-3">
                        <label for="usuario" class="form-label">Usuario</label>
                        <input type="text" class="form-control" name="usuario" id="usuario">
                    </div>
                    <div class="mb-3">
                        <label for="departamento" class="form-label">Actividad</label>
                        <input type="text" class="form-control" name="departamento" id="departamento">
                    </div>
                    <div class="mb-3">
                        <label for="tipo" class="form-label">Tipo</label>
                        <select class="form-select" name="tipo" id="tipo">
                            <option value="citologias">Citologias</option>
                            <option value="biopsias">Biopsias</option>
                            <option value="user">Usuario</option>
                            <option value="admin">Administrador</option>
                            <option value="super">SuperAdmin</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="pass" class="form-label">Contraseña</label>
                        <input class="form-control" type="password" name="pass" id="pass">
                    </div>
                    <button type="submit" class="btn btn-primary">Registrar</button>
                </form>
        </div>
      </div>
</div>
<?php else: ?>
<div class="container-fluid">
      <div class="row">
        <div class="col-sm-12 col-sm-offset-12 col-md-12 col-md-offset-12 main">
          <h1 class="page-header">Error</h1>
          <div>
          	<i class="fa fa-exclamation-circle fa-4x" aria-hidden="true"></i>
            <h2 class="error">Disculpa Ha Ocurrido un Error!</h2>
            <h3 class="error"> Usted no tiene permiso para ingresar en esta pagina, para ir al inicio haga <a href="<?php echo RUTA; ?>admin">Click Aquí</a></h3>
          </div>
                    
        </div>
      </div>
</div>				
<?php endif; ?>


<?php require 'footer.php'; ?> 