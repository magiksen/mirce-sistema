<?php require 'header.php'; ?> 

<?php if ($_SESSION['tipo']=='admin'): ?>
<div class="container-fluid">
      <div class="row">
<?php require 'sidebar.php'; ?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Modificar Postes y Pesos</h1>

          <div class="table-responsive">
          <form role="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">	
            <table class="table table-striped admin">
              <thead>
                <tr>
			            <th>Código</th>
			            <th>Peso Tubo #1(Kg/m)</th>
			            <th>Longitud Tubo #1(m)</th>
                  <th></th>
		            </tr>
              </thead>
              <tbody>
                <tr>
                	<td><input required type="text" name="codigo" value="<?php echo $datos['codigo']?>"></td>
        					<td><input type="text" name="peso1" id="peso1" value="<?php echo $datos['peso_t1']?>"></td>
					        <td><input type="text" name="longitud1" id="longitud1" value="<?php echo $datos['long_t1']?>"></td>
                  <td></td>
                </tr>
              </tbody>
              <thead>
                <tr>
			            <th>Camisa(Kg)</th>                	
			            <th>Peso Tubo #2(Kg/m)</th>
			            <th>Longitud Tubo #2(m)</th>
                  <th></th>
		            </tr>
              </thead>
              <tbody>
                <tr>
                	<td><input type="text" name="camisa" value="<?php echo $datos['camisa']?>"></td>
					        <td><input type="text" name="peso2" value="<?php echo $datos['peso_t2']?>"></td>
					        <td><input type="text" name="longitud2" value="<?php echo $datos['long_t2']?>"></td>
                  <td></td>                	
                </tr>
              </tbody>
                <thead>
                  <tr>
			              <th>Tapa(Kg)</th>                	
			              <th>Peso Tubo #3(Kg/m)</th>
			              <th>Longitud Tubo #3(m)</th>
                    <th></th>
		            </tr>
              </thead>
              <tbody>
                <tr>
                	<td><input type="text" name="tapa" value="<?php echo $datos['tapa']?>"></td>
					        <td><input type="text" name="peso3" value="<?php echo $datos['peso_t3']?>"></td>
					        <td><input type="text" name="longitud3" value="<?php echo $datos['long_t3']?>"></td>
                  <td></td>                	
		            </tr>
              </tbody>
              <thead>
                <tr>
                  <th>Junta #1 (m)</th>
                  <th>Junta #2 (m)</th>
                  <th>Junta #3 (m)</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><input type="text" name="junta1" value="<?php echo $datos['junta1']; ?>"></td>
                  <td><input type="text" name="junta2" value="<?php echo $datos['junta2']; ?>"></td>
                  <td><input type="text" name="junta3" value="<?php echo $datos['junta3']; ?>"></td>
                	<td><input type="hidden" name="id" value="<?php echo $datos['id']; ?>"></td>
                </tr>
              </tbody>
              <tbody>
                <tr>
                  <td colspan="4" class="text-center"><button type="submit" class="btn btn-success">Actualizar</button></td>
                </tr>
              </tbody>
            </table>
          </form>
          </div>
        </div>
      </div>
</div>

<?php else: ?>
<div class="container-fluid">
      <div class="row">
<?php require 'sidebar.php'; ?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
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