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
    $datos = obtener_datos($blog_config['datos_pagina'], $conexion);

    if (!$datos) {
        header('location: ../error.php');
    }
}


require ('../vistas/admin_index.vista.php');

?>