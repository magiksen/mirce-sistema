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

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          //$codigo = limpiarDatosInicio($_POST['codigo']);
          $nombre_institucion = limpiarDatosInicio($_POST['nombre_institucion']);
          $pago = limpiarDatosInicio($_POST['pago']);
          $dolares = limpiarDatosInicio($_POST['dolares']);
          $bolivares = limpiarDatosInicio($_POST['bolivares']);
          $nombre_paciente = limpiarDatosInicio($_POST['nombre_paciente']);
          $ci_paciente = limpiarDatosInicio($_POST['ci_paciente']);
          $tipo = limpiarDatosInicio($_POST['tipo']);
          $impresa = limpiarDatosInicio($_POST['impresa']);
          $fecha = limpiarDatosInicio($_POST['fecha']);

          $codigo_biopsia = $datos['biopsias'];
          $codigo_citologia = $datos['citologias'];
          $codigo_autopsia = $datos['autopsias'];

          if ($tipo == 'Biopsia') {
              $codigo = $codigo_biopsia + 1;
              $id = 1;
              $actualizar_codigos = $conexion->prepare(
                  'UPDATE codigos SET biopsias = :biopsias WHERE id = :id'
              );

              $actualizar_codigos  ->execute(array(
                  'biopsias' => $codigo,
                  'id' => $id
              ));
          } elseif ($tipo == 'Citologia') {
              $codigo = $codigo_citologia + 1;
              $id = 1;
              $actualizar_codigos = $conexion->prepare(
                  'UPDATE codigos SET citologias = :citologias WHERE id = :id'
              );

              $actualizar_codigos  ->execute(array(
                  'citologias' => $codigo,
                  'id' => $id
              ));
          } else {
              $codigo = $codigo_autopsia + 1;
              $id = 1;
              $actualizar_codigos = $conexion->prepare(
                  'UPDATE codigos SET autopsias = :autopsias WHERE id = :id'
              );

              $actualizar_codigos  ->execute(array(
                  'autopsias' => $codigo,
                  'id' => $id
              ));
          }

         $consulta = $conexion->prepare(
          'INSERT INTO muestras (id, codigo, nombre_institucion, pago, dolares, bolivares, nombre_paciente, ci_paciente, tipo, impresa, fecha)
          VALUES (null, :codigo, :nombre_institucion, :pago, :dolares, :bolivares, :nombre_paciente, :ci_paciente, :tipo, :impresa, :fecha)'
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
                'fecha' => $fecha
            ));


    header('location: ' . RUTA . 'admin/index.php');
} 

require ('../vistas/registrar.vista.php');

?>