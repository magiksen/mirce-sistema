<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Micerlab Sistema</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?php echo RUTA; ?>img/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="<?php echo RUTA; ?>assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="<?php echo RUTA; ?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="<?php echo RUTA; ?>assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body class="auth-body-bg">
<div class="bg-overlay"></div>
<div class="wrapper-page">
    <div class="container-fluid p-0">
        <div class="card">
            <div class="card-body">

                <div class="text-center mt-4">
                    <div class="mb-3">
                        <a href="<?php echo RUTA; ?>" class="auth-logo">
                            <img src="<?php echo RUTA; ?>img/logo.png" height="50" class="logo-dark mx-auto" alt="">
                            <img src="<?php echo RUTA; ?>img/logo.png" height="50" class="logo-light mx-auto" alt="">
                        </a>
                    </div>
                </div>

                <h4 class="text-muted text-center font-size-18"><b>Iniciar Sesión</b></h4>
                <?php if($titulo): ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo  $titulo  ?>
                </div>
                <?php endif; ?>
                <div class="p-3">
                    <form class="form-horizontal mt-3" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">

                        <div class="form-group mb-3 row">
                            <div class="col-12">
                                <input name="usuario" class="form-control" type="text" required="" placeholder="Usuario">
                            </div>
                        </div>

                        <div class="form-group mb-3 row">
                            <div class="col-12">
                                <input name="contraseña" class="form-control" type="password" required="" placeholder="Contraseña">
                            </div>
                        </div>

                        <div class="form-group mb-3 text-center row mt-3 pt-1">
                            <div class="col-12">
                                <button class="btn btn-info w-100 waves-effect waves-light" type="submit">Ingresar</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- end -->
            </div>
            <!-- end cardbody -->
        </div>
        <!-- end card -->
    </div>
    <!-- end container -->
</div>
<!-- end -->

<!-- JAVASCRIPT -->
<script src="<?php echo RUTA; ?>assets/libs/jquery/jquery.min.js"></script>
<script src="<?php echo RUTA; ?>assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo RUTA; ?>assets/libs/metismenu/metisMenu.min.js"></script>
<script src="<?php echo RUTA; ?>assets/libs/simplebar/simplebar.min.js"></script>
<script src="<?php echo RUTA; ?>assets/libs/node-waves/waves.min.js"></script>

<script src="<?php echo RUTA; ?>assets/js/app.js"></script>

</body>
</html>