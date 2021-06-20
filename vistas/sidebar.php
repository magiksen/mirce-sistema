		<?php
    		$full_name = $_SERVER[ 'PHP_SELF' ];
    		$name_array = explode( '/', $full_name );
    		$count = count( $name_array );
    		$page_name = $name_array[$count-1];
		?>
		<?php if ($_SESSION['tipo']=='admin'): ?>
					<?php if ($page_name=='index.php'): ?>
					<div class="col-sm-3 col-md-2 sidebar">
										<ul class="nav nav-sidebar">
											<li class="active"><a href="index.php"><i class="fa fa-tachometer" aria-hidden="true"></i> Ver Postes <span class="sr-only">(current)</span></a></li>
											<li><a  href="registrar.php" role="button"><i class="fa fa-keyboard-o" aria-hidden="true"></i> Calcular Precio </a></li>
										</ul>
					</div>
					<?php elseif($page_name=='registrar.php'): ?>
					<div class="col-sm-3 col-md-2 sidebar">
										<ul class="nav nav-sidebar">
											<li><a href="index.php"><i class="fa fa-tachometer" aria-hidden="true"></i> Ver Postes</a></li>
											<li class="active"><a  href="registrar.php" role="button"><i class="fa fa-keyboard-o" aria-hidden="true"></i> Calcular Precio  <span class="sr-only">(current)</span></a></li>
										</ul>
					</div>
					<?php elseif($page_name=='calcular.php'): ?>
					<div class="col-sm-3 col-md-2 sidebar">
										<ul class="nav nav-sidebar">
											<li><a href="index.php"><i class="fa fa-tachometer" aria-hidden="true"></i> Ver Postes</a></li>
											<li><a  href="registrar.php" role="button"><i class="fa fa-keyboard-o" aria-hidden="true"></i> Calcular Precio </a></li>
										</ul>
					</div>
					<?php elseif($page_name=='modificar.php'): ?>
					<div class="col-sm-3 col-md-2 sidebar">
										<ul class="nav nav-sidebar">
											<li class="active"><a  href="modificar.php" role="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modificar <span class="sr-only">(current)</span></a></li>
											<li><a href="index.php"><i class="fa fa-tachometer" aria-hidden="true"></i> Ver Postes</a></li>
											<li><a  href="registrar.php" role="button"><i class="fa fa-keyboard-o" aria-hidden="true"></i> Calcular Precio </a></li>
										</ul>
					</div>
					<?php else: ?>
					<div class="col-sm-3 col-md-2 sidebar">
										<ul class="nav nav-sidebar">
											<li><a href="admin/index.php"><i class="fa fa-tachometer" aria-hidden="true"></i> Ver Postes</a></li>
											<li><a  href="admin/registrar.php" role="button"><i class="fa fa-keyboard-o" aria-hidden="true"></i> Calcular Precio </a></li>
										</ul>
					</div>
					<?php endif; ?>
					<?php if ($page_name=='buscar.php'): ?>
					<div class="col-sm-3 col-md-2 sidebar">
										<ul class="nav nav-sidebar">
											<li class="active"><a href="#"><i class="fa fa-tachometer" aria-hidden="true"></i> Busqueda <span class="sr-only">(current)</span></a></li>
											<li><a href="admin/index.php"><i class="fa fa-tachometer" aria-hidden="true"></i> Ver Postes <span class="sr-only">(current)</span></a></li>
										</ul>
					</div>
					<?php endif; ?>
		<?php elseif ($_SESSION['tipo']=='super'): ?>
					<?php if ($page_name=='index.php'): ?>
					<div class="col-sm-3 col-md-2 sidebar">
										<ul class="nav nav-sidebar">
											<li class="active"><a  href="#" role="button"><i class="fa fa-users" aria-hidden="true"></i> Usuarios</a></li>
											<li><a  href="reguser.php" role="button"><i class="fa fa-user-plus" aria-hidden="true"></i> Registrar Usuarios</a></li>
											
										</ul>
					</div>
					<?php elseif ($page_name=='edituser.php'): ?>
					<div class="col-sm-3 col-md-2 sidebar">
										<ul class="nav nav-sidebar">
											<li class="active"><a  href="edituser.php" role="button"><i class="fa fa-user" aria-hidden="true"></i> Editar Usuario</a></li>
											<li><a  href="index.php" role="button"><i class="fa fa-users" aria-hidden="true"></i> Usuarios</a></li>
											<li><a  href="reguser.php" role="button"><i class="fa fa-user-plus" aria-hidden="true"></i> Registrar Usuarios</a></li>
											
										</ul>
					</div>
					<?php elseif ($page_name=='reguser.php'): ?>
					<div class="col-sm-3 col-md-2 sidebar">
										<ul class="nav nav-sidebar">
											<li><a  href="index.php" role="button"><i class="fa fa-users" aria-hidden="true"></i> Usuarios</a></li>
											<li class="active"><a  href="reguser.php" role="button"><i class="fa fa-user-plus" aria-hidden="true"></i> Registrar Usuarios</a></li>
											
										</ul>
					</div>
					<?php elseif ($page_name=='buscar.php'): ?>
					<div class="col-sm-3 col-md-2 sidebar">
										<ul class="nav nav-sidebar">
											<li class="active"><a href="#"><i class="fa fa-tachometer" aria-hidden="true"></i> Busqueda <span class="sr-only">(current)</span></a></li>
											<li><a  href="index.php" role="button"><i class="fa fa-users" aria-hidden="true"></i> Usuarios</a></li>
											<li><a  href="reguser.php" role="button"><i class="fa fa-user-plus" aria-hidden="true"></i> Registrar Usuarios</a></li>
											
										</ul>
					</div>
					<?php endif; ?>
		<?php else: ?>
					<?php if ($page_name=='index.php'): ?>
					<div class="col-sm-3 col-md-2 sidebar">
										<ul class="nav nav-sidebar">
											<li class="active"><a href="index.php"><i class="fa fa-tachometer" aria-hidden="true"></i> Ver Postes <span class="sr-only">(current)</span></a></li>
											
										</ul>
					</div>
					<?php endif; ?>
					<?php if ($page_name=='buscar.php'): ?>
					<div class="col-sm-3 col-md-2 sidebar">
										<ul class="nav nav-sidebar">
											<li class="active"><a href="#"><i class="fa fa-tachometer" aria-hidden="true"></i> Busqueda <span class="sr-only">(current)</span></a></li>
											<li><a href="admin/index.php"><i class="fa fa-tachometer" aria-hidden="true"></i> Ver Postes <span class="sr-only">(current)</span></a></li>
											
										</ul>
					</div>
					<?php endif; ?>					
		<?php endif; ?>			