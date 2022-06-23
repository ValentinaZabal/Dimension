-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2022 at 05:10 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datos-dimension`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacto`
--

CREATE TABLE `contacto` (
  `id` int(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `mensaje` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacto`
--

INSERT INTO `contacto` (`id`, `nombre`, `apellido`, `correo`, `mensaje`) VALUES
(2,'saasas', 'sasaasas', 'sassaasas', 'holaaaaa'),
(3,'kakklakaajsiasa', '', '', ''),
(4,'dakdjakds', 'djkasdjaks', '', ''),
(5,'fdaf', 'dad', 'dasd', 'dfadf'),
(6,'sebastian', 'edwef', 'tempoen@hotmail.com', 'quiero mas informacion sobre los cursos\r\n'),
(7,'Felipe', 'Suaya', 'felipesuaya@gmail.com', 'qrwq'),
(8,'Felipe', 'Suaya', 'felipesuaya@gmail.com', 'qrwq'),
(9,'Felipe', 'Suaya', 'felipesuaya@gmail.com', 'qrwq'),
(10,'magui', 'Suaya', 'magui@gmail.com', 'hola'),
(11,'asad', 'aspd', 'asad@gsad', 'sada');
COMMIT;
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `contacto`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
