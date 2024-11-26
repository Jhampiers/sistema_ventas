-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-11-2024 a las 02:58:56
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistema_ventas`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizarcategoria` (IN `p_id` INT(11), IN `p_nombre` VARCHAR(20), IN `p_detalle` VARCHAR(50))   BEGIN
	UPDATE categoria SET nombre=p_nombre,detalle=p_detalle,detalle=p_detalle WHERE id=p_id;
    SELECT p_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizarcompras` (IN `p_id` INT(11), IN `p_id_producto` INT(11), IN `p_cantidad` INT(5), IN `p_precio` DECIMAL(6,2), IN `p_id_trabajador` INT(11))   BEGIN
	UPDATE compras SET id_producto=p_id_producto,cantidad=p_cantidad,precio=p_precio,id_trabajador=p_id_trabajador WHERE id=p_id;
    SELECT p_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizardetalle_venta` (IN `p_id` INT(11), IN `p_id_venta` INT(11), IN `p_id_producto` INT(11), IN `p_cantidad` INT(6))   BEGIN
	UPDATE detalle_venta SET id_venta=p_id_venta,id_producto=p_id_producto,cantidad=p_cantidad WHERE id=p_id;
    SELECT p_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizarpagos` (IN `p_id` INT(11), IN `p_id_venta` INT(11), IN `p_fecha_hora` DATETIME, IN `p_monto` DECIMAL(6,2), IN `p_metodo_pago` VARCHAR(20), IN `p_estado` INT(1))   BEGIN
	UPDATE pagos SET id_venta=p_id_venta,fecha_hora=p_fecha_hora,monto=p_monto,metodo_pago=p_metodo_pago,estado=p_estado WHERE id=p_id;
    SELECT p_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizarpersona` (IN `p_id` INT(11), IN `p_nro_identidad` VARCHAR(11), IN `p_razon_social` VARCHAR(130), IN `p_telefono` VARCHAR(15), IN `p_correo` VARCHAR(100), IN `p_departamento` VARCHAR(20), IN `p_provincia` VARCHAR(30), IN `p_distrito` VARCHAR(50), IN `p_cod_postal` INT(5), IN `p_direccion` VARCHAR(100), IN `p_rol` VARCHAR(15), IN `p_password` VARCHAR(500), IN `p_estado` VARCHAR(1), IN `p_fecha_reg` DATETIME)   BEGIN
	UPDATE persona SET nro_identidad=p_nro_identidad,razon_social=p_razon_social,telefono=p_telefono,correo=p_correo,departamento=p_departamento,provincia=p_provincia,distrito=p_distrito,cod_postal=p_cod_postal,direccion=p_direccion,rol=p_rol,password=p_password,estado=p_estado,fecha_reg=p_fecha_reg WHERE id=p_id;
    SELECT p_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizarproducto` (IN `p_id` INT(11), IN `p_codigo` VARCHAR(20), IN `p_nombree` VARCHAR(30), IN `p_detalle` VARCHAR(100), IN `p_precio` DECIMAL(6,2), IN `p_id_categoria` INT(11), IN `p_imagen1` VARCHAR(100), IN `p_id_proveedor` INT(11))   BEGIN
	UPDATE producto SET codigo=p_codigo,nombree=p_nombree,detalle=p_detalle,precio=p_precio,id_categoria=p_id_categoria,imagen1=p_imagen1,id_proveedor=p_id_proveedor WHERE id=p_id;
    SELECT p_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizarsesiones` (IN `p_id` INT(11), IN `p_id_persona` INT(11), IN `fecha_hora_inicio` DATETIME, IN `p_fecha_hora_fin` DATETIME, IN `p_token` VARCHAR(20), IN `p_ip` VARCHAR(20))   BEGIN
	UPDATE sesiones SET id_persona=p_id_persona,fecha_hora_inicio=fecha_hora_inicio,fecha_hora_fin=p_fecha_hora_fin,token=p_token,ip=p_ip WHERE id=p_id;
    SELECT p_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizarventa` (IN `p_id` INT(11), IN `p_codigo` VARCHAR(20), IN `p_fecha_hora` DATETIME, IN `p_id_cliente` INT(11), IN `p_id_vendedor` INT(11), IN `p_estado` INT(1))   BEGIN
	UPDATE venta SET codigo=p_codigo,fecha_hora=p_fecha_hora,id_cliente=p_id_cliente,id_vendedor=p_id_vendedor,estado=p_estado WHERE id=p_id;
    SELECT p_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscarcategoria` ()   BEGIN
	SELECT * FROM categoria;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscarcategoriaId` (IN `p_id` INT(11))   BEGIN
	SELECT * FROM categoria WHERE id=p_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscarcompras` ()   BEGIN
	SELECT * FROM compras;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscarcomprasId` (IN `p_id` INT(11))   BEGIN
	SELECT * FROM compras WHERE id=p_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscardetalle_venta` ()   BEGIN
	SELECT * FROM detalle_venta;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscardetalle_ventaId` (IN `p_id` INT(11))   BEGIN
	SELECT * FROM detalle_venta WHERE id=p_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscarpagos` ()   BEGIN
	SELECT * FROM pagos;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscarpagosId` (IN `p_id` INT(11))   BEGIN
	SELECT * FROM pagos WHERE id=p_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscarpersona` ()   BEGIN
	SELECT * FROM persona;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscarpersonaId` (IN `p_id` INT(11))   BEGIN
	SELECT * FROM persona WHERE id=p_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscarproductoId` (IN `p_id` INT(11))   BEGIN
	SELECT * FROM producto WHERE id=p_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscarproductos` ()   BEGIN
	SELECT * FROM producto;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscarsesiones` ()   BEGIN
	SELECT * FROM sesiones;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscarsesionesId` (IN `p_id` INT(11))   BEGIN
	SELECT * FROM sesiones WHERE id=p_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscarventa` ()   BEGIN
	SELECT * FROM venta;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscarventaId` (IN `p_id` INT(11))   BEGIN
	SELECT * FROM venta WHERE id=p_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminarcategoria` (IN `p_id` INT(11))   BEGIN
	DELETE FROM categoria WHERE id=p_id;
    SELECT p_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminarcompras` (IN `p_id` INT(11))   BEGIN
	DELETE FROM compras WHERE id=p_id;
    SELECT p_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminardetalle_venta` (IN `p_id` INT(11))   BEGIN
	DELETE FROM detalle_venta WHERE id=p_id;
    SELECT p_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminarpagos` (IN `p_id` INT(11))   BEGIN
	DELETE FROM pagos WHERE id=p_id;
    SELECT p_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminarpersona` (IN `p_id` INT(11))   BEGIN
	DELETE FROM persona WHERE id=p_id;
    SELECT p_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminarproducto` (IN `p_id` INT(11))   BEGIN
	DELETE FROM producto WHERE id=p_id;
    SELECT p_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminarsesiones` (IN `p_id` INT(11))   BEGIN
	DELETE FROM sesiones WHERE id=p_id;
    SELECT p_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminarventa` (IN `p_id` INT(11))   BEGIN
	DELETE FROM venta WHERE id=p_id;
    SELECT p_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertcategoria` (IN `p_nombre` VARCHAR(20), IN `p_detalle` VARCHAR(50))   BEGIN
	DECLARE existe_categoria INT;
    DECLARE id INT;
    SET existe_categoria = (SELECT COUNT(*) FROM categoria WHERE nombre=p_nombre);
    
    IF existe_categoria=0 THEN
    	INSERT INTO categoria (nombre,detalle)
        	VALUES 
