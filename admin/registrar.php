<?php session_start();

require ('config.php');
require ('../funciones.php');

comprobarSession(); 

$conexion = conexion($bd_config);
if (!$conexion) {
    header('location: ../error.php');
}

$datos = codigos_muestras($conexion);
$datos = $datos[0];

$tipos_muestras = cat_muestras($conexion);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          $codigo = limpiarDatosInicio($_POST['codigo']);
          $nombre_institucion = limpiarDatos($_POST['nombre_institucion']);
          $pago = limpiarDatos($_POST['pago']);
          $dolares = limpiarDatosInicio($_POST['dolares']);
          $bolivares = limpiarDatosInicio($_POST['bolivares']);
          $nombre_paciente = limpiarDatos($_POST['nombre_paciente']);
          $nombre_doctor = limpiarDatos($_POST['nombre_doctor']);
          $ci_paciente = limpiarDatosInicio($_POST['ci_paciente']);
          $edad_paciente = limpiarDatosInicio($_POST['edad_paciente']);
          $tipo_tejido = limpiarDatosInicio($_POST['tipo']);

          $daticos = obtener_cat_parent($conexion, $tipo_tejido);

          if (!$daticos) {
           $tipo = 'sin datos';
          }

          $cat_name = $daticos[0][0];

          $tipo = $cat_name;

          $get_cat_id = obtener_cat_parent_id($conexion, $cat_name);

          $cat_id = $get_cat_id[0][0];

          $subcat_name = obtener_cat_name($conexion, $tipo_tejido);
          $subcat_name = $subcat_name[0][0];

          $tipo_tejido = $subcat_name;

          $impresa = limpiarDatosInicio($_POST['impresa']);
          $fecha = limpiarDatosInicio($_POST['fecha']);

          $twoYear = date("y");

        //   $cat_code = obtener_cat_code($conexion, $cat_id);
        //   $cat_code = $cat_code[0][0];

        //   $cat_code = $cat_code + 1;

        //   $actualizar_codigos = $conexion->prepare(
        //           'UPDATE categorias SET codigo = :codigo WHERE id = :id'
        //       );

        //   $actualizar_codigos  ->execute(array(
        //           'codigo' => $cat_code,
        //           'id' => $cat_id
        //       ));


          
        //   $codigo = $cat_code. '-'.$twoYear;
 

         $consulta = $conexion->prepare(
          'INSERT INTO muestras (id, codigo, nombre_institucion, pago, dolares, bolivares, nombre_paciente, ci_paciente, edad_paciente, tipo, impresa, fecha, nombre_doctor, tipo_tejido)
          VALUES (null, :codigo, :nombre_institucion, :pago, :dolares, :bolivares, :nombre_paciente, :ci_paciente, :edad_paciente, :tipo, :impresa, :fecha, :nombre_doctor, :tipo_tejido)'
          );

          $consulta->execute(array(
                'codigo' => $codigo,
                'nombre_institucion' => $nombre_institucion,
                'pago' => $pago,
                'dolares' => $dolares,
                'bolivares' => $bolivares,
                'nombre_paciente' => $nombre_paciente,
                'ci_paciente' => $ci_paciente,
                'edad_paciente' => $edad_paciente,
                'tipo' => $tipo,
                'impresa' => $impresa,
                'fecha' => $fecha,
                'nombre_doctor' => $nombre_doctor,
                'tipo_tejido' => $tipo_tejido
            ));

        $titulo = 'Muestra registrada correctamente';

    header('location: ' . RUTA . 'admin/index.php');
} 

require ('../vistas/registrar.vista.php');

?>