<?php session_start();

// Archivo index del ADMIN

require ('config.php');
require ('../funciones.php');

comprobarSession();

$conexion = conexion($bd_config);

if (!$conexion) {
    header('location: ../error.php');
}

if ($_SESSION['tipo'] == 'super') { 
    $usuarios = reporte_usuarios($conexion);
} else {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $pago = limpiarDatosInicio($_POST['pago']);
        $fecha = limpiarDatosInicio($_POST['fecha']);
        $tipo = limpiarDatosInicio($_POST['tipo']);

        if ($pago == 'Ambos' && $tipo == 'Todas') {
            $stament = $conexion->prepare(
                'SELECT * FROM muestras WHERE fecha LIKE :fecha'
            );
            $stament->execute(array(
                ':fecha' => "%$fecha%"
            ));
            $datos = $stament->fetchAll();
        } elseif (!($pago == 'Ambos') && $tipo == 'Todas') {
            if (!empty($fecha)) {
                $stament = $conexion->prepare(
                    'SELECT * FROM muestras WHERE pago LIKE :pago AND fecha LIKE :fecha'
                );
                $stament->execute(array(
                    ':pago' => "%$pago%",
                    ':fecha' => "%$fecha%"
                ));
            } else {
                $stament = $conexion->prepare(
                    'SELECT * FROM muestras WHERE pago LIKE :pago'
                );
                $stament->execute(array(
                    ':pago' => "%$pago%"
                ));
            }
            $datos = $stament->fetchAll();


        } elseif ($pago == 'Ambos' && !($tipo == 'Todas')) {
            if (!empty($fecha)) {
                $stament = $conexion->prepare(
                    'SELECT * FROM muestras WHERE tipo LIKE :tipo AND fecha LIKE :fecha'
                );
                $stament->execute(array(
                    ':tipo' => "%$tipo%",
                    ':fecha' => "%$fecha%"
                ));
            } else {
                $stament = $conexion->prepare(
                    'SELECT * FROM muestras WHERE tipo LIKE :tipo'
                );
                $stament->execute(array(
                    ':tipo' => "%$tipo%"
                ));
            }
            $datos = $stament->fetchAll();

        } elseif (!($pago == 'Ambos') && !($tipo == 'Todas')) {
            if (!empty($fecha)) {
                $stament = $conexion->prepare(
                    'SELECT * FROM muestras WHERE pago LIKE :pago AND tipo LIKE :tipo AND fecha LIKE :fecha'
                );
                $stament->execute(array(
                    ':pago' => "%$pago%",
                    ':tipo' => "%$tipo%",
                    ':fecha' => "%$fecha%"
                ));
            } else {
                $stament = $conexion->prepare(
                    'SELECT * FROM muestras WHERE tipo LIKE :tipo AND pago LIKE :pago'
                );
                $stament->execute(array(
                    ':pago' => "%$pago%",
                    ':tipo' => "%$tipo%"
                ));
            }
            $datos = $stament->fetchAll();

        }

        if (empty($datos)) {
            $titulo = 'No se encontraron resultados! ';
        } else {
            $titulo = 'Resultados de los filtros: ';
        }
    } else {
        $datos = obtener_muestras($conexion);
    }
//    if (!$datos) {
//        header('location: ../error.php');
//    }
}


require ('../vistas/admin_index.vista.php');

?>