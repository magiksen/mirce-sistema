<?php require 'admin_header.php'; ?>

    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Visor</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->
                <!-- CONTENIDO AQUÍ -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <?php if ($_SESSION['tipo']=='lamina'): ?>
                                <h4 class="card-title">Láminas y Bloques</h4>
                                            <div class="col-sm-5 col-sm-offset-5 col-md-5 col-md-offset-5 main admin-usuarios">
                                                <p><strong>Código muestra:</strong> <?php echo $datos['codigo']?></p>
                                                <p><strong>Institución:</strong> <?php echo $datos['nombre_institucion']?></p>
                                                <p><strong>Nombre paciente:</strong> <?php echo $datos['nombre_paciente']?></p>
                                                <p><strong>Cedula Paciente:</strong> <?php echo $datos['ci_paciente']?></p>
                                                <p><strong>Tipo:</strong> <?php echo $datos['tipo']?></p>
                                                <p><strong>Láminas</strong> <?php echo $datos['lamina']?></p>
                                                <p><strong>Bloques:</strong> <?php echo $datos['bloque']?></p>
                                                <a class="btn btn-danger" href="<?php echo RUTA; ?>admin" role="button">Volver</a>
                                            </div>
                                <?php elseif ($_SESSION['tipo']=='admin'): ?>
                                <h4 class="card-title">Muestra #<?php echo $datos['codigo']?></h4>
                                            <div class="col-sm-5 col-sm-offset-5 col-md-5 col-md-offset-5 main admin-usuarios">
                                                <p><strong>Código muestra:</strong> <?php echo $datos['codigo']?></p>
                                                <p><strong>Institución:</strong> <?php echo $datos['nombre_institucion']?></p>
                                                <p><strong>Doctor/ra:</strong> <?php echo $datos['nombre_doctor']?></p>
                                                <p><strong>Nombre paciente:</strong> <?php echo $datos['nombre_paciente']?></p>
                                                <p><strong>Cedula Paciente:</strong> <?php echo $datos['ci_paciente']?></p>
                                                <p><strong>Tipo:</strong> <?php echo $datos['tipo']?></p>
                                                <p><strong>Tejido:</strong> <?php echo $datos['tipo_tejido']?></p>
                                                <p><strong>Láminas</strong> <?php echo $datos['lamina']?></p>
                                                <p><strong>Bloques:</strong> <?php echo $datos['bloque']?></p>
                                                <p><strong>Impresa:</strong> <?php echo $datos['impresa']?></p>
                                                <a class="btn btn-success" href="#" role="button">Resultados</a>
                                                <a class="btn btn-danger" href="<?php echo RUTA; ?>admin" role="button">Volver</a>
                                            </div>
                                <?php else: ?>
                                    <h4 class="card-title">Error</h4>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- FIN CONTENIDO -->
            </div>
        </div>
    </div>


<?php require 'footer.php'; ?>