<?php require 'admin_header.php'; ?> 

<div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-sm-12 col-sm-offset-12 col-md-12 col-md-offset-12 main admin-usuarios">
				<?php if ($_SESSION['tipo']=='admin'): ?>
          <h1 class="page-header">Muestras</h1>

          <div class="table-responsive">
            <table class="table table-hover admin">
              <thead>
                <tr>
						        <th>Código</th>
						        <th>Nombre Institución</th>
                    <th>Nombre Paciente</th>
                    <th>Cedula Paciente</th>
                    <th>Tipo</th>
                    <th>Fecha</th>
                    <th>Marcar Impresa</th>
		       </tr>
              </thead>
              <tbody>
                <?php foreach($datos as $muestra): ?>
			     <tr>
			     	 				<td><?php echo $muestra['codigo']; ?></td>
                    <td><?php echo $muestra['nombre_institucion']; ?></td>
                     
                    <td><?php echo $muestra['nombre_paciente']; ?></td>
                    <td><?php echo number_format($muestra['ci_paciente'], 0, '', '.'); ?></td>
                    <td><?php echo $muestra['tipo']; ?></td>
	                  <td><?php echo $muestra['fecha']; ?></td>
	                  <td class="imprimir"><a onclick="return confirm(' ¿ Estas Seguro de que se ha impreso ?')" href="imprimir.php?id=<?php echo $muestra['id']; ?>" title="Imprimir"><i class="fa fa-print" aria-hidden="true"></i></a></td>
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