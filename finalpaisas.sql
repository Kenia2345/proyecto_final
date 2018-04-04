-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-04-2018 a las 05:49:54
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `finalpaisas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `descripcion`, `created_at`, `updated_at`) VALUES
(4, 'Postres', 'de todo', '2018-02-19 20:14:57', '2018-02-19 20:14:57'),
(5, 'Bebidas', 'nsvbdbvjb', '2018-02-19 20:15:19', '2018-02-19 20:15:19'),
(6, 'Enchiladas', 'nsbbb', '2018-02-19 20:18:10', '2018-02-19 20:18:10'),
(8, 'Tostadas', 'Pollo etc y jamon', '2018-02-19 20:22:10', '2018-02-19 20:22:28'),
(9, 'Tortas', 'x', '2018-03-09 03:16:42', '2018-03-09 03:16:42'),
(15, 'Platillos', 'de todo', '2018-03-11 08:22:10', '2018-03-11 08:22:10'),
(16, 'Otros', 'de todo', '2018-03-11 08:33:49', '2018-03-11 08:33:49'),
(17, 'Botanas', 'qwertyuiol', '2018-03-11 09:03:33', '2018-03-11 09:03:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_ventas`
--

CREATE TABLE `detalle_ventas` (
  `id` int(10) UNSIGNED NOT NULL,
  `producto_id` int(10) UNSIGNED NOT NULL,
  `venta_id` int(10) UNSIGNED NOT NULL,
  `cantidad` int(10) UNSIGNED NOT NULL,
  `subtotal` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(19, '2014_10_12_000000_create_users_table', 1),
(20, '2014_10_12_100000_create_password_resets_table', 1),
(21, '2018_02_12_002143_create_categorias_table', 1),
(22, '2018_02_12_005816_create_productos_table', 1),
(23, '2018_02_12_080346_create_ventas_table', 1),
(24, '2018_02_12_080427_create_detalle_ventas_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(10) UNSIGNED NOT NULL,
  `categoria_id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `precio` double NOT NULL,
  `stock` smallint(6) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `categoria_id`, `nombre`, `precio`, `stock`, `created_at`, `updated_at`) VALUES
(4, 6, 'Enchiladas verdes', 30, 20, '2018-02-19 20:23:12', '2018-02-19 20:23:27'),
(5, 9, 'Torta de Pastor', 25, 30, '2018-03-09 03:17:17', '2018-03-09 03:17:17'),
(6, 9, 'Torta x', 26, 12, '2018-03-09 03:18:21', '2018-03-09 03:18:21'),
(7, 9, 'tortica', 120, 100, '2018-03-11 06:18:06', '2018-03-11 06:24:47'),
(9, 6, 'Enchiladas rojas', 40, 20, '2018-03-11 08:16:43', '2018-03-11 08:16:43'),
(10, 8, 'Tostada de pollo', 12, 15, '2018-03-11 08:20:13', '2018-03-11 08:20:13'),
(11, 15, 'Chilaquiles', 55, 12345, '2018-03-11 08:22:35', '2018-03-11 08:22:35'),
(12, 16, 'Baguette', 30, 1234, '2018-03-11 08:34:30', '2018-03-11 08:39:35'),
(13, 5, 'Cafe', 15, 20, '2018-03-11 08:45:44', '2018-03-11 08:47:43'),
(14, 5, 'Cafe americano', 14, 23, '2018-03-11 08:48:09', '2018-03-11 08:48:39'),
(15, 17, 'Nachos', 15, 20, '2018-03-11 09:05:35', '2018-03-11 09:05:35'),
(16, 4, 'Helado', 25, 5, '2018-03-11 09:12:51', '2018-03-11 09:12:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nivel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'cliente',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `nombre`, `email`, `password`, `username`, `nivel`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'nombre', 'correo@correo.com', '$2y$10$rHEyrGdRHBDjgdN7QGPd8OHIzde1kMHtbR9QBI7s5u5VmgP5Kv9Vi', NULL, 'admin', 'YOvLiNyBVAvJXpkZKAiEg6EOwa5LUlIY5sQviirNU8Ao2JvmTGzrrzZ2eZGl', '2018-02-15 13:08:24', '2018-02-15 13:08:24'),
(8, 'pruebax', 'prueba@prueba.com', '$2y$10$4W.5UThPlCv.7mvCtFSdFOjvIfbGpCCJJMiqcKezMlhBKaWzWHGEq', NULL, 'empleado', 'Qb4VADIOuQUwPNwqHos5sd4tlcfs98MsMlAhcJl0fG4tZyyTPfHP1ZCaKDSC', '2018-02-19 20:03:01', '2018-02-19 20:03:01'),
(12, 'carlos', 'carlos@gmail.com', '$2y$10$j/UHFwmc4kn4HVjOim67FOMsiAGwnvGPWi.PI9AJOrFaaJlFysZ6q', NULL, 'empleado', 'xVha7ZA344PyLSYehrtKaXGnlfC5RT2IWUMTgYhYIzuufFpVoGx9hDlodi5n', '2018-04-03 12:01:39', '2018-04-03 12:01:39'),
(13, 'pedro', 'pedro@pedro.com', '$2y$10$egFfL5gYCqTsN8XSBrzUgO8XGyRLCl7D1OLrm3kv5SEotX7w8ZDk6', NULL, 'cliente', 'ywKn5tEuhaMu053G3BuYcLghDj79duwKHwlvZdYsCmSunqydkDp8jJ1w1mKl', '2018-04-03 12:14:30', '2018-04-03 12:14:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id` int(10) UNSIGNED NOT NULL,
  `fecha_hora_venta` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(10) UNSIGNED NOT NULL,
  `total` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_ventas`
--
ALTER TABLE `detalle_ventas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detalle_ventas_producto_id_foreign` (`producto_id`),
  ADD KEY `detalle_ventas_venta_id_foreign` (`venta_id`);

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
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productos_categoria_id_foreign` (`categoria_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ventas_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `detalle_ventas`
--
ALTER TABLE `detalle_ventas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle_ventas`
--
ALTER TABLE `detalle_ventas`
  ADD CONSTRAINT `detalle_ventas_producto_id_foreign` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`),
  ADD CONSTRAINT `detalle_ventas_venta_id_foreign` FOREIGN KEY (`venta_id`) REFERENCES `ventas` (`id`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_categoria_id_foreign` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`);

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `ventas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
