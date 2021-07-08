<?php require 'header.php'; ?> 

<?php if ($_SESSION['tipo']=='admin'): ?>
<div class="container-fluid">
    <div class="row justify-content-center">
    <div class="col-sm-5 col-sm-offset-5 col-md-5 col-md-offset-5 main admin-usuarios">
        <h1 class="page-header">Registrar Muestra</h1>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
            <div class="mb-3">
                <label for="codigo" class="form-label">Código</label>
                <input type="text" class="form-control" name="codigo" id="codigo">
            </div>
            <div class="mb-3">
                <label for="nombre_institucion" class="form-label">Nombre Institución</label>
                <input type="text" class="form-control" name="nombre_institucion" id="nombre_institucion">
            </div>
            <div class="mb-3">
                <label for="pago" class="form-label">Pago</label>
                <select class="form-select" name="pago" id="pago">
                    <option value="Sin pago">Sin pago</option>
                    <option value="Con pago">Con pago</option>
                </select>
            </div>
            <div class="mb-3 dolares no-mostrar">
                <label for="dolares" class="form-label">Monto en $</label>
                <input type="number" class="form-control" name="dolares" id="dolares">
            </div>
            <div class="mb-3 bolivares no-mostrar">
                <label for="bolivares" class="form-label">Monto en Bs.</label>
                <input type="number" class="form-control" name="bolivares" id="bolivares">
            </div>
            <div class="mb-3">
                <label for="nombre_paciente" class="form-label">Nombre del Paciente</label>
                <input type="text" class="form-control" name="nombre_paciente" id="nombre_paciente">
            </div>
            <div class="mb-3">
                <label for="ci_paciente" class="form-label">Cedula del Paciente</label>
                <input type="text" class="form-control" name="ci_paciente" id="ci_paciente">
            </div>
            <div class="mb-3">
                <label for="tipo" class="form-label">Tipo de Muestra</label>
                <select class="form-select" name="tipo" id="tipo">
                    <option value="Biopsia">Biopsia</option>
                    <option value="Citologia">Citologia</option>
                    <option value="Autopsias">Autopsias</option>
                </select>
            </div>
            <div class="mb-3">
                <input type="hidden" class="form-control" name="impresa" id="impresa" value="no">
            </div>
            <div class="mb-3">
                <label for="fecha" class="form-label">Fecha</label>
                <input type="text" class="form-control" name="fecha" id="fecha">
            </div>
            <button type="submit" class="btn btn-primary">Registrar</button>
            <a class="btn btn-danger" href="<?php echo RUTA; ?>admin" role="button">Volver</a>
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