-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-05-2022 a las 14:16:18
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `fany_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `CODE_ADMIN` bigint(20) UNSIGNED NOT NULL,
  `USUARIO` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PASSWORD` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`CODE_ADMIN`, `USUARIO`, `PASSWORD`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin1', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hora`
--

CREATE TABLE `hora` (
  `ID_MARCACION` bigint(20) UNSIGNED NOT NULL,
  `USUARIO_ID` bigint(20) UNSIGNED NOT NULL,
  `FECHA` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ENTRADA` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SALIDA` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `HORAS_TRABAJADAS` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `HORAS_EXTRAS` int(11) NOT NULL,
  `COMENTARIOs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `hora`
--

INSERT INTO `hora` (`ID_MARCACION`, `USUARIO_ID`, `FECHA`, `ENTRADA`, `SALIDA`, `HORAS_TRABAJADAS`, `HORAS_EXTRAS`, `COMENTARIOs`, `created_at`, `updated_at`) VALUES
(40, 10, '10/08/2021', '07:07:00 am', '04:13:00 pm', '9', 1, '******', '2021-08-10 23:07:35', '2021-08-10 23:07:35'),
(41, 10, '10/08/2021', '06:08:00 am', '07:08:00 pm', '13', 5, '******', '2021-08-11 01:08:19', '2021-08-11 01:08:19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2021_07_23_210158_create_muci2s_table', 1),
(2, '2021_07_26_152742_create_admins_table', 1),
(3, '2021_07_29_205359_create_horas_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `muci2`
--

CREATE TABLE `muci2` (
  `CODIGO_USUARIO` bigint(20) UNSIGNED NOT NULL,
  `NOMBRE` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `APELLIDO` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NOMBRE_USUARIO` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CORREO` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DIRECCION` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CARGO` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PASSWORD` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `muci2`
--

INSERT INTO `muci2` (`CODIGO_USUARIO`, `NOMBRE`, `APELLIDO`, `NOMBRE_USUARIO`, `CORREO`, `DIRECCION`, `CARGO`, `PASSWORD`, `created_at`, `updated_at`) VALUES
(10, 'sssssssssssssssssssss', 'sssssssssssssssss', 'ssssssssssssss', 'sssssssssssss@gmail.com', 'ssssssssssss', 'ssssssssssssssss', '123', '2021-08-10 22:37:36', '2021-08-10 22:37:36');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`CODE_ADMIN`);

--
-- Indices de la tabla `hora`
--
ALTER TABLE `hora`
  ADD PRIMARY KEY (`ID_MARCACION`),
  ADD KEY `hora_usuario_id_foreign` (`USUARIO_ID`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `muci2`
--
ALTER TABLE `muci2`
  ADD PRIMARY KEY (`CODIGO_USUARIO`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `CODE_ADMIN` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `hora`
--
ALTER TABLE `hora`
  MODIFY `ID_MARCACION` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `muci2`
--
ALTER TABLE `muci2`
  MODIFY `CODIGO_USUARIO` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `hora`
--
ALTER TABLE `hora`
  ADD CONSTRAINT `hora_usuario_id_foreign` FOREIGN KEY (`USUARIO_ID`) REFERENCES `muci2` (`CODIGO_USUARIO`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