(p_nombre,p_detalle);
           SET id = LAST_INSERT_ID();
    ELSE
           SET id=0;
    END IF;
    SELECT id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertcompras` (IN `p_id_producto` INT(11), IN `p_cantidad` INT(5), IN `p_precio` DECIMAL(6,2), IN `p_id_trabajador` INT(11))   BEGIN
	DECLARE existe_compras INT;
    DECLARE id INT;
    SET existe_compras = (SELECT COUNT(*) FROM compras WHERE id_producto=p_id_producto);
    
    IF existe_compras=0 THEN
    	INSERT INTO compras (id_producto,cantidad,precio,stock,id_trabajador)
        	VALUES 
(p_id_producto,p_cantidad,p_detalle,p_precio,p_id_trabajador);
           SET id = LAST_INSERT_ID();
    ELSE
           SET id=0;
    END IF;
    SELECT id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertdetalle_venta` (IN `p_id_venta` INT(11), IN `p_id_producto` INT(11), IN `p_cantidad` INT(6))   BEGIN
	DECLARE existe_detalle_venta INT;
    DECLARE id INT;
    SET existe_detalle_venta = (SELECT COUNT(*) FROM detalle_venta WHERE id_venta=p_id_venta);
    
    IF existe_detalle_venta=0 THEN
    	INSERT INTO detalle_venta (id_venta,id_producto,cantidad)
        	VALUES 
