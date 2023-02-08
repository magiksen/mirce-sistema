<?php require 'admin_header.php'; ?>

<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Registrar Usuario</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <!-- CONTENIDO AQUÍ -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <?php if ($_SESSION['tipo']=='super'): ?>
                                <h4 class="card-title">Registrar Usuario</h4>
                                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
                                    <div class="mb-3">
                                        <label for="ci" class="form-label">Cedula de Identida</label>
                                        <input type="text" class="form-control" name="ci" id="ci">
                                    </div>
                                    <div class="mb-3">
                                        <label for="nombre" class="form-label">Nombre</label>
                                        <input type="text" class="form-control" name="nombre" id="nombre">
                                    </div>
                                    <div class="mb-3">
                                        <label for="apellido" class="form-label">Apellido</label>
                                        <input type="text" class="form-control" name="apellido" id="apellido">
                                    </div>
                                    <div class="mb-3">
                                        <label for="usuario" class="form-label">Usuario</label>
                                        <input type="text" class="form-control" name="usuario" id="usuario">
                                    </div>
                                    <div class="mb-3">
                                        <label for="departamento" class="form-label">Actividad</label>
                                        <input type="text" class="form-control" name="departamento" id="departamento">
                                    </div>
                                    <div class="mb-3">
                                        <label for="tipo" class="form-label">Tipo</label>
                                        <select class="form-select" name="tipo" id="tipo">
                                            <option value="transcriptora">Transcriptora</option>
                                            <option value="lamina">Laminas Y Bloques</option>
                                            <option value="registro">Registradora</option>
                                            <option value="user">Usuario</option>
                                            <option value="admin">Doctora</option>
                                            <option value="super">SuperAdmin</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="pass" class="form-label">Contraseña</label>
                                        <input class="form-control" type="password" name="pass" id="pass">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Registrar</button>
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