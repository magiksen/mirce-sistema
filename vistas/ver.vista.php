<?php require 'admin_header.php'; ?>

<?php if ($_SESSION['tipo']=='lamina'): ?>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-sm-5 col-sm-offset-5 col-md-5 col-md-offset-5 main admin-usuarios">
                <h1 class="page-header">Láminas y Bloques</h1>
                <p><strong>Código muestra:</strong> <?php echo $datos['codigo']?></p>
                <p><strong>Institución:</strong> <?php echo $datos['nombre_institucion']?></p>
                <p><strong>Nombre paciente:</strong> <?php echo $datos['nombre_paciente']?></p>
                <p><strong>Cedula Paciente:</strong> <?php echo $datos['ci_paciente']?></p>
                <p><strong>Tipo:</strong> <?php echo $datos['tipo']?></p>
                <p><strong>Láminas</strong> <?php echo $datos['lamina']?></p>
                <p><strong>Bloques:</strong> <?php echo $datos['bloque']?></p>
                <a class="btn btn-danger" href="<?php echo RUTA; ?>admin" role="button">Volver</a>
            </div>
        </div>
    </div>
<?php elseif ($_SESSION['tipo']=='admin'): ?>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-sm-5 col-sm-offset-5 col-md-5 col-md-offset-5 main admin-usuarios">
                <h1 class="page-header">Muestra #<?php echo $datos['codigo']?></h1>
                <p><strong>Código muestra:</strong> <?php echo $datos['codigo']?></p>
                <p><strong>Institución:</strong> <?php echo $datos['nombre_institucion']?></p>
                <p><strong>Doctor:</strong> <?php echo $datos['nombre_doctor']?></p>
                <p><strong>Nombre paciente:</strong> <?php echo $datos['nombre_paciente']?></p>
                <p><strong>Cedula Paciente:</strong> <?php echo $datos['ci_paciente']?></p>
                <p><strong>Tipo:</strong> <?php echo $datos['tipo']?></p>
                <p><strong>Tipo:</strong> <?php echo $datos['tipo_tejido']?></p>
                <p><strong>Láminas</strong> <?php echo $datos['lamina']?></p>
                <p><strong>Bloques:</strong> <?php echo $datos['bloque']?></p>
                <p><strong>Tipo:</strong> <?php echo $datos['impresa']?></p>
                <a class="btn btn-success" href="#" role="button">Resultados</a>
                <a class="btn btn-danger" href="<?php echo RUTA; ?>admin" role="button">Volver</a>
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