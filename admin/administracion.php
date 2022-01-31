<?php session_start();

// Archivo index del ADMIN

require ('config.php');
require ('../funciones.php');

comprobarSession();

$conexion = conexion($bd_config);

if (!$conexion) {
    header('location: ../error.php');
}



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fecha = limpiarDatosInicio($_POST['fecha']);
    $fechados = limpiarDatosInicio($_POST['fechados']);

    if (empty($fechados)) {
        $fechados = $fecha;
    }

    $resultado = $conexion->prepare("SELECT codigo, pago, dolares, bolivares FROM muestras WHERE fecha BETWEEN :fecha AND :fechados");
    $resultado->execute(array(
                ':fecha' => "$fecha",
                ':fechados' => "$fechados"
            ));

    $resultado = $resultado->fetchAll();
    $datos = $resultado;

    //traer total en bolivares pagos

    $pagos_bolivares = $conexion->prepare("SELECT SUM(bolivares) FROM muestras WHERE pago = 'Con pago' AND fecha BETWEEN :fecha AND :fechados");
    $pagos_bolivares->execute(array(
                ':fecha' => "$fecha",
                ':fechados' => "$fechados"
            ));

    $pagos_bolivares = $pagos_bolivares->fetchAll();
    $total_bolivares = $pagos_bolivares[0][0];

    //traer total en dolares pagos

    $pagos_dolares = $conexion->prepare("SELECT SUM(dolares) FROM muestras WHERE pago = 'Con pago' AND fecha BETWEEN :fecha AND :fechados");
    $pagos_dolares->execute(array(
                ':fecha' => "$fecha",
                ':fechados' => "$fechados"
            ));

    $pagos_dolares = $pagos_dolares->fetchAll();
    $total_dolares = $pagos_dolares[0][0];

    //traer total en bolivares deuda
    $pagos_bolivares = $conexion->prepare("SELECT SUM(bolivares) FROM muestras WHERE pago = 'Sin pago' AND fecha BETWEEN :fecha AND :fechados");
    $pagos_bolivares->execute(array(
                ':fecha' => "$fecha",
                ':fechados' => "$fechados"
            ));

    $pagos_bolivares = $pagos_bolivares->fetchAll();
    $deuda_bolivares = $pagos_bolivares[0][0];

    //traer total en dolares deuda

    $pagos_dolares = $conexion->prepare("SELECT SUM(dolares) FROM muestras WHERE pago = 'Sin pago' AND fecha BETWEEN :fecha AND :fechados");
    $pagos_dolares->execute(array(
                ':fecha' => "$fecha",
                ':fechados' => "$fechados"
            ));

    $pagos_dolares = $pagos_dolares->fetchAll();
    $deuda_dolares = $pagos_dolares[0][0];



}

require ('../vistas/administracion.vista.php');

?>