(p_id_venta,p_id_producto,p_cantidad);
           SET id = LAST_INSERT_ID();
    ELSE
           SET id=0;
    END IF;
    SELECT id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertpagos` (IN `p_id_venta` INT(11), IN `p_fecha_hora` DATETIME, IN `p_monto` DECIMAL(6,2), IN `p_metodo_pago` VARCHAR(20), IN `p_estado` INT(1))   BEGIN
	DECLARE existe_pagos INT;
    DECLARE id INT;
    SET existe_pagos = (SELECT COUNT(*) FROM pagos WHERE id_venta=p_id_venta);
    
    IF existe_pagos=0 THEN
    	INSERT INTO pagos (id_venta,fecha_hora,monto,metodo_pago,estado)
        	VALUES 
(p_id_venta,p_fecha_hora,p_monto,p_metodo_pagop_estado);
           SET id = LAST_INSERT_ID();
    ELSE
           SET id=0;
    END IF;
    SELECT id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertpersona` (IN `p_nro_identidad` VARCHAR(11), IN `p_razon_social` VARCHAR(130), IN `p_telefono` VARCHAR(15), IN `p_correo` VARCHAR(100), IN `p_departamento` VARCHAR(20), IN `p_provincia` VARCHAR(30), IN `p_distrito` VARCHAR(50), IN `p_codigo_postal` INT(5), IN `p_direccion` VARCHAR(100), IN `p_rol` VARCHAR(15), IN `p_password` VARCHAR(500), IN `p_estado` VARCHAR(1), IN `p_fecha_registro` DATETIME)   BEGIN 
   DECLARE existe_persona int;
   DECLARE id int ;
   set existe_persona= (SELECT COUNT(*) from persona WHERE nro_identidad =p_nro_identidad);
   
   if existe_persona=0 then 
   		INSERT into persona (nro_identidad,razon_social,telefono,correo, departamento, provincia, distrito, codigo_postal,direccion, rol, password, estado, fecha_registro)
        VALUES (p_nro_identidad,p_razon_social, p_telefono, p_correo, p_departamento, p_provincia, p_distrito, p_codigo_postal,p_direccion,p_rol,p_password,p_estado,p_fecha_registro);
        set id = LAST_insert_ID();
       ELSE
       SET id=0;
      END IF;
      SELECT id;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertproducto` (IN `p_codigo` INT(20), IN `p_nombree` VARCHAR(30), IN `p_detalle` VARCHAR(100), IN `p_precio` DECIMAL(6,2), IN `p_stock` INT(5), IN `p_id_categoria` INT(11), IN `p_imagen1` VARCHAR(100), IN `p_id_proveedor` INT(11))   BEGIN
	DECLARE existe_producto INT;
    DECLARE id INT;
    SET existe_producto = (SELECT COUNT(*) FROM producto WHERE codigo=p_codigo);
    
    IF existe_producto=0 THEN
    	INSERT INTO producto (codigo,nombree,detalle,precio,stock,id_categoria,imagen1,id_proveedor)
        	VALUES 
(p_codigo,p_nombree,p_detalle,p_precio,p_stock,p_id_categoria,p_imagen1,p_id_proveedor);
           SET id = LAST_INSERT_ID();
    ELSE
           SET id=0;
    END IF;
    SELECT id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertsesiones` (IN `p_id_persona` INT(11), IN `p_fecha_hora_inicio` DATETIME, IN `p_fecha_hora_fin` DATETIME, IN `token` VARCHAR(20), IN `p_ip` VARCHAR(20))   BEGIN
	DECLARE existe_sesiones INT;
    DECLARE id INT;
    SET existe_sesiones = (SELECT COUNT(*) FROM sesiones WHERE id_persona=p_id_persona);
    
    IF existe_sesiones=0 THEN
    	INSERT INTO sesiones (id_persona,fecha_hora_inicio,fecha_hora_fin,token,ip)
        	VALUES 
