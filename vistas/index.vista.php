<?php require 'header.php'; ?> 

<div class="container col-md-4 formulario-inicio">
    <div class="row justify-content-center">
        <img class="img-thumbnail rounded mx-auto d-block imagen-login" src="<?php echo RUTA; ?>img/logo.png" alt="logo">
        <h2 class="text-center titulo-login d-block">Micerlab Sistema</h2>
      
    <form class="form-signin" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
        <?php if (!empty($titulo)): ?>
            <div class="mb-3 alert alert-danger" role="alert">
                <strong>Error!</strong> <?php echo $titulo; ?>
            </div>
        <?php else: ?>
            <div class="mb-3 alert alert-info" role="alert">
                <strong>Info!</strong> Ingrese el Usuario y la Contraseña.
            </div>
        <?php endif ?>
        <div class="mb-3">
            <label for="inputUser" class="form-label">Usuario</label>
            <input type="text" class="form-control" name="usuario" id="inputUser" placeholder="Usuario" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">Ingrese el nombre de usuario.</div>
        </div>
        <div class="mb-3">
            <label for="inputPassword" class="form-label">Contraseña</label>
            <input type="password" name="contraseña" class="form-control" id="inputPassword" placeholder="Contraseña">
        </div>
        <button type="submit" class="btn btn-primary">Ingresar</button>
    </form>

    </div>

</div> 


<?php require 'footer.php'; ?> 