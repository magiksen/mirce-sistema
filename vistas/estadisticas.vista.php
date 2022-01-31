<?php require 'admin_header.php'; ?>

<div style="margin-top: 50px;" class="container-fluid">
    <div class="row justify-content-center">
        <h1 class="page-header">Estadisticas de registros</h1>
        <div style="margin-top: 50px;" class="col-sm-12 col-sm-offset-12 col-md-12 col-md-offset-12 main d-flex flex-row justify-content-between">
            <div class="card muestras-registradas" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Muestras registradas</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Total</h6>
                    <p class="card-text"><span class="badge bg-success"><?php echo $numeromuestras[0]; ?></span></p>
                    <a class="btn btn-primary" href="<?php echo RUTA; ?>admin/registrar.php" role="button">Registrar nueva muestra</a>
                </div>
            </div>
            <?php foreach($cadamuestra as $muestra): ?>
                <?php if($muestra['cat_padre'] == 'Principal'): ?>
                <div class="card muestras-registradas" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $muestra['nombre'] ?> registradas</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Total</h6>
                        <p class="card-text"><span class="badge bg-success"><?php $counts = numerodecadamuestra($conexion, $muestra['nombre']); ?><?php echo $counts[0][0]; ?></span></p>
                    </div>
                </div>
            <?php endif; ?>
            <?php endforeach; ?>    
        </div>
        <div style="margin-top: 40px;background-color: #46A7AA;padding: 30px;width: 99%;" class="estadisticas-dias col-sm-12 col-sm-offset-12 col-md-12 col-md-offset-12 main d-flex flex-column justify-content-between">
            <h2>Filtrar</h2>
            <form class="row g-12" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
                <div class="mb-3 col-md-3">
                    <label for="fecha" class="form-label">Fecha</label>
                    <input type="text" class="form-control" name="fecha" id="fecha">
                </div>
                <div class="mb-3 col-md-3">
                    <label for="fechados" class="form-label">Fecha</label>
                    <input type="text" class="form-control" name="fechados" id="fechados">
                </div>
                <div class="mb-3 col-md-3">
                    <label for="inst" class="form-label">Institución</label>
                    <select class="form-select" name="inst" id="inst">
                        <option value="Todas">Todos</option>
                        <?php foreach($cadainst as $item): ?>
                        <option value="<?php echo $item['nombre_institucion']; ?>"><?php echo $item['nombre_institucion']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="mb-3 col-md-3">
                    <label for="doctor" class="form-label">Doctor/ra</label>
                    <select class="form-select" name="doctor" id="doctor">
                        <option value="Todas">Todos</option>
                        <?php foreach($cadadoctor as $item): ?>
                        <option value="<?php echo $item['nombre_doctor']; ?>"><?php echo $item['nombre_doctor']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="mb-3 col-md-3">
                    <label for="tipo" class="form-label">Tipo de Muestra</label>
                    <select class="form-select" name="tipo" id="tipo">
                        <option value="Todas">Todas</option>
                        <?php foreach($cadamuestra as $tipo_muestra): ?>
                        <?php if($tipo_muestra['cat_padre'] == 'Principal'): ?>    
                        <option value="<?php echo $tipo_muestra['nombre']; ?>"><?php echo $tipo_muestra['nombre']; ?></option>
                        <?php endif; ?> 
                        <?php endforeach; ?> 
                    </select>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Filtrar</button>
                </div>
            </form>
            </div>
        <div style="margin-top: 20px;" class="col-sm-12 col-sm-offset-12 col-md-12 col-md-offset-12 main d-flex flex-row justify-content-between">
            <?php if (!empty($numeromuestrasfiltro)): ?>
                <div class="card muestras-registradas" style="width: 18rem;margin-top: 20px;">
                    <div class="card-body">
                        <h5 class="card-title">Resultados</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Total</h6>
                        <p class="card-text"><span class="badge bg-success"><?php echo $numeromuestrasfiltro[0]; ?></span></p>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php require 'footer.php'; ?>
