-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 15-03-2024 a las 23:47:15
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
-- Base de datos: `reservas_hotel`
--
CREATE DATABASE IF NOT EXISTS `reservas_hotel` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `reservas_hotel`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `id_empresa` int(11) NOT NULL,
  `ruc_empresa` varchar(50) NOT NULL,
  `nombre_empresa` varchar(255) NOT NULL,
  `telefono_empresa` varchar(30) NOT NULL,
  `direccion_empresa` varchar(255) NOT NULL,
  `correo_empresa` varchar(150) NOT NULL,
  `mensaje_empresa` text NOT NULL,
  `link_facebook` varchar(255) DEFAULT NULL,
  `link_instagram` varchar(255) DEFAULT NULL,
  `whatsapp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`id_empresa`, `ruc_empresa`, `nombre_empresa`, `telefono_empresa`, `direccion_empresa`, `correo_empresa`, `mensaje_empresa`, `link_facebook`, `link_instagram`, `whatsapp`) VALUES
(1, '0390037007001', 'Hotel Paraíso S.A.', '593-7-224-4927', 'Av. Alberto Ochoa sn y Miguel Vinitmilla, Azogues, Cañar , Ecuador', 'hparaiso@hotelparaiso.com.ec', 'Si usted tiene alguna pregunta, por favor, póngase en contacto con nosotros por e-mail o por teléfono y nos pondremos en contacto con usted tan pronto como sea posible. Esperamos con interés saber de usted.', NULL, NULL, '+593984887380');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habitaciones`
--

