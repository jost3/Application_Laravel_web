-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-10-2023 a las 00:32:20
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
-- Base de datos: `log_turism`
--

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
-- Estructura de tabla para la tabla `lugares`
--

CREATE TABLE `lugares` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lugar` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `descripcion` varchar(5000) NOT NULL,
  `url` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `lugares`
--

INSERT INTO `lugares` (`id`, `lugar`, `imagen`, `descripcion`, `url`, `created_at`, `updated_at`) VALUES
(2, 'Bosque de Piedras - Full Day', 'https://turismoi.pe/uploads/photo/version2/photo_file/53779/optimized_4689-1.jpg', 'El Santuario Bosque de Piedras de Huayllay es una de nuestras maravillas naturales. Mas de 4.000 formaciones rocosas. Baños termales de la Calera. DÍA 1 Huayllay el Bosque de Piedras - Full Day 6:00 am. Salida hacia La Región de Pasco, rumbo  hacia el Santuario Nacional de Huayllay considerado uno de  los mejores museos geológicos del mundo donde la infatigable naturaleza a esculpidas figuras de hombres, animales y muchas otras variadas y caprichosas formas tales como portadas de diferentes dimensiones.  También con suerte apreciaremos  el Perrito, El Lagarto, La Cobra, Las Monjas, Pinturas Rupestres, etc. 2:00 pm. Almuerzo (Box Lunch). 3:30 pm. Baños Termales de La Calera (ideal para nadar). 6:00 pm. Retorno a la ciudad de Huánuco. Fin del servicio. Actividades: Observación fauna y flora (incluida) Termalismo (incluida) Visitas arqueológicas (incluida) Visitas guiadas (incluida)', 'https://www.youtube.com/watch?v=b6123H0RSR4', '2023-10-05 03:39:47', '2023-10-10 06:19:43'),
(3, 'Casa de perricholi', 'https://www.lugaresturisticosperu.com/wp-content/uploads/casa-de-la-perricholi.jpg', 'Hermosa casa de adobe construida sobre una cuesta empinada desde donde es posible observar el panorama del pueblo de Tomayquichua. las actividades que hara si aparte este viaje  son las siguientes:', 'https://www.youtube.com/watch?v=xXgbm27gVWw', '2023-10-07 19:46:26', '2023-10-10 06:12:21'),
(4, 'La bella durmiente', 'https://www.wamanadventures.com/blog/wp-content/uploads/2020/09/6-7.jpg', 'Disfruta de una visita placentera a la Ciudad Capital del Ecoturismo, puerta de la amazonía peruana. Descubre sus majestuosas Cascadas, Cataratas y Laguna que te encantará. No te vayas de la ciudad sin probar sus tragos exóticos y su deliciosa gastronomía.DÍA 1 Tingo María y sus encantos Traslado del Terminal al hotel en la hora indicada por el pasajero. 12:30 pm. Almuerzo. 2:30 am. Visita al Parque Nacional Tingo María 4:30 am. Visita el Zoologico Universitaria. 5:00 pm. Visita Trapiche Bar Ecologico 7:00 pm. Retorno al Hotel Tour Nocturno (Costo adicional, Opcional). DÍA 2 Escalada al velo de las ninfas (Hidromasajes) 8:00 am. Desayuno. 9:00 am. Partida hacia Tambillo Chico. 10:00 pm. Preparación de indumentarias e instrucciones. 10:30 pm. Inicio de la escalada de las cataratas. 3:00 pm. Llegada a la Catarata Velo de las Ninfas – Almuerzo. 3:15 pm. Retorno a la carretera principal. 4:00 pm. Retorno a Tingo María. 6:00 pm. Visita a Origen Tingo María. DÍA 3 Laguna de los Milagros (Trekking) 7:00 am. Desayuno. 9:30 am. Visita a la  Catarata Gloria pata 1:00 pm. Laguna de los Milagros. 2:00 pm. Visita al arbol del deseo. 4:30 pm. Visita al museo selvatico 5:00 pm. Visita Aucayacu – Ciudad de los 3 ríos. 6:00 pm. Retorno a la ciudad de Tingo María. DÍA 4 Cordillera azul 9:00 am. Visita Carpsih 12:00 mediodía - Huanuco \"Ciudad de la eterna primavera\". 1:30 pm. Visita Kotosh -Arquelogia 2:30 pm. Traslado al Terminal o Aeropuerto. Fin del servicio.', 'https://www.youtube.com/watch?v=BlfCxqD_eo0', '2023-10-07 19:48:33', '2023-10-10 06:21:20'),
(5, 'Cueva de lechuzas', 'https://blog.redbus.pe/wp-content/uploads/2019/12/Portada.jpg', 'Huánuco se sitúa uno de los sitios más sorprendentes de esta parte del país. Se trata de la Cueva de las lechuzas o la cueva de Monzón, una gruta de piedra en la que habitan una gran variedad de especies como murciélagos, reptiles, golondrinas e insectos. Pero, una de las especies que más llama la atención es el ave de guácharo. Esta ave nocturna se encuentra, principalmente, en sitios como cuevas y grutas. Se le reconoce por su tamaño y su color marrón que se acompaña de una gran cantidad de puntos blancos. Además, este animal, al igual que el murciélago, navega a través de la ecolocación, que es la capacidad que tienen algunas especies de conocer su entorno por medio de la emisión de sonidos.', 'https://www.youtube.com/watch?v=qN5Dwu9yjfc', '2023-10-07 19:50:53', '2023-10-07 19:50:53');

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
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_10_03_214147_lugares', 2),
(7, '2023_10_08_054359_reserva', 3);

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
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE `reserva` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefono` varchar(255) NOT NULL,
  `lugar` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `reserva`
--

INSERT INTO `reserva` (`id`, `nombre`, `email`, `telefono`, `lugar`, `created_at`, `updated_at`) VALUES
(1, 'josue', 'cot4@gmail.com', '345634534', 'ambo', '2023-10-08 21:02:11', '2023-10-08 21:02:11'),
(2, 'carlos', 'prub2@gmail.com', '678678678', 'huanuco', '2023-10-08 22:01:41', '2023-10-08 22:01:41');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'josue', 'jost1@gmail.com', NULL, '$2y$10$H.535tWOvtPA1kdv0gs.suBj4w1TU5a7jD2FXhrQf.pDlkA6j3FVq', NULL, '2023-10-07 19:40:38', '2023-10-07 19:40:38');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `lugares`
--
ALTER TABLE `lugares`
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
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `lugares`
--
ALTER TABLE `lugares`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reserva`
--
ALTER TABLE `reserva`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
