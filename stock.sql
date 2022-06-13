-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2022 at 10:25 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stock`
--

-- --------------------------------------------------------

--
-- Table structure for table `compra`
--

CREATE TABLE `compra` (
  `id_persona` int(20) NOT NULL,
  `id_producto` int(20) NOT NULL,
  `fecha_hora` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Dumping data for table `compra`
--

INSERT INTO `compra` (`id_persona`, `id_producto`, `fecha_hora`) VALUES
(1, 1, '2022-06-05 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `persona`
--

CREATE TABLE `persona` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `apellido` varchar(20) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `telefono` int(20) DEFAULT NULL,
  `email` varchar(20) COLLATE utf8mb4_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Dumping data for table `persona`
--

INSERT INTO `persona` (`id`, `nombre`, `apellido`, `telefono`, `email`) VALUES
(1, 'Carlos', 'Rissotto', 12345, 'carlos@carlos.com'),
(2, 'Jorge', 'Diaz', 123456, 'jorge@diaz.com'),
(3, 'Miguel', 'Suarez', 123456, 'miguel@suarez.com'),
(4, 'Julio', 'Sosa', 12345, 'julio@sosa.com'),
(5, 'Juan', 'Diaz', 12345, 'juan@diaz.com'),
(6, 'Javier', 'Suarez', 1234567, 'javier@suarez');

-- --------------------------------------------------------

--
-- Table structure for table `producto`
--

CREATE TABLE `producto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `descripcion` varchar(20) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `stock` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Dumping data for table `producto`
--

INSERT INTO `producto` (`id`, `nombre`, `descripcion`, `stock`) VALUES
(1, 'Lampara', 'Lampara de escritori', 5),
(2, 'Pelota', 'Pelota de futbol', 10),
(3, 'Mesa', 'Mesa de madera', 15),
(4, 'Silla', 'Silla de plastico', 54),
(5, 'Teclado', 'Teclado de computado', 55),
(6, 'Pared', 'Pared de Yeso', 15),
(7, 'Alcohol en Gel', 'Alcohol para limpiar', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`id_persona`,`id_producto`,`fecha_hora`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indexes for table `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `persona`
--
ALTER TABLE `persona`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `compra_ibfk_1` FOREIGN KEY (`id_persona`) REFERENCES `persona` (`id`),
  ADD CONSTRAINT `compra_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
