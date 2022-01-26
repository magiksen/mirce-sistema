<?php session_start();

// Archivo index del ADMIN

require ('config.php');
require ('../funciones.php');

comprobarSession();

$conexion = conexion($bd_config);

if (!$conexion) {
    header('location: ../error.php');
}



require ('../vistas/administracion.vista.php');

?>