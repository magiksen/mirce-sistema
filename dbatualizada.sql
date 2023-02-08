-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.22-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Volcando estructura para tabla mircelab.categorias
CREATE TABLE IF NOT EXISTS categorias (
  id int(11) NOT NULL AUTO_INCREMENT,
  nombre varchar(50) NOT NULL,
  codigo int(11) NOT NULL,
  cat_padre varchar(50) DEFAULT NULL,
  cat_hijos int(11) DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla mircelab.categorias: ~3 rows (aproximadamente)
DELETE FROM categorias;
/*!40000 ALTER TABLE categorias DISABLE KEYS */;
INSERT INTO categorias (id, nombre, codigo, cat_padre, cat_hijos) VALUES
	(1, 'Biopsias', 4, 'Principal', NULL);
INSERT INTO categorias (id, nombre, codigo, cat_padre, cat_hijos) VALUES
	(2, 'Citologías', 102, 'Principal', NULL);
INSERT INTO categorias (id, nombre, codigo, cat_padre, cat_hijos) VALUES
	(3, 'Subcategoría 1', 1005, 'Biposias', NULL);
/*!40000 ALTER TABLE categorias ENABLE KEYS */;

-- Volcando estructura para tabla mircelab.codigos
CREATE TABLE IF NOT EXISTS codigos (
  id int(11) NOT NULL AUTO_INCREMENT,
  biopsias int(11) DEFAULT NULL,
  citologias int(11) DEFAULT NULL,
  autopsias int(11) DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla mircelab.codigos: ~0 rows (aproximadamente)
DELETE FROM codigos;
/*!40000 ALTER TABLE codigos DISABLE KEYS */;
INSERT INTO codigos (id, biopsias, citologias, autopsias) VALUES
	(1, 3, 102, 1018);
/*!40000 ALTER TABLE codigos ENABLE KEYS */;

-- Volcando estructura para tabla mircelab.muestras
CREATE TABLE IF NOT EXISTS muestras (
  id int(11) NOT NULL AUTO_INCREMENT,
  nombre_institucion varchar(100) DEFAULT NULL,
  pago varchar(100) DEFAULT NULL,
  dolares float DEFAULT 0,
  bolivares float DEFAULT 0,
  nombre_paciente varchar(100) DEFAULT NULL,
  ci_paciente varchar(100) DEFAULT NULL,
  codigo varchar(100) DEFAULT NULL,
  tipo varchar(100) DEFAULT NULL,
  bloque varchar(100) DEFAULT NULL,
  lamina varchar(100) DEFAULT NULL,
  impresa varchar(100) DEFAULT NULL,
  fecha varchar(100) DEFAULT NULL,
  nombre_doctor varchar(100) DEFAULT NULL,
  tipo_tejido varchar(100) DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla mircelab.muestras: ~8 rows (aproximadamente)
DELETE FROM muestras;
/*!40000 ALTER TABLE muestras DISABLE KEYS */;
INSERT INTO muestras (id, nombre_institucion, pago, dolares, bolivares, nombre_paciente, ci_paciente, codigo, tipo, bloque, lamina, impresa, fecha, nombre_doctor, tipo_tejido) VALUES
	(5, 'Clinica 2', 'Sin pago', 0, 0, 'Paciente 2', '222222', '1001-22', 'Autopsias', NULL, NULL, 'No', '25-01-2022', NULL, NULL);
INSERT INTO muestras (id, nombre_institucion, pago, dolares, bolivares, nombre_paciente, ci_paciente, codigo, tipo, bloque, lamina, impresa, fecha, nombre_doctor, tipo_tejido) VALUES
	(6, 'Clinica 3', 'Sin pago', 0, 0, 'Paciente 3', '333333', '1002-22', 'Autopsias', '1-1', '1-1', 'No', '25-01-2022', NULL, NULL);
INSERT INTO muestras (id, nombre_institucion, pago, dolares, bolivares, nombre_paciente, ci_paciente, codigo, tipo, bloque, lamina, impresa, fecha, nombre_doctor, tipo_tejido) VALUES
	(7, 'Clinica 4', 'Con pago', 50, 0, 'Paciente 4', '444444', '101-22', 'Citologia', NULL, NULL, 'No', '25-01-2022', NULL, NULL);
INSERT INTO muestras (id, nombre_institucion, pago, dolares, bolivares, nombre_paciente, ci_paciente, codigo, tipo, bloque, lamina, impresa, fecha, nombre_doctor, tipo_tejido) VALUES
	(8, 'Clinica 4', 'Con pago', 0, 500, 'Paciente 5', '5555555', '2-22', 'Biopsia', NULL, NULL, 'No', '25-01-2022', NULL, NULL);
INSERT INTO muestras (id, nombre_institucion, pago, dolares, bolivares, nombre_paciente, ci_paciente, codigo, tipo, bloque, lamina, impresa, fecha, nombre_doctor, tipo_tejido) VALUES
	(9, 'Clinica 4', 'Sin pago', 0, 0, 'Paciente 6', '1234567', '1004-22', 'Citologías', '1-1, 2-2, 3-3, 4-4, 5-5', '1-1, 2-2, 3-3, 4-4, 5-5', 'No', '30-01-2022', 'Doctor 1', NULL);
INSERT INTO muestras (id, nombre_institucion, pago, dolares, bolivares, nombre_paciente, ci_paciente, codigo, tipo, bloque, lamina, impresa, fecha, nombre_doctor, tipo_tejido) VALUES
	(23, '3wqewqe', 'Sin pago', 0, 0, 'wqeqw', '23432423', '1018-22', 'Biposias', NULL, NULL, 'No', '30-01-2022', 'wqeqwe4', 'Subcategoría 1');
INSERT INTO muestras (id, nombre_institucion, pago, dolares, bolivares, nombre_paciente, ci_paciente, codigo, tipo, bloque, lamina, impresa, fecha, nombre_doctor, tipo_tejido) VALUES
	(26, 'qweqwe', 'Sin pago', 0, 0, 'wqeqwe', '12312', '1004-22', 'Biposias', NULL, NULL, 'No', '30-01-2022', 'wqeqwe', 'Subcategoría 1');
INSERT INTO muestras (id, nombre_institucion, pago, dolares, bolivares, nombre_paciente, ci_paciente, codigo, tipo, bloque, lamina, impresa, fecha, nombre_doctor, tipo_tejido) VALUES
	(27, 'ytujytj', 'Sin pago', 0, 0, 'ghjgh', '4535345', '1005-22', 'Biposias', NULL, NULL, 'No', '30-01-2022', 'ghjg', 'Subcategoría 1');
/*!40000 ALTER TABLE muestras ENABLE KEYS */;

-- Volcando estructura para tabla mircelab.opciones
CREATE TABLE IF NOT EXISTS opciones (
  id int(11) NOT NULL AUTO_INCREMENT,
  precio float NOT NULL DEFAULT 0,
  iva float NOT NULL DEFAULT 0,
  PRIMARY KEY (id)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla mircelab.opciones: ~0 rows (aproximadamente)
DELETE FROM opciones;
/*!40000 ALTER TABLE opciones DISABLE KEYS */;
INSERT INTO opciones (id, precio, iva) VALUES
	(1, 10000, 12);
/*!40000 ALTER TABLE opciones ENABLE KEYS */;

-- Volcando estructura para tabla mircelab.postes
CREATE TABLE IF NOT EXISTS postes (
  id int(11) NOT NULL AUTO_INCREMENT,
  codigo varchar(100) DEFAULT NULL,
  peso_t1 float DEFAULT 0,
  peso_t2 float DEFAULT 0,
  peso_t3 float DEFAULT 0,
  long_t1 float DEFAULT 0,
  long_t2 float DEFAULT 0,
  long_t3 float DEFAULT 0,
  camisa float DEFAULT 0,
  tapa float DEFAULT 0,
  junta1 float DEFAULT NULL,
  junta2 float DEFAULT NULL,
  junta3 float DEFAULT NULL,
  peso_total float DEFAULT 0,
  long_total float DEFAULT 0,
  kg_mts float DEFAULT 0,
  precio_venta float DEFAULT NULL,
  precio_iva float DEFAULT NULL,
  precio_final float DEFAULT NULL,
  n_usuario varchar(100) DEFAULT NULL,
  fecha timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (id),
  UNIQUE KEY codigo (codigo)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla mircelab.postes: ~15 rows (aproximadamente)
DELETE FROM postes;
/*!40000 ALTER TABLE postes DISABLE KEYS */;
INSERT INTO postes (id, codigo, peso_t1, peso_t2, peso_t3, long_t1, long_t2, long_t3, camisa, tapa, junta1, junta2, junta3, peso_total, long_total, kg_mts, precio_venta, precio_iva, precio_final, n_usuario, fecha) VALUES
	(1, 'PCI1701A', 50, 100, 150, 25, 40, 60, 10, 5, 0, 0, 0, 14265, 125, 114.12, 1141200, 136944, 1278140, 'samircastro', '2017-02-15 12:46:33');
INSERT INTO postes (id, codigo, peso_t1, peso_t2, peso_t3, long_t1, long_t2, long_t3, camisa, tapa, junta1, junta2, junta3, peso_total, long_total, kg_mts, precio_venta, precio_iva, precio_final, n_usuario, fecha) VALUES
	(2, 'PCI1710A', 200, 120, 170, 10, 20, 15, 30, 10, 0, 0, 0, 6990, 45, 155.33, 1553300, 186396, 1739700, 'samircastro', '2017-02-15 12:46:33');
INSERT INTO postes (id, codigo, peso_t1, peso_t2, peso_t3, long_t1, long_t2, long_t3, camisa, tapa, junta1, junta2, junta3, peso_total, long_total, kg_mts, precio_venta, precio_iva, precio_final, n_usuario, fecha) VALUES
	(3, 'PCI1701C', 10, 15, 13, 20, 15, 12, 10, 5, 0, 0, 0, 596, 47, 12.68, 126800, 15216, 142016, 'samircastro', '2017-02-15 12:46:34');
INSERT INTO postes (id, codigo, peso_t1, peso_t2, peso_t3, long_t1, long_t2, long_t3, camisa, tapa, junta1, junta2, junta3, peso_total, long_total, kg_mts, precio_venta, precio_iva, precio_final, n_usuario, fecha) VALUES
	(5, 'PCI1620B', 10, 9, 10, 7, 6, 8, 4, 1, 0.4, 0.4, 0, 209, 21.8, 9.59, 95900, 11508, 107408, 'samircastro', '2017-02-15 12:46:34');
INSERT INTO postes (id, codigo, peso_t1, peso_t2, peso_t3, long_t1, long_t2, long_t3, camisa, tapa, junta1, junta2, junta3, peso_total, long_total, kg_mts, precio_venta, precio_iva, precio_final, n_usuario, fecha) VALUES
	(6, 'PCI1620C', 9.25, 6.52, 7.25, 11.1, 10.2, 8.1, 4.25, 1.25, 0, 0.4, 0.4, 233.4, 30.2, 7.73, 77300, 9276, 86576, 'samircastro', '2017-02-15 12:46:34');
INSERT INTO postes (id, codigo, peso_t1, peso_t2, peso_t3, long_t1, long_t2, long_t3, camisa, tapa, junta1, junta2, junta3, peso_total, long_total, kg_mts, precio_venta, precio_iva, precio_final, n_usuario, fecha) VALUES
	(7, 'PCI1620A', 10.2, 11.3, 8.9, 6.25, 7.3, 5.45, 5.56, 1.15, 0.4, 0.4, 0, 201.46, 19.8, 10.17, 101700, 12204, 113904, 'samircastro', '2017-02-15 12:46:34');
INSERT INTO postes (id, codigo, peso_t1, peso_t2, peso_t3, long_t1, long_t2, long_t3, camisa, tapa, junta1, junta2, junta3, peso_total, long_total, kg_mts, precio_venta, precio_iva, precio_final, n_usuario, fecha) VALUES
	(8, 'PCI1821A', 12, 10, 15, 5, 6, 8, 10, 1, 0, 0.4, 0.4, 251, 19.8, 12.68, 126800, 15216, 142016, 'samircastro', '2017-02-15 12:46:34');
INSERT INTO postes (id, codigo, peso_t1, peso_t2, peso_t3, long_t1, long_t2, long_t3, camisa, tapa, junta1, junta2, junta3, peso_total, long_total, kg_mts, precio_venta, precio_iva, precio_final, n_usuario, fecha) VALUES
	(9, 'PCI1821B', 4.35, 5.25, 6.35, 6.2, 6.25, 7.5, 6, 1.25, 0.4, 0.4, 0, 114.66, 20.75, 5.53, 55300, 6636, 61936, 'samircastro', '2017-02-15 12:46:34');
INSERT INTO postes (id, codigo, peso_t1, peso_t2, peso_t3, long_t1, long_t2, long_t3, camisa, tapa, junta1, junta2, junta3, peso_total, long_total, kg_mts, precio_venta, precio_iva, precio_final, n_usuario, fecha) VALUES
	(10, 'PCI1825A', 16.5, 12.35, 14.9, 8.4, 8.5, 9.6, 10.25, 2, 0, 0.4, 0.4, 398.87, 27.3, 14.61, 146100, 17532, 163632, 'samircastro', '2017-02-15 12:46:34');
INSERT INTO postes (id, codigo, peso_t1, peso_t2, peso_t3, long_t1, long_t2, long_t3, camisa, tapa, junta1, junta2, junta3, peso_total, long_total, kg_mts, precio_venta, precio_iva, precio_final, n_usuario, fecha) VALUES
	(12, 'PCI1825B', 10, 15, 20, 5, 5, 5, 2, 1, 0, 0.4, 0.4, 228, 15.8, 14.43, 144300, 17316, 161616, 'samircastro', '2017-02-15 12:46:34');
INSERT INTO postes (id, codigo, peso_t1, peso_t2, peso_t3, long_t1, long_t2, long_t3, camisa, tapa, junta1, junta2, junta3, peso_total, long_total, kg_mts, precio_venta, precio_iva, precio_final, n_usuario, fecha) VALUES
	(13, 'PCI1720D', 8, 10, 12, 4.3, 5.3, 6.3, 2.5, 1.25, 0, 0.4, 0.4, 166.75, 16.7, 9.99, 99900, 11988, 111888, 'samircastro', '2017-02-15 12:46:35');
INSERT INTO postes (id, codigo, peso_t1, peso_t2, peso_t3, long_t1, long_t2, long_t3, camisa, tapa, junta1, junta2, junta3, peso_total, long_total, kg_mts, precio_venta, precio_iva, precio_final, n_usuario, fecha) VALUES
	(14, 'PCI1721D', 5, 7, 9, 3, 5, 7, 2, 1, 0.4, 0.4, 0, 116, 15.8, 7.34, 73400, 8808, 82208, 'samircastro', '2017-02-15 12:46:35');
INSERT INTO postes (id, codigo, peso_t1, peso_t2, peso_t3, long_t1, long_t2, long_t3, camisa, tapa, junta1, junta2, junta3, peso_total, long_total, kg_mts, precio_venta, precio_iva, precio_final, n_usuario, fecha) VALUES
	(15, 'PCI1621A', 3, 5, 4, 5, 6, 4, 2, 1, 0, 0.4, 0.4, 64, 15.8, 4.05, 40500, 4860, 45360, 'samircastro', '2017-02-15 12:46:35');
INSERT INTO postes (id, codigo, peso_t1, peso_t2, peso_t3, long_t1, long_t2, long_t3, camisa, tapa, junta1, junta2, junta3, peso_total, long_total, kg_mts, precio_venta, precio_iva, precio_final, n_usuario, fecha) VALUES
	(17, 'PCI2021A', 4.3, 3.6, 3.6, 3, 2, 2, 2, 1, 0.4, 0.4, 0, 30.3, 7.8, 3.88, 38800, 4656, 43456, 'samircastro', '2017-02-15 12:46:35');
INSERT INTO postes (id, codigo, peso_t1, peso_t2, peso_t3, long_t1, long_t2, long_t3, camisa, tapa, junta1, junta2, junta3, peso_total, long_total, kg_mts, precio_venta, precio_iva, precio_final, n_usuario, fecha) VALUES
	(18, 'PCI2021B', 5, 5.6, 6, 3.4, 4, 4, 2, 1.25, 0.4, 0.4, 0, 66.65, 12.2, 5.46, 54600, 6552, 61152, 'samircastro', '2017-02-15 12:46:35');
/*!40000 ALTER TABLE postes ENABLE KEYS */;

-- Volcando estructura para tabla mircelab.usuarios
CREATE TABLE IF NOT EXISTS usuarios (
  id int(11) NOT NULL AUTO_INCREMENT,
  usuario varchar(100) NOT NULL,
  nombre varchar(100) NOT NULL,
  apellido varchar(50) NOT NULL,
  ci int(11) NOT NULL,
  departamento varchar(50) NOT NULL,
  pass varchar(512) NOT NULL,
  tipo varchar(50) NOT NULL,
  PRIMARY KEY (id),
  UNIQUE KEY nombre (usuario),
  UNIQUE KEY ci (ci)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla mircelab.usuarios: ~6 rows (aproximadamente)
DELETE FROM usuarios;
/*!40000 ALTER TABLE usuarios DISABLE KEYS */;
INSERT INTO usuarios (id, usuario, nombre, apellido, ci, departamento, pass, tipo) VALUES
	(3, 'magiksen', 'Samuel', 'Escobar', 5680415, 'Informatica', '92f39f7f2a869838cd5085e6f17fc82109bcf98cd62a47cbc379e38de80bbc0213a23cee6e4a13de6caae0add8a390272d6f0883c274320b1ff60dbcfc6dd750', 'super');
INSERT INTO usuarios (id, usuario, nombre, apellido, ci, departamento, pass, tipo) VALUES
	(8, 'mircelab', 'Mirce', 'Lopez', 12540820, 'Doctora', '92f39f7f2a869838cd5085e6f17fc82109bcf98cd62a47cbc379e38de80bbc0213a23cee6e4a13de6caae0add8a390272d6f0883c274320b1ff60dbcfc6dd750', 'admin');
INSERT INTO usuarios (id, usuario, nombre, apellido, ci, departamento, pass, tipo) VALUES
	(10, 'sam_esco', 'Samuel', 'Escobar', 20192274, 'Informatica', '92f39f7f2a869838cd5085e6f17fc82109bcf98cd62a47cbc379e38de80bbc0213a23cee6e4a13de6caae0add8a390272d6f0883c274320b1ff60dbcfc6dd750', 'user');
INSERT INTO usuarios (id, usuario, nombre, apellido, ci, departamento, pass, tipo) VALUES
	(13, 'testing', 'Usuario1', 'Usuerio test', 12121121, 'No se', '92f39f7f2a869838cd5085e6f17fc82109bcf98cd62a47cbc379e38de80bbc0213a23cee6e4a13de6caae0add8a390272d6f0883c274320b1ff60dbcfc6dd750', 'user');
INSERT INTO usuarios (id, usuario, nombre, apellido, ci, departamento, pass, tipo) VALUES
	(14, 'juanita', 'Juana', 'Lopez', 1222222, 'Registrar bloques y laminas', '92f39f7f2a869838cd5085e6f17fc82109bcf98cd62a47cbc379e38de80bbc0213a23cee6e4a13de6caae0add8a390272d6f0883c274320b1ff60dbcfc6dd750', 'lamina');
INSERT INTO usuarios (id, usuario, nombre, apellido, ci, departamento, pass, tipo) VALUES
	(15, 'usuario2', 'Transcriptora', 'Transcriptora', 11111111, 'Transcribir', '92f39f7f2a869838cd5085e6f17fc82109bcf98cd62a47cbc379e38de80bbc0213a23cee6e4a13de6caae0add8a390272d6f0883c274320b1ff60dbcfc6dd750', 'transcriptora');
/*!40000 ALTER TABLE usuarios ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
