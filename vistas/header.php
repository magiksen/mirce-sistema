<!DOCTYPE html>
<html>
<head>
	<title>Mircelab Sistema</title>
  <link rel="icon" type="image/png" href="<?php echo RUTA; ?>img/favicon.ico" />
	<meta name="viewport" content="width=device-width, user=scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo RUTA; ?>css/font-awesome.css">
	<link rel="stylesheet" href="<?php echo RUTA; ?>css/estilos.css">
</head>
<body>
<header>
 <?php
    $full_name = $_SERVER[ 'PHP_SELF' ];
    $name_array = explode( '/', $full_name );
    $count = count( $name_array );
    $page_name = $name_array[$count-1];
?>
<?php if ($page_name=='index.php'): ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Mircelab Sistemas</a>
        </div>
    </nav>
<?php elseif($page_name=='registrar.php'): ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo RUTA; ?>admin">Registrar Muestra</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo RUTA; ?>admin">Bienvenido, <?php echo $_SESSION['nombre'].' '.$_SESSION['apellido']; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo RUTA; ?>admin/cerrar.php">Salir</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<?php elseif($page_name=='buscar.php'): ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo RUTA; ?>admin">Busquedad</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo RUTA; ?>admin"><?php echo $titulo ?></a>
                    </li>
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
<?php elseif($page_name=='error.php'): ?>
<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Menu</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo RUTA; ?>admin">Error</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo RUTA; ?>admin/index.php"><i class="fa fa-home" aria-hidden="true"></i> Inicio</a></li>
            <li><a href="<?php echo RUTA; ?>opciones/index.php"><i class="fa fa-cog" aria-hidden="true"></i> Configuración</a></li>
            <li><a href="<?php echo RUTA; ?>admin/cerrar.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Salir</a></li>
          </ul>
          <form class="navbar-form navbar-right" name="busqueda" action="<?php echo RUTA; ?>buscar.php" method="get">
            <input type="text" class="form-control" name="busqueda" id="busqueda" placeholder="Buscar...">
          </form>
        </div>
      </div>
</nav>
<?php elseif($page_name=='modificar.php'): ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo RUTA; ?>admin">Modificicar Muestra</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo RUTA; ?>admin">Bienvenido, <?php echo $_SESSION['nombre'].' '.$_SESSION['apellido']; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo RUTA; ?>admin/cerrar.php">Salir</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<?php elseif($page_name=='edituser.php'): ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo RUTA; ?>admin">Mircelab</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo RUTA; ?>admin">Editar Usuario: <?php echo $datos['nombre'].' '.$datos['apellido']; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo RUTA; ?>admin/cerrar.php">Salir</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<?php elseif($page_name=='reguser.php'): ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo RUTA; ?>admin">Registrar usuario</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo RUTA; ?>admin">Bienvenido, <?php echo $_SESSION['nombre'].' '.$_SESSION['apellido']; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo RUTA; ?>admin/cerrar.php">Salir</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<?php endif; ?>
</header>