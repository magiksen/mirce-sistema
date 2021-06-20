<?php session_start();

//MODIFICAR USUARIOS

require ('config.php');
require ('../funciones.php');

comprobarSession();

$conexion = conexion($bd_config);
if (!$conexion) {
    header('location: ../error.php');
}



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          $id = $_POST['id'];  
          $ci = limpiarDatosInicio($_POST['ci']);
          $nombre = limpiarDatos($_POST['nombre']);
          $apellido = limpiarDatos($_POST['apellido']);
          $usuario = limpiarDatosMinus($_POST['usuario']);
          $departamento = limpiarDatos($_POST['departamento']);
          $tipo = limpiarDatosInicio($_POST['tipo']);
          $pass = limpiarDatosInicio($_POST['pass']);
         
         if (!empty($_POST['pass'])) {

                $pass = hash('sha512', $pass); 
                $consulta = $conexion->prepare(
                'UPDATE usuarios SET ci = :ci, nombre = :nombre, apellido = :apellido, usuario = :usuario, departamento = :departamento, tipo = :tipo, pass = :pass WHERE id = :id'
                );

                $consulta->execute(array(
                    'ci' => $ci,
                    'nombre' => $nombre,
                    'apellido' => $apellido,
                    'usuario' => $usuario,
                    'departamento' => $departamento,
                    'tipo' => $tipo,
                    'pass' => $pass,
                    'id' => $id
                ));
                header('location: ' . RUTA . 'admin/index.php');
         } else {
                $consulta = $conexion->prepare(
                'UPDATE usuarios SET ci = :ci, nombre = :nombre, apellido = :apellido, usuario = :usuario, departamento = :departamento, tipo = :tipo WHERE id = :id'
                );

                $consulta->execute(array(
                'ci' => $ci,
                'nombre' => $nombre,
                'apellido' => $apellido,
                'usuario' => $usuario,
                'departamento' => $departamento,
                'tipo' => $tipo,
                'id' => $id
            ));
            header('location: ' . RUTA . 'admin/index.php');
         }
         
} else {
    $id_articulo = id_articulo($_GET['id']);

    if (empty($id_articulo)) {
        header('location: ' . RUTA . 'admin');
    }

    $datos =  reporte_usuarios_id($conexion, $id_articulo);

    //print_r($datos);

    if (!$datos) {
        header('location: ' . RUTA . 'admin/');
    }

    $datos = $datos[0]; 

} 

require ('../vistas/edituser.vista.php');

?>