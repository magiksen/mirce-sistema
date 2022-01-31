<?php session_start();

// Archivo index del ADMIN

require ('config.php');
require ('../funciones.php');

comprobarSession();

$conexion = conexion($bd_config);

if (!$conexion) {
    header('location: ../error.php');
}

//traer el numero de muestra registradas
$numeromuestras = numeromuestras($conexion);
$numeromuestras = $numeromuestras[0];
// traer numero de cada muestra

$cadamuestra = cat_muestras($conexion);

$cadainst= traer_item_inst($conexion);

$cadadoctor= traer_item_doctor($conexion);

//$date = date('d-m-Y');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fecha = limpiarDatosInicio($_POST['fecha']);
    $fechados = limpiarDatosInicio($_POST['fechados']);
    $tipo = limpiarDatosInicio($_POST['tipo']);
    $inst = limpiarDatosInicio($_POST['inst']);
    $doctor = limpiarDatosInicio($_POST['doctor']);

    if (empty($fechados)) {
        $fechados = $fecha;
    }

    $resultado = $conexion->prepare("SELECT COUNT(*) FROM muestras WHERE tipo = :tipo OR nombre_institucion = :inst OR nombre_doctor = :doctor OR fecha BETWEEN :fecha AND :fechados");
    $resultado->execute(array(
                ':tipo' => "$tipo",
                ':inst' => "$inst",
                ':doctor' => "$doctor",
                ':fecha' => "$fecha",
                ':fechados' => "$fechados"
            ));

    $resultado = $resultado->fetchAll();
    $numeromuestrasfiltro = $resultado;
    $numeromuestrasfiltro = $numeromuestrasfiltro[0];


}



require ('../vistas/estadisticas.vista.php');

?>
