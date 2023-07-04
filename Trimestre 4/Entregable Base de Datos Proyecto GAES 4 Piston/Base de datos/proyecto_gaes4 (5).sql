-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-06-2023 a las 09:04:47
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto_gaes4`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `BuscarColorVehiculo` (IN `p_vin` VARCHAR(50), OUT `p_color` VARCHAR(50))   BEGIN
  SELECT COLOR INTO p_color
  FROM vehiculo
  WHERE VIN = p_vin;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `BuscarInfoClienteID` (IN `p_id_cliente` INT)   BEGIN
  SELECT c.*
  FROM clientes c
  WHERE c.ID_CLIENTES = p_id_cliente;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `BuscarInfoProductoID` (IN `p_id_producto` INT)   BEGIN
  SELECT *
  FROM productos
  WHERE ID_PRODUCTOS = p_id_producto;
END$$

--
-- Funciones
--
CREATE DEFINER=`root`@`localhost` FUNCTION `ContarProveedoresMedellin` () RETURNS INT(11)  BEGIN
  DECLARE contador INT;
  SET contador = 0;

  SELECT COUNT(*) INTO contador
  FROM proveedor
  WHERE CIUDAD_PROVEEDOR = 'Medellín';

  RETURN contador;
END$$

CREATE DEFINER=`root`@`localhost` FUNCTION `ObtenerNombreCompletoMecanico` (`p_id_mecanico` INT) RETURNS VARCHAR(100) CHARSET utf8mb4 COLLATE utf8mb4_general_ci  BEGIN
    DECLARE nombre_completo VARCHAR(100);

    SELECT CONCAT(NOMBRE, ' ', APELLIDO) INTO nombre_completo
    FROM mecanicos
    WHERE ID_MECANICOS = p_id_mecanico;

    RETURN nombre_completo;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `ID_ADMINISTRADOR` int(10) NOT NULL,
  `ID_USUARIO` int(10) DEFAULT NULL,
  `NOMBRE` varchar(45) DEFAULT NULL,
  `APELLIDO` varchar(45) DEFAULT NULL,
  `DIRECCION` varchar(45) DEFAULT NULL,
  `TELEFONO` int(10) DEFAULT NULL,
  `EMAIL` varchar(45) DEFAULT NULL,
  `CIUDAD` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`ID_ADMINISTRADOR`, `ID_USUARIO`, `NOMBRE`, `APELLIDO`, `DIRECCION`, `TELEFONO`, `EMAIL`, `CIUDAD`) VALUES
(0, 12124, 'Juan David', 'Abril', 'calle 53 #54 a 22', 313488556, 'adminjuan@gmail.com', 'Bogota');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_de_productos`
--

