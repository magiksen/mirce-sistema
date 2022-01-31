<?php require 'admin_header.php'; ?>

<div style="margin-top: 50px;" class="container-fluid">
    <div class="row justify-content-center">
        <h1 class="page-header">Categorías de muestras</h1>
        <div class="col-sm-5 col-sm-offset-5 col-md-5 col-md-offset-5 main admin-usuarios">
            <h2>Registrar Categoría</h2>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="nombre">
                </div>
                <div class="mb-3">
                    <label for="cat_padre" class="form-label">Categoría Padre</label>
                    <select class="form-select" name="cat_padre" id="cat_padre">
                    <option value="Principal">Principal</option>
                    <?php foreach($datos as $dato): ?>
                    <option value="<?php echo $dato['nombre']; ?>"><?php echo $dato['nombre']; ?></option>
                    <?php endforeach; ?> 
                </select>
                </div>
                <div class="mb-3">
                    <label for="codigo" class="form-label">Código</label>
                    <input type="text" class="form-control" name="codigo" id="codigo">
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a class="btn btn-danger" href="<?php echo RUTA; ?>admin" role="button">Volver</a>
            </form>
            
        </div>
        <div class="col-sm-5 col-sm-offset-5 col-md-5 col-md-offset-5 main admin-usuarios">
            <h2>Categorías registradas</h2>
            <table class="table table-striped table-hover admin">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre Categoría</th>
                                <th>Categoría Padre</th>
                                <th>Código</th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($datos as $dato): ?>
                            <tr>
                                <td><?php echo $dato['id']; ?></td>
                                <td><?php echo $dato['nombre']; ?></td>
                                <td><?php echo $dato['cat_padre']; ?></td>
                                <td><?php echo $dato['codigo']; ?></td>
                                <td class="imprimir"><a href="editcat.php?id=<?php echo $dato['id']; ?>" title="Editar"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                                <td class="imprimir"><a role="button" onclick="return confirm(' ¿ Estas Seguro ?')" href="eliminarcat.php?id=<?php echo $dato['id']; ?>" title="Eliminar"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                                <td></td>
                            </tr>
                        <?php endforeach; ?>    
                        </tbody>
            </table>
            
        </div>
    </div>
</div>

<?php require 'footer.php'; ?>