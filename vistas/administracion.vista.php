<?php require 'admin_header.php'; ?>

    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Modulo Administrativo</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->
                <!-- CONTENIDO AQUÍ -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Administración</h4>
                                <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseFiltros" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    Elegir fechas
                                </a>
                                <div class="filtros collapse" id="collapseFiltros">
                                    <form class="row g-3" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
                                        <div class="mb-3 col-md-3">
                                            <label for="fecha" class="form-label">Fecha</label>
                                            <input type="text" class="form-control" name="fecha" id="fecha">
                                        </div>
                                        <div class="mb-3 col-md-3">
                                            <label for="fechados" class="form-label">Fecha</label>
                                            <input type="text" class="form-control" name="fechados" id="fechados">
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary">Consultar Pagos</button>
                                        </div>
                                    </form>
                                </div>
                                <?php if(!empty($datos)): ?>
                                    <div class="col-sm-6 col-sm-offset-6 col-md-6 col-md-offset-6 main admin-usuarios">
                                        <h2>Pagos recibidos</h2>
                                        <table class="table table-striped table-hover admin">
                                            <thead>
                                            <tr>
                                                <th>Código de muestra</th>
                                                <th>Pago en $</th>
                                                <th>Pago en Bs.</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php foreach($datos as $dato): ?>
                                                <?php if($dato['pago'] == 'Con pago'): ?>
                                                    <tr>
                                                        <td><?php echo $dato['codigo']; ?></td>
                                                        <td><?php echo $dato['dolares']; ?></td>
                                                        <td><?php echo $dato['bolivares']; ?></td>
                                                    </tr>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                            <tr class="total-pago">
                                                <td>Total</td>
                                                <td><?php echo $total_dolares; ?></td>
                                                <td><?php echo $total_bolivares; ?></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-sm-6 col-sm-offset-6 col-md-6 col-md-offset-6 main admin-usuarios">
                                        <h2>Deudas por cobrar</h2>
                                        <table class="table table-striped table-hover admin">
                                            <thead>
                                            <tr>
                                                <th>Código de muestra</th>
                                                <th>Deuda en $</th>
                                                <th>Deuda en Bs.</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php foreach($datos as $dato): ?>
                                                <?php if($dato['pago'] == 'Sin pago'): ?>
                                                    <tr>
                                                        <td><?php echo $dato['codigo']; ?></td>
                                                        <td><?php echo $dato['dolares']; ?></td>
                                                        <td><?php echo $dato['bolivares']; ?></td>
                                                    </tr>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                            <tr class="total-deuda">
                                                <td>Total</td>
                                                <td><?php echo $deuda_dolares; ?></td>
                                                <td><?php echo $deuda_bolivares; ?></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- FIN CONTENIDO -->
            </div>
        </div>
    </div>

<?php require 'footer.php'; ?>