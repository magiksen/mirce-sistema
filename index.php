<?php session_start();

require ('admin/config.php');
require ('funciones.php');



$conexion = conexion($bd_config);
if (!$conexion) {
    header('location: error.php');
}

$titulo = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = limpiarDatosInicio($_POST['usuario']);
    $contraseña = limpiarDatosInicio($_POST['contraseña']);
    $contraseña = hash('sha512', $contraseña);
    $stmt = $conexion->prepare('
        SELECT * FROM usuarios WHERE usuario = :usuario AND pass = :pass
    ');
    $stmt->execute(array(
        ':usuario' => $usuario,
        ':pass' => $contraseña
    ));
    $resultado = $stmt->fetch();
    $nameuser = $resultado['usuario'] ?? 'default';
    $nombre = $resultado['nombre'] ?? 'default';
    $apellido = $resultado['apellido'] ?? 'default';
    $ci = $resultado['ci'] ?? 'default';
    $departamento = $resultado['departamento'] ?? 'default';
    $pass = $resultado['pass'] ?? 'default';
    $tipo = $resultado['tipo'] ?? 'default';
    $id = $resultado['id'] ?? 'default';
   
    if ($usuario == $nameuser && $contraseña == $pass) {
        $_SESSION['usuario'] = $nameuser;
        $_SESSION['nombre'] = $nombre;
        $_SESSION['apellido'] = $apellido;
        $_SESSION['ci'] = $ci;
        $_SESSION['departamento'] = $departamento;
        $_SESSION['pass'] = $pass;
        $_SESSION['tipo'] = $tipo;
        $_SESSION['id'] = $id;
        header('location: ' . RUTA . 'admin');
    }  else {
        $titulo = 'Usuario o Contraseña incorrecto.';
        
    }
} 

require ('vistas/index.vista.php');

?>