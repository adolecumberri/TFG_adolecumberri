-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 06-06-2019 a las 07:00:19
-- Versión del servidor: 5.7.23
-- Versión de PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tfg_adolecumberri`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blogs`
--

DROP TABLE IF EXISTS `blogs`;
CREATE TABLE IF NOT EXISTS `blogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `texto` text,
  `id_dibujo` int(11) DEFAULT NULL,
  `id_categoria` int(11) DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fk_id_dibujo` (`id_dibujo`),
  KEY `fk_id_categoria` (`id_categoria`)
) ENGINE=MyISAM AUTO_INCREMENT=59 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `blogs`
--

INSERT INTO `blogs` (`id`, `date`, `titulo`, `texto`, `id_dibujo`, `id_categoria`, `deleted`) VALUES
(1, '2019-05-26', 'Lorem Ipsum', '\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ullamcorper finibus ligula at tincidunt. Phasellus interdum aliquam ligula, dictum auctor dui malesuada ac. Etiam nec dui faucibus, porta eros a, vulputate arcu. Quisque sollicitudin malesuada tellus, eget accumsan quam bibendum sed. Nunc blandit leo et gravida vestibulum. Nam commodo ultrices mi vitae sodales. Nam fringilla fermentum nisl, a mattis turpis porta in. In dictum quis turpis sed convallis.', NULL, 120, 0),
(2, '2019-05-26', 'Lorem Ipsum 2', 'Integer eleifend nibh et odio finibus, vel hendrerit turpis lacinia. Quisque dolor augue, hendrerit ac felis a, tincidunt sagittis sem. Vivamus porttitor gravida maximus. Ut nisi odio, feugiat sed efficitur sit amet, congue placerat nulla. Vestibulum et tortor libero. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer vel odio ac turpis feugiat scelerisque. Aenean scelerisque malesuada elementum. Mauris volutpat, nunc eu molestie lobortis, erat magna sollicitudin lorem, feugiat elementum urna augue eget tellus. In gravida convallis mauris, id varius est dictum commodo. In varius in nunc sit amet accumsan.', NULL, 101, 0),
(3, '2019-05-28', 'Movidas nº3', 'El Lorem Ipsum fue concebido como un texto de relleno, formateado de una cierta manera para permitir la presentación de elementos gráficos en documentos, sin necesidad de una copia formal. El uso de Lorem Ipsum permite a los diseñadores reunir los diseños y la forma del contenido antes de que el contenido se haya creado, dando al diseño y al proceso de producción más libertad.', NULL, 120, 0),
(4, '2019-05-28', 'Movidas nº3', 'El Lorem Ipsum fue concebido como un texto de relleno, formateado de una cierta manera para permitir la presentación de elementos gráficos en documentos, sin necesidad de una copia formal. El uso de Lorem Ipsum permite a los diseñadores reunir los diseños y la forma del contenido antes de que el contenido se haya creado, dando al diseño y al proceso de producción más libertad.', NULL, 120, 0),
(5, '2019-05-28', 'presentacion', '\"qui dolorem ipsum, quia dolor sit amet consectetur adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem\".\r\n\r\nEsto es reconocible, en parte, como el estándar del Lorem Ipsum de hoy y fue traducido a:', NULL, 120, 0),
(6, '2019-05-28', 'jugar cartas', 'Para otros usos de este término, véase Carta (desambiguación).\r\n\r\nCarta y sobre\r\n\r\nCarta famosa que Albert Einstein escribe al presidente de Estados Unidos Franklin Roosevelt, sugiriendo el proyecto de una bomba atómica. Hacer clic aquí para acceder a la segunda carilla de la carta.\r\nUna carta es un medio de comunicación escrito por un emisor (remitente) y enviado a un receptor (destinatario).\r\n\r\nNormalmente, el nombre y la dirección del destinatario aparecen en el frente del sobre, el nombre y la dirección del remitente aparecen en el reverso del mismo (en el caso de sobres manuscritos) o en el anverso (en los sobres preimpresos).\r\n\r\nExisten cartas con remitente, en las que no está lista o anotada la dirección de quien envía la carta, bien por olvido o por omisión consciente del remitente.\r\n\r\nLa carta puede ser un texto diferente para cada ocasión, ya que el mensaje es siempre distinto. En ese sentido, sólo en parte puede considerarse texto plenamente expositivo.', 5, 101, 0),
(7, '2019-05-28', 'veracidad wikipedia', 'Todos los artículos de Wikipedia deben tener referencias suficientes (es decir, indicar la fuente de la información) para que el lector pueda comprobar la exactitud, precisión y neutralidad del artículo, y buscar más información sobre el tema. Todo el contenido de Wikipedia debe haber sido publicado en otro lugar (ya que Wikipedia no es una fuente primaria), y por eso siempre es posible para el autor del artículo incluir una referencia.', NULL, 101, 0),
(44, '2019-05-26', 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ullamcorper finibus ligula at tincidunt. Phasellus interdum aliquam ligula, dictum auctor dui malesuada ac. Etiam nec dui faucibus, porta eros a, vulputate arcu. Quisque sollicitudin malesuada tellus, eget accumsan quam bibendum sed. Nunc blandit leo et gravida vestibulum. Nam commodo ultrices mi vitae sodales. Nam fringilla fermentum nisl, a mattis turpis porta in. In dictum quis turpis sed convallis.', NULL, 131, 0),
(58, '2019-05-26', 'Lorem Ipsum 2', 'Integer eleifend nibh et odio finibus, vel hendrerit turpis lacinia. Quisque dolor augue, hendrerit ac felis a, tincidunt sagittis sem. Vivamus porttitor gravida maximus. Ut nisi odio, feugiat sed efficitur sit amet, congue placerat nulla. Vestibulum et tortor libero. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer vel odio ac turpis feugiat scelerisque. Aenean scelerisque malesuada elementum. Mauris volutpat, nunc eu molestie lobortis, erat magna sollicitudin lorem, feugiat elementum urna augue eget tellus. In gravida convallis mauris, id varius est dictum commodo. In varius in nunc sit amet accumsan.', NULL, 131, 0),
(9, '2019-05-28', 'Movidas nº3', 'El Lorem Ipsum fue concebido como un texto de relleno, formateado de una cierta manera para permitir la presentación de elementos gráficos en documentos, sin necesidad de una copia formal. El uso de Lorem Ipsum permite a los diseñadores reunir los diseños y la forma del contenido antes de que el contenido se haya creado, dando al diseño y al proceso de producción más libertad.', NULL, 102, 0),
(14, '2019-05-28', 'Movidas nº3', 'El Lorem Ipsum fue concebido como un texto de relleno, formateado de una cierta manera para permitir la presentación de elementos gráficos en documentos, sin necesidad de una copia formal. El uso de Lorem Ipsum permite a los diseñadores reunir los diseños y la forma del contenido antes de que el contenido se haya creado, dando al diseño y al proceso de producción más libertad.', NULL, 101, 0),
(15, '2019-05-28', 'presentacion', '\"qui dolorem ipsum, quia dolor sit amet consectetur adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem\".\r\n\r\nEsto es reconocible, en parte, como el estándar del Lorem Ipsum de hoy y fue traducido a:', NULL, 102, 0),
(26, '2019-05-28', 'jugar cartas', 'Para otros usos de este término, véase Carta (desambiguación).\r\n\r\nCarta y sobre\r\n\r\nCarta famosa que Albert Einstein escribe al presidente de Estados Unidos Franklin Roosevelt, sugiriendo el proyecto de una bomba atómica. Hacer clic aquí para acceder a la segunda carilla de la carta.\r\nUna carta es un medio de comunicación escrito por un emisor (remitente) y enviado a un receptor (destinatario).\r\n\r\nNormalmente, el nombre y la dirección del destinatario aparecen en el frente del sobre, el nombre y la dirección del remitente aparecen en el reverso del mismo (en el caso de sobres manuscritos) o en el anverso (en los sobres preimpresos).\r\n\r\nExisten cartas con remitente, en las que no está lista o anotada la dirección de quien envía la carta, bien por olvido o por omisión consciente del remitente.\r\n\r\nLa carta puede ser un texto diferente para cada ocasión, ya que el mensaje es siempre distinto. En ese sentido, sólo en parte puede considerarse texto plenamente expositivo.', NULL, 101, 0),
(37, '2019-05-28', 'veracidad wikipedia', 'Todos los artículos de Wikipedia deben tener referencias suficientes (es decir, indicar la fuente de la información) para que el lector pueda comprobar la exactitud, precisión y neutralidad del artículo, y buscar más información sobre el tema. Todo el contenido de Wikipedia debe haber sido publicado en otro lugar (ya que Wikipedia no es una fuente primaria), y por eso siempre es posible para el autor del artículo incluir una referencia.', NULL, 131, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

DROP TABLE IF EXISTS `categorias`;
CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=132 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `date`) VALUES
(1, 'Árbol', '2019-06-04 17:55:06'),
(2, 'Mónstruos', '2019-06-04 17:55:06'),
(3, 'Escenas', '2019-06-04 17:55:06'),
(4, 'Ángeles', '2019-06-04 17:55:06'),
(5, 'Versión', '2019-06-04 17:55:06'),
(10, 'Soy Un Nosotros en el que Falto Yo', '2019-06-04 17:55:06'),
(11, 'Mitología Endógena', '2019-06-04 17:55:06'),
(101, '1º Libreta', '2019-06-04 00:00:00'),
(102, '2º Libreta ', '2019-06-04 17:59:04'),
(103, '3º Libreta', '2019-06-04 17:59:04'),
(104, '4º Libreta', '2019-06-04 17:59:04'),
(105, '5º Libreta', '2019-06-04 17:59:04'),
(106, '6º Libreta', '2019-06-04 17:59:04'),
(107, '7º Libreta', '2019-06-04 17:59:04'),
(108, '8º Libreta', '2019-06-04 17:59:04'),
(109, '9º Libreta', '2019-06-04 17:59:04'),
(110, '10º Libreta', '2019-06-04 17:59:04'),
(120, 'Opiniones', '2019-06-04 17:59:04'),
(130, 'Capítulo del 1º Libro', '2019-06-04 17:59:04'),
(131, 'Capítulo del 2º Libro', '2019-06-04 17:59:04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

DROP TABLE IF EXISTS `comentarios`;
CREATE TABLE IF NOT EXISTS `comentarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `texto` text NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_dibujo` int(11) NOT NULL,
  `id_padre` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_id_usuario` (`id_usuario`),
  KEY `fk_id_dibujo` (`id_dibujo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dibujos`
--

DROP TABLE IF EXISTS `dibujos`;
CREATE TABLE IF NOT EXISTS `dibujos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `id_texto` varchar(200) DEFAULT NULL,
  `id_categoria` int(11) DEFAULT NULL,
  `img` varchar(200) DEFAULT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fk_id_texto` (`id_texto`),
  KEY `fk_id_categoria` (`id_categoria`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `dibujos`
--

INSERT INTO `dibujos` (`id`, `date`, `titulo`, `id_texto`, `id_categoria`, `img`, `deleted`) VALUES
(1, '2019-06-02 00:00:00', 'Aurea', NULL, NULL, 'blog_1', 0),
(3, '2019-06-02 00:00:00', 'Árbol', NULL, NULL, 'blog_3', 0),
(4, '2019-06-02 00:00:00', 'Algo dentro de tí', NULL, NULL, 'blog_4', 0),
(5, '2019-06-02 00:00:00', 'Lagarto', '6', NULL, 'blog_5', 0),
(6, '2019-06-02 00:00:00', 'Luna', NULL, NULL, 'blog_6', 0),
(7, '2019-06-02 00:00:00', 'Maga Naga', NULL, NULL, 'blog_7', 0),
(2, '2019-06-02 00:00:00', 'Arpia y Dragón', NULL, NULL, 'blog_2', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `nick` varchar(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `rol` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `date`, `nick`, `nombre`, `apellidos`, `rol`, `password`, `email`) VALUES
(3, '2019-05-30 00:00:00', 'admin', 'admin', 'admin', 'admin', 'admin', 'admin@admin.com'),
(4, '2019-05-30 00:00:00', 'aorfo', 'adolfo', 'agustin agustin', 'admin', 'pruebacontraseña', 'pruebacontraseña'),
(5, '2019-05-30 00:00:00', 'zow', 'zowac', 'reyes', 'user', 'prueba', 'prueba@prueba.com'),
(6, '2019-05-30 00:00:00', 'lecumsito', 'lecumberri', 'agustin', 'user', 'prueba', 'prueba@prueba'),
(7, '2019-05-30 00:00:00', 'Mac', 'macda', 'integro', ' user', 'prueba', 'prueba@prueba.com\r\n'),
(8, '2019-05-30 00:00:00', 'usuarioL', 'lustro', 'razon', 'user', 'prueba', 'prueba@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
