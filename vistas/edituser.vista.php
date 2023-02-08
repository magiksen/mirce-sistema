<?php require 'admin_header.php'; ?>

<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Editar Usuario</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <!-- CONTENIDO AQUÍ -->
            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Editar Usuario</h4>
                            <?php if ($_SESSION['tipo']=='super'): ?>
                            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
                                <div class="mb-3">
                                    <label for="ci" class="form-label">Cedula de Identida</label>
                                    <input type="text" class="form-control" name="ci" id="ci" value="<?php echo $datos['ci']?>">
                                </div>
                                <div class="mb-3">
                                    <label for="nombre" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $datos['nombre']?>">
                                </div>
                                <div class="mb-3">
                                    <label for="apellido" class="form-label">Apellido</label>
                                    <input type="text" class="form-control" name="apellido" id="apellido" value="<?php echo $datos['apellido']?>">
                                </div>
                                <div class="mb-3">
                                    <label for="usuario" class="form-label">Usuario</label>
                                    <input type="text" class="form-control" name="usuario" id="usuario" value="<?php echo $datos['usuario']?>">
                                </div>
                                <div class="mb-3">
                                    <label for="departamento" class="form-label">Actividad</label>
                                    <input type="text" class="form-control" name="departamento" id="departamento" value="<?php echo $datos['departamento']?>">
                                </div>
                                <div class="mb-3">
                                    <label for="tipo" class="form-label">Tipo</label>
                                    <select class="form-select" name="tipo" id="tipo">
                                        <?php if ($datos['tipo']=='admin'): ?>
                                            <option value="<?php echo $datos['tipo']?>">Administrador</option>
                                            <option value="user">Usuario</option>
                                            <option value="super">SuperAdmin</option>
                                        <?php elseif ($datos['tipo']=='super'): ?>
                                            <option value="<?php echo $datos['tipo']?>">SuperAdmin</option>
                                            <option value="user">Usuario</option>
                                            <option value="admin">Administrador</option>
                                        <?php else: ?>
                                            <option value="<?php echo $datos['tipo']?>">Usuario</option>
                                            <option value="admin">Administrador</option>
                                            <option value="super">SuperAdmin</option>
                                        <?php endif; ?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="pass" class="form-label">Nueva Contraseña</label>
                                    <input class="form-control" type="password" name="pass" id="pass" placeholder="Nueva Contraseña">
                                </div>
                                <div class="mb-3">
                                    <input type="hidden" name="id" value="<?php echo $datos['id']?>">
                                </div>
                                <button type="submit" class="btn btn-primary" onclick="return confirm(' ¿ Quieres realizar estos cambios ?')">Actualizar</button>
                            </form>
                            <?php else: ?>
                                <h1 class="page-header">Error</h1>
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