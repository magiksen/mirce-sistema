<!DOCTYPE html>
<html>
<head>
	<title>Mircelab Sistema</title>
  <link rel="icon" type="image/png" href="<?php echo RUTA; ?>img/favicon.ico" />
	<meta name="viewport" content="width=device-width, user=scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
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
<?php else: ?>
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
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo RUTA; ?>admin/cerrar.php">Salir</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<?php endif; ?>
</header>