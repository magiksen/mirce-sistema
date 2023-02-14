<?php require 'admin_header.php'; ?>

!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <?php if ($_SESSION['tipo']=='super'): ?>
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Usuarios</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Usuarios</h4>

                                <div class="table-rep-plugin">
                                    <div class="table-responsive mb-0" data-pattern="priority-columns">
                                        <table id="datatable" class="table">
                                            <thead>
                                            <tr>
                                                <th data-priority="1">CI</th>
                                                <th data-priority="3">Nombre</th>
                                                <th data-priority="1">Apellido</th>
                                                <th data-priority="3">Usuario</th>
                                                <th data-priority="3">Actividad</th>
                                                <th data-priority="6">Tipo</th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php foreach($usuarios as $usuario): ?>
                                                <tr>
                                                    <th><?php echo $usuario['ci']; ?></th>
                                                    <td><?php echo $usuario['nombre']; ?></td>
                                                    <td><?php echo $usuario['apellido']; ?></td>
                                                    <td><?php echo $usuario['usuario']; ?></td>
                                                    <td><?php echo $usuario['departamento']; ?></td>
                                                    <td><?php echo $usuario['tipo']; ?></td>
                                                    <td><a href="edituser.php?id=<?php echo $usuario['id']; ?>" title="Editar"><i class="ri-edit-fill "></i></a></td>
                                                    <?php if ($usuario['tipo']=='super'): ?>
                                                        <td><i class="fa fa-check" aria-hidden="true"></i></td>
                                                    <?php else: ?>
                                                        <td><a role="button" onclick="return confirm(' ¿ Estas Seguro ?')" href="deluser.php?id=<?php echo $usuario['id']; ?>" title="Eliminar"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                                                    <?php endif; ?>
                                                </tr>
                                            <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
            <?php elseif($_SESSION['tipo']=='lamina'): ?>
            <?php elseif($_SESSION['tipo']=='transcriptora'): ?>
            <?php else: ?>
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Muestras</h4>
                        </div>
                        <?php if (!empty($titulo)): ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo  $titulo  ?>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Muestras</h4>

                                <div class="table-rep-plugin">
                                    <div class="table-responsive mb-0" data-pattern="priority-columns">
                                        <table id="datatable-1" data-order='[[ 0, "desc" ]]' class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th style="display: none;">ID</th>
                                                <th>Código</th>
                                                <th>Nombre Institución</th>
                                                <th>Nombre Doctor/ra</th>
                                                <th>Pago</th>
                                                <th>Nombre Paciente</th>
                                                <th>Cedula Paciente</th>
                                                <th>Edad</th>
                                                <th>Tipo</th>
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
                                                        <td style="display: none;"><?php echo $muestra['id']; ?></td>
                                                        <td><a href="ver.php?id=<?php echo $muestra['id']; ?>"><?php echo $muestra['codigo']; ?></a></td>
                                                        <td><?php echo $muestra['nombre_institucion']; ?></td>
                                                        <td><?php echo $muestra['nombre_doctor']; ?></td>
                                                        <?php if ($muestra['pago']=='Sin pago'): ?>
                                                            <td><p style="margin-bottom: 0;"><span style="font-size: 10px;color: red;">Deuda:</span></p>$<?php echo number_format($muestra['dolares'], 0, '', '.'); ?> | Bs. <?php echo number_format($muestra['bolivares'],0, '', '.'); ?></td>
                                                        <?php elseif($muestra['pago']=='Con pago'): ?>
                                                            <td><p style="margin-bottom: 0;"><span style="font-size: 10px;color: green;">Pagado:</span></p>$<?php echo number_format($muestra['dolares'], 0, '', '.'); ?> | Bs. <?php echo number_format($muestra['bolivares'],0, '', '.'); ?></td>
                                                        <?php else: ?>
                                                            <td><p style="margin-bottom: 0;"><span style="font-size: 10px;color: green;">Exonerado</span></p></td>
                                                        <?php endif; ?>
                                                        <td><?php echo $muestra['nombre_paciente']; ?></td>
<!--                                                        <td>--><?php //echo number_format($muestra['ci_paciente'], 0, '', '.'); ?><!--</td>-->
                                                        <td><?php echo $muestra['ci_paciente']; ?></td>
                                                        <td><?php echo $muestra['edad_paciente']; ?></td>
                                                        <td><?php echo $muestra['tipo']; ?></td>
                                                        <td><?php echo $muestra['impresa']; ?></td>
                                                        <td><?php echo $muestra['fecha']; ?></td>
                                                        <?php if ($_SESSION['tipo']=='admin'): ?>
                                                            <td><a href="modificar.php?id=<?php echo $muestra['id']; ?>" title="Editar"><i class="ri-edit-fill "></i></a></td>
                                                            <td><a role="button" onclick="return confirm(' ¿ Estas Seguro ?')" href="eliminar.php?id=<?php echo $muestra['id']; ?>" title="Eliminar"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                                                            <?php if ($muestra['impresa'] == 'Si'): ?>
                                                                <td><a href="<?php echo RUTA; ?>admin/imprimir.php?id=<?php echo $muestra['id']; ?>&imp=si" title="No Impresa"><i class="fa fa-check" aria-hidden="true" style="color: #1fcb5c;"></i></a></td>
                                                            <?php else: ?>
                                                                <td><a href="<?php echo RUTA; ?>admin/imprimir.php?id=<?php echo $muestra['id']; ?>&imp=no" title="Imprimir"><i class="fa fa-print" aria-hidden="true"></i></a></td>
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
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->

            <?php endif; ?>

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

<?php require 'footer.php'; ?>

    <script>
        $(document).ready(function () {
            $('#datatable-1').DataTable({
                "language": {
                    "lengthMenu": "Mostrar _MENU_ muestras por página",
                    "zeroRecords": "Sin resultados - disculpe",
                    "info": "Mostrando pagina _PAGE_ de _PAGES_",
                    "infoEmpty": "No hay muestras disponibles",
                    "infoFiltered": "(filtrado de _MAX_ total de muestras)",
                    "paginate": {
                        "first":      "Primero",
                        "last":       "Último",
                        "next":       "Siguiente",
                        "previous":   "Anterior"
                    },
                    "search":         "Buscar:",
                }
            });
        });
    </script>
