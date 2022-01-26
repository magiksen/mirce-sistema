<?php session_start();

// Archivo index del ADMIN

require ('config.php');
require ('../funciones.php');

comprobarSession();

$conexion = conexion($bd_config);

if (!$conexion) {
    header('location: ../error.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          $id = 1;  
          $biopsias = limpiarDatosInicio($_POST['biopsias']);
          $citologias = limpiarDatosInicio($_POST['citologias']);
          $autopsias = limpiarDatosInicio($_POST['autopsias']);

          
         
         $consulta = $conexion->prepare(
          'UPDATE codigos SET biopsias = :biopsias, citologias = :citologias, autopsias = :autopsias WHERE id = :id'
          );

          $consulta->execute(array(
                'biopsias' => $biopsias,
                'citologias' => $citologias,
                'autopsias' => $autopsias,
                'id' => $id
            ));         
         
         header('location: ' . RUTA . 'admin/opciones.php');
} else {
    
   $datos = codigos_muestras($conexion);

    //print_r($datos);

  if (!$datos) {
       header('location: ' . RUTA . 'admin/');
   }

   $datos = $datos[0];

    $codigo_biopsia = $datos['biopsias'];
    $codigo_citologia = $datos['citologias'];
    $codigo_autopsia = $datos['autopsias']; 

} 

require ('../vistas/opciones.vista.php');

?>