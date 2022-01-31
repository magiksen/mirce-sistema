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
          $nombre_doctor = limpiarDatosInicio($_POST['nombre_doctor']);
          $pago = limpiarDatosInicio($_POST['pago']);
          $dolares = limpiarDatosInicio($_POST['dolares']);
          $bolivares = limpiarDatosInicio($_POST['bolivares']);
          $nombre_paciente = limpiarDatosInicio($_POST['nombre_paciente']);
          $ci_paciente = limpiarDatosInicio($_POST['ci_paciente']);
          $impresa = limpiarDatosInicio($_POST['impresa']);
          $fecha = limpiarDatosInicio($_POST['fecha']);

          $tipo_tejido = limpiarDatosInicio($_POST['tipo']);

          $daticos = obtener_cat_parent($conexion, $tipo_tejido);

          if (!$daticos) {
           $tipo = 'sin datos';
          }

          $cat_name = $daticos[0][0];

          $tipo = $cat_name;

          $cat_id = $daticos[0][1];

          $subcat_name = obtener_cat_name($conexion, $tipo_tejido);
          $subcat_name = $subcat_name[0][0];

          $tipo_tejido = $subcat_name;  
         
         $consulta = $conexion->prepare(
          'UPDATE muestras SET codigo = :codigo, nombre_institucion = :nombre_institucion, pago = :pago, dolares = :dolares, bolivares = :bolivares, nombre_paciente = :nombre_paciente, ci_paciente = :ci_paciente, tipo = :tipo, impresa = :impresa, fecha = :fecha, nombre_doctor = :nombre_doctor, tipo_tejido = :tipo_tejido WHERE id = :id'
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
                'nombre_doctor' => $nombre_doctor,
                'tipo_tejido' => $tipo_tejido,
                'id' => $id
            ));         
         
         header('location: ' . RUTA . 'admin/index.php');
} else {
    $id_articulo = id_articulo($_GET['id']);

    $tipos_muestras = cat_muestras($conexion);

    if (empty($id_articulo)) {
        header('location: ' . RUTA . 'admin');
    }

   $datos =  obtener_post_id($conexion, $id_articulo);

  //print_r($datos);

  if (!$datos) {
       header('location: ' . RUTA . 'admin/');
   }

   $datos = $datos[0];
   
   $cat_by_id = $datos[14];

   $daticos = obtener_cat_id_by_name($conexion, $cat_by_id);

   $daticos = $daticos[0][0];

} 

require ('../vistas/modificar.vista.php');

?>