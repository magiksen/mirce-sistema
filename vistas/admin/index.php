<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Dashboard | Upcube - Admin & Dashboard Template</title>
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

    <!-- Bootstrap Css -->
    <link href="<?php echo RUTA; ?>assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="<?php echo RUTA; ?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="<?php echo RUTA; ?>assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

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
                                    <img src="<?php echo RUTA; ?>img/logo.png" alt="logo-sm" height="22">
                                </span>
                        <span class="logo-lg">
                                    <img src="<?php echo RUTA; ?>img/logo.png" alt="logo-dark" height="20">
                                </span>
                    </a>

                    <a href="<?php echo RUTA; ?>admin" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="<?php echo RUTA; ?>img/logo.png" alt="logo-sm-light" height="22">
                                </span>
                        <span class="logo-lg">
                                    <img src="<?php echo RUTA; ?>img/logo.png" alt="logo-light" height="20">
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
                        <a class="dropdown-item text-danger" href="#"><i class="ri-shut-down-line align-middle me-1 text-danger"></i> Logout</a>
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
                    <img src="<?php echo RUTA; ?>assets/images/users/avatar-1.jpg" alt="" class="avatar-md rounded-circle">
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
                            <i class="ri-dashboard-line"></i><span class="badge rounded-pill bg-success float-end">3</span>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <?php if ($_SESSION['tipo']=='super'): ?>
                        <li>
                            <a href="<?php echo RUTA; ?>admin/reguser.php" class=" waves-effect">
                                <i class="ri-dashboard-line"></i>
                                <span>Registrar Usuario</span>
                            </a>
                        </li>
                    <?php elseif ($_SESSION['tipo']=='admin'): ?>
                        <li>
                            <a href="<?php echo RUTA; ?>admin/reguser.php" class=" waves-effect">
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



    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Dashboard</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="text-truncate font-size-14 mb-2">Total Sales</p>
                                        <h4 class="mb-2">1452</h4>
                                        <p class="text-muted mb-0"><span class="text-success fw-bold font-size-12 me-2"><i class="ri-arrow-right-up-line me-1 align-middle"></i>9.23%</span>from previous period</p>
                                    </div>
                                    <div class="avatar-sm">
                                                <span class="avatar-title bg-light text-primary rounded-3">
                                                    <i class="ri-shopping-cart-2-line font-size-24"></i>
                                                </span>
                                    </div>
                                </div>
                            </div><!-- end cardbody -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                    <div class="col-xl-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="text-truncate font-size-14 mb-2">New Orders</p>
                                        <h4 class="mb-2">938</h4>
                                        <p class="text-muted mb-0"><span class="text-danger fw-bold font-size-12 me-2"><i class="ri-arrow-right-down-line me-1 align-middle"></i>1.09%</span>from previous period</p>
                                    </div>
                                    <div class="avatar-sm">
                                                <span class="avatar-title bg-light text-success rounded-3">
                                                    <i class="mdi mdi-currency-usd font-size-24"></i>
                                                </span>
                                    </div>
                                </div>
                            </div><!-- end cardbody -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                    <div class="col-xl-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="text-truncate font-size-14 mb-2">New Users</p>
                                        <h4 class="mb-2">8246</h4>
                                        <p class="text-muted mb-0"><span class="text-success fw-bold font-size-12 me-2"><i class="ri-arrow-right-up-line me-1 align-middle"></i>16.2%</span>from previous period</p>
                                    </div>
                                    <div class="avatar-sm">
                                                <span class="avatar-title bg-light text-primary rounded-3">
                                                    <i class="ri-user-3-line font-size-24"></i>
                                                </span>
                                    </div>
                                </div>
                            </div><!-- end cardbody -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                    <div class="col-xl-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="text-truncate font-size-14 mb-2">Unique Visitors</p>
                                        <h4 class="mb-2">29670</h4>
                                        <p class="text-muted mb-0"><span class="text-success fw-bold font-size-12 me-2"><i class="ri-arrow-right-up-line me-1 align-middle"></i>11.7%</span>from previous period</p>
                                    </div>
                                    <div class="avatar-sm">
                                                <span class="avatar-title bg-light text-success rounded-3">
                                                    <i class="mdi mdi-currency-btc font-size-24"></i>
                                                </span>
                                    </div>
                                </div>
                            </div><!-- end cardbody -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                </div><!-- end row -->

                <div class="row">
                    <div class="col-xl-6">

                        <div class="card">
                            <div class="card-body pb-0">
                                <div class="float-end d-none d-md-inline-block">
                                    <div class="dropdown card-header-dropdown">
                                        <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="text-muted">Report<i class="mdi mdi-chevron-down ms-1"></i></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Export</a>
                                            <a class="dropdown-item" href="#">Import</a>
                                            <a class="dropdown-item" href="#">Download Report</a>
                                        </div>
                                    </div>
                                </div>
                                <h4 class="card-title mb-4">Email Sent</h4>

                                <div class="text-center pt-3">
                                    <div class="row">
                                        <div class="col-sm-4 mb-3 mb-sm-0">
                                            <div class="d-inline-flex">
                                                <h5 class="me-2">25,117</h5>
                                                <div class="text-success font-size-12">
                                                    <i class="mdi mdi-menu-up font-size-14"> </i>2.2 %
                                                </div>
                                            </div>
                                            <p class="text-muted text-truncate mb-0">Marketplace</p>
                                        </div><!-- end col -->
                                        <div class="col-sm-4 mb-3 mb-sm-0">
                                            <div class="d-inline-flex">
                                                <h5 class="me-2">$34,856</h5>
                                                <div class="text-success font-size-12">
                                                    <i class="mdi mdi-menu-up font-size-14"> </i>1.2 %
                                                </div>
                                            </div>
                                            <p class="text-muted text-truncate mb-0">Last Week</p>
                                        </div><!-- end col -->
                                        <div class="col-sm-4">
                                            <div class="d-inline-flex">
                                                <h5 class="me-2">$18,225</h5>
                                                <div class="text-success font-size-12">
                                                    <i class="mdi mdi-menu-up font-size-14"> </i>1.7 %
                                                </div>
                                            </div>
                                            <p class="text-muted text-truncate mb-0">Last Month</p>
                                        </div><!-- end col -->
                                    </div><!-- end row -->
                                </div>
                            </div>
                            <div class="card-body py-0 px-2">
                                <div id="area_chart" class="apex-charts" dir="ltr"></div>
                            </div>
                        </div><!-- end card -->
                    </div>
                    <!-- end col -->
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body pb-0">
                                <div class="float-end d-none d-md-inline-block">
                                    <div class="dropdown">
                                        <a class="text-reset" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="text-muted">This Years<i class="mdi mdi-chevron-down ms-1"></i></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Today</a>
                                            <a class="dropdown-item" href="#">Last Week</a>
                                            <a class="dropdown-item" href="#">Last Month</a>
                                            <a class="dropdown-item" href="#">This Year</a>
                                        </div>
                                    </div>
                                </div>
                                <h4 class="card-title mb-4">Revenue</h4>

                                <div class="text-center pt-3">
                                    <div class="row">
                                        <div class="col-sm-4 mb-3 mb-sm-0">
                                            <div>
                                                <h5>17,493</h5>
                                                <p class="text-muted text-truncate mb-0">Marketplace</p>
                                            </div>
                                        </div><!-- end col -->
                                        <div class="col-sm-4 mb-3 mb-sm-0">
                                            <div>
                                                <h5>$44,960</h5>
                                                <p class="text-muted text-truncate mb-0">Last Week</p>
                                            </div>
                                        </div><!-- end col -->
                                        <div class="col-sm-4">
                                            <div>
                                                <h5>$29,142</h5>
                                                <p class="text-muted text-truncate mb-0">Last Month</p>
                                            </div>
                                        </div><!-- end col -->
                                    </div><!-- end row -->
                                </div>
                            </div>
                            <div class="card-body py-0 px-2">
                                <div id="column_line_chart" class="apex-charts" dir="ltr"></div>
                            </div>
                        </div><!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-xl-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="dropdown float-end">
                                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                    </div>
                                </div>

                                <h4 class="card-title mb-4">Latest Transactions</h4>

                                <div class="table-responsive">
                                    <table class="table table-centered mb-0 align-middle table-hover table-nowrap">
                                        <thead class="table-light">
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Status</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th style="width: 120px;">Salary</th>
                                        </tr>
                                        </thead><!-- end thead -->
                                        <tbody>
                                        <tr>
                                            <td><h6 class="mb-0">Charles Casey</h6></td>
                                            <td>Web Developer</td>
                                            <td>
                                                <div class="font-size-13"><i class="ri-checkbox-blank-circle-fill font-size-10 text-success align-middle me-2"></i>Active</div>
                                            </td>
                                            <td>
                                                23
                                            </td>
                                            <td>
                                                04 Apr, 2021
                                            </td>
                                            <td>$42,450</td>
                                        </tr>
                                        <!-- end -->
                                        <tr>
                                            <td><h6 class="mb-0">Alex Adams</h6></td>
                                            <td>Python Developer</td>
                                            <td>
                                                <div class="font-size-13"><i class="ri-checkbox-blank-circle-fill font-size-10 text-warning align-middle me-2"></i>Deactive</div>
                                            </td>
                                            <td>
                                                28
                                            </td>
                                            <td>
                                                01 Aug, 2021
                                            </td>
                                            <td>$25,060</td>
                                        </tr>
                                        <!-- end -->
                                        <tr>
                                            <td><h6 class="mb-0">Prezy Kelsey</h6></td>
                                            <td>Senior Javascript Developer</td>
                                            <td>
                                                <div class="font-size-13"><i class="ri-checkbox-blank-circle-fill font-size-10 text-success align-middle me-2"></i>Active</div>
                                            </td>
                                            <td>
                                                35
                                            </td>
                                            <td>
                                                15 Jun, 2021
                                            </td>
                                            <td>$59,350</td>
                                        </tr>
                                        <!-- end -->
                                        <tr>
                                            <td><h6 class="mb-0">Ruhi Fancher</h6></td>
                                            <td>React Developer</td>
                                            <td>
                                                <div class="font-size-13"><i class="ri-checkbox-blank-circle-fill font-size-10 text-success align-middle me-2"></i>Active</div>
                                            </td>
                                            <td>
                                                25
                                            </td>
                                            <td>
                                                01 March, 2021
                                            </td>
                                            <td>$23,700</td>
                                        </tr>
                                        <!-- end -->
                                        <tr>
                                            <td><h6 class="mb-0">Juliet Pineda</h6></td>
                                            <td>Senior Web Designer</td>
                                            <td>
                                                <div class="font-size-13"><i class="ri-checkbox-blank-circle-fill font-size-10 text-success align-middle me-2"></i>Active</div>
                                            </td>
                                            <td>
                                                38
                                            </td>
                                            <td>
                                                01 Jan, 2021
                                            </td>
                                            <td>$69,185</td>
                                        </tr>
                                        <!-- end -->
                                        <tr>
                                            <td><h6 class="mb-0">Den Simpson</h6></td>
                                            <td>Web Designer</td>
                                            <td>
                                                <div class="font-size-13"><i class="ri-checkbox-blank-circle-fill font-size-10 text-warning align-middle me-2"></i>Deactive</div>
                                            </td>
                                            <td>
                                                21
                                            </td>
                                            <td>
                                                01 Sep, 2021
                                            </td>
                                            <td>$37,845</td>
                                        </tr>
                                        <!-- end -->
                                        <tr>
                                            <td><h6 class="mb-0">Mahek Torres</h6></td>
                                            <td>Senior Laravel Developer</td>
                                            <td>
                                                <div class="font-size-13"><i class="ri-checkbox-blank-circle-fill font-size-10 text-success align-middle me-2"></i>Active</div>
                                            </td>
                                            <td>
                                                32
                                            </td>
                                            <td>
                                                20 May, 2021
                                            </td>
                                            <td>$55,100</td>
                                        </tr>
                                        <!-- end -->
                                        </tbody><!-- end tbody -->
                                    </table> <!-- end table -->
                                </div>
                            </div><!-- end card -->
                        </div><!-- end card -->
                    </div>
                    <!-- end col -->
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="float-end">
                                    <select class="form-select shadow-none form-select-sm">
                                        <option selected>Apr</option>
                                        <option value="1">Mar</option>
                                        <option value="2">Feb</option>
                                        <option value="3">Jan</option>
                                    </select>
                                </div>
                                <h4 class="card-title mb-4">Monthly Earnings</h4>

                                <div class="row">
                                    <div class="col-4">
                                        <div class="text-center mt-4">
                                            <h5>3475</h5>
                                            <p class="mb-2 text-truncate">Market Place</p>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-4">
                                        <div class="text-center mt-4">
                                            <h5>458</h5>
                                            <p class="mb-2 text-truncate">Last Week</p>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-4">
                                        <div class="text-center mt-4">
                                            <h5>9062</h5>
                                            <p class="mb-2 text-truncate">Last Month</p>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                </div>
                                <!-- end row -->

                                <div class="mt-4">
                                    <div id="donut-chart" class="apex-charts"></div>
                                </div>
                            </div>
                        </div><!-- end card -->
                    </div><!-- end col -->
                </div>
                <!-- end row -->
            </div>

        </div>
        <!-- End Page-content -->

        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>document.write(new Date().getFullYear())</script> © Mircelab.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Creado con <i class="mdi mdi-heart text-danger"></i> por Samuel Escobar
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- JAVASCRIPT -->
<script src="assets/libs/jquery/jquery.min.js"></script>
<script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/libs/metismenu/metisMenu.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/libs/node-waves/waves.min.js"></script>


<!-- apexcharts -->
<script src="assets/libs/apexcharts/apexcharts.min.js"></script>

<!-- jquery.vectormap map -->
<script src="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js"></script>

<!-- Required datatable js -->
<script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>

<!-- Responsive examples -->
<script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

<script src="assets/js/pages/dashboard.init.js"></script>

<!-- App js -->
<script src="assets/js/app.js"></script>
</body>

</html>