CREATE TABLE `habitaciones` (
  `id_habitacion` int(11) NOT NULL,
  `estilo_habitacion` varchar(200) NOT NULL,
  `numero_habitacion` int(11) NOT NULL,
  `capacidad_habitacion` int(11) NOT NULL,
  `slug_habitacion` varchar(200) NOT NULL,
  `foto_habitacion` varchar(100) NOT NULL,
  `video_habitacion` varchar(255) DEFAULT NULL,
  `descripcion_habitacion` text NOT NULL,
  `precio_noche` decimal(10,2) NOT NULL,
  `estado_habitacion` int(11) NOT NULL DEFAULT 1,
  `fecha_habitacion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `habitaciones`
--

INSERT INTO `habitaciones` (`id_habitacion`, `estilo_habitacion`, `numero_habitacion`, `capacidad_habitacion`, `slug_habitacion`, `foto_habitacion`, `video_habitacion`, `descripcion_habitacion`, `precio_noche`, `estado_habitacion`, `fecha_habitacion`) VALUES
(1, 'Doble', 10, 2, 'doble', '1.jpg', NULL, 'Ubicada en la Torre I', '44.00', 1, '2024-03-13 20:53:48'),
(5, 'Matrimonial', 12, 2, 'matrimonial', '2.webp', NULL, 'Ubicada en la Torre I', '44.00', 1, '2024-03-14 19:27:31'),
(6, 'Triple', 14, 3, 'triple', '3.webp', NULL, 'Ubicada en la Torre I', '56.00', 1, '2024-03-14 18:39:30'),
(7, 'Suite Junior', 16, 2, 'junior', '4.webp', NULL, 'Ubicada en la Torre I', '60.00', 1, '2024-03-14 21:36:25'),
(8, 'Matrimonial Torre II', 20, 2, 'matrimonial-torre-ii', '5.webp', NULL, 'Ubicada en la Torre II', '64.00', 1, '2024-03-14 18:53:59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE `reservas` (
  `id_reserva` int(11) NOT NULL,
  `total_reserva` decimal(10,2) NOT NULL,
  `numero_reserva` varchar(50) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_salida` date NOT NULL,
  `fecha_reserva` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `estado_reserva` int(11) NOT NULL DEFAULT 1,
  `id_habitacion` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `reservas`
--

INSERT INTO `reservas` (`id_reserva`, `total_reserva`, `numero_reserva`, `fecha_inicio`, `fecha_salida`, `fecha_reserva`, `estado_reserva`, `id_habitacion`, `id_usuario`) VALUES
(17, '176.00', '70Z9D6CZVV', '2024-03-14', '2024-03-18', '2024-03-13 22:14:14', 1, 1, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id_servicio` int(11) NOT NULL,
  `titulo_servicio` text NOT NULL,
  `descripcion_servicio` text NOT NULL,
  `icono_servicio` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id_servicio`, `titulo_servicio`, `descripcion_servicio`, `icono_servicio`) VALUES
(1, 'Piscina', 'Nuestra piscina le invita a disfrutar de momentos de relajación y diversión bajo el sol de Azogues', 'restaurants-icon flaticon-swimming'),
(2, 'Restaurante', 'Nuestro restaurante ofrece una experiencia culinaria única, con platos que deleitarán su paladar.', 'restaurants-icon flaticon-coffee-cup'),
(3, 'Sala de eventos', 'El escenario perfecto para sus reuniones importantes, equipado con tecnología de vanguardia en un ambiente distinguido', 'restaurants-icon flaticon-speaker');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sliders`
--

CREATE TABLE `sliders` (
  `id_slider` int(11) NOT NULL,
  `titulo_slider` varchar(200) NOT NULL,
  `subtitulo_slider` varchar(255) NOT NULL,
  `url_slider` varchar(255) DEFAULT NULL,
  `foto_slider` varchar(100) NOT NULL,
  `estado_slider` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `sliders`
--

INSERT INTO `sliders` (`id_slider`, `titulo_slider`, `subtitulo_slider`, `url_slider`, `foto_slider`, `estado_slider`) VALUES
(1, 'Visítanos', 'Estamos en el corazón de la ciudad', 'http://localhost/quinto/hotel/', 'fachada.jpg', 1),
(2, 'Calidad', 'El lugar perfecto para reír, soñar y descansar', 'http://localhost/quinto/hotel/', 'restaurante.jpg', 1),
(3, 'Confort', 'La mejor manera de disfrutar en familia o con amigos', 'http://localhost/quinto/hotel/', 'piscina.jpg', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre_usuario` varchar(150) NOT NULL,
  `apellido_usuario` varchar(100) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `correo_usuario` varchar(150) NOT NULL,
  `clave_usuario` varchar(150) NOT NULL,
  `verify_usuario` int(11) NOT NULL DEFAULT 0,
  `rol_usuario` int(11) NOT NULL,
  `foto_usuario` varchar(100) DEFAULT NULL,
  `estado_usuario` int(11) NOT NULL DEFAULT 1,
  `fecha_usuario` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre_usuario`, `apellido_usuario`, `usuario`, `correo_usuario`, `clave_usuario`, `verify_usuario`, `rol_usuario`, `foto_usuario`, `estado_usuario`, `fecha_usuario`) VALUES
(1, 'Jorge', 'Yepez', 'jorge1', 'correo@gmail.com', '$2y$10$Lo/soqurfOhJ/QCiBmC2XOkxwizOmtE6PyBtXcG2bZOp/zMi.J9PK', 0, 2, NULL, 1, '2024-03-13 19:55:31'),
(3, 'Matías', 'Mosquera', 'matias1', 'matias@gmail.com', '$2y$10$0s4Km2B3o7ktRfpRPg8zMOuVXw2JoCTnKhggHDNXV3ohVPs1lbXwy', 0, 1, NULL, 1, '2024-03-12 21:02:38'),
(5, 'Mateo', 'Ortega', 'mateo1', 'hola@gmail.com', '$2y$10$TaEU4bBqdwND9S5V.4TzOOknhIL.2hFYyepsW5AXnVH7wGsjJhbNC', 0, 2, NULL, 1, '2024-03-13 22:12:05');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id_empresa`);

--
-- Indices de la tabla `habitaciones`
--
ALTER TABLE `habitaciones`
  ADD PRIMARY KEY (`id_habitacion`);

--
-- Indices de la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`id_reserva`),
  ADD KEY `id_habitacion` (`id_habitacion`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id_servicio`);

--
-- Indices de la tabla `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id_slider`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id_empresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `habitaciones`
--
ALTER TABLE `habitaciones`
  MODIFY `id_habitacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `reservas`
--
ALTER TABLE `reservas`
  MODIFY `id_reserva` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id_servicio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD CONSTRAINT `reservas_ibfk_1` FOREIGN KEY (`id_habitacion`) REFERENCES `habitaciones` (`id_habitacion`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservas_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