CREATE TABLE `categoria_de_productos` (
  `ID_CATEGORIA_DE_PRODUCTO` int(10) NOT NULL,
  `NOMBRE_CATEGORIA_PRODUCTO` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categoria_de_productos`
--

INSERT INTO `categoria_de_productos` (`ID_CATEGORIA_DE_PRODUCTO`, `NOMBRE_CATEGORIA_PRODUCTO`) VALUES
(0, 'Cambio de aceite'),
(20002, 'Alineación y balanceo'),
(20003, 'Frenos'),
(20004, 'Suspensión'),
(20005, 'Transmisión'),
(20006, 'Aire acondicionado'),
(20007, 'Sistema eléctrico'),
(20008, 'Diagnóstico de fallas'),
(20009, 'Reparación de motores'),
(20010, 'Cambio de neumáticos'),
(20011, 'Cambio de batería'),
(20012, 'Sistema de escape'),
(20013, 'Cambio de correa de distribución'),
(20014, 'Lubricación'),
(20015, 'Inspección de seguridad'),
(20016, 'Reparación de frenos ABS'),
(20017, 'Cambio de filtro de aire'),
(20018, 'Reparación de caja de cambios'),
(20019, 'Cambio de amortiguadores'),
(20020, 'Reparación de sistemas de dirección'),
(20021, 'Cambio de bujías'),
(20022, 'Reparación de sistemas de inyección'),
(20023, 'Limpieza de inyectores'),
(20024, 'Cambio de filtro de combustible'),
(20025, 'Ajuste de válvulas'),
(20026, 'Reparación de sistemas de refrigeración'),
(20027, 'Cambio de líquido de frenos'),
(20028, 'Reparación de sistema de arranque'),
(20029, 'Cambio de líquido de transmisión'),
(20030, 'Reparación de sistemas de escape'),
(20031, 'Cambio de filtro de aceite'),
(20032, 'Reparación de sistema de encendido'),
(20033, 'Cambio de pastillas de freno'),
(20034, 'Reparación de sistemas de suspensión'),
(20035, 'Cambio de termostato'),
(20036, 'Reparación de sistemas de climatización'),
(20037, 'Cambio de filtro de habitáculo'),
(20038, 'Reparación de sistema de dirección asistida'),
(20039, 'Cambio de líquido de dirección asistida'),
(20040, 'Alineación de faros'),
(20041, 'Reparación de sistemas de seguridad'),
(20042, 'Cambio de bomba de agua'),
(20043, 'Reparación de sistemas de frenos hidráulicos'),
(20044, 'Cambio de correa de accesorios'),
(20045, 'Reparación de sistemas de escape catalíticos'),
(20046, 'Cambio de sensor de oxígeno'),
(20047, 'Reparación de sistemas de suspensión neumátic'),
(20048, 'Cambio de polea tensora'),
(20049, 'Reparación de sistemas de tracción en las cua'),
(20050, 'Cambio de amortiguadores');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_servicios`
--

CREATE TABLE `categoria_servicios` (
  `ID_CATEGORIA_SERVICIOS` int(10) NOT NULL,
  `NOMBRE_CATEGORIA_SERVICIOS` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categoria_servicios`
--

INSERT INTO `categoria_servicios` (`ID_CATEGORIA_SERVICIOS`, `NOMBRE_CATEGORIA_SERVICIOS`) VALUES
(12397, 'Reparación de motor'),
(12407, 'Diagnóstico de transmisión'),
(12418, 'Cambio de bobina de encendido'),
(12423, 'Diagnóstico de sistema de inyección'),
(12431, 'Cambio de sensores'),
(12442, 'Reparación de sistema de encendido'),
(12451, 'Diagnóstico de sistema eléctrico'),
(23458, 'Alineación y balanceo'),
(34569, 'Revisión de frenos'),
(34584, 'Cambio de bujías'),
(34585, 'Reparación de transmisión'),
(34586, 'Revisión de sistema de enfriamiento'),
(34587, 'Limpieza de inyectores'),
(34588, 'Reparación de sistema de escape'),
(34589, 'Diagnóstico de sistema de climatización'),
(34590, 'Cambio de polea del alternador'),
(45679, 'Reparación de suspensión'),
(45684, 'Reparación de sistema de escape'),
(45685, 'Cambio de filtro de combustible'),
(45686, 'Cambio de bomba de agua'),
(45687, 'Reparación de sistema de dirección asistida'),
(45688, 'Reparación de sistema de inyección'),
(45689, 'Cambio de filtro de habitáculo'),
(45690, 'Reparación de sistema de arranque'),
(56794, 'Diagnóstico de motor'),
(56795, 'Cambio de amortiguadores'),
(56796, 'Reparación de sistema eléctrico'),
(56797, 'Reparación de sistema de frenos ABS'),
(56798, 'Diagnóstico de sistema de suspensión'),
(56799, 'Cambio de sensor de velocidad'),
(56800, 'Reparación de sistema de suspensión'),
(56801, 'Cambio de filtro de gasolina'),
(78904, 'Cambio de frenos'),
(89014, 'Cambio de llantas'),
(89029, 'Cambio de correas'),
(89034, 'Cambio de filtro de aire'),
(89035, 'Reparación de sistema de climatización'),
(89036, 'Cambio de bomba de combustible'),
(89037, 'Reparación de sistema de frenos ABS'),
(89038, 'Reparación de sistema de enfriamiento'),
(89039, 'Cambio de sensor de temperatura'),
(90124, 'Cambio de batería'),
(90129, 'Reparación de sistema de dirección'),
(90130, 'Cambio de filtro de aceite'),
(90131, 'Cambio de termostato'),
(90132, 'Cambio de bujes'),
(90133, 'Cambio de sensor de oxígeno'),
(90134, 'Cambio de pastillas de freno'),
(90135, 'Cambio de sensor de presión de aceite');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `ID_CLIENTES` int(10) NOT NULL,
  `NOMBRE` varchar(45) DEFAULT NULL,
  `FECHA_DE_NACIMIENTO` varchar(45) DEFAULT NULL,
  `DIRECCION` varchar(45) DEFAULT NULL,
  `TELEFONO` int(10) DEFAULT NULL,
  `EMAIL` varchar(45) DEFAULT NULL,
  `CIUDAD` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`ID_CLIENTES`, `NOMBRE`, `FECHA_DE_NACIMIENTO`, `DIRECCION`, `TELEFONO`, `EMAIL`, `CIUDAD`) VALUES
(900901, 'SANDRA  ANDRADE PRIETO', '04/08/1990', 'Diagonal 27 No. 137 - 8', 2635874, 'olgavictoriaandradevaron@elempresario.net.co', 'Bogota'),
(900902, 'CLAUDIA MARCELA SIERRA CARDOZO', '12/12/1976', 'Avenida 106 No. 45 - 14', 2653149, 'claudiamarcelasierracardozo@micorreovirtual.c', 'Cali'),
(900903, 'ALVARO  VELA ALVIS', '07/25/1987', 'Avenida 89 No. 130 - 152', 2653327, 'alvarovelaalvis@micolombia.com.co', 'Bogota'),
(900904, 'ARMANDO  USECHE AVILA', '01/17/1953', 'Calle 187 No. 25 - 158', 2653389, 'armandousecheavila@micolombia.com.co', 'Cucuta'),
(900905, 'CARLOS VICENTE TELLEZ BONILLA', '08/08/1947', 'Calle 45 No. 69 - 33', 2653992, 'carlosvicentetellezbonilla@losingenieros.com.', 'Bogota'),
(900906, 'JUAN DE DIOS  GONGORA PALMA', '08/20/1948', 'Carrera 57 No. 198 - 75', 2657196, 'juandediosgongorapalma@elempresario.net.co', 'Medellin'),
(900907, 'ALEXANDRA MILENA VERA ALFONSO', '11/05/1945', 'Carrera 162 No. 182 - 181', 2658459, 'alexandramilenaveraalfonso@losingenieros.com.', 'Bogota'),
(900908, 'OSCAR FABIAN ACOSTA VILLANUEVA', '09/02/1945', 'Diagonal 41 No. 121 - 51', 2659854, 'oscarfabianacostavillanueva@micorreovirtual.c', 'Cali'),
(900909, 'FAVIO ARMANDO PEREZ FRANCO', '09/02/1954', 'Carrera 136 No. 111 - 72', 2660898, 'favioarmandoperezfranco@micorreovirtual.com', 'Medellin'),
(900910, 'MARIA NURY CAMPOS SALAZAR', '06/30/1965', 'Calle 138 No. 84 - 26', 2664478, 'marianurycampossalazar@micolombia.com.co', 'Bogota'),
(900911, 'JUAN CAMILO GONZALEZ PAEZ', '05/20/1977', 'Carrera 111 No. 183 - 70', 2664858, 'juancamilogonzalezpaez@losingenieros.com.co', 'Cucuta'),
(900912, 'JUAN MANUEL GOMEZ PARADA', '05/10/1957', 'Carrera 79 No. 43 - 155', 2666419, 'juanmanuelgomezparada@micorreovirtual.com', 'Bogota'),
(900913, 'JOSE RUBEN GUZMAN OVIEDO', '12/17/1971', 'Calle 5 No. 63 - 10', 2666606, 'joserubenguzmanoviedo@miempresa.com.co', 'Medellin'),
(900914, 'MANUEL CESAR CHARRY RODRIGUEZ', '10/27/1958', 'Diagonal 18 No. 4 - 90', 2669641, 'manuelcesarcharryrodriguez@miempresa.com.co', 'Medellin'),
(900915, 'CONSUELO AMALIA SARMIENTO CARRASCO', '05/22/1960', 'Calle 128 No. 106 - 76', 2670757, 'consueloamaliasarmientocarrasco@miempresa.com', 'Cali'),
(900916, 'WILMER ARLEY LEON MENGUAL', '07/17/1962', 'Carrera 123 No. 70 - 1', 2670808, 'wilmerarleyleonmengual@miempresa.com.co', 'Cucuta'),
(900917, 'NIDIA LORENA ARCINIEGAS TRUJILLO', '09/14/1945', 'Transversal 24 No. 200 - 183', 2673099, 'nidialorenaarciniegastrujillo@losmedicos.com.', 'Bogota'),
(900918, 'AMPARO  VARON ARBELAEZ', '05/01/1951', 'Transversal 152 No. 49 - 103', 2675228, 'amparovaronarbelaez@miempresa.com.co', 'Bogota'),
(900919, 'PEDRO JOSE MORENO HERRERA', '06/30/1951', 'Avenida 169 No. 80 - 184', 2681452, 'pedrojosemorenoherrera@losmedicos.com.co', 'Medellin'),
(900920, 'ANDRES GEOVANNI VARGAS ARCE', '12/14/1954', 'Calle 167 No. 29 - 109', 2682067, 'andresgeovannivargasarce@elempresario.net.co', 'Cali'),
(900921, 'ROBERTO  MENDOZA LAVERDE', '11/10/1976', 'Calle 147 No. 46 - 4', 2682353, 'robertomendozalaverde@miempresa.com.co', 'Bogota'),
(900922, 'MARTHA LUCIA BONILLA SEGURA', '02/17/1978', 'Avenida 14 No. 146 - 144', 2683543, 'marthaluciabonillasegura@losingenieros.com.co', 'Bogota'),
(900923, 'NESTOR IVAN ARDILA TRONCOSO', '11/09/1988', 'Carrera 40 No. 97 - 70', 2683748, 'nestorivanardilatroncoso@losmedicos.com.co', 'Cucuta'),
(900924, 'MYRIAM JANETH AROCA TOQUICA', '03/15/1987', 'Carrera 84 No. 16 - 140', 2685953, 'myriamjanetharocatoquica@miempresa.com.co', 'Cali'),
(900925, 'BLANCA EMMA URBANO BARRERO', '08/01/1977', 'Avenida 172 No. 36 - 109', 2686061, 'blancaemmaurbanobarrero@miempresa.com.co', 'Cali'),
(900926, 'DIANA PATRICIA RODRIGUEZ CONTRERAS', '11/08/1960', 'Calle 140 No. 106 - 200', 2686804, 'dianapatriciarodriguezcontreras@losingenieros', 'Bogota'),
(900927, 'ALVARO ENRIQUE VEGA ALZATE', '01/16/1985', 'Calle 129 No. 119 - 91', 2694761, 'alvaroenriquevegaalzate@micorreovirtual.com', 'Bogota'),
(900928, 'MYRIAM  AVENDAÑO TAPIERO', '12/02/1954', 'Calle 164 No. 145 - 174', 2695195, 'myriamavendañotapiero@miempresa.com.co', 'Bogota'),
(900929, 'XIOMARA ANDREA LEGUIZAMO MIRANDA', '02/03/1976', 'Transversal 200 No. 22 - 55', 2697291, 'xiomaraandrealeguizamomiranda@micorreovirtual', 'Medellin'),
(900930, 'OSCAR  ALDANA VIDAL', '11/14/1987', 'Calle 74 No. 128 - 152', 2698547, 'oscaraldanavidal@losingenieros.com.co', 'Bogota'),
(900931, 'OSCAR JULIAN PARRA GONZALEZ', '08/10/1946', 'Transversal 89 No. 57 - 2', 2700739, 'oscarjulianparragonzalez@elempresario.net.co', 'Bogota'),
(900932, 'FRANCISCO JAVIER PEÑA GODOY', '01/02/1969', 'Calle 114 No. 45 - 138', 2704559, 'franciscojavierpeñagodoy@losmedicos.com.co', 'Medellin'),
(900933, 'SENA  LUIS MACHADO', '03/06/1988', 'Avenida 124 No. 1 - 123', 2706527, 'senaluismachado@micorreovirtual.com', 'Cali'),
(900934, 'PAULA ANDREA NIETO HERNANDEZ', '12/13/1969', 'Carrera 158 No. 155 - 103', 2710088, 'paulaandreanietohernandez@micolombia.com.co', 'Bogota'),
(900935, 'CONSUELO LEONOR SANCHEZ CASTAÑEDA', '10/28/1960', 'Carrera 138 No. 135 - 171', 2715491, 'consueloleonorsanchezcastañeda@micolombia.com', 'Bogota'),
(900936, 'CARMEN  TAPIA CAMPO', '08/20/1959', 'Carrera 47 No. 86 - 143', 2715848, 'carmentapiacampo@losmedicos.com.co', 'Medellin'),
(900937, 'ANGELA ROSA VANEGAS ARTEAGA', '10/20/1949', 'Calle 124 No. 3 - 37', 2717240, 'angelarosavanegasarteaga@micolombia.com.co', 'Bogota'),
(900938, 'RICARDO MAURICIO MENESES LASTRA', '07/21/1971', 'Avenida 130 No. 72 - 65', 2717591, 'ricardomauriciomeneseslastra@losmedicos.com.c', 'Cali'),
(900939, 'LINDA ROCIO GALEANO PUERTA', '04/10/1959', 'Carrera 22 No. 14 - 138', 2720376, 'lindarociogaleanopuerta@elempresario.net.co', 'Medellin'),
(900940, 'LUIS YADIR CUELLAR REINA', '07/05/1986', 'Calle 7 No. 71 - 191', 2720391, 'luisyadircuellarreina@micolombia.com.co', 'Cali'),
(900941, 'CARLOS HUGO TORRES BOCANEGRA', '11/27/1980', 'Carrera 197 No. 135 - 199', 2720586, 'carloshugotorresbocanegra@miempresa.com.co', 'Cali'),
(900942, 'JUSTO  GARCIA PINZON', '07/16/1989', 'Calle 44 No. 126 - 126', 2721579, 'justogarciapinzon@miempresa.com.co', 'Cucuta'),
(900943, 'ALVARO ERNESTO VASQUEZ ARANZALEZ', '01/15/1958', 'Calle 18 No. 70 - 199', 2723856, 'alvaroernestovasquezaranzalez@losmedicos.com.', 'Bogota'),
(900944, 'DAGGER  SALDAÑA CASTILLO', '10/06/1951', 'Transversal 64 No. 49 - 7', 2725331, 'daggersaldañacastillo@miempresa.com.co', 'Bogota'),
(900945, 'RICARDO  MOLINA LANDAZABAL', '04/28/1956', 'Carrera 106 No. 168 - 83', 2727435, 'ricardomolinalandazabal@micorreovirtual.com', 'Medellin'),
(900946, 'ALBERTO FEDERICO VILLARRAGA AGUIAR', '04/18/1951', 'Transversal 113 No. 14 - 9', 2727728, 'albertofedericovillarragaaguiar@miempresa.com', 'Medellin'),
(900947, 'CLAUDIA LILIANA SOTO CARDEÑO', '11/27/1987', 'Avenida 148 No. 120 - 66', 2728810, 'claudialilianasotocardeño@micorreovirtual.com', 'Cali'),
(900948, 'FRANCISCO ANTONIO PEÑALOZA GARCIA', '12/24/1957', 'Calle 3 No. 53 - 200', 2730417, 'franciscoantoniopeñalozagarcia@losingenieros.', 'Cali'),
(900949, 'DORA TERESA REYES DIAZ', '12/28/1946', 'Calle 190 No. 186 - 190', 2730893, 'dorateresareyesdiaz@micolombia.com.co', 'Bogota'),
(900950, 'MARIA DERLY CASTAÑO RUEDA', '09/28/1970', 'Diagonal 96 No. 25 - 127', 2734887, 'mariaderlycastañorueda@losmedicos.com.co', 'Bogota');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cronograma`
--

CREATE TABLE `cronograma` (
  `ID_CRONOGRAMA` int(10) NOT NULL,
  `FECHA_ENTREGA` varchar(45) DEFAULT NULL,
  `ID_USUARIO` int(10) DEFAULT NULL,
  `ID_MECANICOS` int(10) DEFAULT NULL,
  `ID_ORDEN_TRABAJO` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cronograma`
--

INSERT INTO `cronograma` (`ID_CRONOGRAMA`, `FECHA_ENTREGA`, `ID_USUARIO`, `ID_MECANICOS`, `ID_ORDEN_TRABAJO`) VALUES
(0, '07/16/2023', 1501, 20001, 55501),
(90002, '04/05/2023', 1502, 20002, 55502),
(90003, '06/04/2023', 1503, 20003, 55503),
(90004, '03/20/2023', 1504, 20004, 55504),
(90005, '10/20/2023', 1505, 20005, 55505),
(90006, '11/01/2023', 1506, 20006, 55506),
(90007, '11/23/2023', 1507, 20007, 55507),
(90008, '07/10/2023', 1508, 20008, 55508),
(90009, '04/12/2023', 1509, 20009, 55509),
(90010, '04/01/2023', 1510, 20010, 55510),
(90011, '03/01/2023', 1511, 20011, 55511),
(90012, '08/15/2023', 1512, 20012, 55512),
(90013, '03/09/2023', 1513, 20013, 55513),
(90014, '10/25/2023', 1514, 20014, 55514),
(90015, '06/10/2023', 1515, 20015, 55515),
(90016, '07/01/2023', 1516, 20016, 55516),
(90017, '04/27/2023', 1517, 20017, 55517),
(90018, '12/03/2023', 1518, 20018, 55518),
(90019, '02/20/2023', 1519, 20019, 55519),
(90020, '03/06/2023', 1520, 20020, 55520),
(90021, '06/05/2023', 1521, 20021, 55521),
(90022, '10/20/2023', 1522, 20022, 55522),
(90023, '06/17/2023', 1523, 20023, 55523),
(90024, '11/26/2023', 1524, 20024, 55524),
(90025, '11/13/2023', 1525, 20025, 55525),
(90026, '05/25/2023', 1526, 20026, 55526),
(90027, '05/08/2023', 1527, 20027, 55527),
(90028, '01/27/2023', 1528, 20028, 55528),
(90029, '09/22/2023', 1529, 20029, 55529),
(90030, '05/12/2023', 1530, 20030, 55530),
(90031, '12/07/2023', 1531, 20031, 55531),
(90032, '06/08/2023', 1532, 20032, 55532),
(90033, '03/05/2023', 1533, 20033, 55533),
(90034, '07/04/2023', 1534, 20034, 55534),
(90035, '11/25/2023', 1535, 20035, 55535),
(90036, '07/04/2023', 1536, 20036, 55536),
(90037, '10/16/2023', 1537, 20037, 55537),
(90038, '12/17/2023', 1538, 20038, 55538),
(90039, '04/26/2023', 1539, 20039, 55539),
(90040, '06/15/2023', 1540, 20040, 55540),
(90041, '11/06/2023', 1541, 20041, 55541),
(90042, '08/04/2023', 1542, 20042, 55542),
(90043, '05/13/2023', 1543, 20043, 55543),
(90044, '11/12/2023', 1544, 20044, 55544),
(90045, '07/22/2023', 1545, 20045, 55545),
(90046, '11/24/2023', 1546, 20046, 55546),
(90047, '11/04/2023', 1547, 20047, 55547),
(90048, '12/07/2023', 1548, 20048, 55548),
(90049, '11/22/2023', 1549, 20049, 55549),
(90050, '08/09/2023', 1550, 20050, 55550);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_orden_trabajo`
--

CREATE TABLE `estado_orden_trabajo` (
  `ID_ESTADO_ORDEN_TRABAJO` int(10) NOT NULL,
  `TERMINADO` varchar(45) DEFAULT NULL,
  `ATRASADO` varchar(45) DEFAULT NULL,
  `EN_ESPERA` varchar(45) DEFAULT NULL,
  `SIN_INICIAR` varchar(45) DEFAULT NULL,
  `ID_MECANICOS` int(10) DEFAULT NULL,
  `ID_USUARIO` int(10) DEFAULT NULL,
  `ID_ORDEN_TRABAJO` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estado_orden_trabajo`
--

INSERT INTO `estado_orden_trabajo` (`ID_ESTADO_ORDEN_TRABAJO`, `TERMINADO`, `ATRASADO`, `EN_ESPERA`, `SIN_INICIAR`, `ID_MECANICOS`, `ID_USUARIO`, `ID_ORDEN_TRABAJO`) VALUES
(0, 'SI', 'NO', 'NO', 'NO', 20001, 1501, 55501),
(6666, 'SI', 'NO', 'NO', 'NO', 20002, 1502, 55502),
(6667, 'SI', 'NO', 'NO', 'NO', 20003, 1503, 55503),
(6668, 'SI', 'NO', 'NO', 'NO', 20004, 1504, 55504),
(6669, 'SI', 'NO', 'NO', 'NO', 20005, 1505, 55505),
(6670, 'SI', 'NO', 'NO', 'NO', 20006, 1506, 55506),
(6671, 'SI', 'NO', 'NO', 'NO', 20007, 1507, 55507),
(6672, 'SI', 'NO', 'NO', 'NO', 20008, 1508, 55508),
(6673, 'SI', 'NO', 'NO', 'NO', 20009, 1509, 55509),
(6674, 'SI', 'NO', 'NO', 'NO', 20010, 1510, 55510),
(6675, 'SI', 'NO', 'NO', 'NO', 20011, 1511, 55511),
(6676, 'SI', 'NO', 'NO', 'NO', 20012, 1512, 55512),
(6677, 'SI', 'NO', 'NO', 'NO', 20013, 1513, 55513),
(6678, 'SI', 'NO', 'NO', 'NO', 20014, 1514, 55514),
(6679, 'SI', 'NO', 'NO', 'NO', 20015, 1515, 55515),
(6680, 'SI', 'NO', 'NO', 'NO', 20016, 1516, 55516),
(6681, 'SI', 'NO', 'NO', 'NO', 20017, 1517, 55517),
(6682, 'SI', 'NO', 'NO', 'NO', 20018, 1518, 55518),
(6683, 'SI', 'NO', 'NO', 'NO', 20019, 1519, 55519),
(6684, 'SI', 'NO', 'NO', 'NO', 20020, 1520, 55520),
(6685, 'SI', 'NO', 'NO', 'NO', 20021, 1521, 55521),
(6686, 'SI', 'NO', 'NO', 'NO', 20022, 1522, 55522),
(6687, 'SI', 'NO', 'NO', 'NO', 20023, 1523, 55523),
(6688, 'SI', 'NO', 'NO', 'NO', 20024, 1524, 55524),
(6689, 'SI', 'NO', 'NO', 'NO', 20025, 1525, 55525),
(6690, 'SI', 'NO', 'NO', 'NO', 20026, 1526, 55526),
(6691, 'SI', 'NO', 'NO', 'NO', 20027, 1527, 55527),
(6692, 'SI', 'NO', 'NO', 'NO', 20028, 1528, 55528),
(6693, 'SI', 'NO', 'NO', 'NO', 20029, 1529, 55529),
(6694, 'SI', 'NO', 'NO', 'NO', 20030, 1530, 55530),
(6695, 'SI', 'NO', 'NO', 'NO', 20031, 1531, 55531),
(6696, 'SI', 'NO', 'NO', 'NO', 20032, 1532, 55532),
(6697, 'SI', 'NO', 'NO', 'NO', 20033, 1533, 55533),
(6698, 'SI', 'NO', 'NO', 'NO', 20034, 1534, 55534),
(6699, 'SI', 'NO', 'NO', 'NO', 20035, 1535, 55535),
(6700, 'SI', 'NO', 'NO', 'NO', 20036, 1536, 55536),
(6701, 'SI', 'NO', 'NO', 'NO', 20037, 1537, 55537),
(6702, 'SI', 'NO', 'NO', 'NO', 20038, 1538, 55538),
(6703, 'SI', 'NO', 'NO', 'NO', 20039, 1539, 55539),
(6704, 'SI', 'NO', 'NO', 'NO', 20040, 1540, 55540),
(6705, 'SI', 'NO', 'NO', 'NO', 20041, 1541, 55541),
(6706, 'SI', 'NO', 'NO', 'NO', 20042, 1542, 55542),
(6707, 'SI', 'NO', 'NO', 'NO', 20043, 1543, 55543),
(6708, 'SI', 'NO', 'NO', 'NO', 20044, 1544, 55544),
(6709, 'SI', 'NO', 'NO', 'NO', 20045, 1545, 55545),
(6710, 'SI', 'NO', 'NO', 'NO', 20046, 1546, 55546),
(6711, 'SI', 'NO', 'NO', 'NO', 20047, 1547, 55547),
(6712, 'SI', 'NO', 'NO', 'NO', 20048, 1548, 55548),
(6713, 'SI', 'NO', 'NO', 'NO', 20049, 1549, 55549),
(6714, '', 'NO', 'NO', 'NO', 20050, 1550, 55550);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gestion_clientes`
--

CREATE TABLE `gestion_clientes` (
  `ID_GESTION_CLIENTES` int(10) NOT NULL,
  `AÑADIR_CLIENTE` varchar(45) DEFAULT NULL,
  `EDITAR_CLIENTE` varchar(45) DEFAULT NULL,
  `ELIMINAR_CLIENTE` varchar(45) DEFAULT NULL,
  `CONSULTAR_CLIENTE` varchar(45) DEFAULT NULL,
  `ID_CLIENTES` int(10) DEFAULT NULL,
  `ID_USUARIO` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `gestion_clientes`
--

INSERT INTO `gestion_clientes` (`ID_GESTION_CLIENTES`, `AÑADIR_CLIENTE`, `EDITAR_CLIENTE`, `ELIMINAR_CLIENTE`, `CONSULTAR_CLIENTE`, `ID_CLIENTES`, `ID_USUARIO`) VALUES
(0, 'N/A', 'N/A', 'N/A', 'N/A', 900901, 1501),
(11002, 'N/A', 'N/A', 'N/A', 'N/A', 900902, 1502),
(11003, 'N/A', 'N/A', 'N/A', 'N/A', 900903, 1503),
(11004, 'N/A', 'N/A', 'N/A', 'N/A', 900904, 1504),
(11005, 'N/A', 'N/A', 'N/A', 'N/A', 900905, 1505),
(11006, 'N/A', 'N/A', 'N/A', 'N/A', 900906, 1506),
(11007, 'N/A', 'N/A', 'N/A', 'N/A', 900907, 1507),
(11008, 'N/A', 'N/A', 'N/A', 'N/A', 900908, 1508),
(11009, 'N/A', 'N/A', 'N/A', 'N/A', 900909, 1509),
(11010, 'N/A', 'N/A', 'N/A', 'N/A', 900910, 1510),
(11011, 'N/A', 'N/A', 'N/A', 'N/A', 900911, 1511),
(11012, 'N/A', 'N/A', 'N/A', 'N/A', 900912, 1512),
(11013, 'N/A', 'N/A', 'N/A', 'N/A', 900913, 1513),
(11014, 'N/A', 'N/A', 'N/A', 'N/A', 900914, 1514),
(11015, 'N/A', 'N/A', 'N/A', 'N/A', 900915, 1515),
(11016, 'N/A', 'N/A', 'N/A', 'N/A', 900916, 1516),
(11017, 'N/A', 'N/A', 'N/A', 'N/A', 900917, 1517),
(11018, 'N/A', 'N/A', 'N/A', 'N/A', 900918, 1518),
(11019, 'N/A', 'N/A', 'N/A', 'N/A', 900919, 1519),
(11020, 'N/A', 'N/A', 'N/A', 'N/A', 900920, 1520),
(11021, 'N/A', 'N/A', 'N/A', 'N/A', 900921, 1521),
(11022, 'N/A', 'N/A', 'N/A', 'N/A', 900922, 1522),
(11023, 'N/A', 'N/A', 'N/A', 'N/A', 900923, 1523),
(11024, 'N/A', 'N/A', 'N/A', 'N/A', 900924, 1524),
(11025, 'N/A', 'N/A', 'N/A', 'N/A', 900925, 1525),
(11026, 'N/A', 'N/A', 'N/A', 'N/A', 900926, 1526),
(11027, 'N/A', 'N/A', 'N/A', 'N/A', 900927, 1527),
(11028, 'N/A', 'N/A', 'N/A', 'N/A', 900928, 1528),
(11029, 'N/A', 'N/A', 'N/A', 'N/A', 900929, 1529),
(11030, 'N/A', 'N/A', 'N/A', 'N/A', 900930, 1530),
(11031, 'N/A', 'N/A', 'N/A', 'N/A', 900931, 1531),
(11032, 'N/A', 'N/A', 'N/A', 'N/A', 900932, 1532),
(11033, 'N/A', 'N/A', 'N/A', 'N/A', 900933, 1533),
(11034, 'N/A', 'N/A', 'N/A', 'N/A', 900934, 1534),
(11035, 'N/A', 'N/A', 'N/A', 'N/A', 900935, 1535),
(11036, 'N/A', 'N/A', 'N/A', 'N/A', 900936, 1536),
(11037, 'N/A', 'N/A', 'N/A', 'N/A', 900937, 1537),
(11038, 'N/A', 'N/A', 'N/A', 'N/A', 900938, 1538),
(11039, 'N/A', 'N/A', 'N/A', 'N/A', 900939, 1539),
(11040, 'N/A', 'N/A', 'N/A', 'N/A', 900940, 1540),
(11041, 'N/A', 'N/A', 'N/A', 'N/A', 900941, 1541),
(11042, 'N/A', 'N/A', 'N/A', 'N/A', 900942, 1542),
(11043, 'N/A', 'N/A', 'N/A', 'N/A', 900943, 1543),
(11044, 'N/A', 'N/A', 'N/A', 'N/A', 900944, 1544),
(11045, 'N/A', 'N/A', 'N/A', 'N/A', 900945, 1545),
(11046, 'N/A', 'N/A', 'N/A', 'N/A', 900946, 1546),
(11047, 'N/A', 'N/A', 'N/A', 'N/A', 900947, 1547),
(11048, 'N/A', 'N/A', 'N/A', 'N/A', 900948, 1548),
(11049, 'N/A', 'N/A', 'N/A', 'N/A', 900949, 1549),
(11050, 'N/A', 'N/A', 'N/A', 'N/A', 900950, 1550);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mecanicos`
--

CREATE TABLE `mecanicos` (
  `ID_MECANICOS` int(10) NOT NULL,
  `NOMBRE` varchar(45) DEFAULT NULL,
  `APELLIDO` varchar(45) DEFAULT NULL,
  `DIRECCION` varchar(45) DEFAULT NULL,
  `TELEFONO` varchar(10) DEFAULT NULL,
  `EMAIL` varchar(45) DEFAULT NULL,
  `CIUDAD` varchar(45) DEFAULT NULL,
  `ESPECIALIDAD` varchar(45) DEFAULT NULL,
  `ID_USUARIO` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `mecanicos`
--

INSERT INTO `mecanicos` (`ID_MECANICOS`, `NOMBRE`, `APELLIDO`, `DIRECCION`, `TELEFONO`, `EMAIL`, `CIUDAD`, `ESPECIALIDAD`, `ID_USUARIO`) VALUES
(0, 'Juan', 'Perez', 'Calle 123, Bogotá', '2147483647', 'vlopez@example.com', 'Bogotá', 'Electricidad automotriz', 1501),
(20002, 'Maria', 'Rodriguez', 'Avenida X, Medellín', '2147483647', 'amartinez@example.com', 'Medellín', 'Reparación de frenos', 1502),
(20003, 'Carlos', 'Lopez', 'Calle Y, Cali', '2147483647', 'cagarcia@example.com', 'Cali', 'Transmisión automática', 1503),
(20004, 'Ana', 'Martinez', 'Avenida Z, Barranquilla', '2147483647', 'srodriguez@example.com', 'Barranquilla', 'Mecánica de motores', 1504),
(20005, 'Luis', 'Garcia', 'Calle 456, Cartagena', '2147483647', 'vlopez@example.com', 'Bogotá', 'Electricidad automotriz', 1505),
(20006, 'Laura', 'Gonzalez', 'Avenida W, Bucaramanga', '2147483647', 'dperez@example.com', 'Medellín', 'Reparación de frenos', 1506),
(20007, 'Pedro', 'Sanchez', 'Calle 789, Santa Marta', '2147483647', 'lmartinez@example.com', 'Cali', 'Transmisión automática', 1507),
(20008, 'Sofia', 'Fernandez', 'Avenida V, Pereira', '2147483647', 'jgarcia@example.com', 'Barranquilla', 'Mecánica de motores', 1508),
(20009, 'Daniel', 'Ramirez', 'Calle 012, Manizales', '2147483647', 'srodriguez@example.com', 'Bogotá', 'Electricidad automotriz', 1509),
(20010, 'Carolina', 'Torres', 'Avenida U, Cali', '2147483647', 'dlopez@example.com', 'Medellín', 'Reparación de frenos', 1510),
(20011, 'Oscar', 'Flores', 'Calle 345, Bogotá', '2147483647', 'cmartinez@example.com', 'Cali', 'Transmisión automática', 1511),
(20012, 'Andrea', 'Jimenez', 'Avenida X, Medellín', '2147483647', 'agarcia@example.com', 'Barranquilla', 'Mecánica de motores', 1512),
(20013, 'Alejandro', 'Herrera', 'Calle Y, Barranquilla', '2147483647', 'vrodriguez@example.com', 'Bogotá', 'Electricidad automotriz', 1513),
(20014, 'Valentina', 'Diaz', 'Avenida Z, Cali', '2147483647', 'sperez@example.com', 'Medellín', 'Reparación de frenos', 1514),
(20015, 'Manuel', 'Moreno', 'Calle 456, Bogotá', '2147483647', 'lgarcia@example.com', 'Cali', 'Transmisión automática', 1515),
(20016, 'Camila', 'Castro', 'Avenida W, Medellín', '2147483647', 'jrodriguez@example.com', 'Barranquilla', 'Mecánica de motores', 1516),
(20017, 'Felipe', 'Silva', 'Calle 789, Cali', '2147483647', 'slopez@example.com', 'Bogotá', 'Electricidad automotriz', 1517),
(20018, 'Victoria', 'Valencia', 'Avenida V, Barranquilla', '2147483647', 'dmartinez@example.com', 'Medellín', 'Reparación de frenos', 1518),
(20019, 'David', 'Navarro', 'Calle 012, Bogotá', '2147483647', 'cgarcia@example.com', 'Cali', 'Transmisión automática', 1519),
(20020, 'Isabella', 'Rojas', 'Avenida X, Medellín', '2147483647', 'arodriguez@example.com', 'Barranquilla', 'Mecánica de motores', 1520);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden_trabajo`
--

CREATE TABLE `orden_trabajo` (
  `ID_ORDEN_TRABAJO` int(10) NOT NULL,
  `AÑADIR_ORDEN` varchar(45) DEFAULT NULL,
  `ASIGNAR_MECANICO` varchar(45) DEFAULT NULL,
  `EDITAR_ORDEN` varchar(45) DEFAULT NULL,
  `CONSULTAR_MATRICULO_VEHICULO` varchar(45) DEFAULT NULL,
  `ASIGNAR_TARIFA` varchar(45) DEFAULT NULL,
  `ID_MECANICOS` int(10) DEFAULT NULL,
  `ID_USUARIO` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `orden_trabajo`
--

INSERT INTO `orden_trabajo` (`ID_ORDEN_TRABAJO`, `AÑADIR_ORDEN`, `ASIGNAR_MECANICO`, `EDITAR_ORDEN`, `CONSULTAR_MATRICULO_VEHICULO`, `ASIGNAR_TARIFA`, `ID_MECANICOS`, `ID_USUARIO`) VALUES
(0, 'Añadido', 'David Tuay', 'Editado', 'ABC123', '51%', 20001, 1501),
(55502, 'No añadido', 'Santiago Ramírez', 'No editado', 'DEF456', '28%', 20002, 1502),
(55503, 'Añadido', 'Valentina López', 'No editado', 'GHI789', '95%', 20003, 1503),
(55504, 'No añadido', 'Juan Pablo Rodríguez', 'Editado', 'JKL012', '12%', 20004, 1504),
(55505, 'No añadido', 'Mariana González', 'No editado', 'MNO345', '63%', 20005, 1505),
(55506, 'Añadido', 'Mateo García', 'Editado', 'PQR678', '87%', 20006, 1506),
(55507, 'Añadido', 'Sofía Martínez', 'Editado', 'STU901', '36%', 20007, 1507),
(55508, 'Añadido', 'Sebastián Herrera', 'No editado', 'VWX123', '72%', 20008, 1508),
(55509, 'No añadido', 'Isabella Castro', 'No editado', 'YZA456', '42%', 20009, 1509),
(55510, 'Añadido', 'Samuel Torres', 'Editado', 'BCD789', '19%', 20010, 1510),
(55511, 'No añadido', 'Camila Vargas', 'Editado', 'CDE012', '83%', 20011, 1511),
(55512, 'No añadido', 'Daniel Ríos', 'No editado', 'EFG345', '57%', 20012, 1512),
(55513, 'Añadido', 'Manuela Acosta', 'Editado', 'HIJ678', '31%', 20013, 1513),
(55514, 'Añadido', 'Juan David Franco', 'Editado', 'KLM901', '68%', 20014, 1514),
(55515, 'No añadido', 'Valeria Moreno', 'No editado', 'NOP234', '75%', 20015, 1515),
(55516, 'Añadido', 'David Henao', 'No editado', 'QRS567', '23%', 20016, 1516),
(55517, 'No añadido', 'Gabriela Gómez', 'Editado', 'TUV012', '94%', 20017, 1517),
(55518, 'No añadido', 'Santiago Ramírez', 'Editado', 'WXY345', '10%', 20018, 1518),
(55519, 'Añadido', 'Valentina López', 'No editado', 'ZAB678', '47%', 20019, 1519),
(55520, 'Añadido', 'Juan Pablo Rodríguez', 'No editado', 'CDE123', '66%', 20020, 1520),
(55521, 'No añadido', 'Mariana González', 'Editado', 'EFG345', '37%', 20021, 1521),
(55522, 'No añadido', 'Mateo García', 'No editado', 'GHI901', '89%', 20022, 1522),
(55523, 'Añadido', 'Sofía Martínez', 'Editado', 'JKL012', '45%', 20023, 1523),
(55524, 'No añadido', 'Sebastián Herrera', 'No editado', 'MNO345', '81%', 20024, 1524),
(55525, 'No añadido', 'Isabella Castro', 'No editado', 'PQR678', '53%', 20025, 1525),
(55526, 'Añadido', 'Samuel Torres', 'Editado', 'STU901', '77%', 20026, 1526),
(55527, 'Añadido', 'Camila Vargas', 'Editado', 'VWX123', '14%', 20027, 1527),
(55528, 'No añadido', 'Daniel Ríos', 'No editado', 'YZA456', '99%', 20028, 1528),
(55529, 'Añadido', 'Manuela Acosta', 'No editado', 'BCD789', '60%', 20029, 1529),
(55530, 'No añadido', 'Juan David Franco', 'Editado', 'CDE012', '7%', 20030, 1530),
(55531, 'Añadido', 'Valeria Moreno', 'No editado', 'DEF345', '25%', 20031, 1531),
(55532, 'No añadido', 'David Henao', 'Editado', 'EFG567', '92%', 20032, 1532),
(55533, 'Añadido', 'Gabriela Gómez', 'Editado', 'GHI901', '8%', 20033, 1533),
(55534, 'Añadido', 'Santiago Ramírez', 'No editado', 'JKL012', '71%', 20034, 1534),
(55535, 'No añadido', 'Valentina López', 'Editado', 'MNO345', '39%', 20035, 1535),
(55536, 'Añadido', 'Juan Pablo Rodríguez', 'Editado', 'PQR678', '78%', 20036, 1536),
(55537, 'Añadido', 'Mariana González', 'No editado', 'STU012', '50%', 20037, 1537),
(55538, 'No añadido', 'Mateo García', 'Editado', 'VWX345', '17%', 20038, 1538),
(55539, 'No añadido', 'Sofía Martínez', 'No editado', 'YZA901', '93%', 20039, 1539),
(55540, 'Añadido', 'Sebastián Herrera', 'No editado', 'BCD234', '43%', 20040, 1540),
(55541, 'No añadido', 'Isabella Castro', 'Editado', 'CDE567', '70%', 20041, 1541),
(55542, 'No añadido', 'Samuel Torres', 'Editado', 'DEF901', '33%', 20042, 1542),
(55543, 'No añadido', 'Camila Vargas', 'Editado', 'EFG234', '86%', 20043, 1543),
(55544, 'Añadido', 'Daniel Ríos', 'Editado', 'GHI567', '3%', 20044, 1544),
(55545, 'Añadido', 'Manuela Acosta', 'No editado', 'JKL901', '55%', 20045, 1545),
(55546, 'Añadido', 'Juan David Franco', 'Editado', 'MNO234', '22%', 20046, 1546),
(55547, 'Añadido', 'Valeria Moreno', 'No editado', 'PQR567', '64%', 20047, 1547),
(55548, 'No añadido', 'David Henao', 'Editado', 'STU901', '98%', 20048, 1548),
(55549, 'Añadido', 'Gabriela Gómez', 'Editado', 'YZA234', '6%', 20049, 1549),
(55550, 'No añadido', 'Juan David Franco', 'No editado', 'BCD567', '29%', 20050, 1550);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `ID_PRODUCTOS` int(10) NOT NULL,
  `NOMBRE_PRODUCTO` varchar(45) DEFAULT NULL,
  `CANTIDAD_PRODUCTO` varchar(45) DEFAULT NULL,
  `DESCRIPCION` varchar(45) DEFAULT NULL,
  `ID_CATEGORIA_DE_PRODUCTOS` int(10) DEFAULT NULL,
  `ID_VENTAS` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`ID_PRODUCTOS`, `NOMBRE_PRODUCTO`, `CANTIDAD_PRODUCTO`, `DESCRIPCION`, `ID_CATEGORIA_DE_PRODUCTOS`, `ID_VENTAS`) VALUES
(0, 'Baterias', '44', 'Reparacion y revision electrico', 20001, 2005),
(40042, 'Alternadores', '14', 'Reparacion y revision electrico', 20002, 2006),
(40043, 'Motores de Arranque', '17', 'Reparacion y revision electrico', 20003, 2007),
(40044, 'Dirección Hidraudica', '50', 'Direccion', 20004, 2008),
(40045, 'Dirección Electrica', '49', 'Direccion', 20005, 2009),
(40046, 'Bomba de Presion', '17', 'Direccion', 20006, 2010),
(40047, 'Tuberías', '4', 'Direccion', 20007, 2011),
(40048, 'Rotula Axial', '54', 'Direccion', 20008, 2012),
(40049, 'Rotula de Dirección', '6', 'Direccion', 20009, 2013),
(40050, 'Liquido Hidraulico', '11', 'Direccion', 20010, 2014),
(40051, 'Correa de Distribucion', '6', 'Direccion', 20011, 2015),
(40052, 'Correa Auxiliar y Tensores', '13', 'Direccion', 20012, 2016),
(40053, 'Bomba de Agua', '23', 'Direccion', 20013, 2017),
(40054, 'Bombas y Inyectores', '3', 'Direccion', 20014, 2018),
(40055, 'Embrague y Bimasa', '38', 'Direccion', 20015, 2019),
(40056, 'Sistema de Lubricacion', '37', 'Direccion', 20016, 2020),
(40057, 'Sistema de Enfriamiento', '20', 'Direccion', 20017, 2021),
(40058, 'Turbo de Intercooler', '18', 'Direccion', 20018, 2022),
(40059, 'Auto-Diagnosis', '36', 'Direccion', 20019, 2023),
(40060, 'Juntas Homocinéticas', '38', 'Transmision', 20020, 2024),
(40061, 'Arbol de Transmision', '11', 'Transmision', 20021, 2025),
(40062, 'Palieres', '5', 'Transmision', 20022, 2026),
(40063, 'Juntas de Cardan', '32', 'Transmision', 20023, 2027),
(40064, 'Rodamientos', '9', 'Transmision', 20024, 2028),
(40065, 'Guarda Polvos', '43', 'Transmision', 20025, 2029),
(40066, 'Amortiguadores y muelles', '24', 'Reparacion y mantenimiento suspensión', 20026, 2030),
(40067, 'Barras Estabilizadoras', '29', 'Reparacion y mantenimiento suspensión', 20027, 2031),
(40068, 'Silentblocks y cojinetes elásticos', '29', 'Reparacion y mantenimiento suspensión', 20028, 2032),
(40069, 'Rótulas', '38', 'Reparacion y mantenimiento suspensión', 20029, 2033),
(40070, 'Mangueta y Buje', '29', 'Reparacion y mantenimiento suspensión', 20030, 2034),
(40071, 'Tirante de Suspensión', '58', 'Reparacion y mantenimiento suspensión', 20031, 2035),
(40072, 'Topes de Suspensión', '12', 'Reparacion y mantenimiento suspensión', 20032, 2036),
(40073, 'Aceite ', '34', 'Mecanica rapida', 20033, 2037),
(40074, 'Filtros', '35', 'Mecanica rapida', 20034, 2038),
(40075, 'Pastillas de freno', '9', 'Mecanica rapida', 20035, 2039),
(40076, 'Disco de freno', '36', 'Mecanica rapida', 20036, 2040),
(40077, 'Neumáticos para furgonetas', '8', 'Mecanica rapida', 20037, 2041),
(40078, 'Neumáticos cara blanca', '47', 'Mecanica rapida', 20038, 2042),
(40079, 'Escobillas', '10', 'Mecanica rapida', 20039, 2043),
(40080, 'Luces', '22', 'Mecanica rapida', 20040, 2044),
(40081, 'Neumáticos para 4×4', '7', 'Mecanica rapida', 20041, 2045),
(40082, 'Neumáticos para SUV', '18', 'Mecanica rapida', 20042, 2046),
(40083, 'Llantas', '8', 'Mecanica rapida', 20043, 2047),
(40084, 'Neumaticos para vehiculo comercial', '24', 'Mecanica rapida', 20044, 2048),
(40085, 'Fundas para asientos de coche', '17', 'Accesorios para el automovil', 20045, 2049),
(40086, 'Bombillas para coche', '35', 'Accesorios para el automovil', 20046, 2050),
(40087, 'Parasoles', '49', 'Accesorios para el automovil', 20047, 2051),
(40088, 'Fundas para volantes', '47', 'Accesorios para el automovil', 20048, 2052),
(40089, 'Escobilla para coche o camion', '48', 'Accesorios para el automovil', 20049, 2053),
(40090, 'Tapacubos', '60', 'Accesorios para el automovil', 20050, 2054);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `ID_PROVEEDOR` int(10) NOT NULL,
  `CONTACTO_PROVEEDOR` varchar(45) DEFAULT NULL,
  `EMPRESA_PROVEEDOR` varchar(45) DEFAULT NULL,
  `DIRECCION_PROVEEDOR` varchar(45) DEFAULT NULL,
  `EMAIL_PROVEEDOR` varchar(45) DEFAULT NULL,
  `CIUDAD_PROVEEDOR` varchar(45) DEFAULT NULL,
  `TELEFONO_PROVEEDOR` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`ID_PROVEEDOR`, `CONTACTO_PROVEEDOR`, `EMPRESA_PROVEEDOR`, `DIRECCION_PROVEEDOR`, `EMAIL_PROVEEDOR`, `CIUDAD_PROVEEDOR`, `TELEFONO_PROVEEDOR`) VALUES
(0, '321 123 4567', 'Auteco', 'Calle Principal', 'juan.perez123@gmail.com', 'Medellín', '210123456'),
(12344, '302 123 4567', 'Taller Automotriz', 'Calle Primera', 'luis.morales456@gmail.com', 'Santa Marta', '1110456789'),
(12354, '304 123 4567', 'Reparaciones Express', 'Calle Primera', 'juan.herrera789@yahoo.com', 'Valledupar', '1710432109'),
(12364, '308 123 4567', 'Mecánica y Diagnóstico Automotriz', 'Calle Primera', 'paola.torres321@hotmail.com', 'Tunja', '2310432109'),
(12374, '300 123 4567', 'Taller de Dirección Hidráulica', 'Calle Primera', 'andres.velasco987@outlook.com', 'Mocoa', '2910321098'),
(12384, '302 123 4567', 'Servicio de Escapes y Silenciadores', 'Calle Primera', 'esteban.morales456@hotmail.com', 'Magangué', '3510321098'),
(12393, '304 123 4567', 'Taller de Inyección Electrónica', 'Calle Primera', 'alejandro.gomez456@gmail.com', 'Dosquebradas', '4110456789'),
(12394, '306 123 4567', 'Mecánica de Vehículos Eléctricos', 'Calle Primera', 'camilo.ortega789@yahoo.com', 'Girón', '4710456789'),
(23456, '317 456 7890', 'Autolarte', 'Avenida Norte', 'carlos.lopez789@yahoo.com', 'Medellín', '410234567'),
(34567, '314 987 6543', 'TallerManía', 'Carrera Principal', 'maria.rodriguez987@yahoo.com', 'Barranquilla', '610321098'),
(34568, '316 987 6543', 'ServiMotor', 'Carrera Principal', 'ana.jimenez789@hotmail.com', 'Manizales', '1210432109'),
(34569, '311 987 6543', 'Mecánica y Electrónica Automotriz', 'Carrera Principal', 'laura.montoya321@gmail.com', 'Neiva', '1810321098'),
(34570, '312 987 6543', 'Servicio de Alineación y Balanceo', 'Carrera Principal', 'diego.ramirez987@yahoo.com', 'Florencia', '2410321098'),
(34571, '314 987 6543', 'Servicio de Climatización Automotriz', 'Carrera Principal', 'camila.salazar456@gmail.com', 'Turbo', '3010456789'),
(34572, '316 987 6543', 'Taller de Vidrios y Parabrisas', 'Carrera Principal', 'andrea.castro123@yahoo.com', 'Fundación', '3610123456'),
(34573, '318 987 6543', 'Servicio de Limpieza de Inyectores', 'Carrera Principal', 'valentina.cortes789@hotmail.com', 'Barrancabermeja', '4210321098'),
(34574, '320 987 6543', 'Servicio de Reparación de Alternadores', 'Carrera Principal', 'juanpablo.garcia321@hotmail.com', 'Sogamoso', '4810321098'),
(45678, '305 123 4567', 'ServiCarros', 'Calle Principal', 'javier.gonzalez321@hotmail.com', 'Bucaramanga', '810321098'),
(45679, '303 123 4567', 'AutoParts Colombia', 'Calle Principal', 'david.vargas987@outlook.com', 'Pasto', '1410123456'),
(45680, '307 123 4567', 'ServiMotores', 'Calle Principal', 'sandra.lopez456@yahoo.com', 'Armenia', '2010321098'),
(45681, '309 123 4567', 'Servicio de Electricidad Automotriz', 'Calle Principal', 'ricardo.mendoza456@gmail.com', 'Girardot', '2610987654'),
(45682, '301 123 4567', 'Servicio de Embellecimiento Automotriz', 'Calle Principal', 'patricia.valencia789@yahoo.com', 'Palmira', '3210234567'),
(45683, '303 123 4567', 'Mecánica de Motocicletas', 'Calle Principal', 'alejandra.guzman321@hotmail.com', 'Zipaquirá', '3810234567'),
(45684, '305 123 4567', 'Taller de Sistemas de Seguridad', 'Calle Principal', 'daniela.rojas987@outlook.com', 'Floridablanca', '4410321098'),
(45685, '307 123 4567', 'Mecánica de Vehículos Híbridos', 'Calle Principal', 'sofia.lopez456@outlook.com', 'Cajicá', '5010321098'),
(56789, '315 456 7890', 'Talleres del Motor', 'Avenida Norte', 'carolina.martinez123@outlook.com', 'Pereira', '1010321098'),
(56790, '320 456 7890', 'Talleres Mecánicos Unidos', 'Avenida Norte', 'marcela.ortega123@hotmail.com', 'Montería', '1610234567'),
(56791, '322 456 7890', 'Servicio de Suspensiones', 'Avenida Norte', 'juanpablo.rios789@gmail.com', 'Riohacha', '2210321098'),
(56792, '324 456 7890', 'Reparación de Cajas de Cambios', 'Avenida Norte', 'daniel.castañeda321@yahoo.com', 'Tumaco', '2810432109'),
(56793, '326 456 7890', 'Taller de Transmisiones Automáticas', 'Avenida Norte', 'diana.restrepo987@gmail.com', 'Arauca', '3410432109'),
(56794, '328 456 7890', 'Servicio de Diagnóstico por Computadora', 'Avenida Norte', 'natalia.lopez123@outlook.com', 'Maicao', '4010321098'),
(56795, '330 456 7890', 'Taller de Motores Diesel', 'Avenida Norte', 'andres.castro123@hotmail.com', 'Chiquinquirá', '4610321098'),
(67890, '310 987 6543', 'Yofred Automotores', 'Carrera Central', 'laura.gomez456@hotmail.com', 'Bogotá', '310987654'),
(78901, '300 123 4567', 'Lubricantes Terpel', 'Calle Primera', 'andres.ramirez321@outlook.com', 'Cali', '510432109'),
(89012, '318 456 7890', 'Auto Centro', 'Avenida Central', 'pedro.sanchez654@gmail.com', 'Cartagena', '710456789'),
(89023, '319 456 7890', 'Lubrimotos', 'Avenida Central', 'andres.gutierrez321@yahoo.com', 'Villavicencio', '1310321098'),
(89024, '321 456 7890', 'Taller de Llantas', 'Avenida Central', 'sergio.gomez987@hotmail.com', 'Popayán', '1910456789'),
(89025, '323 456 7890', 'Taller de Radiadores', 'Avenida Central', 'luisa.garcia123@outlook.com', 'Quibdó', '2510123456'),
(89026, '325 456 7890', 'Taller de Chapa y Pintura', 'Avenida Central', 'mauricio.arango123@hotmail.com', 'Ipiales', '3110321098'),
(89027, '327 456 7890', 'Servicio de Lavado y Engrase', 'Avenida Central', 'santiago.jaramillo789@gmail.com', 'Soacha', '3710987654'),
(89028, '329 456 7890', 'Mecánica de Suspensión Neumática', 'Avenida Central', 'eduardo.marin321@yahoo.com', 'Duitama', '4310234567'),
(89029, '331 456 7890', 'Taller de Suspensión Hidroneumática', 'Avenida Central', 'andres.castillo987@gmail.com', 'Yumbo', '4910234567'),
(90123, '312 987 6543', 'Mecánica Rápida', 'Carrera Central', 'daniel.torres987@yahoo.com', 'Cúcuta', '910234567'),
(90124, '313 987 6543', 'ServiAutos', 'Carrera Central', 'julian.castro456@gmail.com', 'Ibagué', '1510987654'),
(90125, '310 987 6543', 'Taller de Frenos', 'Carrera Central', 'carlos.gutierrez123@outlook.com', 'Sincelejo', '2110234567'),
(90126, '313 987 6543', 'Mecánica Integral', 'Carrera Central', 'laura.rojas789@hotmail.com', 'Yopal', '2710234567'),
(90127, '315 987 6543', 'Mecánica Diesel', 'Carrera Central', 'gabriel.mejia321@outlook.com', 'Buenaventura', '3310321098'),
(90128, '317 987 6543', 'Taller de Cajas de Transferencia', 'Carrera Central', 'sebastian.vargas987@yahoo.com', 'Buga', '3910432109'),
(90129, '319 987 6543', 'Servicio de Cambio de Aceite', 'Carrera Central', 'felipe.rios456@gmail.com', 'Piedecuesta', '4510432109'),
(90130, '321 987 6543', 'Servicio de Reparación de Motores', 'Carrera Central', 'carlos.molina789@gmail.com', 'Jamundí', '5110432109');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prueba_clientes`
--

CREATE TABLE `prueba_clientes` (
  `ID_CLIENTE` int(11) NOT NULL,
  `NOMBRE_CLIENTE` varchar(40) DEFAULT NULL,
  `FECHA_DE_NACIMIENTO` varchar(50) DEFAULT NULL,
  `DIRECCION` varchar(50) DEFAULT NULL,
  `TELEFONO` int(50) DEFAULT NULL,
  `EMAIL` varchar(200) DEFAULT NULL,
  `CIUDAD` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `prueba_clientes`
--

INSERT INTO `prueba_clientes` (`ID_CLIENTE`, `NOMBRE_CLIENTE`, `FECHA_DE_NACIMIENTO`, `DIRECCION`, `TELEFONO`, `EMAIL`, `CIUDAD`) VALUES
(900901, 'SANDRA  ANDRADE PRIETO', '04/08/1990', 'Diagonal 27 No. 137 - 8', 2635874, 'olgavictoriaandradevaron@elempresario.net.co', 'Bogota'),
(900902, 'CLAUDIA MARCELA SIERRA CARDOZO', '12/12/1976', 'Avenida 106 No. 45 - 14', 2653149, 'claudiamarcelasierracardozo@micorreovirtual.com', 'Cali'),
(900903, 'ALVARO  VELA ALVIS', '07/25/1987', 'Avenida 89 No. 130 - 152', 2653327, 'alvarovelaalvis@micolombia.com.co', 'Bogota'),
(900904, 'ARMANDO  USECHE AVILA', '01/17/1953', 'Calle 187 No. 25 - 158', 2653389, 'armandousecheavila@micolombia.com.co', 'Cucuta'),
(900905, 'CARLOS VICENTE TELLEZ BONILLA', '08/08/1947', 'Calle 45 No. 69 - 33', 2653992, 'carlosvicentetellezbonilla@losingenieros.com.co', 'Bogota'),
(900906, 'JUAN DE DIOS  GONGORA PALMA', '08/20/1948', 'Carrera 57 No. 198 - 75', 2657196, 'juandediosgongorapalma@elempresario.net.co', 'Medellin'),
(900907, 'ALEXANDRA MILENA VERA ALFONSO', '11/05/1945', 'Carrera 162 No. 182 - 181', 2658459, 'alexandramilenaveraalfonso@losingenieros.com.co', 'Bogota'),
(900908, 'OSCAR FABIAN ACOSTA VILLANUEVA', '09/02/1945', 'Diagonal 41 No. 121 - 51', 2659854, 'oscarfabianacostavillanueva@micorreovirtual.com', 'Cali'),
(900909, 'FAVIO ARMANDO PEREZ FRANCO', '09/02/1954', 'Carrera 136 No. 111 - 72', 2660898, 'favioarmandoperezfranco@micorreovirtual.com', 'Medellin'),
(900910, 'MARIA NURY CAMPOS SALAZAR', '06/30/1965', 'Calle 138 No. 84 - 26', 2664478, 'marianurycampossalazar@micolombia.com.co', 'Bogota'),
(900911, 'JUAN CAMILO GONZALEZ PAEZ', '05/20/1977', 'Carrera 111 No. 183 - 70', 2664858, 'juancamilogonzalezpaez@losingenieros.com.co', 'Cucuta'),
(900912, 'JUAN MANUEL GOMEZ PARADA', '05/10/1957', 'Carrera 79 No. 43 - 155', 2666419, 'juanmanuelgomezparada@micorreovirtual.com', 'Bogota'),
(900913, 'JOSE RUBEN GUZMAN OVIEDO', '12/17/1971', 'Calle 5 No. 63 - 10', 2666606, 'joserubenguzmanoviedo@miempresa.com.co', 'Medellin'),
(900914, 'MANUEL CESAR CHARRY RODRIGUEZ', '10/27/1958', 'Diagonal 18 No. 4 - 90', 2669641, 'manuelcesarcharryrodriguez@miempresa.com.co', 'Medellin'),
(900915, 'CONSUELO AMALIA SARMIENTO CARRASCO', '05/22/1960', 'Calle 128 No. 106 - 76', 2670757, 'consueloamaliasarmientocarrasco@miempresa.com.co', 'Cali'),
(900916, 'WILMER ARLEY LEON MENGUAL', '07/17/1962', 'Carrera 123 No. 70 - 1', 2670808, 'wilmerarleyleonmengual@miempresa.com.co', 'Cucuta'),
(900917, 'NIDIA LORENA ARCINIEGAS TRUJILLO', '09/14/1945', 'Transversal 24 No. 200 - 183', 2673099, 'nidialorenaarciniegastrujillo@losmedicos.com.co', 'Bogota'),
(900918, 'AMPARO  VARON ARBELAEZ', '05/01/1951', 'Transversal 152 No. 49 - 103', 2675228, 'amparovaronarbelaez@miempresa.com.co', 'Bogota'),
(900919, 'PEDRO JOSE MORENO HERRERA', '06/30/1951', 'Avenida 169 No. 80 - 184', 2681452, 'pedrojosemorenoherrera@losmedicos.com.co', 'Medellin'),
(900920, 'ANDRES GEOVANNI VARGAS ARCE', '12/14/1954', 'Calle 167 No. 29 - 109', 2682067, 'andresgeovannivargasarce@elempresario.net.co', 'Cali'),
(900921, 'ROBERTO  MENDOZA LAVERDE', '11/10/1976', 'Calle 147 No. 46 - 4', 2682353, 'robertomendozalaverde@miempresa.com.co', 'Bogota'),
(900922, 'MARTHA LUCIA BONILLA SEGURA', '02/17/1978', 'Avenida 14 No. 146 - 144', 2683543, 'marthaluciabonillasegura@losingenieros.com.co', 'Bogota'),
(900923, 'NESTOR IVAN ARDILA TRONCOSO', '11/09/1988', 'Carrera 40 No. 97 - 70', 2683748, 'nestorivanardilatroncoso@losmedicos.com.co', 'Cucuta'),
(900924, 'MYRIAM JANETH AROCA TOQUICA', '03/15/1987', 'Carrera 84 No. 16 - 140', 2685953, 'myriamjanetharocatoquica@miempresa.com.co', 'Cali'),
(900925, 'BLANCA EMMA URBANO BARRERO', '08/01/1977', 'Avenida 172 No. 36 - 109', 2686061, 'blancaemmaurbanobarrero@miempresa.com.co', 'Cali'),
(900926, 'DIANA PATRICIA RODRIGUEZ CONTRERAS', '11/08/1960', 'Calle 140 No. 106 - 200', 2686804, 'dianapatriciarodriguezcontreras@losingenieros.com.co', 'Bogota'),
(900927, 'ALVARO ENRIQUE VEGA ALZATE', '01/16/1985', 'Calle 129 No. 119 - 91', 2694761, 'alvaroenriquevegaalzate@micorreovirtual.com', 'Bogota'),
(900928, 'MYRIAM  AVENDAÑO TAPIERO', '12/02/1954', 'Calle 164 No. 145 - 174', 2695195, 'myriamavendañotapiero@miempresa.com.co', 'Bogota'),
(900929, 'XIOMARA ANDREA LEGUIZAMO MIRANDA', '02/03/1976', 'Transversal 200 No. 22 - 55', 2697291, 'xiomaraandrealeguizamomiranda@micorreovirtual.com', 'Medellin'),
(900930, 'OSCAR  ALDANA VIDAL', '11/14/1987', 'Calle 74 No. 128 - 152', 2698547, 'oscaraldanavidal@losingenieros.com.co', 'Bogota'),
(900931, 'OSCAR JULIAN PARRA GONZALEZ', '08/10/1946', 'Transversal 89 No. 57 - 2', 2700739, 'oscarjulianparragonzalez@elempresario.net.co', 'Bogota'),
(900932, 'FRANCISCO JAVIER PEÑA GODOY', '01/02/1969', 'Calle 114 No. 45 - 138', 2704559, 'franciscojavierpeñagodoy@losmedicos.com.co', 'Medellin'),
(900933, 'SENA  LUIS MACHADO', '03/06/1988', 'Avenida 124 No. 1 - 123', 2706527, 'senaluismachado@micorreovirtual.com', 'Cali'),
(900934, 'PAULA ANDREA NIETO HERNANDEZ', '12/13/1969', 'Carrera 158 No. 155 - 103', 2710088, 'paulaandreanietohernandez@micolombia.com.co', 'Bogota'),
(900935, 'CONSUELO LEONOR SANCHEZ CASTAÑEDA', '10/28/1960', 'Carrera 138 No. 135 - 171', 2715491, 'consueloleonorsanchezcastañeda@micolombia.com.co', 'Bogota'),
(900936, 'CARMEN  TAPIA CAMPO', '08/20/1959', 'Carrera 47 No. 86 - 143', 2715848, 'carmentapiacampo@losmedicos.com.co', 'Medellin'),
(900937, 'ANGELA ROSA VANEGAS ARTEAGA', '10/20/1949', 'Calle 124 No. 3 - 37', 2717240, 'angelarosavanegasarteaga@micolombia.com.co', 'Bogota'),
(900938, 'RICARDO MAURICIO MENESES LASTRA', '07/21/1971', 'Avenida 130 No. 72 - 65', 2717591, 'ricardomauriciomeneseslastra@losmedicos.com.co', 'Cali'),
(900939, 'LINDA ROCIO GALEANO PUERTA', '04/10/1959', 'Carrera 22 No. 14 - 138', 2720376, 'lindarociogaleanopuerta@elempresario.net.co', 'Medellin'),
(900940, 'LUIS YADIR CUELLAR REINA', '07/05/1986', 'Calle 7 No. 71 - 191', 2720391, 'luisyadircuellarreina@micolombia.com.co', 'Cali'),
(900941, 'CARLOS HUGO TORRES BOCANEGRA', '11/27/1980', 'Carrera 197 No. 135 - 199', 2720586, 'carloshugotorresbocanegra@miempresa.com.co', 'Cali'),
(900942, 'JUSTO  GARCIA PINZON', '07/16/1989', 'Calle 44 No. 126 - 126', 2721579, 'justogarciapinzon@miempresa.com.co', 'Cucuta'),
(900943, 'ALVARO ERNESTO VASQUEZ ARANZALEZ', '01/15/1958', 'Calle 18 No. 70 - 199', 2723856, 'alvaroernestovasquezaranzalez@losmedicos.com.co', 'Bogota'),
(900944, 'DAGGER  SALDAÑA CASTILLO', '10/06/1951', 'Transversal 64 No. 49 - 7', 2725331, 'daggersaldañacastillo@miempresa.com.co', 'Bogota'),
(900945, 'RICARDO  MOLINA LANDAZABAL', '04/28/1956', 'Carrera 106 No. 168 - 83', 2727435, 'ricardomolinalandazabal@micorreovirtual.com', 'Medellin'),
(900946, 'ALBERTO FEDERICO VILLARRAGA AGUIAR', '04/18/1951', 'Transversal 113 No. 14 - 9', 2727728, 'albertofedericovillarragaaguiar@miempresa.com.co', 'Medellin'),
(900947, 'CLAUDIA LILIANA SOTO CARDEÑO', '11/27/1987', 'Avenida 148 No. 120 - 66', 2728810, 'claudialilianasotocardeño@micorreovirtual.com', 'Cali'),
(900948, 'FRANCISCO ANTONIO PEÑALOZA GARCIA', '12/24/1957', 'Calle 3 No. 53 - 200', 2730417, 'franciscoantoniopeñalozagarcia@losingenieros.com.co', 'Cali'),
(900949, 'DORA TERESA REYES DIAZ', '12/28/1946', 'Calle 190 No. 186 - 190', 2730893, 'dorateresareyesdiaz@micolombia.com.co', 'Bogota'),
(900950, 'MARIA DERLY CASTAÑO RUEDA', '09/28/1970', 'Diagonal 96 No. 25 - 127', 2734887, 'mariaderlycastañorueda@losmedicos.com.co', 'Bogota');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `ID_ROL` int(10) NOT NULL,
  `TIPO_ROL` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `ID_SERVICIOS` int(10) NOT NULL,
  `NOMBRE_SERVICIOS` varchar(100) DEFAULT NULL,
  `PRECIO` varchar(100) DEFAULT NULL,
  `ID_CATEGORIA_SERVICIOS` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`ID_SERVICIOS`, `NOMBRE_SERVICIOS`, `PRECIO`, `ID_CATEGORIA_SERVICIOS`) VALUES
(0, 'CAMBIO DE ACEITE Y FILTRO', '90000', 12397),
(94414, 'REVISIÓN Y MANTENIMIENTO DE FRENOS', '85000', 12407),
(94415, 'ALINEACIÓN Y BALANCEO DE NEUMÁTICOS', '80000', 12418),
(94416, 'CAMBIO DE NEUMÁTICOS', '75000', 12423),
(94417, 'CAMBIO DE BATERÍA', '70000', 12431),
(94418, 'DIAGNÓSTICO Y REPARACIÓN DE SISTEMAS ELÉCTRICOS', '65000', 12442),
(94419, 'CAMBIO DE BUJÍAS Y CABLES DE ENCENDIDO', '60000', 12451),
(94420, 'SUSTITUCIÓN DE CORREA DE DISTRIBUCIÓN', '55000', 23458),
(94421, 'REEMPLAZO DE AMORTIGUADORES Y SUSPENSIÓN', '50000', 34569),
(94422, 'REPARACIÓN DE SISTEMA DE ESCAPE', '45000', 34584),
(94423, 'DIAGNÓSTICO Y REPARACIÓN DE PROBLEMAS DE TRANSMISIÓN', '40000', 34585),
(94424, 'LIMPIEZA Y AJUSTE DE INYECTORES DE COMBUSTIBLE', '35000', 34586),
(94425, 'REPARACIÓN DE SISTEMA DE CLIMATIZACIÓN Y AIRE ACONDICIONADO', '30000', 34587),
(94426, 'SERVICIO DE AFINACIÓN Y AJUSTE DEL MOTOR', '40000', 34588),
(94427, 'REPARACIÓN DE SISTEMA DE DIRECCIÓN', '60000', 34589),
(94428, 'REVISIÓN Y REPARACIÓN DE SISTEMA DE REFRIGERACIÓN', '80000', 34590),
(94429, 'CAMBIO DE FILTRO DE AIRE Y HABITÁCULO', '100000', 45679),
(94430, 'REPARACIÓN DE SISTEMA DE FRENOS ANTIBLOQUEO ', '120000', 45684),
(94431, 'REEMPLAZO DE SENSORES Y ACTUADORES', '140000', 45685),
(94432, 'INSPECCIÓN Y MANTENIMIENTO GENERAL DEL VEHÍCULO', '60000', 45686),
(94433, 'REPARACIÓN DE SISTEMA DE EMBRAGUE', '55000', 45687),
(94434, 'CAMBIO DE KIT DE DISTRIBUCIÓN', '50000', 45688),
(94435, 'LIMPIEZA DE INYECTORES CON ULTRASONIDO', '45000', 45689),
(94436, 'REPARACIÓN DE SISTEMA DE DIRECCIÓN ASISTIDA', '40000', 45690),
(94437, 'REVISIÓN Y AJUSTE DE SISTEMA DE SUSPENSIÓN NEUMÁTICA', '35000', 56794),
(94438, 'REPARACIÓN DE SISTEMA DE CONTROL DE TRACCIÓN', '30000', 56795),
(94439, 'SERVICIO DE FRENOS DE DISCO', '40000', 56796),
(94440, 'CAMBIO DE KIT DE ARRANQUE', '60000', 56797),
(94441, 'REPARACIÓN DE SISTEMA DE ALARMA', '80000', 56798),
(94442, 'REVISIÓN Y AJUSTE DE SISTEMA DE SUSPENSIÓN NEUMÁTICA', '100000', 56799),
(94443, 'SERVICIO DE FRENOS DE DISCO', '120000', 56800),
(94444, 'REPARACIÓN DE SISTEMA DE FRENOS ANTIBLOQUEO ', '140000', 56801),
(94445, 'REVISIÓN Y AJUSTE DE SISTEMA DE SUSPENSIÓN NEUMÁTICA', '120000', 78904),
(94446, 'REEMPLAZO DE SENSORES Y ACTUADORES', '140000', 89014),
(94447, 'REPARACIÓN DE SISTEMA DE ESCAPE', '100000', 89029),
(94448, 'REVISIÓN Y AJUSTE DE SISTEMA DE SUSPENSIÓN NEUMÁTICA', '120000', 89034),
(94449, 'REPARACIÓN DE SISTEMA DE FRENOS ANTIBLOQUEO ', '140000', 89035),
(94450, 'REEMPLAZO DE SENSORES Y ACTUADORES', '60000', 89036),
(94451, 'SERVICIO DE FRENOS DE DISCO', '55000', 89037),
(94452, 'REPARACIÓN DE SISTEMA DE ESCAPE', '50000', 89038),
(94453, 'SERVICIO DE FRENOS DE DISCO', '45000', 89039),
(94454, 'REVISIÓN Y AJUSTE DE SISTEMA DE SUSPENSIÓN NEUMÁTICA', '40000', 90124),
(94455, 'SERVICIO DE FRENOS DE DISCO', '35000', 90129),
(94456, 'REPARACIÓN DE SISTEMA DE ESCAPE', '30000', 90130),
(94457, 'SERVICIO DE FRENOS DE DISCO', '40000', 90131),
(94458, 'REPARACIÓN DE SISTEMA DE FRENOS ANTIBLOQUEO ', '60000', 90132),
(94459, 'REVISIÓN Y AJUSTE DE SISTEMA DE SUSPENSIÓN NEUMÁTICA', '80000', 90133),
(94460, 'REEMPLAZO DE SENSORES Y ACTUADORES', '100000', 90134),
(94461, 'SERVICIO DE FRENOS DE DISCO', '120000', 90135),
(94462, 'REPARACIÓN DE SISTEMA DE ESCAPE', '140000', 67893);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `ID_USUARIO` int(10) NOT NULL,
  `NOMBRE` varchar(45) DEFAULT NULL,
  `APELLIDO` varchar(45) DEFAULT NULL,
  `DIRECCION` varchar(45) DEFAULT NULL,
  `TELEFONO` int(10) DEFAULT NULL,
  `EMAIL` varchar(45) DEFAULT NULL,
  `CIUDAD` varchar(45) DEFAULT NULL,
  `FECHA_DE_NACIMIENTO` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo`
--

CREATE TABLE `vehiculo` (
  `ID_VEHICULO` int(10) NOT NULL,
  `VIN` varchar(45) DEFAULT NULL,
  `MODELO` varchar(45) DEFAULT NULL,
  `COLOR` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `vehiculo`
--

INSERT INTO `vehiculo` (`ID_VEHICULO`, `VIN`, `MODELO`, `COLOR`) VALUES
(0, 'amdhg001', 'Audi', 'azul'),
(2702, 'amdhg002', 'Audi', 'verde'),
(2703, 'amdhg003', 'Audi', 'rojo'),
(2704, 'amdhg004', 'Audi', 'amarillo'),
(2705, 'amdhg005', 'Fullback', 'rojo'),
(2706, 'amdhg006', 'Audi', 'plateado'),
(2707, 'amdhg007', 'Audi', 'naranja'),
(2708, 'amdhg008', 'Audi', 'verde'),
(2709, 'amdhg009', 'Audi', 'vinotinto'),
(2710, 'amdhg010', 'Audi', 'negro'),
(2711, 'amdhg011', 'Audi', 'blanco'),
(2712, 'amdhg012', 'Audi', 'verde'),
(2713, 'amdhg013', 'Audi', 'vinotinto'),
(2714, 'amdhg014', 'Ulysse', 'negro'),
(2715, 'amdhg015', 'Fiat', 'blanco'),
(2716, 'amdhg016', 'Fiat', 'verde'),
(2717, 'amdhg017', 'Fiat', 'rojo'),
(2718, 'amdhg018', 'Fiat', 'amarillo'),
(2719, 'amdhg019', 'Fiat', 'rojo'),
(2720, 'amdhg020', 'Uno', 'plateado'),
(2721, 'amdhg021', 'Mazda', 'verde'),
(2722, 'amdhg022', 'Ford', 'vinotinto'),
(2723, 'amdhg023', 'Ford', 'negro'),
(2724, 'amdhg024', 'Ford', 'blanco'),
(2725, 'amdhg025', 'Ford', 'verde'),
(2726, 'amdhg026', 'Ford', 'vinotinto'),
(2727, 'amdhg027', 'Ford', 'negro'),
(2728, 'amdhg028', 'Ford', 'rojo'),
(2729, 'amdhg029', 'Ford', 'amarillo'),
(2730, 'amdhg030', 'Fiat', 'rojo'),
(2731, 'amdhg031', 'Ford', 'plateado'),
(2732, 'amdhg032', 'Ford', 'rojo'),
(2733, 'amdhg033', 'Ford', 'plateado'),
(2734, 'amdhg034', 'Ford', 'naranja'),
(2735, 'amdhg035', 'Ford', 'verde'),
(2736, 'amdhg036', 'Mazda', 'vinotinto'),
(2737, 'amdhg037', 'Mazda', 'negro'),
(2738, 'amdhg038', 'Ulysse', 'blanco'),
(2739, 'amdhg039', 'Ulysse', 'verde'),
(2740, 'amdhg040', 'Ulysse', 'azul'),
(2741, 'amdhg041', 'Mazda', 'verde'),
(2742, 'amdhg042', 'Mazda', 'rojo'),
(2743, 'amdhg043', 'Mazda', 'amarillo'),
(2744, 'amdhg044', 'Uno', 'rojo'),
(2745, 'amdhg045', 'Mazda', 'plateado'),
(2746, 'amdhg046', 'nissan', 'naranja'),
(2747, 'amdhg047', 'nissan', 'verde'),
(2748, 'amdhg048', 'nissan', 'vinotinto'),
(2749, 'amdhg049', 'Mitsubishi', 'negro'),
(2750, 'amdhg050', 'Mitsubishi', 'blanco');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `ID_VENTAS` int(10) NOT NULL,
  `GANANCIAS` varchar(45) DEFAULT NULL,
  `PRODUCTOS_VENDIDOS` varchar(45) DEFAULT NULL,
  `SERVICIOS_REALIZADOS` varchar(45) DEFAULT NULL,
  `FECHA` varchar(45) DEFAULT NULL,
  `VALOR_TOTAL` varchar(45) DEFAULT NULL,
  `VALOR_SERVICIO` varchar(45) DEFAULT NULL,
  `VALOR_PRODUCTO` varchar(45) DEFAULT NULL,
  `ID_CLIENTE` int(10) DEFAULT NULL,
  `ID_VEHICULO` int(10) DEFAULT NULL,
  `ID_SERVICIOS` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`ID_VENTAS`, `GANANCIAS`, `PRODUCTOS_VENDIDOS`, `SERVICIOS_REALIZADOS`, `FECHA`, `VALOR_TOTAL`, `VALOR_SERVICIO`, `VALOR_PRODUCTO`, `ID_CLIENTE`, `ID_VEHICULO`, `ID_SERVICIOS`) VALUES
(2006, '365', '3', '23', '01/28/2020', '419359', '422', '365', 900902, 2702, 94414),
(2007, '117', '11', '25', '11/21/2020', '1408017', '206', '117', 900903, 2703, 94415),
(2008, '7', '15', '33', '10/02/2021', '91490', '9', '7', 900904, 2704, 94416),
(2009, '159', '19', '8', '11/12/2022', '927432', '255', '159', 900905, 2705, 94417),
(2010, '32', '26', '27', '02/21/2022', '195020', '47', '32', 900906, 2706, 94418),
(2011, '97', '35', '3', '02/27/2022', '618864', '153', '97', 900907, 2707, 94419),
(2012, '263', '31', '8', '05/07/2020', '3637067', '437', '263', 900908, 2708, 94420),
(2013, '57', '11', '1', '04/01/2021', '717508', '82', '57', 900909, 2709, 94421),
(2014, '525', '21', '20', '07/12/2021', '6086860', '651', '525', 900910, 2710, 94422),
(2015, '263', '44', '44', '08/30/2022', '422335', '437', '263', 900911, 2711, 94423),
(2016, '97', '7', '12', '06/05/2020', '1008401', '153', '97', 900912, 2712, 94424),
(2017, '32', '8', '38', '05/22/2021', '298033', '47', '32', 900913, 2713, 94425),
(2018, '91', '6', '23', '12/25/2020', '310893', '154', '91', 900914, 2714, 94426),
(2019, '7', '32', '42', '11/17/2021', '26945', '9', '7', 900915, 2715, 94427),
(2020, '57', '37', '18', '11/18/2021', '816401', '82', '57', 900916, 2716, 94428),
(2021, '263', '25', '24', '04/30/2020', '634377', '437', '263', 900917, 2717, 94429),
(2022, '97', '6', '26', '11/04/2022', '1134585', '153', '97', 900918, 2718, 94430),
(2023, '525', '13', '49', '07/22/2022', '3343963', '651', '525', 900919, 2719, 94431),
(2024, '525', '9', '17', '06/21/2021', '2456364', '651', '525', 900920, 2720, 94432),
(2025, '550', '76', '75', '12/30/2021', '800908', '284', '636', 900921, 2721, 94433),
(2026, '35', '86', '49', '10/19/2022', '706494', '464', '267', 900922, 2722, 94434),
(2027, '430', '93', '71', '09/14/2022', '677710', '926', '565', 900923, 2723, 94435),
(2028, '193', '85', '31', '06/02/2023', '566647', '26', '2', 900924, 2724, 94436),
(2029, '977', '18', '26', '08/03/2023', '796859', '821', '268', 900925, 2725, 94437),
(2030, '894', '10', '2', '05/13/2020', '225989', '771', '504', 900926, 2726, 94438),
(2031, '753', '43', '21', '07/16/2020', '629296', '33', '532', 900927, 2727, 94439),
(2032, '202', '13', '81', '08/05/2020', '460400', '529', '934', 900928, 2728, 94440),
(2033, '323', '38', '48', '09/04/2020', '382812', '131', '100', 900929, 2729, 94441),
(2034, '870', '64', '25', '09/25/2020', '211808', '162', '534', 900930, 2730, 94442),
(2035, '3', '98', '14', '08/05/2021', '901985', '960', '637', 900931, 2731, 94443),
(2036, '996', '80', '17', '11/02/2021', '939002', '659', '161', 900932, 2732, 94444),
(2037, '497', '66', '30', '11/18/2021', '415687', '413', '164', 900933, 2733, 94445),
(2038, '357', '39', '96', '12/08/2021', '441420', '697', '259', 900934, 2734, 94446),
(2039, '992', '76', '42', '01/11/2022', '130750', '770', '905', 900935, 2735, 94447),
(2040, '448', '17', '26', '01/18/2022', '536258', '130', '175', 900936, 2736, 94448),
(2041, '553', '28', '20', '02/23/2022', '334893', '993', '278', 900937, 2737, 94449),
(2042, '320', '43', '85', '03/10/2022', '11090', '108', '623', 900938, 2738, 94450),
(2043, '287', '32', '96', '04/28/2022', '676567', '480', '987', 900939, 2739, 94451),
(2044, '971', '90', '57', '05/24/2022', '400138', '721', '885', 900940, 2740, 94452),
(2045, '79', '87', '100', '07/14/2022', '764323', '670', '42', 900941, 2741, 94453),
(2046, '21', '83', '78', '09/06/2022', '341830', '886', '134', 900942, 2742, 94454),
(2047, '653', '96', '34', '09/21/2022', '365247', '273', '429', 900943, 2743, 94455),
(2048, '354', '65', '30', '09/27/2022', '336590', '800', '728', 900944, 2744, 94456),
(2049, '791', '53', '9', '11/22/2022', '526634', '208', '523', 900945, 2745, 94457),
(2050, '639', '48', '14', '12/23/2022', '645720', '291', '485', 900946, 2746, 94458),
(2051, '812', '14', '78', '01/20/2023', '605563', '634', '291', 900947, 2747, 94459),
(2052, '557', '74', '40', '02/03/2023', '328110', '639', '55', 900948, 2748, 94460),
(2053, '237', '54', '42', '02/08/2023', '622724', '848', '706', 900949, 2749, 94461),
(2054, '897', '6', '17', '02/28/2023', '438443', '663', '813', 900950, 2750, 94462);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`ID_ADMINISTRADOR`);

--
-- Indices de la tabla `categoria_de_productos`
--
ALTER TABLE `categoria_de_productos`
  ADD PRIMARY KEY (`ID_CATEGORIA_DE_PRODUCTO`);

--
-- Indices de la tabla `categoria_servicios`
--
ALTER TABLE `categoria_servicios`
  ADD PRIMARY KEY (`ID_CATEGORIA_SERVICIOS`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`ID_CLIENTES`);

--
-- Indices de la tabla `cronograma`
--
ALTER TABLE `cronograma`
  ADD PRIMARY KEY (`ID_CRONOGRAMA`);

--
-- Indices de la tabla `estado_orden_trabajo`
--
ALTER TABLE `estado_orden_trabajo`
  ADD PRIMARY KEY (`ID_ESTADO_ORDEN_TRABAJO`);

--
-- Indices de la tabla `gestion_clientes`
--
ALTER TABLE `gestion_clientes`
  ADD PRIMARY KEY (`ID_GESTION_CLIENTES`);

--
-- Indices de la tabla `mecanicos`
--
ALTER TABLE `mecanicos`
  ADD PRIMARY KEY (`ID_MECANICOS`);

--
-- Indices de la tabla `orden_trabajo`
--
ALTER TABLE `orden_trabajo`
  ADD PRIMARY KEY (`ID_ORDEN_TRABAJO`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`ID_PRODUCTOS`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`ID_PROVEEDOR`);

--
-- Indices de la tabla `prueba_clientes`
--
ALTER TABLE `prueba_clientes`
  ADD PRIMARY KEY (`ID_CLIENTE`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`ID_ROL`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`ID_SERVICIOS`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID_USUARIO`);

--
-- Indices de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD PRIMARY KEY (`ID_VEHICULO`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`ID_VENTAS`),
  ADD KEY `ID_SERVICIOS` (`ID_SERVICIOS`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`ID_SERVICIOS`) REFERENCES `servicios` (`ID_SERVICIOS`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
