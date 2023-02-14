<?php require 'admin_header.php'; ?>

<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Categorías de muestras</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Registrar Categoría</h4>
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
                                            <?php if($dato['cat_padre'] == 'Principal'): ?>
                                                <option value="<?php echo $dato['nombre']; ?>"><?php echo $dato['nombre']; ?></option>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="codigo" class="form-label hideOnSelect">Código</label>
                                    <input type="text" class="form-control hideOnSelect" name="codigo" id="codigo">
                                </div>
                                <button type="submit" class="btn btn-primary">Guardar</button>
                                <a class="btn btn-danger" href="<?php echo RUTA; ?>admin" role="button">Volver</a>
                            </form>
                        </div>
                    </div>
                </div> <!-- end col -->

                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Categorías Registradas</h4>
                            <table id="datatable-2" class="table table-striped table-hover admin">
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
                                        <?php if($dato['cat_padre'] == 'Principal'): ?>
                                            <td><?php echo $dato['codigo']; ?></td>
                                        <?php else: ?>
                                            <td>-</td>
                                        <?php endif; ?>
                                        <td class="imprimir"><a href="editcat.php?id=<?php echo $dato['id']; ?>" title="Editar"><i class="ri-edit-fill "></i></a></td>
                                        <td class="imprimir"><a role="button" onclick="return confirm(' ¿ Estas Seguro ?')" href="eliminarcat.php?id=<?php echo $dato['id']; ?>" title="Eliminar"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                                        <td></td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div>
    </div>
</div>

<?php require 'footer.php'; ?>

<script>
    $(document).ready(function () {
        var table = $('#datatable-2').DataTable({
            "language": {
                "lengthMenu": "Mostrar _MENU_ Categorías por página",
                "zeroRecords": "Sin resultados - disculpe",
                "info": "Mostrando pagina _PAGE_ de _PAGES_",
                "infoEmpty": "No hay categorías disponibles",
                "infoFiltered": "(filtrado de _MAX_ total de categorías)",
                "paginate": {
                    "first":      "Primero",
                    "last":       "Último",
                    "next":       "Siguiente",
                    "previous":   "Anterior"
                },
                "search":         "Buscar:",
            }
        });
    });
</script>
