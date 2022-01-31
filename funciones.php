<?php 

function conexion($bd_config){
    try {
        $conexion = new PDO('mysql:host=localhost;dbname='.$bd_config['basedatos'], $bd_config['usuario'], $bd_config['pass']);
        return $conexion;
    } catch (PDOException $e) {
        return false;
    }
}

function limpiarDatos($datos){
    $datos = trim($datos);
    $datos = stripslashes($datos);
    $datos = htmlspecialchars($datos);
    $datos = ucfirst($datos);
    return $datos;
}

function limpiarDatosInicio($datos){
    $datos = trim($datos);
    $datos = stripslashes($datos);
    $datos = htmlspecialchars($datos);
    return $datos;
}

function limpiarDatosMayus($datos){
    $datos = trim($datos);
    $datos = stripslashes($datos);
    $datos = htmlspecialchars($datos);
    $datos = strtoupper($datos);
    return $datos;
}

function limpiarDatosMinus($datos){
    $datos = trim($datos);
    $datos = stripslashes($datos);
    $datos = htmlspecialchars($datos);
    $datos = strtolower($datos);
    return $datos;
}

function comprobarSession() {
    if (!isset($_SESSION['usuario'])) {
        header('location: ' . RUTA);
    }
}

function pagina_actual() {
    return isset($_GET['p']) ? (int)$_GET['p'] : 1;
}

function obtener_datos($datos_pagina, $conexion) {
    $inicio = (pagina_actual() > 1) ? pagina_actual() * $datos_pagina - $datos_pagina : 0;
    $sentencia = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM muestras ORDER BY id DESC LIMIT $inicio, $datos_pagina");
    $sentencia->execute();
    return $sentencia->fetchAll();
}

function reporte_usuarios($conexion) {
    $sentencia = $conexion->prepare("SELECT * FROM usuarios");
    $sentencia->execute();
    return $sentencia->fetchAll();
}

function codigos_muestras($conexion) {
    $sentencia = $conexion->prepare("SELECT * FROM codigos");
    $sentencia->execute();
    return $sentencia->fetchAll();
}

function cat_muestras($conexion) {
    $sentencia = $conexion->prepare("SELECT * FROM categorias");
    $sentencia->execute();
    return $sentencia->fetchAll();
}

function obtener_cat_id($conexion, $id) {
    $resultado = $conexion->prepare("SELECT * FROM categorias WHERE id = $id LIMIT 1");
    $resultado->execute();
    $resultado = $resultado->fetchAll();
    return ($resultado) ? $resultado : false;
}

function obtener_cat_parent($conexion, $id) {
    $resultado = $conexion->prepare("SELECT cat_padre, id FROM categorias WHERE id = $id LIMIT 1");
    $resultado->execute();
    $resultado = $resultado->fetchAll();
    return ($resultado) ? $resultado : false;
}

function obtener_cat_id_by_name($conexion, $name) {
    $resultado = $conexion->prepare("SELECT id FROM categorias WHERE nombre LIKE :busqueda LIMIT 1");
    $resultado->execute(array(':busqueda' => "%$name%"));
    $resultado = $resultado->fetchAll();
    return ($resultado) ? $resultado : false;
}

function obtener_cat_name($conexion, $id) {
    $resultado = $conexion->prepare("SELECT nombre FROM categorias WHERE id = $id LIMIT 1");
    $resultado->execute();
    $resultado = $resultado->fetchAll();
    return ($resultado) ? $resultado : false;
}

function obtener_cat_code($conexion, $id) {
    $resultado = $conexion->prepare("SELECT codigo FROM categorias WHERE id = $id LIMIT 1");
    $resultado->execute();
    $resultado = $resultado->fetchAll();
    return ($resultado) ? $resultado : false;
}

function reporte_usuarios_id($conexion, $id) {
    $resultado = $conexion->prepare("SELECT * FROM usuarios WHERE id = $id LIMIT 1");
    $resultado->execute();
    $resultado = $resultado->fetchAll();
    return ($resultado) ? $resultado : false;
}

function id_articulo($id) {
    return (int)limpiarDatos($id);
}

function obtener_post_id($conexion, $id) {
    $resultado = $conexion->prepare("SELECT * FROM muestras WHERE id = $id LIMIT 1");
    $resultado->execute();
    $resultado = $resultado->fetchAll();
    return ($resultado) ? $resultado : false;
}

function numero_paginas($datos_pagina, $conexion) {
    $total_posts = $conexion->prepare('SELECT FOUND_ROWS() as total');
    $total_posts->execute();
    $total_posts = $total_posts->fetch()['total'];
    $numero_paginas = ceil($total_posts / $datos_pagina);
    return $numero_paginas;
}

function fecha($fecha) {
    $timestamp = strtotime($fecha);
    $meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembe', 'Octubre', 'Noviembre', 'Diciembre'];
    $dia = date('d', $timestamp);
    $mes = date('m', $timestamp);
    $year = date('Y', $timestamp);
    $fecha = "$dia/".$mes."/$year";
    return $fecha;
}

function numeromuestras($conexion) {
    $resultado = $conexion->prepare("SELECT COUNT(*) FROM muestras");
    $resultado->execute();
    $resultado = $resultado->fetchAll();
    return ($resultado) ? $resultado : false;
}

function numerodecadamuestra($conexion, $tipo) {
    $resultado = $conexion->prepare("SELECT COUNT(*) FROM muestras WHERE tipo LIKE :busqueda LIMIT 1");
    $resultado->execute(array(':busqueda' => "%$tipo%"));
    $resultado = $resultado->fetchAll();
    return ($resultado) ? $resultado : false;
}

function traer_item_inst($conexion) {
    $sentencia = $conexion->prepare("SELECT DISTINCT nombre_institucion FROM muestras");
    $sentencia->execute();
    return $sentencia->fetchAll();
}

function traer_item_doctor($conexion) {
    $sentencia = $conexion->prepare("SELECT DISTINCT nombre_doctor FROM muestras");
    $sentencia->execute();
    return $sentencia->fetchAll();
}

?>