-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-12-2022 a las 05:34:01
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `php_login_database`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'personalisado2018@gmail.com', '$2y$10$/OOeLG5gtIv.K0PTj.vIVOUDmWC6en4gC9D4sEjKigdiYe1yXdVHG'),
(2, 'arley@gmail.com', '$2y$10$oq2x8RiQooHOPCQMCaODJOJBJ1fl6pwe0eDtDsG38OzpeEVCtQ/P6'),
(3, 'arley@gmail.com', '$2y$10$/zy5yn51HroKJ36toy.N6uIq1aMD7C5fKA98tMqJFyIBowroUF3mC'),
(4, 'juanitoperez@gmail.com', '$2y$10$qcu/KzYEnchRaPFRLnKHIO0P5VOAoRK84ZxSYDlciEZ8BOgJGzJfu'),
(5, 'arley@gmail.com', '$2y$10$fLXgM.v/O2Mnd76g698on.RLPnaDm7RwYIArxp2sg34xuiXn/1RDu');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
