<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Mircelab | Sistema</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?php echo RUTA; ?>img/favicon.ico">

    <!-- jquery.vectormap css -->
    <link href="<?php echo RUTA; ?>assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />

    <!-- DataTables -->
    <link href="<?php echo RUTA; ?>assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="<?php echo RUTA; ?>assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Responsive Table css -->
    <link href="<?php echo RUTA; ?>assets/libs/admin-resources/rwd-table/rwd-table.min.css" rel="stylesheet" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="<?php echo RUTA; ?>assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="<?php echo RUTA; ?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="<?php echo RUTA; ?>assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</head>

<body data-topbar="dark">

<!-- <body data-layout="horizontal" data-topbar="dark"> -->

<!-- Begin page -->
<div id="layout-wrapper">


    <header id="page-topbar">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <a href="<?php echo RUTA; ?>admin" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="<?php echo RUTA; ?>img/logo.png" alt="logo-sm" height="55">
                                </span>
                        <span class="logo-lg">
                                    <img src="<?php echo RUTA; ?>img/logo.png" alt="logo-dark" height="55">
                                </span>
                    </a>

                    <a href="<?php echo RUTA; ?>admin" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="<?php echo RUTA; ?>img/logo.png" alt="logo-sm-light" height="55">
                                </span>
                        <span class="logo-lg">
                                    <img src="<?php echo RUTA; ?>img/logo.png" alt="logo-light" height="55">
                                </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                    <i class="ri-menu-2-line align-middle"></i>
                </button>

                <!-- App Search-->
                <form class="app-search d-none d-lg-block" action="<?php echo RUTA; ?>buscar.php" method="get">
                    <div class="position-relative">
                        <input type="text" class="form-control" name="busqueda" id="busqueda" placeholder="Buscar...">
                        <span class="ri-search-line"></span>
                    </div>
                </form>

            </div>

            <div class="d-flex">

                <div class="dropdown d-inline-block d-lg-none ms-2">
                    <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="ri-search-line"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                         aria-labelledby="page-header-search-dropdown">

                        <form class="p-3" action="<?php echo RUTA; ?>buscar.php" method="get">
                            <div class="mb-3 m-0">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="busqueda" id="busqueda" placeholder="Buscar...">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit"><i class="ri-search-line"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="dropdown d-inline-block user-dropdown">
                    <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <!--                        <img class="rounded-circle header-profile-user" src="--><?php //echo RUTA; ?><!--assets/images/users/avatar-1.jpg"-->
                        <!--                             alt="Header Avatar">-->
                        <span class="d-none d-xl-inline-block ms-1"><?php echo $_SESSION['nombre'] ?></span>
                        <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <a class="dropdown-item text-danger" href="<?php echo RUTA; ?>admin/cerrar.php"><i class="ri-shut-down-line align-middle me-1 text-danger"></i> Salir</a>
                    </div>
                </div>

            </div>
        </div>
    </header>

    <!-- ========== Left Sidebar Start ========== -->
    <div class="vertical-menu">

        <div data-simplebar class="h-100">

            <!-- User details -->
            <div class="user-profile text-center mt-3">
                <div class="">
<!--                    <img src="--><?php //echo RUTA; ?><!--assets/images/users/avatar-1.jpg" alt="" class="avatar-md rounded-circle">-->
                </div>
                <div class="mt-3">
                    <h4 class="font-size-16 mb-1"><?php echo $_SESSION['nombre'].' '.$_SESSION['apellido']; ?></h4>
                    <span class="text-muted"><i class="ri-record-circle-line align-middle font-size-14 text-success"></i> Online</span>
                </div>
            </div>

            <!--- Sidemenu -->
            <div id="sidebar-menu">
                <!-- Left Menu Start -->
                <ul class="metismenu list-unstyled" id="side-menu">
                    <li class="menu-title">Menu</li>

                    <li>
                        <a href="<?php echo RUTA; ?>admin" class="waves-effect">
                            <i class="ri-home-line "></i>
                            <span>Inicio</span>
                        </a>
                    </li>
                    <?php if ($_SESSION['tipo']=='super'): ?>
                        <li>
                            <a href="<?php echo RUTA; ?>admin/reguser.php" class=" waves-effect">
                                <i class="ri-contacts-book-line"></i>
                                <span>Registrar Usuario</span>
                            </a>
                        </li>
                    <?php elseif ($_SESSION['tipo']=='admin'): ?>
                        <li>
                            <a href="<?php echo RUTA; ?>admin/registrar.php" class=" waves-effect">
                                <i class="ri-dashboard-line"></i>
                                <span>Registrar Muestra</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo RUTA; ?>admin/administracion.php" class=" waves-effect">
                                <i class="ri-dashboard-line"></i>
                                <span>Administración</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo RUTA; ?>admin/estadisticas.php" class=" waves-effect">
                                <i class="ri-dashboard-line"></i>
                                <span>Estadísticas</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo RUTA; ?>admin/cat_muestras.php" class=" waves-effect">
                                <i class="ri-dashboard-line"></i>
                                <span>Categorías de muestras</span>
                            </a>
                        </li>
                    <?php else: ?>
                        <li>
                            <a href="<?php echo RUTA; ?>admin" class=" waves-effect">
                                <i class="ri-dashboard-line"></i>
                                <span>Ver Muestras Registradas</span>
                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
            <!-- Sidebar -->
        </div>
    </div>
    <!-- Left Sidebar End -->

