<?php session_start();

//MODIFICAR REGISTROS

require ('config.php');
require ('../funciones.php');

comprobarSession();

$conexion = conexion($bd_config);
if (!$conexion) {
    header('location: ../error.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $bloque = limpiarDatosInicio($_POST['bloque']);
    $lamina = limpiarDatosInicio($_POST['lamina']);

    $consulta = $conexion->prepare(
        'UPDATE muestras SET bloque = :bloque, lamina = :lamina WHERE id = :id'
    );

    $consulta->execute(array(
        'bloque' => $bloque,
        'lamina' => $lamina,
        'id' => $id
    ));

    header('location: ' . RUTA . 'admin/index.php');
} else {
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

}

require ('../vistas/reglamina.vista.php');

?>
