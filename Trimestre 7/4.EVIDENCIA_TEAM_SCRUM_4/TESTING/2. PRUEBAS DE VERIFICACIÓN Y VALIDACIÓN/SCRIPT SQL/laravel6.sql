-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-03-2024 a las 05:39:25
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `laravel6`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `claims`
--

CREATE TABLE `claims` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `telefono` varchar(191) NOT NULL,
  `identificacion` varchar(191) NOT NULL,
  `asunto` varchar(191) NOT NULL,
  `mensaje` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(191) NOT NULL DEFAULT 'Incompleto'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cedula_cliente` int(10) UNSIGNED NOT NULL,
  `nombre_cliente` varchar(45) NOT NULL,
  `apellido_cliente` varchar(45) NOT NULL,
  `direccion` varchar(45) NOT NULL,
  `telefono` int(10) UNSIGNED NOT NULL,
  `email` varchar(45) NOT NULL,
  `ciudad` varchar(45) NOT NULL,
  `vehiculo_marca_id` bigint(20) UNSIGNED NOT NULL,
  `vehiculo_modelo_id` bigint(20) UNSIGNED NOT NULL,
  `vehiculo_matricula_id` bigint(20) UNSIGNED NOT NULL,
  `vehiculo_color_id` bigint(20) UNSIGNED NOT NULL,
  `desactivado` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `cedula_cliente`, `nombre_cliente`, `apellido_cliente`, `direccion`, `telefono`, `email`, `ciudad`, `vehiculo_marca_id`, `vehiculo_modelo_id`, `vehiculo_matricula_id`, `vehiculo_color_id`, `desactivado`, `created_at`, `updated_at`) VALUES
(1, 1233501530, 'JULIAN DAVID', 'BARRIOS HIDALGO', 'Cl2 #89-36', 3053632400, 'jbarrioshidalgo@outlook.com', 'Bogotá', 1, 1, 1, 1, 0, '2024-03-14 08:01:06', '2024-03-14 08:01:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(191) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
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
  `desactivado` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `mecanicos`
--

INSERT INTO `mecanicos` (`id`, `cedula`, `nombre`, `apellido`, `direccion`, `telefono`, `email`, `ciudad`, `especialidad`, `desactivado`, `created_at`, `updated_at`) VALUES
(1, 1233501530, 'Fredy', 'Hidalgo', 'Cl2 #89-36', 3053253349, 'jjuaco@gmail.com', 'Armenia', 'Alineacion', 0, '2024-03-14 08:01:44', '2024-03-14 08:01:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2024_02_11_043732_create_claims_table', 1),
(7, '2024_02_18_074449_productos', 1),
(8, '2024_02_18_074719_servicios', 1),
(9, '2024_02_18_080927_vehiculos', 1),
(10, '2024_02_18_090020_clientes', 1),
(11, '2024_02_18_194638_mecanicos', 1),
(12, '2024_02_22_023757_tareas', 1),
(13, '2024_02_22_173350_ventas', 1),
(14, '2024_02_22_220510_create_permission_tables', 1),
(15, '2024_02_25_021205_create_jobs_table', 1),
(16, '2024_02_25_043538_create_messages_table', 1),
(17, '2024_03_07_182240_create_notifications_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) NOT NULL,
  `type` varchar(191) NOT NULL,
  `notifiable_type` varchar(191) NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `guard_name` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, '/home', 'web', '2024-03-14 06:13:07', '2024-03-14 06:13:07'),
(2, 'mecanicos.index', 'web', '2024-03-14 06:13:07', '2024-03-14 06:13:07'),
(3, 'mecanicos.create', 'web', '2024-03-14 06:13:07', '2024-03-14 06:13:07'),
(4, 'mecanicos.edit', 'web', '2024-03-14 06:13:07', '2024-03-14 06:13:07'),
(5, 'mecanicos.destroy', 'web', '2024-03-14 06:13:07', '2024-03-14 06:13:07'),
(6, 'mecanicos.show', 'web', '2024-03-14 06:13:08', '2024-03-14 06:13:08'),
(7, 'mecanicos.pdf', 'web', '2024-03-14 06:13:08', '2024-03-14 06:13:08'),
(8, 'productos.index', 'web', '2024-03-14 06:13:08', '2024-03-14 06:13:08'),
(9, 'productos.create', 'web', '2024-03-14 06:13:08', '2024-03-14 06:13:08'),
(10, 'productos.edit', 'web', '2024-03-14 06:13:08', '2024-03-14 06:13:08'),
(11, 'productos.destroy', 'web', '2024-03-14 06:13:08', '2024-03-14 06:13:08'),
(12, 'productos.show', 'web', '2024-03-14 06:13:08', '2024-03-14 06:13:08'),
(13, 'servicios.index', 'web', '2024-03-14 06:13:08', '2024-03-14 06:13:08'),
(14, 'servicios.create', 'web', '2024-03-14 06:13:08', '2024-03-14 06:13:08'),
(15, 'servicios.edit', 'web', '2024-03-14 06:13:08', '2024-03-14 06:13:08'),
(16, 'servicios.destroy', 'web', '2024-03-14 06:13:08', '2024-03-14 06:13:08'),
(17, 'servicios.show', 'web', '2024-03-14 06:13:08', '2024-03-14 06:13:08'),
(18, 'vehiculos.index', 'web', '2024-03-14 06:13:08', '2024-03-14 06:13:08'),
(19, 'vehiculos.create', 'web', '2024-03-14 06:13:08', '2024-03-14 06:13:08'),
(20, 'vehiculos.edit', 'web', '2024-03-14 06:13:08', '2024-03-14 06:13:08'),
(21, 'vehiculos.destroy', 'web', '2024-03-14 06:13:08', '2024-03-14 06:13:08'),
(22, 'vehiculos.show', 'web', '2024-03-14 06:13:08', '2024-03-14 06:13:08'),
(23, 'clientes.index', 'web', '2024-03-14 06:13:08', '2024-03-14 06:13:08'),
(24, 'clientes.create', 'web', '2024-03-14 06:13:08', '2024-03-14 06:13:08'),
(25, 'clientes.edit', 'web', '2024-03-14 06:13:08', '2024-03-14 06:13:08'),
(26, 'clientes.destroy', 'web', '2024-03-14 06:13:08', '2024-03-14 06:13:08'),
(27, 'clientes.show', 'web', '2024-03-14 06:13:08', '2024-03-14 06:13:08'),
(28, 'tareas.index', 'web', '2024-03-14 06:13:08', '2024-03-14 06:13:08'),
(29, 'tareas.create', 'web', '2024-03-14 06:13:08', '2024-03-14 06:13:08'),
(30, 'tareas.edit', 'web', '2024-03-14 06:13:08', '2024-03-14 06:13:08'),
(31, 'tareas.destroy', 'web', '2024-03-14 06:13:08', '2024-03-14 06:13:08'),
(32, 'tareas.show', 'web', '2024-03-14 06:13:08', '2024-03-14 06:13:08'),
(33, 'ventas.index', 'web', '2024-03-14 06:13:08', '2024-03-14 06:13:08'),
(34, 'ventas.create', 'web', '2024-03-14 06:13:08', '2024-03-14 06:13:08'),
(35, 'ventas.edit', 'web', '2024-03-14 06:13:08', '2024-03-14 06:13:08'),
(36, 'ventas.destroy', 'web', '2024-03-14 06:13:08', '2024-03-14 06:13:08'),
(37, 'ventas.show', 'web', '2024-03-14 06:13:08', '2024-03-14 06:13:08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
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
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre_producto` varchar(45) NOT NULL,
  `cantidad_productos` int(11) NOT NULL,
  `precio_producto` decimal(10,2) NOT NULL DEFAULT 0.00,
  `desactivado` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre_producto`, `cantidad_productos`, `precio_producto`, `desactivado`, `created_at`, `updated_at`) VALUES
(1, 'Aceite', 4, 22000000.00, 0, '2024-03-14 06:14:32', '2024-03-14 07:12:47'),
(2, 'Neumatico', 15, 40000000.00, 0, '2024-03-14 07:14:35', '2024-03-14 07:38:39'),
(3, 'chaiss', 4, 133444.00, 0, '2024-03-14 07:29:06', '2024-03-14 07:38:45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `guard_name` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2024-03-14 06:13:07', '2024-03-14 06:13:07'),
(2, 'Mecanico', 'web', '2024-03-14 06:13:07', '2024-03-14 06:13:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(2, 2),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(6, 2),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre_servicio` varchar(191) NOT NULL,
  `precio_servicio` decimal(10,2) NOT NULL DEFAULT 0.00,
  `desactivado` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id`, `nombre_servicio`, `precio_servicio`, `desactivado`, `created_at`, `updated_at`) VALUES
(1, 'Cambio de aceite', 140000.00, 0, '2024-03-14 08:02:10', '2024-03-14 08:02:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tareas`
--

