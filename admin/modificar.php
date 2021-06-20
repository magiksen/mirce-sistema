<?php session_start();

//MODIFICAR REGISTROS

require ('config.php');
require ('../funciones.php');

comprobarSession();

$conexion = conexion($bd_config);
if (!$conexion) {
    header('location: ../error.php');
}

$opciones = obtener_opciones($conexion);
$opciones = $opciones[0];
$precio = $opciones['precio'];
$iva = $opciones['iva'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          $id = $_POST['id'];  
          $codigo = limpiarDatosMayus($_POST['codigo']);
          $peso1 = limpiarDatosInicio($_POST['peso1']);
          $peso2 = limpiarDatosInicio($_POST['peso2']);
          $peso3 = limpiarDatosInicio($_POST['peso3']);
          $longitud1 = limpiarDatosInicio($_POST['longitud1']);
          $longitud2 = limpiarDatosInicio($_POST['longitud2']); 
          $longitud3 = limpiarDatosInicio($_POST['longitud3']); 
          $camisa = limpiarDatosInicio($_POST['camisa']);
          $tapa = limpiarDatosInicio($_POST['tapa']);
          $junta1 = limpiarDatosInicio($_POST['junta1']); 
          $junta2 = limpiarDatosInicio($_POST['junta2']);
          $junta3 = limpiarDatosInicio($_POST['junta3']);
          $usuario = $_SESSION['usuario'];  

         $peso_d1 = $peso1 * $longitud1;
         $peso_d2 = $peso2 * $longitud2;
         $peso_d3 = $peso3 * $longitud3;
         $peso_total = $peso_d1 + $peso_d2 + $peso_d3 + $tapa + $camisa;
         $longitud_total = $longitud1 + $longitud2 + $longitud3 + $junta1 + $junta2 + $junta3;
         if (!empty($peso_total) && !empty($longitud_total)) {
         $kg_mts = $peso_total / $longitud_total;
         $kg_mts = round($kg_mts * 100) / 100;
         $peso_total = round($peso_total * 100) / 100;
         $precio_venta = $precio * $kg_mts;
         $precio_venta = round($precio_venta * 100) / 100;
         $precio_iva = $precio_venta * $iva / 100;
         $precio_iva = round($precio_iva * 100) / 100;
         $precio_final = $precio_venta + $precio_iva;
         $precio_final = round($precio_final * 100) / 100;
         }
         
         $consulta = $conexion->prepare(
          'UPDATE postes SET codigo = :codigo, peso_t1 = :peso_t1, peso_t2 = :peso_t2, peso_t3 = :peso_t3, long_t1 = :long_t1, long_t2 = :long_t2, long_t3 = :long_t3, camisa = :camisa, tapa = :tapa, junta1 = :junta1, junta2 = :junta2, junta3 = :junta3, peso_total = :peso_total, long_total = :long_total, kg_mts = :kg_mts, precio_venta = :precio_venta, precio_iva = :precio_iva, precio_final = :precio_final, n_usuario = :n_usuario WHERE id = :id'
          );

          $consulta->execute(array(
                'codigo' => $codigo,
                'peso_t1' => $peso1,
                'peso_t2' => $peso2,
                'peso_t3' => $peso3,
                'long_t1' => $longitud1,
                'long_t2' => $longitud2,
                'long_t3' => $longitud3,
                'camisa' => $camisa,
                'tapa' => $tapa,
                'junta1' => $junta1,
                'junta2' => $junta2,
                'junta3' => $junta3,
                'peso_total' => $peso_total,
                'long_total' => $longitud_total,
                'kg_mts' => $kg_mts,
                'precio_venta' => $precio_venta,
                'precio_iva' => $precio_iva,
                'precio_final' => $precio_final,
                'n_usuario' => $usuario,
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