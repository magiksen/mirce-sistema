<?php session_start();

// Archivo index del ADMIN

require ('config.php');
require ('../funciones.php');
require '../vendor/autoload.php';

comprobarSession();

$conexion = conexion($bd_config);

if (!$conexion) {
    header('location: ../error.php');
}

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$datos = obtener_muestras($conexion);

$spread = new Spreadsheet();
$spread
    ->getProperties()
    ->setCreator("Mircelab")
    ->setTitle('Muestras');

$hojaDeMuestras = $spread->getActiveSheet();
$hojaDeMuestras->setTitle("Muestras");

# Encabezado de loas muestras
$encabezado = ["Codigo", "Nombre Institución", "Nombre doctor/ra", "Pago", "Nombre Paciente", "Cédula Paciente", "Edad", "Tipo de Muestra", "Fecha"];
# El último argumento es por defecto A1
$hojaDeMuestras->fromArray($encabezado, null, 'A1');
$hojaDeMuestras->getColumnDimension('A')->setAutoSize(true);
$hojaDeMuestras->getColumnDimension('B')->setAutoSize(true);
$hojaDeMuestras->getColumnDimension('C')->setAutoSize(true);
$hojaDeMuestras->getColumnDimension('D')->setAutoSize(true);
$hojaDeMuestras->getColumnDimension('E')->setAutoSize(true);
$hojaDeMuestras->getColumnDimension('F')->setAutoSize(true);
$hojaDeMuestras->getColumnDimension('G')->setAutoSize(true);
$hojaDeMuestras->getColumnDimension('I')->setAutoSize(true);

# Comenzamos en la fila 2
$row = 2;
foreach ($datos as $muestra) {
    $hojaDeMuestras->setCellValue("A{$row}", $muestra['codigo']);
    $hojaDeMuestras->setCellValue("B{$row}", $muestra['nombre_institucion']);
    $hojaDeMuestras->setCellValue("C{$row}", $muestra['nombre_doctor']);
    $hojaDeMuestras->setCellValue("D{$row}", $muestra['pago']);
    $hojaDeMuestras->setCellValue("E{$row}", $muestra['nombre_paciente']);
    $hojaDeMuestras->setCellValue("F{$row}", $muestra['ci_paciente']);
    $hojaDeMuestras->setCellValue("G{$row}", $muestra['edad_paciente']);
    $hojaDeMuestras->setCellValue("H{$row}", $muestra['tipo']);
    $hojaDeMuestras->setCellValue("I{$row}", $muestra['fecha']);
    $row ++;
}

$hora = date("d-m-Y");
$hora = $hora."-".rand(1,100);

$fileName="Muestras_".$hora.".xlsx";
# Crear un "escritor"
$writer = new Xlsx($spread);
# Le pasamos la ruta de guardado

header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment; filename="'. urlencode($fileName).'"');
$writer->save('php://output');

header('location: ' . RUTA . 'admin/index.php');