CREATE TABLE `tareas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre_servicio_id` bigint(20) UNSIGNED NOT NULL,
  `precio_servicio_id` bigint(20) UNSIGNED NOT NULL,
  `nombre_producto_id` bigint(20) UNSIGNED NOT NULL,
  `cantidad_producto_id` bigint(20) UNSIGNED NOT NULL,
  `precio_producto_id` bigint(20) UNSIGNED NOT NULL,
  `nombre_empleado_id` bigint(20) UNSIGNED NOT NULL,
  `apellido_empleado_id` bigint(20) UNSIGNED NOT NULL,
  `especialidad_id` bigint(20) UNSIGNED NOT NULL,
  `estatus` varchar(191) NOT NULL,
  `disponibilidad` varchar(45) NOT NULL,
  `Comision` varchar(191) NOT NULL,
  `nombre_cliente_id` bigint(20) UNSIGNED NOT NULL,
  `apellido_cliente_id` bigint(20) UNSIGNED NOT NULL,
  `vehiculo_marca_id` bigint(20) UNSIGNED NOT NULL,
  `vehiculo_modelo_id` bigint(20) UNSIGNED NOT NULL,
  `vehiculo_matricula_id` bigint(20) UNSIGNED NOT NULL,
  `vehiculo_color_id` bigint(20) UNSIGNED NOT NULL,
  `total_reparacion` decimal(10,2) NOT NULL DEFAULT 0.00,
  `total_comision` decimal(10,2) NOT NULL DEFAULT 0.00,
  `comentarios` varchar(50) NOT NULL,
  `desactivado` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tareas`
--

INSERT INTO `tareas` (`id`, `nombre_servicio_id`, `precio_servicio_id`, `nombre_producto_id`, `cantidad_producto_id`, `precio_producto_id`, `nombre_empleado_id`, `apellido_empleado_id`, `especialidad_id`, `estatus`, `disponibilidad`, `Comision`, `nombre_cliente_id`, `apellido_cliente_id`, `vehiculo_marca_id`, `vehiculo_modelo_id`, `vehiculo_matricula_id`, `vehiculo_color_id`, `total_reparacion`, `total_comision`, `comentarios`, `desactivado`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 3, 1, 1, 1, 1, 'Activo', 'Disponible', '50%', 1, 1, 1, 1, 1, 1, 14000000.00, 70.00, 'Bobo el que lea', 0, '2024-03-14 08:06:59', '2024-03-14 08:06:59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$12$1ag8jHGHm1kjUpjZdUEtdu1vVHhhHqHeTEBMZ4OmCXhVti3Rng.Cm', NULL, '2024-03-14 06:13:08', '2024-03-14 06:13:08'),
(2, 'Sr. Juan José Roque Segundo', 'barragan.iker@example.com', '2024-03-14 06:13:08', '$2y$12$EIjAX/bXv3WRN8StPXxdFOyjF7v97tYBYeazoU0pU5.qrB.9lLAIK', '4zdtTRUQvX', '2024-03-14 06:13:14', '2024-03-14 06:13:14'),
(3, 'Jorge Partida', 'carlota07@example.org', '2024-03-14 06:13:09', '$2y$12$39ODe4dJLFVJ8jMEjv8A5e/VdNH2JGcct3mIXEaqF9Jr8m0rRcvTK', '8nVGoLS48g', '2024-03-14 06:13:14', '2024-03-14 06:13:14'),
(4, 'Nadia Pulido', 'angel.ruvalcaba@example.com', '2024-03-14 06:13:09', '$2y$12$w1XNcTg..n5Shnonquwh5OJ25infMEGOaOtty5AWdzBdzq79/BxAu', 'BoPlgZKam4', '2024-03-14 06:13:14', '2024-03-14 06:13:14'),
(5, 'Alberto Pacheco', 'laia.razo@example.com', '2024-03-14 06:13:09', '$2y$12$aQBAcdK405qU/BnzrJNFt.hhnArjpA6W7Up1NVHw0khYAbUBq1.Ai', 'SLVdgtVeVk', '2024-03-14 06:13:14', '2024-03-14 06:13:14'),
(6, 'Nerea Pardo', 'clara.moral@example.org', '2024-03-14 06:13:10', '$2y$12$nBV1tFnSQEFznL3sEZLhR.Efz4WpxdgZoEcIRLU.m.6kATvoscy6i', 'AF3hzVIhHB', '2024-03-14 06:13:14', '2024-03-14 06:13:14'),
(7, 'Eva Cobo', 'cordonez@example.org', '2024-03-14 06:13:10', '$2y$12$dLqp2EOGTEZ6xGxNDktcM.YrfSY5oYGvgTvHVzt4sWIZb2526lZ4a', 'zyTT7XSs7D', '2024-03-14 06:13:14', '2024-03-14 06:13:14'),
(8, 'Yeray Sauceda Hijo', 'maparicio@example.com', '2024-03-14 06:13:10', '$2y$12$MPobArcO.Gv823Y/NlVjK.01ObQj8MSiyU5.HeB.gF9UODH66uwkK', 'FfUQsJNXqI', '2024-03-14 06:13:14', '2024-03-14 06:13:14'),
(9, 'Dr. Valeria Arteaga', 'ariadna.carmona@example.org', '2024-03-14 06:13:10', '$2y$12$o8nYPYcHi/fdMeKhKfiFYudD5uUzqZcKqtwNY5SwebDC1hYY2G75C', '65Mc3kcKJT', '2024-03-14 06:13:14', '2024-03-14 06:13:14'),
(10, 'Carla Llamas', 'teran.alicia@example.net', '2024-03-14 06:13:11', '$2y$12$gMXZhmkxKaB..juwL/RchO31RgbtwTmdRexxSL50zTP3C3VLHq88C', 'snc12a1ZxE', '2024-03-14 06:13:14', '2024-03-14 06:13:14'),
(11, 'D. David Collazo Hijo', 'cristina17@example.com', '2024-03-14 06:13:11', '$2y$12$7odhqojcR94z7CkSAP/HRu0oQ.H1fHmFhwnqZh4Q.JXdfnS.EZ/dK', 'fHeO4FmFeC', '2024-03-14 06:13:14', '2024-03-14 06:13:14'),
(12, 'Javier Mireles', 'miguelangel.cortes@example.org', '2024-03-14 06:13:11', '$2y$12$ctv6/KEadnfYSmruoY2dPeqCCuHY4oyfq/pVNAbQnqU7yUfAZtbrq', 'yMwA5ubkrF', '2024-03-14 06:13:14', '2024-03-14 06:13:14'),
(13, 'Sra. Laia Vila Segundo', 'ivan96@example.org', '2024-03-14 06:13:12', '$2y$12$B.GbZ6WBEu/QEarz7f8STudDnQHEy9otbA5/4RWU.d1A82M7arrUu', 'fPxk7uQjmu', '2024-03-14 06:13:14', '2024-03-14 06:13:14'),
(14, 'Francisco Alonso', 'alexandra57@example.com', '2024-03-14 06:13:12', '$2y$12$3qHuoZ3mO1FBYEkPKEiRVuX/8ejTQk2McaT6NbjxncC4J6p3P/Cg2', 'ioCL9hEENf', '2024-03-14 06:13:14', '2024-03-14 06:13:14'),
(15, 'Dña Carmen Téllez', 'teresa48@example.net', '2024-03-14 06:13:12', '$2y$12$HyyElgMxu3GkPw1DHexdmOFrcGrG9anRQVwF2ogL/UcKOUDrX.17.', '31Npnhhh6Y', '2024-03-14 06:13:14', '2024-03-14 06:13:14'),
(16, 'Ing. Hugo Marrero Hijo', 'rodriguez.biel@example.com', '2024-03-14 06:13:12', '$2y$12$IaTmmC6mUbcmTlP1nT2zyOknuZ4Bw.OkCdMU.AntDVzJVktYwiVRy', 'tCPiI8E8M7', '2024-03-14 06:13:14', '2024-03-14 06:13:14'),
(17, 'Sra. Lucía Olivo', 'diego29@example.org', '2024-03-14 06:13:13', '$2y$12$wqtaRj0dNSvO3TnsHtjQCemxsSKA/Ekx5tm9iW/MxahWHsdOxCdnC', '4G11YTrmAB', '2024-03-14 06:13:14', '2024-03-14 06:13:14'),
(18, 'Joel Barragán', 'gonzalo13@example.com', '2024-03-14 06:13:13', '$2y$12$2rYluuVefCo.mAS8e4ez.uI7dY50erA7QvgoN2t6j0DKvWjGmUe0a', 'lgJqqZCOzY', '2024-03-14 06:13:14', '2024-03-14 06:13:14'),
(19, 'Blanca Cavazos', 'amparo81@example.org', '2024-03-14 06:13:13', '$2y$12$M8TX.dzJM7wcB1SNqUcgDOTYPLDlamVHCzye5wDO.QrbHYefX4m5O', 'jFME2k6JDr', '2024-03-14 06:13:14', '2024-03-14 06:13:14'),
(20, 'Dña Ángela Espinosa', 'ayala.malak@example.org', '2024-03-14 06:13:13', '$2y$12$BPRGqSCzbqkC.W/lPEDlNOlBOKVv6iqMh/snnmAjpVCmRqCex/yrK', 'NlwWB4W2U2', '2024-03-14 06:13:14', '2024-03-14 06:13:14'),
(21, 'D. Carlos Lomeli Hijo', 'linares.ismael@example.com', '2024-03-14 06:13:14', '$2y$12$F1AXsfQEswxkQAGbVIo9N.qbzVl4JMWhCTy0olcgeOcRsgArwZjSe', 'IMDRMQMWqk', '2024-03-14 06:13:14', '2024-03-14 06:13:14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

CREATE TABLE `vehiculos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vehiculo_marca` varchar(191) NOT NULL,
  `vehiculo_modelo` varchar(191) NOT NULL,
  `Vehiculo_matricula` varchar(191) NOT NULL,
  `Vehiculo_color` varchar(191) NOT NULL,
  `desactivado` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `vehiculos`
--

INSERT INTO `vehiculos` (`id`, `vehiculo_marca`, `vehiculo_modelo`, `Vehiculo_matricula`, `Vehiculo_color`, `desactivado`, `created_at`, `updated_at`) VALUES
(1, 'Volksvaguen', 'Mustang', 'DLC009', 'Negro jaja', 0, '2024-03-14 08:00:14', '2024-03-14 08:00:14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre_empleado_id` bigint(20) UNSIGNED NOT NULL,
  `apellido_empleado_id` bigint(20) UNSIGNED NOT NULL,
  `especialidad_id` bigint(20) UNSIGNED NOT NULL,
  `nombre_cliente_id` bigint(20) UNSIGNED NOT NULL,
  `apellido_cliente_id` bigint(20) UNSIGNED NOT NULL,
  `vehiculo_marca_id` bigint(20) UNSIGNED NOT NULL,
  `vehiculo_modelo_id` bigint(20) UNSIGNED NOT NULL,
  `vehiculo_matricula_id` bigint(20) UNSIGNED NOT NULL,
  `vehiculo_color_id` bigint(20) UNSIGNED NOT NULL,
  `nombre_servicio_id` bigint(20) UNSIGNED NOT NULL,
  `precio_servicio_id` bigint(20) UNSIGNED NOT NULL,
  `nombre_producto_id` bigint(20) UNSIGNED NOT NULL,
  `cantidad_producto_id` bigint(20) UNSIGNED NOT NULL,
  `precio_producto_id` bigint(20) UNSIGNED NOT NULL,
  `total_comision_id` bigint(20) UNSIGNED NOT NULL,
  `fecha_venta` date NOT NULL,
  `total_venta` decimal(10,2) NOT NULL DEFAULT 0.00,
  `desactivado` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id`, `nombre_empleado_id`, `apellido_empleado_id`, `especialidad_id`, `nombre_cliente_id`, `apellido_cliente_id`, `vehiculo_marca_id`, `vehiculo_modelo_id`, `vehiculo_matricula_id`, `vehiculo_color_id`, `nombre_servicio_id`, `precio_servicio_id`, `nombre_producto_id`, `cantidad_producto_id`, `precio_producto_id`, `total_comision_id`, `fecha_venta`, `total_venta`, `desactivado`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 3, 3, 1, '2024-03-13', 16000000.00, 0, '2024-03-14 08:08:51', '2024-03-14 08:08:51');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `claims`
--
ALTER TABLE `claims`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `clientes_vehiculo_marca_id_foreign` (`vehiculo_marca_id`),
  ADD KEY `clientes_vehiculo_modelo_id_foreign` (`vehiculo_modelo_id`),
  ADD KEY `clientes_vehiculo_matricula_id_foreign` (`vehiculo_matricula_id`),
  ADD KEY `clientes_vehiculo_color_id_foreign` (`vehiculo_color_id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indices de la tabla `mecanicos`
