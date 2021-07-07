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
          $codigo = limpiarDatosInicio($_POST['codigo']);
          $nombre_institucion = limpiarDatosInicio($_POST['nombre_institucion']);
          $pago = limpiarDatosInicio($_POST['pago']);
          $dolares = limpiarDatosInicio($_POST['dolares']);
          $bolivares = limpiarDatosInicio($_POST['bolivares']);
          $nombre_paciente = limpiarDatosInicio($_POST['nombre_paciente']);
          $ci_paciente = limpiarDatosInicio($_POST['ci_paciente']);
          $tipo = limpiarDatosInicio($_POST['tipo']);
          $impresa = limpiarDatosInicio($_POST['impresa']);
          $fecha = limpiarDatosInicio($_POST['fecha']);  
         
         $consulta = $conexion->prepare(
          'UPDATE muestras SET codigo = :codigo, nombre_institucion = :nombre_institucion, pago = :pago, dolares = :dolares, bolivares = :bolivares, nombre_paciente = :nombre_paciente, ci_paciente = :ci_paciente, tipo = :tipo, impresa = :impresa, fecha = :fecha WHERE id = :id'
          );

          $consulta->execute(array(
                'codigo' => $codigo,
                'nombre_institucion' => $nombre_institucion,
                'pago' => $pago,
                'dolares' => $dolares,
                'bolivares' => $bolivares,
                'nombre_paciente' => $nombre_paciente,
                'ci_paciente' => $ci_paciente,
                'tipo' => $tipo,
                'impresa' => $impresa,
                'fecha' => $fecha,
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

require ('../vistas/modificar.vista.php');

?>