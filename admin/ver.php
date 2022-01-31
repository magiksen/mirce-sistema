<?php session_start();

//MODIFICAR REGISTROS

require ('config.php');
require ('../funciones.php');

comprobarSession();

$conexion = conexion($bd_config);
if (!$conexion) {
    header('location: ../error.php');
}

    $id_articulo = id_articulo($_GET['id']);

    if (empty($id_articulo)) {
        header('location: ' . RUTA . 'admin');
    }

    $datos =  obtener_post_id($conexion, $id_articulo);

    //print_r($datos);

    if (!$datos) {
        header('location: ' . RUTA . 'admin/');
    }

    $datos = $datos[0];



require ('../vistas/ver.vista.php');

?>
