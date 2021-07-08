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


require ('../vistas/estadisticas.vista.php');

?>
