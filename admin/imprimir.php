<?php session_start();

//MODIFICAR REGISTROS

require ('config.php');
require ('../funciones.php');

comprobarSession();

$conexion = conexion($bd_config);
if (!$conexion) {
    header('location: ../error.php');
}

$id = limpiarDatos($_GET['id']);
$impresa = 'Si';

if (!$id) {
    header('location: ' . RUTA . 'admin');
}

$consulta = $conexion->prepare(
          'UPDATE muestras SET impresa = :impresa WHERE id = :id'
          );

          $consulta->execute(array(
                'impresa' => $impresa,
                'id' => $id
            ));

            header('location: ' . RUTA . 'admin');    

?>