<!-- ============================================================== -->
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
                                    <table id="tech-companies-1" class="table">
                                        <thead>
                                        <tr>
                                            <th>Company</th>
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
                                            <td><a href="edituser.php?id=<?php echo $usuario['id']; ?>" title="Editar"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                                            <?php if ($usuario['tipo']=='super'): ?>
                                            <td><a role="button" onclick="return confirm(' ¿ Estas Seguro ?')" href="deluser.php?id=<?php echo $usuario['id']; ?>" title="Eliminar"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                                            <?php else: ?>
                                            <td>731.10</td>
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
                                        <table id="tech-companies-1" class="table">
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
                                                    <td><a href="edituser.php?id=<?php echo $usuario['id']; ?>" title="Editar"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                                                    <?php if ($usuario['tipo']=='super'): ?>
                                                        <td><a role="button" onclick="return confirm(' ¿ Estas Seguro ?')" href="deluser.php?id=<?php echo $usuario['id']; ?>" title="Eliminar"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                                                    <?php else: ?>
                                                        <td>731.10</td>
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
            <?php endif; ?>

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->