<!DOCTYPE html>
<html>
<head>
	<title>Mircelab sistema</title>
  <link rel="icon" type="image/png" href="<?php echo RUTA; ?>img/favicon.ico" />
	<meta name="viewport" content="width=device-width, user=scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo RUTA; ?>css/font-awesome.css">
	<link rel="stylesheet" href="<?php echo RUTA; ?>css/estilos.css">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

            <a class="navbar-brand" href="#"><img src="<?php echo RUTA; ?>img/logo-header.png" alt="logo-header" width="50px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo RUTA; ?>admin">Bienvenido, <?php echo $_SESSION['nombre'].' '.$_SESSION['apellido']; ?></a>
                    </li>
                    <?php if ($_SESSION['tipo']=='super'): ?>
                        <li class="nav-item">
                            <a class="nav-link active" href="<?php echo RUTA; ?>admin/reguser.php">Registrar Usuario</a>
                        </li>
                    <?php elseif ($_SESSION['tipo']=='admin'): ?>
                        <li class="nav-item">
                            <a class="nav-link active" href="<?php echo RUTA; ?>admin/registrar.php">Registrar Muestra</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Estadísticas</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link active" href="<?php echo RUTA; ?>admin">Ver registro de muestras</a>
                        </li>
                    <?php endif; ?>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo RUTA; ?>admin/cerrar.php">Salir</a>
                    </li>
                </ul>
                <form class="d-flex" action="<?php echo RUTA; ?>buscar.php" method="get">
                    <input class="form-control me-2" name="busqueda" id="busqueda" type="search" placeholder="Buscar..." aria-label="Buscar">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>
</header>

