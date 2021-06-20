<?php session_start();

//REGISTRAR USUARIOS

require ('config.php');
require ('../funciones.php');

comprobarSession();

$conexion = conexion($bd_config);
if (!$conexion) {
    header('location: ../error.php');
}

$errores = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          $ci = limpiarDatosInicio($_POST['ci']);
          $nombre = limpiarDatos($_POST['nombre']);
          $apellido = limpiarDatos($_POST['apellido']);
          $usuario = limpiarDatosMinus($_POST['usuario']);
          $departamento = limpiarDatos($_POST['departamento']);
          $tipo = limpiarDatosInicio($_POST['tipo']);
          $pass = limpiarDatosInicio($_POST['pass']);
          //$pass = hash('sha512', $pass);
         
         $sentencia = $conexion->prepare('SELECT * FROM usuarios WHERE usuario = :usuario LIMIT 1');
         $sentencia->execute(array(
                'usuario' => $usuario
            ));
         $resultado = $sentencia->fetch();

         $operacion = $conexion->prepare('SELECT * FROM usuarios WHERE ci = :ci LIMIT 1');
         $operacion->execute(array(
                'ci' => $ci
            ));
         $resultadoDos = $operacion->fetch();   
         
         if ($resultado != false && $resultadoDos !=false ) {
             $errores .= '<strong>El nombre de Usuario y Cedula ya existen</strong>';
         } elseif ($resultado != false) {
             $errores .= '<strong>El nombre de Usuario ya existe</strong>';
         } elseif ($resultadoDos != false) {
             $errores .= '<strong>La Cedula de Identidad ya esta registrada</strong>';
         } elseif (strlen($pass) < 8) {
             $errores .= '<strong>"La contraseña debe tener al menos 8 caracteres"</strong>';
         } elseif (strlen($pass) > 16) {
             $errores .= '<strong>"La contraseña no debe ser mayor de 16 caracteres"</strong>';
         } else {
                $pass = hash('sha512', $pass);
                $consulta = $conexion->prepare(
                'INSERT INTO usuarios (id, usuario, nombre, apellido, ci, departamento, pass, tipo)
                VALUES (null, :usuario, :nombre, :apellido, :ci, :departamento, :pass, :tipo)'
                );

                $consulta->execute(array(
                        'usuario' => $usuario,
                        'nombre' => $nombre,
                        'apellido' => $apellido,
                        'ci' => $ci,
                        'departamento' => $departamento,
                        'pass' => $pass,
                        'tipo' => $tipo
                    ));         
         
         header('location: ' . RUTA . 'admin/index.php');
         }
} 

require ('../vistas/reguser.vista.php');

?>