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
// traer numero de citologias
$numerocitologias = numerocitologias($conexion);
$numerocitologias = $numerocitologias[0];
// traer numero de biopsias
$numerobiopsias = numerobiopsias($conexion);
$numerobiopsias = $numerobiopsias[0];
// traer numero de Autopsias
$numeroautopsia = numeroautopsia($conexion);
$numeroautopsia = $numeroautopsia[0];

//$date = date('d-m-Y');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fecha = limpiarDatosInicio($_POST['fecha']);
    $fechados = limpiarDatosInicio($_POST['fechados']);
    $tipo = limpiarDatosInicio($_POST['tipo']);

    if (empty($fechados)) {
        $fechados = $fecha;
    }

    if ($tipo == 'Todas') {
        $resultado = $conexion->prepare("SELECT COUNT(*) FROM muestras WHERE fecha BETWEEN :fecha AND :fechados ");
        $resultado->execute(array(
            ':fecha' => "$fecha",
            ':fechados' => "$fechados"
        ));

    } else {
        $resultado = $conexion->prepare("SELECT COUNT(*) FROM muestras WHERE tipo = :tipo AND fecha BETWEEN :fecha AND :fechados ");
        $resultado->execute(array(
            ':tipo' => "$tipo",
            ':fecha' => "$fecha",
            ':fechados' => "$fechados"
        ));

    }
    $resultado = $resultado->fetchAll();
    $numeromuestrasfiltro = $resultado;
    $numeromuestrasfiltro = $numeromuestrasfiltro[0];


}



require ('../vistas/estadisticas.vista.php');

?>
