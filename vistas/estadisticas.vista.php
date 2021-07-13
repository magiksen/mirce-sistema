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
            <div class="card muestras-registradas" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Citologias registradas</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Total</h6>
                    <p class="card-text"><span class="badge bg-success"><?php echo $numerocitologias[0]; ?></span></p>
                </div>
            </div>
            <div class="card muestras-registradas" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Biopsias registradas</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Total</h6>
                    <p class="card-text"><span class="badge bg-success"><?php echo $numerobiopsias[0]; ?></span></p>
                </div>
            </div>
            <div class="card muestras-registradas" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Autopsias registradas</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Total</h6>
                    <p class="card-text"><span class="badge bg-success"><?php echo $numeroautopsia[0]; ?></span></p>
                </div>
            </div>
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
                    <label for="tipo" class="form-label">Tipo de Muestra</label>
                    <select class="form-select" name="tipo" id="tipo">
                        <option value="Todas">Todas</option>
                        <option value="Biopsia">Biopsia</option>
                        <option value="Citologia">Citologia</option>
                        <option value="Autopsias">Autopsias</option>
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
                        <a class="btn btn-primary" href="#" role="button">Reporte</a>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php require 'footer.php'; ?>
