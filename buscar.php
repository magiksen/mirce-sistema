<?php session_start();
require ('admin/config.php');
require ('funciones.php');

comprobarSession();

$conexion = conexion($bd_config);

if (!$conexion) {
    header('location: error.php');
}

$opciones = obtener_opciones($conexion);
$opciones = $opciones[0];
$iva = $opciones['iva'];
$precio = $opciones['precio'];

if ($_SESSION['tipo'] == 'super') {
    if ($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET['busqueda'])) {
        $busqueda = limpiarDatosMinus($_GET['busqueda']);

        $stament = $conexion->prepare(
            'SELECT * FROM usuarios WHERE nombre LIKE :busqueda OR apellido LIKE :busqueda OR usuario LIKE :busqueda OR ci LIKE :busqueda OR departamento LIKE :busqueda OR tipo LIKE :busqueda'
        );
        $stament->execute(array(':busqueda' => "%$busqueda%"));
        $resultados = $stament->fetchAll();

        if (empty($resultados)) {
            $titulo = 'No se encontraron resultados: ' . $busqueda;
        } else {
            $titulo = 'Resultados de la consulta: ' . $busqueda;
        }
    
    } else {
    header('location: ' . RUTA . 'error.php');
    }

} else {
    if ($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET['busqueda'])) {
        $busqueda = limpiarDatosMinus($_GET['busqueda']);

        $stament = $conexion->prepare(
            'SELECT * FROM muestras WHERE nombre_institucion LIKE :busqueda OR nombre_paciente LIKE :busqueda OR ci_paciente LIKE :busqueda OR codigo LIKE :busqueda OR tipo LIKE :busqueda OR fecha LIKE :busqueda'
        );
        $stament->execute(array(':busqueda' => "%$busqueda%"));
        $resultados = $stament->fetchAll();

        if (empty($resultados)) {
            $titulo = 'No se encontraron resultados: ' . $busqueda;
        } else {
            $titulo = 'Resultados de la consulta: ' . $busqueda;
        }
    
    } else {
    header('location: ' . RUTA . 'error.php');
    }
}




require ('vistas/buscar.vista.php');

?>