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
          $nombre = limpiarDatosInicio($_POST['nombre']);
          $codigo = limpiarDatosInicio($_POST['codigo']);
          $cat_padre = limpiarDatosInicio($_POST['cat_padre']);

          
         
         $consulta = $conexion->prepare(
          'INSERT INTO categorias (id, nombre, codigo, cat_padre)
          VALUES (null, :nombre, :codigo, :cat_padre)'
          );

          $consulta->execute(array(
                'nombre' => $nombre,
                'codigo' => $codigo,
                'cat_padre' => $cat_padre
            ));

        $titulo = 'Muestra registrada correctamente';         
         
         header('location: ' . RUTA . 'admin/cat_muestras.php');
} else {
    
   $datos = cat_muestras($conexion);

    //print_r($datos);

  if (!$datos) {
       header('location: ' . RUTA . 'admin/');
   }

 

} 

require ('../vistas/cat_muestras.vista.php');

?>