<?php session_start();

//ELIMINAR USUARIOS

require ('config.php');
require ('../funciones.php');

comprobarSession();

$conexion = conexion($bd_config);
if (!$conexion) {
    header('location: ../error.php');
}

$id = limpiarDatos($_GET['id']);

if (!$id) {
    header('location: ' . RUTA . 'admin');
}

$consulta = $conexion->prepare('DELETE FROM usuarios WHERE id = :id');
$consulta->execute(array('id' => $id));

header('location: ' . RUTA . 'admin');

?>