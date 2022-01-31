<?php session_start();

//MODIFICAR REGISTROS

require ('config.php');
require ('../funciones.php');

comprobarSession();

$conexion = conexion($bd_config);
if (!$conexion) {
    header('location: ../error.php');
}

$tipos_muestras = cat_muestras($conexion);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          $id = $_POST['id'];  
          $nombre = limpiarDatosInicio($_POST['nombre']);
          $codigo = limpiarDatosInicio($_POST['codigo']);
          $cat_padre = limpiarDatosInicio($_POST['cat_padre']);
         
         $consulta = $conexion->prepare(
          'UPDATE categorias SET codigo = :codigo, nombre = :nombre, cat_padre = :cat_padre WHERE id = :id'
          );

          $consulta->execute(array(
                'codigo' => $codigo,
                'nombre' => $nombre,
                'cat_padre' => $cat_padre,
                'id' => $id
            ));         
         
         header('location: ' . RUTA . 'admin/cat_muestras.php');
} else {
    $id_articulo = id_articulo($_GET['id']);

    if (empty($id_articulo)) {
        header('location: ' . RUTA . 'admin');
    }

   $datos =  obtener_cat_id($conexion, $id_articulo);

  //print_r($datos);

  if (!$datos) {
       header('location: ' . RUTA . 'admin/cat_muestras.php');
   }

   $datos = $datos[0]; 

} 

require ('../vistas/editcat.vista.php');

?>