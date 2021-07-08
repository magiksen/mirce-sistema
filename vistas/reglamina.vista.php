<?php require 'header.php'; ?>

<?php if ($_SESSION['tipo']=='admin'): ?>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-sm-5 col-sm-offset-5 col-md-5 col-md-offset-5 main admin-usuarios">
                <h1 class="page-header">Registrar Láminas y Bloques</h1>
                <p><strong>Código muestra:</strong> <?php echo $datos['codigo']?></p>
                <p><strong>Institución:</strong> <?php echo $datos['nombre_institucion']?></p>
                <p><strong>Nombre paciente:</strong> <?php echo $datos['nombre_paciente']?></p>
                <p><strong>Cedula Paciente:</strong> <?php echo $datos['ci_paciente']?></p>
                <p><strong>Tipo:</strong> <?php echo $datos['tipo']?></p>
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
                    <div class="mb-3">
                        <label for="lamina" class="form-label"># Lámina</label>
                        <?php if($datos['lamina'] == ''):?>
                        <input type="text" class="form-control" name="lamina" id="lamina" value="Sin Lámina">
                        <?php else:?>
                        <input type="text" class="form-control" name="lamina" id="lamina" value="<?php echo $datos['lamina']?>">
                        <?php endif;?>
                    </div>
                    <div class="mb-3">
                        <label for="bloque" class="form-label"># Lámina</label>
                        <?php if($datos['bloque'] == ''):?>
                            <input type="text" class="form-control" name="bloque" id="bloque" value="Sin Bloque">
                        <?php else:?>
                            <input type="text" class="form-control" name="bloque" id="bloque" value="<?php echo $datos['bloque']?>">
                        <?php endif;?>
                    </div>
                    <div class="mb-3">
                        <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $datos['id']?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Registrar Lámina/Bloque</button>
                    <a class="btn btn-danger" href="<?php echo RUTA; ?>admin" role="button">Volver</a>
                </form>
            </div>
        </div>
    </div>
<?php else: ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-sm-offset-12 col-md-12 col-md-offset-12 main">
                <h1 class="page-header">Error</h1>
                <div>
                    <i class="fa fa-exclamation-circle fa-4x" aria-hidden="true"></i>
                    <h2 class="error">Disculpa Ha Ocurrido un Error!</h2>
                    <h3 class="error"> Usted no tiene permiso para ingresar en esta pagina, para ir al inicio haga <a href="<?php echo RUTA; ?>admin">Click Aquí</a></h3>
                </div>

            </div>
        </div>
    </div>
<?php endif; ?>
<?php require 'footer.php'; ?>
