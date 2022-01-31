<?php require 'admin_header.php'; ?>

<div style="margin-top: 50px;" class="container-fluid">
    <div class="row justify-content-center">
        <h1 class="page-header">Categorías de muestras</h1>
        <div class="col-sm-5 col-sm-offset-5 col-md-5 col-md-offset-5 main admin-usuarios">
            <h2>Editar Categoría</h2>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $datos['nombre']; ?>">
                </div>
                <?php if($datos['cat_padre'] !== 'principal'): ?>
                <div class="mb-3">
                    <label for="cat_padre" class="form-label">Categoría Padre</label>
                    <select class="form-select" name="cat_padre" id="cat_padre">
                        <option value="<?php echo $datos['cat_padre']; ?>"><?php echo $datos['cat_padre']; ?></option>
                        <option value="Principal">No tiene</option>
                        <?php foreach($tipos_muestras as $tipo_muestra): ?>
                        <option value="<?php echo $tipo_muestra['nombre']; ?>"><?php echo $tipo_muestra['nombre']; ?></option>
                        <?php endforeach; ?> 
                   </select>
                </div>
                <?php endif; ?> 
                <div class="mb-3">
                    <label for="codigo" class="form-label">Código</label>
                    <input type="text" class="form-control" name="codigo" id="codigo" value="<?php echo $datos['codigo']; ?>">
                </div>
                <div class="mb-3">
                      <input type="hidden" name="id" value="<?php echo $datos['id']?>">
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a class="btn btn-danger" href="<?php echo RUTA; ?>admin/cat_muestras.php" role="button">Volver</a>
            </form>
            
        </div>
    </div>
</div>

<?php require 'footer.php'; ?>