<?php require 'admin_header.php'; ?>

<div style="margin-top: 50px;" class="container-fluid">
    <div class="row justify-content-center">
        <h1 class="page-header">Opciones</h1>
        <div class="col-sm-5 col-sm-offset-5 col-md-5 col-md-offset-5 main admin-usuarios">
            <h2>Codigos</h2>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
            <div class="mb-3">
                <label for="biopsias" class="form-label">Biopsias</label>
                <input type="text" class="form-control" name="biopsias" id="biopsias" value="<?php echo $codigo_biopsia ?>">
            </div>
            <div class="mb-3">
                <label for="citologias" class="form-label">Citologias</label>
                <input type="text" class="form-control" name="citologias" id="citologias" value="<?php echo $codigo_citologia ?>">
            </div>
            <div class="mb-3">
                <label for="autopsias" class="form-label">Autopsias</label>
                <input type="text" class="form-control" name="autopsias" id="autopsias" value="<?php echo $codigo_autopsia ?>">
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a class="btn btn-danger" href="<?php echo RUTA; ?>admin" role="button">Volver</a>
        </form>
            
        </div>
    </div>
</div>

<?php require 'footer.php'; ?>