(p_id_persona,p_fecha_hora_inicio,p_fecha_hora_fin,token,p_ip);
           SET id = LAST_INSERT_ID();
    ELSE
           SET id=0;
    END IF;
    SELECT id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertventa` (IN `p_codigo` VARCHAR(20), IN `p_fecha_hora` DATETIME, IN `p_id_cliente` INT(11), IN `p_id_vendedor` INT(11), IN `p_estado` INT(1))   BEGIN
	DECLARE existe_venta INT;
    DECLARE id INT;
    SET existe_venta = (SELECT COUNT(*) FROM venta WHERE codigo=p_codigo);
    
    IF existe_venta=0 THEN
    	INSERT INTO venta (codigo,fecha_hora,id_cliente,id_vendedor,estado)
        	VALUES 
(p_codigo,p_fecha_hora,p_id_cliente,p_id_vendedor,p_estado);
           SET id = LAST_INSERT_ID();
    ELSE
           SET id=0;
    END IF;
    SELECT id;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `detalle` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `nombre`, `detalle`) VALUES
(1, 'polos', 'polos para adultos'),
(2, 'sapatos', 'sapatos para niños'),
(3, 'celulares', 'celulares de gama alta'),
(4, 'Laptos', 'hjgjghreuig'),
(5, 'Accesorios', 'accesorios para computadoras'),
(6, 'Tablets', 'para estudiantes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `id` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(5) NOT NULL,
  `precio` decimal(6,2) NOT NULL,
  `id_trabajador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_venta`
--

CREATE TABLE `detalle_venta` (
  `id` int(11) NOT NULL,
  `id_venta` int(11) DEFAULT NULL,
  `id_producto` int(11) DEFAULT NULL,
  `cantidad` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE `pagos` (
  `id` int(11) NOT NULL,
  `id_venta` int(11) DEFAULT NULL,
  `fecha_hora` datetime DEFAULT NULL,
  `monto` decimal(6,2) DEFAULT NULL,
  `metodo_pago` varchar(20) DEFAULT NULL,
  `estado` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `id` int(11) NOT NULL,
  `nro_identidad` varchar(11) NOT NULL,
  `razon_social` varchar(130) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `departamento` varchar(20) NOT NULL,
  `provincia` varchar(30) NOT NULL,
  `distrito` varchar(50) NOT NULL,
  `codigo_postal` int(5) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `rol` varchar(15) NOT NULL,
  `password` varchar(500) NOT NULL,
  `estado` varchar(1) NOT NULL,
  `fecha_registro` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id`, `nro_identidad`, `razon_social`, `telefono`, `correo`, `departamento`, `provincia`, `distrito`, `codigo_postal`, `direccion`, `rol`, `password`, `estado`, `fecha_registro`) VALUES
