-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-09-2023 a las 05:41:33
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
-- Base de datos: `nueva`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignacionrolpermiso`
--

CREATE TABLE `asignacionrolpermiso` (
  `IDAsignacion` int(10) NOT NULL,
  `IDRol` int(10) DEFAULT NULL,
  `IDPermiso` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `asignacionrolpermiso`
--

INSERT INTO `asignacionrolpermiso` (`IDAsignacion`, `IDRol`, `IDPermiso`) VALUES
(1, 1, 1),
(2, 2, 8),
(3, 1, 2),
(4, 1, 3),
(5, 1, 4),
(6, 1, 5),
(7, 1, 6),
(8, 1, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `identificacion` bigint(20) UNSIGNED NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `fecha_de_nacimiento` date NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(50) NOT NULL,
  `ciudad` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `inhabilitado` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `identificacion`, `nombres`, `fecha_de_nacimiento`, `direccion`, `telefono`, `email`, `ciudad`, `created_at`, `updated_at`, `inhabilitado`) VALUES
(2, 480721726847, 'Reprehenderit similique necessitatibus quae dignis', '1970-10-15', 'Et eos culpa voluptatem accusantium', 788888888, 'pointerariza@gmail.com', 'Arauca', '2023-08-14 09:57:18', '2023-08-15 09:34:10', 1),
(3, 480721726847, 'Reprehenderit similique necessitatibus quae dignis', '1970-10-15', 'Et eos culpa voluptatem accusantium', 788888888, 'pointerariza@gmail.com', 'Montería', '2023-08-14 09:58:31', '2023-08-14 10:03:50', 1),
(4, 657637133297, 'Recusandae Dolor qui architecto omnis asperiores', '2021-03-27', 'Eligendi cupiditate id vel consequuntur ad unde ut', 8440763226, 'fahimawa@mailinator.com', 'Bogotá', '2023-08-14 10:04:19', '2023-08-14 10:04:19', 0),
(5, 104483714221, 'Culpa duis iste eum ea', '2019-08-17', 'Incidunt pariatur Facilis eligendi iusto qui lab', 9028167218, 'riqe@mailinator.com', 'Manizales', '2023-08-14 10:04:23', '2023-08-14 10:04:23', 0),
(6, 711458100936, 'Lorem sed laudantium eum dolores et qui sed ipsum', '1983-05-26', 'Consequat Sapiente animi aspernatur non nulla ip', 3611970257, 'cuhezoqe@mailinator.com', 'Manizales', '2023-08-14 10:04:26', '2023-08-14 10:04:26', 0),
(7, 608092046591, 'Beatae est aliquip aut inventore voluptate maxime', '2017-03-03', 'Deserunt beatae ut vel nisi enim in aut voluptatem', 8885373426, 'jysesabow@mailinator.com', 'Valledupar', '2023-08-14 10:04:28', '2023-08-14 10:04:28', 0),
(8, 574264997986, 'Enim non consectetur nulla nostrum distinctio Cum', '1987-06-06', 'Aut ut amet aliquam labore ipsam sed ut deserunt', 6057507272, 'xasakyke@mailinator.com', 'Arauca', '2023-08-14 10:04:43', '2023-08-14 10:04:43', 0),
(9, 151856310987, 'Voluptatem ab asperiores in cum est aspernatur sin', '2009-10-28', 'Est nihil explicabo Dolor mollit irure non volupt', 9040714796, 'kulufifyl@mailinator.com', 'Yopal', '2023-08-14 10:04:46', '2023-08-14 10:04:46', 0),
(10, 327852476432, 'Dolore quisquam aut esse eaque mollit culpa Nam e', '1978-10-04', 'Nisi nesciunt quasi aut sunt doloribus numquam si', 6706188508, 'tusoke@mailinator.com', 'Mocoa', '2023-08-14 10:04:49', '2023-08-14 10:04:49', 0),
(11, 633142334512, 'Culpa ea nisi ex fugiat quas', '1995-12-22', 'Ut est reprehenderit non vel quaerat rerum nesciu', 4560491556, 'rabatuca@mailinator.com', 'Inírida', '2023-08-14 10:04:52', '2023-08-14 10:04:52', 0),
(12, 800769725384, 'Officiis numquam minus expedita est beatae ducimus', '1976-11-01', 'Minima neque est voluptatum nostrud sed ratione al', 6079789957, 'zazi@mailinator.com', 'Puerto Carreño', '2023-08-14 10:04:56', '2023-08-14 10:04:56', 0),
(13, 819798881453, 'Irure aut tempore et tempore', '1983-05-12', 'Iusto mollitia enim reprehenderit tempore est vo', 9418953466, 'wogahi@mailinator.com', 'Pereira', '2023-08-14 10:05:03', '2023-08-14 10:05:03', 0),
(14, 314374427850, 'Perspiciatis veniam nihil rerum autem', '1973-07-28', 'Id fugiat non sit laudantium saepe', 6543789199, 'codawuno@mailinator.com', 'Ibagué', '2023-08-14 10:05:05', '2023-08-14 10:05:05', 0),
(15, 122566899, 'Eduer Garcia Gomez', '1955-10-16', 'calle 25# 195-15', 311111111, 'dadovys@mailinator.com', 'Zumapa', NULL, NULL, 0),
(16, 1458962, 'Voluptate totam labo', '1989-07-26', 'Omnis sint excepteu', 3111112547, 'rusalimap@mailinator.com', 'Provident neque qui', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mecanicos`
--

