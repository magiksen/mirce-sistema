<?php require 'admin_header.php'; ?> 

<div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-sm-12 col-sm-offset-12 col-md-12 col-md-offset-12 main admin-usuarios">
				<?php if ($_SESSION['tipo']=='super'): ?>
				<h1 class="page-header">Usuarios Registrados</h1>
				<div class="table-responsive">
					<table class="table table-striped table-hover admin">
						<thead>
							<tr>
							  <th>CI</th>
								<th>Nombre</th>
								<th>Apellido</th>
								<th>Usuario</th>
								<th>Actividad</th>
								<th>Tipo</th>
								<th></th>
								<th></th>
							</tr>
						</thead>
						<tbody>
						<?php foreach($usuarios as $usuario): ?>
							<tr>
								<td><?php echo $usuario['ci']; ?></td>
								<td><?php echo $usuario['nombre']; ?></td>
								<td><?php echo $usuario['apellido']; ?></td>
								<td><?php echo $usuario['usuario']; ?></td>
								<td><?php echo $usuario['departamento']; ?></td>
								<td><?php echo $usuario['tipo']; ?></td>
								<td class="imprimir"><a href="edituser.php?id=<?php echo $usuario['id']; ?>" title="Editar"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
								<?php if ($usuario['tipo']=='super'): ?>
								<td><i class="fa fa-check" aria-hidden="true"></i></td>
								<?php else: ?>
								<td class="imprimir"><a role="button" onclick="return confirm(' ¿ Estas Seguro ?')" href="deluser.php?id=<?php echo $usuario['id']; ?>" title="Eliminar"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
							  <?php endif; ?>
							</tr>
						<?php endforeach; ?>	
						</tbody>
					</table>
				</div>
        <?php elseif($_SESSION['tipo']=='lamina'): ?>
          <div class="table-responsive">
            <table class="table table-hover admin">
              <thead>
                <tr>
                    <th>Código</th>
                    <th>Nombre Paciente</th>
                    <th>Cedula Paciente</th>
                    <th>Láminas</th>
                    <th>Bloques</th>
                    <?php if ($_SESSION['tipo']=='lamina'): ?>
                    <th></th>
                    <?php endif; ?>
           </tr>
              </thead>
              <tbody>
                <?php if (!empty($datos)): ?>
                <?php foreach($datos as $muestra): ?>
           <tr>
                     <td><a href="ver.php?id=<?php echo $muestra['id']; ?>"><?php echo $muestra['codigo']; ?></a></td>
                     <td><?php echo $muestra['nombre_paciente']; ?></td>
                     <td><?php echo number_format($muestra['ci_paciente'], 0, '', '.'); ?></td>
                     <td><?php echo $muestra['lamina']; ?></td>
                     <td><?php echo $muestra['bloque']; ?></td>
                <?php if ($_SESSION['tipo']=='lamina'): ?>
                     <td class="imprimir"><a href="reglamina.php?id=<?php echo $muestra['id']; ?>" title="Registra Lamina/Bloque"><i class="fa fa-plus-circle" aria-hidden="true"></i></a></td>
                <?php endif; ?>  
           </tr>
           <?php endforeach; ?>
              <?php else: ?>
              <tr>
                  <td></td>
              </tr>
              <?php endif; ?>
              </tbody>
            </table>
            <?php require 'paginacion.php'; ?>
          </div>
        <?php elseif($_SESSION['tipo']=='transcriptora'): ?>
          <div class="">
            <p>En Construcción...</p>
          </div>
				<?php else: ?>
            <?php if (!empty($titulo)): ?>
                <div class="mb-3 alert alert-success" role="alert">
                    <strong><?php echo $titulo; ?></strong>
                </div>
            <?php endif; ?>
          <h1 class="page-header">Muestras</h1>
          <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseFiltros" role="button" aria-expanded="false" aria-controls="collapseExample">
            Filtros
          </a>
          <div class="filtros collapse" id="collapseFiltros">
              <form class="row g-3" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
                  <div class="mb-3 col-md-3">
                      <label for="fecha" class="form-label">Fecha</label>
                      <input type="text" class="form-control" name="fecha" id="fecha">
                  </div>
                  <div class="mb-3 col-md-3">
                      <label for="pago" class="form-label">Pago</label>
                      <select class="form-select" name="pago" id="pago">
                          <option value="Ambos">Ambos</option>
                          <option value="Sin pago">Sin pago</option>
                          <option value="Con pago">Con pago</option>
                      </select>
                  </div>
                  <div class="mb-3 col-md-3">
                      <label for="tipo" class="form-label">Tipo de Muestra</label>
                      <select class="form-select" name="tipo" id="tipo">
                          <option value="Todas">Todas</option>
                          <option value="Biopsia">Biopsia</option>
                          <option value="Citologia">Citologia</option>
                          <option value="Autopsias">Autopsias</option>
                      </select>
                  </div>
                  <div class="col-md-12">
                      <button type="submit" class="btn btn-primary">Filtrar</button>
                  </div>
              </form>
          </div>
          <div class="table-responsive">
            <table class="table table-hover admin">
              <thead>
                <tr>
      			        <th>Código</th>
      			        <th>Nombre Institución</th>
                    <th>Nombre Doctor</th>
      			        <th>Pago</th>
                    <th>Nombre Paciente</th>
                    <th>Cedula Paciente</th>
                    <th>Tipo</th>
                    <th>Tejido</th>
                    <th>Impresa</th>
                    <th>Fecha</th>
                    <?php if ($_SESSION['tipo']=='admin'): ?>
      			        <th></th>
      			        <th></th>
                    <th></th>
      					   <?php endif; ?>
      		      </tr>
              </thead>
              <tbody>
              <?php if (!empty($datos)): ?>
                <?php foreach($datos as $muestra): ?>
			     <tr>
			     	         <td><a href="ver.php?id=<?php echo $muestra['id']; ?>"><?php echo $muestra['codigo']; ?></a></td>
                     <td><?php echo $muestra['nombre_institucion']; ?></td>
                     <td><?php echo $muestra['nombre_doctor']; ?></td>
                     <?php if ($muestra['pago']=='Sin pago'): ?>
                     <td>Sin pago</td>
                     <?php else: ?>
                     <td>$<?php echo number_format($muestra['dolares'], 0, '', '.'); ?> | Bs. <?php echo number_format($muestra['bolivares'],0, '', '.'); ?></td>
                     <?php endif; ?>
                     <td><?php echo $muestra['nombre_paciente']; ?></td>
                     <td><?php echo number_format($muestra['ci_paciente'], 0, '', '.'); ?></td>
                     <td><?php echo $muestra['tipo']; ?></td>
                     <td><?php echo $muestra['tipo_tejido']; ?></td>
                     <td><?php echo $muestra['impresa']; ?></td>
                     <td><?php echo $muestra['fecha']; ?></td>
					 <?php if ($_SESSION['tipo']=='admin'): ?>
			         <td class="imprimir"><a href="modificar.php?id=<?php echo $muestra['id']; ?>" title="Editar"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
			         <td class="imprimir"><a role="button" onclick="return confirm(' ¿ Estas Seguro ?')" href="eliminar.php?id=<?php echo $muestra['id']; ?>" title="Eliminar"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
			         <?php if ($muestra['impresa'] == 'Si'): ?>    
               <td class="imprimir"><i class="fa fa-ban" aria-hidden="true"></i></td>
               <?php else: ?>
               <td class="imprimir"><a onclick="return confirm(' ¿ Estas Seguro de que se ha impreso ?')" href="<?php echo RUTA; ?>admin/imprimir.php?id=<?php echo $muestra['id']; ?>" title="Imprimir"><i class="fa fa-print" aria-hidden="true"></i></a></td>
                <?php endif; ?>  
					 <?php endif; ?>
			     </tr>
			     <?php endforeach; ?>
              <?php else: ?>
              <tr>
                  <td></td>
              </tr>
              <?php endif; ?>
              </tbody>
						</table>
						<?php require 'paginacion.php'; ?>
          </div>
					<?php endif; ?>
        </div>
      </div>
</div>



<?php require 'footer.php'; ?> 