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
    </div>
</div>

<?php require 'footer.php'; ?>