CREATE TABLE `mecanicos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cedula` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `direccion` varchar(45) NOT NULL,
  `telefono` int(10) UNSIGNED NOT NULL,
  `email` varchar(45) NOT NULL,
  `ciudad` varchar(45) NOT NULL,
  `especialidad` varchar(45) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `inhabilitado` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `mecanicos`
--

INSERT INTO `mecanicos` (`id`, `cedula`, `nombre`, `apellido`, `direccion`, `telefono`, `email`, `ciudad`, `especialidad`, `created_at`, `updated_at`, `inhabilitado`) VALUES
(1, 526987413, 'Carlitos', 'Santander', 'Omnis sint excepteu', 999999999, 'rusalimap@mailinator.com', 'Springfield', 'Visage', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(5, '2019_08_19_000000_create_failed_jobs_table', 1),
(6, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(7, '2023_06_29_185918_create_ventas_table', 1),
(8, '2023_07_01_014230_create_clientes_table', 1),
(9, '2023_07_02_095620_create_productos_table', 1),
(10, '2023_07_03_192525_create_sessions_table', 1),
(11, '2023_07_06_145510_create_mecanicos_table', 1),
(12, '2023_07_07_022035_add_inhabilitado_to_mecanicos_table', 1),
(13, '2023_07_07_101310_add_inhabilitado_to_productos_table', 1),
(14, '2023_07_07_101812_add_inhabilitado_to_clientes_table', 1),
(15, '2023_07_07_102517_add_inhabilitado_to_ventas_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE `permisos` (
  `IDPermiso` int(10) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Descripcion` varchar(255) NOT NULL,
  `Nivel` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`IDPermiso`, `Nombre`, `Descripcion`, `Nivel`) VALUES
(1, 'Gestión de Usuarios', 'Permiso para agregar, editar o eliminar cuentas de usuario en el sistema.', 1),
(2, 'Gestión de Clientes', 'Permiso para agregar, editar o inhabilitar clientes en el sistema.', 1),
(3, 'Gestión de productos', 'Permiso para agregar, editar o inhabilitar productos en el sistema.', 1),
(4, 'Gestión de mecanicos', 'Permiso para agregar, editar o inhabilitar mecanicos en el sistema.', 1),
(5, 'Gestión de ventas', 'Permiso para agregar, editar o inhabilitar ventas en el sistema.', 1),
(6, 'Gestión de promociones', 'Permiso para crear y administrar promociones y descuentos en productos y servicios', 1),
(7, 'Gestión de PQR', 'Permiso para crear y administrar peticiones, quejas y reclamos', 1),
(8, 'Añadir tareas a mecanicos', 'Permiso para crear y administrar tareas a mecanicos disponibles', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(10) UNSIGNED NOT NULL,
  `NOMBRE_PRODUCTO` varchar(255) NOT NULL,
  `CANTIDAD_PRODUCTO` varchar(255) NOT NULL,
  `DESCRIPCION` varchar(255) NOT NULL,
  `ID_CATEGORIA_DE_PRODUCTOS` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `inhabilitado` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `NOMBRE_PRODUCTO`, `CANTIDAD_PRODUCTO`, `DESCRIPCION`, `ID_CATEGORIA_DE_PRODUCTOS`, `created_at`, `updated_at`, `inhabilitado`) VALUES
(2, 'Quipitos', '500', 'fiesta en tu boca', 1012, NULL, NULL, 0),
(3, 'Et incididunt offici', '300', 'Aut suscipit expedit', 9, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `IDRol` int(10) NOT NULL,
  `NombreRol` varchar(50) NOT NULL,
  `Descripcion_Rol` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`IDRol`, `NombreRol`, `Descripcion_Rol`) VALUES
(1, 'Administrador', 'El administrador tiene permiso para acceder a todos los módulos del software sin restricción.'),
(2, 'Mecánico', 'El mecánico tiene permiso para acceder al módulo de lista de mecánicos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'leonardo', 'leo4@gmail.com', NULL, '$2y$10$3MixogSO4yJS6rXGiTGexuH0HBWpsNV8lRfT3mEm6A49Jr5siZmA2', NULL, NULL, NULL, NULL, '2023-07-14 07:17:57', '2023-07-14 07:17:57'),
(2, 'david', 'david1@gmail.com', NULL, '$2y$10$1XNyw7JxKPSRcdWUINN9yuQ4ybkr2JUHx0Wh2OruyBC9WwJdK.nzy', NULL, NULL, NULL, NULL, '2023-08-14 09:31:52', '2023-08-14 09:31:52'),
(3, 'internet', 'internet@gmail.com', '0000-00-00 00:00:00', 'internet123456', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'betty', 'payasito32@gmail.com', '0000-00-00 00:00:00', 'payasito32', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'favian', 'favian7@gmail.com', '0000-00-00 00:00:00', 'favian123456789', NULL, NULL, NULL, NULL, '2023-09-10 01:47:51', '2023-09-10 01:47:51'),
(6, 'leo', 'leo@gmail.com', NULL, '123456789', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'Cristian', 'cristian99@gmail.com', NULL, '987654321', NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'miguelito', 'oxido4@hotmail.com', NULL, 'oxido', NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'Pablo Gomez', 'pablitogomez47@gmail.com', NULL, 'pablito', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `email_verified_at` datetime DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `two_factor_confirmed_at` datetime DEFAULT NULL,
  `two_factor_recovery_codes` longtext DEFAULT NULL,
  `two_factor_secret` longtext DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Mecanico` varchar(255) NOT NULL,
  `Porcentaje` varchar(255) NOT NULL,
  `MarcaDelVehiculo` varchar(255) NOT NULL,
  `ModeloVehiculo` varchar(255) NOT NULL,
  `Matricula` varchar(255) NOT NULL,
  `Vin` varchar(255) NOT NULL,
  `FechaDeSolicitud` varchar(255) NOT NULL,
  `Servicio` varchar(255) NOT NULL,
  `Producto` varchar(255) NOT NULL,
  `Total` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `inhabilitado` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id`, `Mecanico`, `Porcentaje`, `MarcaDelVehiculo`, `ModeloVehiculo`, `Matricula`, `Vin`, `FechaDeSolicitud`, `Servicio`, `Producto`, `Total`, `created_at`, `updated_at`, `inhabilitado`) VALUES
(1, 'Cristian', '30%', 'Audi', 'zoom', 'VMX-896', 'rgreunoruehng114', '11-12-2023', 'cambio de neumaticos', 'Llantas michelin', '350000', NULL, NULL, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asignacionrolpermiso`
--
ALTER TABLE `asignacionrolpermiso`
  ADD PRIMARY KEY (`IDAsignacion`),
  ADD KEY `IDRol` (`IDRol`),
  ADD KEY `IDPermiso` (`IDPermiso`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `mecanicos`
--
ALTER TABLE `mecanicos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`IDPermiso`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`IDRol`);

--
-- Indices de la tabla `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `mecanicos`
--
ALTER TABLE `mecanicos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `permisos`
--
ALTER TABLE `permisos`
  MODIFY `IDPermiso` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asignacionrolpermiso`
--
ALTER TABLE `asignacionrolpermiso`
  ADD CONSTRAINT `asignacionrolpermiso_ibfk_1` FOREIGN KEY (`IDRol`) REFERENCES `rol` (`IDRol`),
  ADD CONSTRAINT `asignacionrolpermiso_ibfk_2` FOREIGN KEY (`IDPermiso`) REFERENCES `permisos` (`IdPermiso`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
