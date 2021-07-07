<?php
$full_name = $_SERVER[ 'PHP_SELF' ];
$name_array = explode( '/', $full_name );
$count = count( $name_array );
$page_name = $name_array[$count-1];
?>
<?php if ($page_name=='index.php' || $page_name=='buscar.php' ): ?>
<footer class="footer fixed-bottom">
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid justify-content-center">
            <a class="navbar-brand" href="<?php echo RUTA; ?>/admin">Realizado por Mircelab. © 2021. Todos los Derechos Reservados</a>
        </div>
    </nav>
</footer>
<?php else: ?>
    <footer class="footer">
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid justify-content-center">
                <a class="navbar-brand" href="<?php echo RUTA; ?>/admin">Realizado por Mircelab. © 2021. Todos los Derechos Reservados</a>
            </div>
        </nav>
    </footer>
<?php endif; ?>
<script src="<?php echo RUTA; ?>js/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="<?php echo RUTA; ?>js/custom.js"></script>
</body>
</html>