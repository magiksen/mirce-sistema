<?php require 'admin_header.php'; ?>

<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Buscar</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <!-- CONTENIDO AQUÍ -->
            <div class="row">
                <div class="col-sm-12 col-sm-offset-12 col-md-12 col-md-offset-12 main admin-usuarios">
                    <?php if ($_SESSION['tipo']=='super'): ?>
                        <h1 class="page-header">Usuarios Registrados</h1>
                        <div class="table-responsive">
                            <table class="table table-striped admin">
                                <thead>
                                <tr>
                                    <th>CI</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Usuario</th>
                                    <th>Departamento</th>
                                    <th>Tipo</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($resultados as $usuario): ?>
                                    <tr>
                                        <td><?php echo $usuario['ci']; ?></td>
                                        <td><?php echo $usuario['nombre']; ?></td>
                                        <td><?php echo $usuario['apellido']; ?></td>
                                        <td><?php echo $usuario['usuario']; ?></td>
                                        <td><?php echo $usuario['departamento']; ?></td>
                                        <td><?php echo $usuario['tipo']; ?></td>
                                        <td class="imprimir"><a href="/admin/edituser.php?id=<?php echo $usuario['id']; ?>" title="Editar"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                                        <?php if ($usuario['tipo']=='super'): ?>
                                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                                        <?php else: ?>
                                            <td class="imprimir"><a role="button" onclick="return confirm(' ¿ Estas Seguro ?')" href="/admin/deluser.php?id=<?php echo $usuario['id']; ?>" title="Eliminar"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                                        <?php endif; ?>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    <?php elseif ($_SESSION['tipo']=='admin'): ?>
                        <h1 class="page-header">Muestras Registradas</h1>
                        <h2><?php echo $titulo ?></h2>

                        <div class="table-responsive">
                            <table class="table table-hover admin">
                                <thead>
                                <tr>
                                    <th>Código</th>
                                    <th>Nombre Institución</th>
                                    <th>Nombre Doctor/ra</th>
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
                                <?php foreach($resultados as $muestra): ?>
                                    <tr>
                                        <td><a href="admin/ver.php?id=<?php echo $muestra['id']; ?>"><?php echo $muestra['codigo']; ?></a></td>
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
                                            <td class="imprimir"><a href="<?php echo RUTA; ?>admin/modificar.php?id=<?php echo $muestra['id']; ?>" title="Editar"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                                            <td class="imprimir"><a role="button" onclick="return confirm(' ¿ Estas Seguro ?')" href="<?php echo RUTA; ?>admin/eliminar.php?id=<?php echo $muestra['id']; ?>" title="Eliminar"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                                            <?php if ($muestra['impresa'] == 'Si'): ?>
                                                <td class="imprimir"><i class="fa fa-check" aria-hidden="true" style="color: #1fcb5c;"></i></td>
                                            <?php else: ?>
                                                <td class="imprimir"><a onclick="return confirm(' ¿ Estas Seguro de que se ha impreso ?')" href="<?php echo RUTA; ?>admin/imprimir.php?id=<?php echo $muestra['id']; ?>" title="Imprimir"><i class="fa fa-print" aria-hidden="true"></i></a></td>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                            <?php require 'paginacion.php'; ?>
                            <a class="btn btn-danger" href="<?php echo RUTA; ?>admin" role="button">Volver</a>
                        </div>
                    <?php else: ?>
                        <h1 class="page-header">Muestras Registradas</h1>
                        <h2><?php echo $titulo ?></h2>

                        <div class="table-responsive">
                            <table class="table table-hover admin">
                                <thead>
                                <tr>
                                    <th>Código</th>
                                    <th>Nombre Institución</th>
                                    <th>Nombre Paciente</th>
                                    <th>Cedula Paciente</th>
                                    <?php if ($_SESSION['tipo']=='lamina'): ?>
                                        <th>Bloque</th>
                                        <th>Lamina</th>
                                    <?php endif; ?>
                                    <th>Fecha</th>
                                    <?php if ($_SESSION['tipo']=='lamina'): ?>
                                        <th></th>
                                    <?php endif; ?>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($resultados as $muestra): ?>
                                    <tr>
                                        <td><?php echo $muestra['codigo']; ?></td>
                                        <td><?php echo $muestra['nombre_institucion']; ?></td>
                                        <td><?php echo $muestra['nombre_paciente']; ?></td>
                                        <td><?php echo number_format($muestra['ci_paciente'], 0, '', '.'); ?></td>
                                        <?php if ($_SESSION['tipo']=='lamina'): ?>
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
                                        <?php endif; ?>
                                        <td><?php echo $muestra['fecha']; ?></td>
                                        <?php if ($_SESSION['tipo']=='lamina'): ?>
                                            <td class="imprimir"><a href="reglamina.php?id=<?php echo $muestra['id']; ?>" title="Registra Lamina/Bloque"><i class="fa fa-plus-circle" aria-hidden="true"></i></a></td>
                                        <?php endif; ?>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                            <a class="btn btn-danger" href="<?php echo RUTA; ?>admin" role="button">Volver</a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <!-- FIN CONTENIDO -->
        </div>
    </div>
</div>

<?php require 'footer.php'; ?> 

