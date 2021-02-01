-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-02-2021 a las 19:52:06
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `carritophp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `ID` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `precio` decimal(20,2) NOT NULL,
  `descripcion` text NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`ID`, `nombre`, `precio`, `descripcion`, `imagen`) VALUES
(1, 'Curso HTML5', '560.20', 'En este curso aprenderás todo lo nuevo que trae HTML5, incluyendo ejercicios prácticos de formularios y etiquetas.', 'https://grantcoombs.files.wordpress.com/2012/10/html5-logo.jpg'),
(2, 'Curso GitHub', '400.00', 'Github es la herramienta de versiones mas utilizada en el mundo, aprende todo sobre ella y sus increíbles ventajas.', 'https://cdn.tutsplus.com/net/uploads/2013/08/github-collab-retina-preview.gif'),
(3, 'PHP', '980.32', 'Curso de realizacion de un carrito con PHP, incluye bootstrap, php, github, y alguno mas que se me ocurra', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSPpxFTMW74b4cJQMVi8gwwcYN-nwNBLn5ulw&usqp=CAU'),
(4, 'Curso Javascript', '823.40', 'Curso para aprender lo basico de Javascript', 'https://seeklogo.com/images/J/javascript-js-logo-2949701702-seeklogo.com.png'),
(5, 'Curso de python', '1042.32', 'Curso desde 0 de Python', 'https://howtolearn.me/wp-content/uploads/2014/04/python-logo.png'),
(6, 'Curso de Java', '650.00', 'Curso de Java desde cero', 'https://th.bing.com/th/id/R57d0029c0aac973c8c032dce1190d795?rik=EBg4mUbvdsH7sQ&riu=http%3a%2f%2fblog.idrsolutions.com%2fwp-content%2fuploads%2f2014%2f06%2fjava_logo.jpg&ehk=8wdh%2fCxHHrwAsj5RkpMzfTf2Um7Dr0oGWRwQh6WbMHM%3d&risl=&pid=ImgRaw'),
(7, 'Curso de C#', '540.90', 'Curso de C# desde cero', 'https://ih0.redbubble.net/image.395411727.8962/flat,800x800,075,f.u1.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
