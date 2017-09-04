-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2017 at 06:39 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agenda_proyecto`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactos_usuario`
--

CREATE TABLE `contactos_usuario` (
  `id_contacto` int(11) NOT NULL,
  `nombre_contacto` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `telefono_contacto` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `email_contacto` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `foto_contacto` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `id_user_contacto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contactos_usuario`
--

INSERT INTO `contactos_usuario` (`id_contacto`, `nombre_contacto`, `telefono_contacto`, `email_contacto`, `foto_contacto`, `id_user_contacto`) VALUES
(2, 'Isai hernandez Aguilar', '1234567', 'contacto@contacto.com', '', 0),
(4, 'MariaSanchez perea', '1234567124', 'contactos@gmailo.com', 'fotoupload/prueba.jpg', 1),
(13, 'wwewrerwe werrwerw ', '2222222222', 'negok_father@hotmail.com', ' ', 1),
(16, 'hjsdjhsddsj', '5636321626', 'kfhd@hshdj.com', 'fotoupload/prueba.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `usuarios_agenda`
--

CREATE TABLE `usuarios_agenda` (
  `id_usuario` int(11) NOT NULL,
  `nombre_usuario` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `mail_usuario` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `telefono_usuario` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `user_nombre` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `password_usuario` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `usuarios_agenda`
--

INSERT INTO `usuarios_agenda` (`id_usuario`, `nombre_usuario`, `mail_usuario`, `telefono_usuario`, `user_nombre`, `password_usuario`) VALUES
(1, 'prueba', 'prueba@gmail.com', '2235467', 'prueba12', '123456'),
(2, 'prueba', 'prueba@prueba.com', '1221433243', 'prueba', 'prueba123'),
(3, 'fsdbjfdjhdsdseyewguew', 'yuweyweyg@dhsddfbhs.com', '2317832132', 'qwerty', 'qwerty');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactos_usuario`
--
ALTER TABLE `contactos_usuario`
  ADD PRIMARY KEY (`id_contacto`);

--
-- Indexes for table `usuarios_agenda`
--
ALTER TABLE `usuarios_agenda`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactos_usuario`
--
ALTER TABLE `contactos_usuario`
  MODIFY `id_contacto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `usuarios_agenda`
--
ALTER TABLE `usuarios_agenda`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
