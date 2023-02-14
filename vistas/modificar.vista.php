<?php require 'admin_header.php'; ?>

    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Modificar Muestras</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->
                <!-- CONTENIDO AQUÍ -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <?php if ($_SESSION['tipo']=='admin'): ?>
                                    <h4 class="card-title">Modificar Muestra</h4>
                                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
                                        <div class="mb-3">
                                            <label for="codigo" class="form-label">Código</label>
                                            <input type="text" class="form-control" name="codigo" id="codigo" value="<?php echo $datos['codigo']?>">
                                        </div>
                                        <div class="mb-3">
                                            <label for="fecha" class="form-label">Fecha</label>
                                            <input type="text" class="form-control" name="fecha" id="fecha" value="<?php echo $datos['fecha']?>">
                                        </div>
                                        <div class="mb-3">
                                            <label for="nombre_institucion" class="form-label">Nombre Institución</label>
                                            <input type="text" class="form-control" name="nombre_institucion" id="nombre_institucion" value="<?php echo $datos['nombre_institucion']?>">
                                        </div>
                                        <div class="mb-3">
                                            <label for="nombre_doctor" class="form-label">Nombre Doctor/ra</label>
                                            <input type="text" class="form-control" name="nombre_doctor" id="nombre_doctor" value="<?php echo $datos['nombre_doctor']?>">
                                        </div>
                                        <div class="mb-3">
                                            <label for="nombre_paciente" class="form-label">Nombre del Paciente</label>
                                            <input type="text" class="form-control" name="nombre_paciente" id="nombre_paciente" value="<?php echo $datos['nombre_paciente']?>">
                                        </div>
                                        <div class="mb-3">
                                            <label for="ci_paciente" class="form-label">Cedula del Paciente</label>
                                            <input type="text" class="form-control" name="ci_paciente" id="ci_paciente" value="<?php echo $datos['ci_paciente']?>">
                                        </div>
                                        <div class="mb-3">
                                            <label for="edad_paciente" class="form-label">Edad del Paciente</label>
                                            <input type="number" class="form-control" name="edad_paciente" id="edad_paciente" value="<?php echo $datos['edad_paciente']?>">
                                        </div>
                                        <div class="mb-3">
                                            <label for="tipo" class="form-label">Tipo de Muestra</label>
                                            <select class="form-select" name="tipo" id="tipo">
                                                <option value="<?php echo $daticos; ?>"><?php echo $datos['tipo_tejido']; ?></option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="pago" class="form-label">Pago</label>
                                            <?php if ($datos['pago'] == 'Sin pago'): ?>
                                                <select class="form-select" name="pago" id="pago">
                                                    <option value="Sin pago">Sin pago</option>
                                                    <option value="Con pago">Con pago</option>
                                                </select>
                                            <?php else: ?>
                                                <select class="form-select" name="pago" id="pago">
                                                    <option value="Con pago">Con pago</option>
                                                    <option value="Sin pago">Sin pago</option>
                                                </select>
                                            <?php endif; ?>
                                        </div>
                                        <div class="mb-3 dolares no-mostrar">
                                            <label for="dolares" class="form-label dolarLabel"><?php if ($datos['pago'] == 'Sin pago'): ?>Deuda en $<?php else: ?>Monto en $<?php endif; ?></label>
                                            <input type="number" class="form-control" name="dolares" id="dolares" value="<?php echo $datos['dolares']?>">
                                        </div>
                                        <div class="mb-3 bolivares no-mostrar">
                                            <label for="bolivares" class="form-label bolivarLabel"><?php if ($datos['pago'] == 'Sin pago'): ?>Deuda en Bs.<?php else: ?>Monto en Bs.<?php endif; ?></label>
                                            <input type="number" class="form-control" name="bolivares" id="bolivares" value="<?php echo $datos['bolivares']?>">
                                        </div>
                                        <div class="mb-3">
                                            <input type="hidden" class="form-control" name="impresa" id="impresa" value="<?php echo $datos['impresa']?>">
                                        </div>
                                        <div class="mb-3">
                                            <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $datos['id']?>">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Actualizar</button>
                                        <a class="btn btn-danger" href="<?php echo RUTA; ?>admin" role="button">Volver</a>
                                    </form>
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