(1, '45698321', 'jhonatan', '900654123', 'jhonatan@gmail.com', 'ayacucho', 'huanta', 'huanta', 123456, 'jr racaredo alvarado', 'proveedor', '123456789', '1', '2024-12-12 00:00:00'),
(2, '71740078', 'yampiers', '996663535', 'yampiers@gmail.com', 'ayacucho', 'huanta', 'huanta', 5121, 'julio ramon ribeyro', 'proveedor', '12345677', '1', '2024-11-13 10:12:24'),
(3, '7274899775', 'renzo', '96669345', 'renzo@gmail.com', 'ayacucho', 'huanta', 'huanta', 5121, 'razuillca', 'administrador', '123', '1', '2024-11-23 10:20:34'),
(4, '7172772', 'pedro', '45465677', 'pedro@gmail.com', 'erwtt', 'trwtre', 'trtrt', 23, 'kkk', 'yjyjytj', 'yjtyjtyj', 'y', '0000-00-00 00:00:00'),
(5, '71742034', 'alexander', '966123456', 'alexander@example.com', 'ayacucho', 'huanta', 'huanta', 512, 'jr.jjhgjk', 'administrador', '1234', '1', '2024-11-11 00:00:00'),
(6, '71740077', 'Roliber', '996663531', 'roliber@gmail.com', 'ayacucho', 'huanta', 'huanta', 521, 'jr.jjkkefwbh', 'trabajador', '12345678910', 'a', '2024-11-11 11:05:23'),
(7, '71720012', 'jhans', '917123678', 'jhans@example.com', 'ayacucho', 'huanta', 'huanta', 557, 'jr.yghyug', 'vendedor', '13579', 'a', '2024-11-11 00:00:00'),
(8, '71740069', 'franklin', '966123450', 'franklin@gmail.com', 'ayacucho', 'huanta', 'huanta', 123, 'jr.hhhhhejriri', 'proveedor', '$2y$10$77ohq6vWkjiOUz29yjx2iuc3qW8Pc7RBjw.xVog4AtdV5wVzURSaK', '1', '2024-11-16 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(11) NOT NULL,
  `codigo` varchar(20) NOT NULL,
  `nombree` varchar(30) NOT NULL,
  `detalle` varchar(100) NOT NULL,
  `precio` decimal(6,2) NOT NULL,
  `stock` int(5) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `imagen1` varchar(100) NOT NULL,
  `id_proveedor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `codigo`, `nombree`, `detalle`, `precio`, `stock`, `id_categoria`, `imagen1`, `id_proveedor`) VALUES
(1, '123456', 'polo', 'polo amarrillo', 60.99, 100, 1, 'polo.jpg', 1),
(2, '1', '1', '1', 1.00, 1, 1, '1', 1),
(8, '12', '12', '12', 12.00, 12, 1, '12', 1),
(9, '3', '3', '3', 3.00, 3, 1, '3', 1),
(10, '4', '4', '4', 4.00, 4, 1, '4', 1),
(11, '2', 'camisa', 'color rojo', 20.00, 12, 1, 'nn', 2),
(12, '5', '5', '5', 5.00, 5, 1, 'imagen1', 2),
(13, '7', '7', '7', 7.00, 7, 1, 'imagen1', 2),
(14, '9', '9', '9', 9.00, 9, 1, 'imagen1', 1),
(15, '0', 'sapato', 'de vestir', 30.00, 2, 1, 'img1.jpg', 1),
(16, '6', 'camisa', 'camisa de vestir', 50.00, 2, 1, 'imagen1', 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sesiones`
--

CREATE TABLE `sesiones` (
  `id` int(11) NOT NULL,
  `id_persona` int(11) DEFAULT NULL,
  `fecha_hora_inicio` datetime DEFAULT NULL,
  `fecha_hora_fin` datetime DEFAULT NULL,
  `token` varchar(20) DEFAULT NULL,
  `ip` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `id` int(11) NOT NULL,
  `codigo` varchar(20) DEFAULT NULL,
  `fecha_hora` datetime DEFAULT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  `id_vendedor` int(11) DEFAULT NULL,
  `estado` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_producto` (`id_producto`),
  ADD KEY `id_trabajador` (`id_trabajador`);

--
-- Indices de la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_venta` (`id_venta`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_venta` (`id_venta`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_categoria` (`id_categoria`),
  ADD KEY `id_proveedor` (`id_proveedor`);

--
-- Indices de la tabla `sesiones`
--
ALTER TABLE `sesiones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_persona` (`id_persona`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `id_vendedor` (`id_vendedor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pagos`
--
ALTER TABLE `pagos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `sesiones`
--
ALTER TABLE `sesiones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `compras_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id`),
  ADD CONSTRAINT `compras_ibfk_2` FOREIGN KEY (`id_trabajador`) REFERENCES `persona` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  ADD CONSTRAINT `detalle_venta_ibfk_1` FOREIGN KEY (`id_venta`) REFERENCES `venta` (`id`),
  ADD CONSTRAINT `detalle_venta_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id`);

--
-- Filtros para la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD CONSTRAINT `pagos_ibfk_1` FOREIGN KEY (`id_venta`) REFERENCES `venta` (`id`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id`),
  ADD CONSTRAINT `producto_ibfk_2` FOREIGN KEY (`id_proveedor`) REFERENCES `persona` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `sesiones`
--
ALTER TABLE `sesiones`
  ADD CONSTRAINT `sesiones_ibfk_1` FOREIGN KEY (`id_persona`) REFERENCES `persona` (`id`);

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `venta_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `persona` (`id`),
  ADD CONSTRAINT `venta_ibfk_2` FOREIGN KEY (`id_vendedor`) REFERENCES `persona` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
