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
				<?php else: ?>
          <h1 class="page-header">Muestras</h1>

          <div class="table-responsive">
            <table class="table table-hover admin">
              <thead>
                <tr>
			        <th>Código</th>
			        <th>Nombre Institución</th>
			        <th>Pago</th>
                    <th>Nombre Paciente</th>
                    <th>Cedula Paciente</th>
                    <th>Tipo</th>
                    <th>Bloque</th>
                    <th>Lamina</th>
                    <th>Impresa</th>
                    <th>Fecha</th>
                    <?php if ($_SESSION['tipo']=='admin'): ?>
                    <th></th>
			        <th></th>
					<?php endif; ?>
		       </tr>
              </thead>
              <tbody>
                <?php foreach($datos as $muestra): ?>
			     <tr>
			     	 <td><?php echo $muestra['codigo']; ?></td>
                     <td><?php echo $muestra['nombre_institucion']; ?></td>
                     <?php if ($muestra['pago']=='Sin pago'): ?>
                     <td>Sin pago</td>
                     <?php else: ?>
                     <td>$<?php echo number_format($muestra['dolares'], 0, '', '.'); ?> | Bs. <?php echo number_format($muestra['bolivares'],0, '', '.'); ?></td>
                     <?php endif; ?>
                     <td><?php echo $muestra['nombre_paciente']; ?></td>
                     <td><?php echo number_format($muestra['ci_paciente'], 0, '', '.'); ?></td>
                     <td><?php echo $muestra['tipo']; ?></td>
                     <?php if ($muestra['bloque']==''): ?>
                     <td>No tiene</td>
                     <?php else: ?>
                     <td><?php echo $muestra['bloque']; ?></td>
                     <?php endif; ?>
                     <?php if ($muestra['lamina']==''): ?>
                         <td>No tiene</td>
                     <?php else: ?>
                         <td><?php echo $muestra['lamina']; ?></td>
                     <?php endif; ?>
                     <td><?php echo $muestra['impresa']; ?></td>
                     <td><?php echo $muestra['fecha']; ?></td>
					 <?php if ($_SESSION['tipo']=='admin'): ?>
			         <td class="imprimir"><a href="modificar.php?id=<?php echo $muestra['id']; ?>" title="Editar"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
			         <td class="imprimir"><a role="button" onclick="return confirm(' ¿ Estas Seguro ?')" href="eliminar.php?id=<?php echo $muestra['id']; ?>" title="Eliminar"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
					 <?php endif; ?>
			     </tr>
			     <?php endforeach; ?>
              </tbody>
						</table>
						<?php require 'paginacion.php'; ?>
          </div>
					<?php endif; ?>
        </div>
      </div>
</div>



<?php require 'footer.php'; ?> 