--
ALTER TABLE `mecanicos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

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
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

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
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indices de la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tareas`
--
ALTER TABLE `tareas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tareas_nombre_servicio_id_foreign` (`nombre_servicio_id`),
  ADD KEY `tareas_precio_servicio_id_foreign` (`precio_servicio_id`),
  ADD KEY `tareas_nombre_producto_id_foreign` (`nombre_producto_id`),
  ADD KEY `tareas_cantidad_producto_id_foreign` (`cantidad_producto_id`),
  ADD KEY `tareas_precio_producto_id_foreign` (`precio_producto_id`),
  ADD KEY `tareas_nombre_empleado_id_foreign` (`nombre_empleado_id`),
  ADD KEY `tareas_apellido_empleado_id_foreign` (`apellido_empleado_id`),
  ADD KEY `tareas_especialidad_id_foreign` (`especialidad_id`),
  ADD KEY `tareas_nombre_cliente_id_foreign` (`nombre_cliente_id`),
  ADD KEY `tareas_apellido_cliente_id_foreign` (`apellido_cliente_id`),
  ADD KEY `tareas_vehiculo_marca_id_foreign` (`vehiculo_marca_id`),
  ADD KEY `tareas_vehiculo_modelo_id_foreign` (`vehiculo_modelo_id`),
  ADD KEY `tareas_vehiculo_matricula_id_foreign` (`vehiculo_matricula_id`),
  ADD KEY `tareas_vehiculo_color_id_foreign` (`vehiculo_color_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ventas_nombre_servicio_id_foreign` (`nombre_servicio_id`),
  ADD KEY `ventas_precio_servicio_id_foreign` (`precio_servicio_id`),
  ADD KEY `ventas_nombre_producto_id_foreign` (`nombre_producto_id`),
  ADD KEY `ventas_cantidad_producto_id_foreign` (`cantidad_producto_id`),
  ADD KEY `ventas_precio_producto_id_foreign` (`precio_producto_id`),
  ADD KEY `ventas_nombre_empleado_id_foreign` (`nombre_empleado_id`),
  ADD KEY `ventas_apellido_empleado_id_foreign` (`apellido_empleado_id`),
  ADD KEY `ventas_especialidad_id_foreign` (`especialidad_id`),
  ADD KEY `ventas_nombre_cliente_id_foreign` (`nombre_cliente_id`),
  ADD KEY `ventas_apellido_cliente_id_foreign` (`apellido_cliente_id`),
  ADD KEY `ventas_vehiculo_marca_id_foreign` (`vehiculo_marca_id`),
  ADD KEY `ventas_vehiculo_modelo_id_foreign` (`vehiculo_modelo_id`),
  ADD KEY `ventas_vehiculo_matricula_id_foreign` (`vehiculo_matricula_id`),
  ADD KEY `ventas_vehiculo_color_id_foreign` (`vehiculo_color_id`),
  ADD KEY `ventas_total_comision_id_foreign` (`total_comision_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `claims`
--
ALTER TABLE `claims`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `mecanicos`
--
ALTER TABLE `mecanicos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tareas`
--
ALTER TABLE `tareas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `clientes_vehiculo_color_id_foreign` FOREIGN KEY (`vehiculo_color_id`) REFERENCES `vehiculos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `clientes_vehiculo_marca_id_foreign` FOREIGN KEY (`vehiculo_marca_id`) REFERENCES `vehiculos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `clientes_vehiculo_matricula_id_foreign` FOREIGN KEY (`vehiculo_matricula_id`) REFERENCES `vehiculos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `clientes_vehiculo_modelo_id_foreign` FOREIGN KEY (`vehiculo_modelo_id`) REFERENCES `vehiculos` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `tareas`
--
ALTER TABLE `tareas`
  ADD CONSTRAINT `tareas_apellido_cliente_id_foreign` FOREIGN KEY (`apellido_cliente_id`) REFERENCES `clientes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tareas_apellido_empleado_id_foreign` FOREIGN KEY (`apellido_empleado_id`) REFERENCES `mecanicos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tareas_cantidad_producto_id_foreign` FOREIGN KEY (`cantidad_producto_id`) REFERENCES `productos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tareas_especialidad_id_foreign` FOREIGN KEY (`especialidad_id`) REFERENCES `mecanicos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tareas_nombre_cliente_id_foreign` FOREIGN KEY (`nombre_cliente_id`) REFERENCES `clientes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tareas_nombre_empleado_id_foreign` FOREIGN KEY (`nombre_empleado_id`) REFERENCES `mecanicos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tareas_nombre_producto_id_foreign` FOREIGN KEY (`nombre_producto_id`) REFERENCES `productos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tareas_nombre_servicio_id_foreign` FOREIGN KEY (`nombre_servicio_id`) REFERENCES `servicios` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tareas_precio_producto_id_foreign` FOREIGN KEY (`precio_producto_id`) REFERENCES `productos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tareas_precio_servicio_id_foreign` FOREIGN KEY (`precio_servicio_id`) REFERENCES `servicios` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tareas_vehiculo_color_id_foreign` FOREIGN KEY (`vehiculo_color_id`) REFERENCES `vehiculos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tareas_vehiculo_marca_id_foreign` FOREIGN KEY (`vehiculo_marca_id`) REFERENCES `vehiculos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tareas_vehiculo_matricula_id_foreign` FOREIGN KEY (`vehiculo_matricula_id`) REFERENCES `vehiculos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tareas_vehiculo_modelo_id_foreign` FOREIGN KEY (`vehiculo_modelo_id`) REFERENCES `vehiculos` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `ventas_apellido_cliente_id_foreign` FOREIGN KEY (`apellido_cliente_id`) REFERENCES `clientes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `ventas_apellido_empleado_id_foreign` FOREIGN KEY (`apellido_empleado_id`) REFERENCES `mecanicos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `ventas_cantidad_producto_id_foreign` FOREIGN KEY (`cantidad_producto_id`) REFERENCES `productos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `ventas_especialidad_id_foreign` FOREIGN KEY (`especialidad_id`) REFERENCES `mecanicos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `ventas_nombre_cliente_id_foreign` FOREIGN KEY (`nombre_cliente_id`) REFERENCES `clientes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `ventas_nombre_empleado_id_foreign` FOREIGN KEY (`nombre_empleado_id`) REFERENCES `mecanicos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `ventas_nombre_producto_id_foreign` FOREIGN KEY (`nombre_producto_id`) REFERENCES `productos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `ventas_nombre_servicio_id_foreign` FOREIGN KEY (`nombre_servicio_id`) REFERENCES `servicios` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `ventas_precio_producto_id_foreign` FOREIGN KEY (`precio_producto_id`) REFERENCES `productos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `ventas_precio_servicio_id_foreign` FOREIGN KEY (`precio_servicio_id`) REFERENCES `servicios` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `ventas_total_comision_id_foreign` FOREIGN KEY (`total_comision_id`) REFERENCES `tareas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `ventas_vehiculo_color_id_foreign` FOREIGN KEY (`vehiculo_color_id`) REFERENCES `vehiculos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `ventas_vehiculo_marca_id_foreign` FOREIGN KEY (`vehiculo_marca_id`) REFERENCES `vehiculos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `ventas_vehiculo_matricula_id_foreign` FOREIGN KEY (`vehiculo_matricula_id`) REFERENCES `vehiculos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `ventas_vehiculo_modelo_id_foreign` FOREIGN KEY (`vehiculo_modelo_id`) REFERENCES `vehiculos` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
