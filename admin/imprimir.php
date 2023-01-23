<?php session_start();

//MODIFICAR REGISTROS

require ('config.php');
require ('../funciones.php');

comprobarSession();

$conexion = conexion($bd_config);
if (!$conexion) {
    header('location: ../error.php');
}

$id = limpiarDatosInicio($_GET['id']);
$imp = limpiarDatosInicio($_GET['imp']);
$impresa = 'Si';
$noImpresa = 'No';

if (!$id) {
    header('location: ' . RUTA . 'admin');
}

if ($imp == "no") {
    $consulta = $conexion->prepare(
        'UPDATE muestras SET impresa = :impresa WHERE id = :id'
        );

        $consulta->execute(array(
              'impresa' => $impresa,
              'id' => $id
          ));

          header('location: ' . RUTA . 'admin'); 
} else {
    $consulta = $conexion->prepare(
        'UPDATE muestras SET impresa = :impresa WHERE id = :id'
        );

        $consulta->execute(array(
              'impresa' => $noImpresa,
              'id' => $id
          ));

          header('location: ' . RUTA . 'admin'); 
}

?>