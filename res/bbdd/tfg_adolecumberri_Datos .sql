-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 14-06-2019 a las 10:47:05
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

--
-- Volcado de datos para la tabla `blogs`
--

INSERT INTO `blogs` (`id`, `date`, `titulo`, `texto`, `is_dibujo`, `id_dibujo`, `id_categoria`, `deleted`) VALUES
(1, '2019-05-26', 'Lorem Ipsum', '\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ullamcorper finibus ligula at tincidunt. Phasellus interdum aliquam ligula, dictum auctor dui malesuada ac. Etiam nec dui faucibus, porta eros a, vulputate arcu. Quisque sollicitudin malesuada tellus, eget accumsan quam bibendum sed. Nunc blandit leo et gravida vestibulum. Nam commodo ultrices mi vitae sodales. Nam fringilla fermentum nisl, a mattis turpis porta in. In dictum quis turpis sed convallis.', 0, NULL, 120, 0),
(2, '2019-05-26', 'Lorem Ipsum 2', 'Integer eleifend nibh et odio finibus, vel hendrerit turpis lacinia. Quisque dolor augue, hendrerit ac felis a, tincidunt sagittis sem. Vivamus porttitor gravida maximus. Ut nisi odio, feugiat sed efficitur sit amet, congue placerat nulla. Vestibulum et tortor libero. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer vel odio ac turpis feugiat scelerisque. Aenean scelerisque malesuada elementum. Mauris volutpat, nunc eu molestie lobortis, erat magna sollicitudin lorem, feugiat elementum urna augue eget tellus. In gravida convallis mauris, id varius est dictum commodo. In varius in nunc sit amet accumsan.', 0, NULL, 101, 0),
(3, '2019-05-28', 'Movidas nº3', 'El Lorem Ipsum fue concebido como un texto de relleno, formateado de una cierta manera para permitir la presentación de elementos gráficos en documentos, sin necesidad de una copia formal. El uso de Lorem Ipsum permite a los diseñadores reunir los diseños y la forma del contenido antes de que el contenido se haya creado, dando al diseño y al proceso de producción más libertad.', 0, NULL, 120, 0),
(4, '2019-05-28', 'Movidas nº3', 'El Lorem Ipsum fue concebido como un texto de relleno, formateado de una cierta manera para permitir la presentación de elementos gráficos en documentos, sin necesidad de una copia formal. El uso de Lorem Ipsum permite a los diseñadores reunir los diseños y la forma del contenido antes de que el contenido se haya creado, dando al diseño y al proceso de producción más libertad.', 0, NULL, 120, 0),
(5, '2019-05-28', 'presentacion', '\"qui dolorem ipsum, quia dolor sit amet consectetur adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem\".\r\n\r\nEsto es reconocible, en parte, como el estándar del Lorem Ipsum de hoy y fue traducido a:', 0, NULL, 120, 0),
(6, '2019-05-28', 'jugar cartas', 'Para otros usos de este término, véase Carta (desambiguación).\r\n\r\nCarta y sobre\r\n\r\nCarta famosa que Albert Einstein escribe al presidente de Estados Unidos Franklin Roosevelt, sugiriendo el proyecto de una bomba atómica. Hacer clic aquí para acceder a la segunda carilla de la carta.\r\nUna carta es un medio de comunicación escrito por un emisor (remitente) y enviado a un receptor (destinatario).\r\n\r\nNormalmente, el nombre y la dirección del destinatario aparecen en el frente del sobre, el nombre y la dirección del remitente aparecen en el reverso del mismo (en el caso de sobres manuscritos) o en el anverso (en los sobres preimpresos).\r\n\r\nExisten cartas con remitente, en las que no está lista o anotada la dirección de quien envía la carta, bien por olvido o por omisión consciente del remitente.\r\n\r\nLa carta puede ser un texto diferente para cada ocasión, ya que el mensaje es siempre distinto. En ese sentido, sólo en parte puede considerarse texto plenamente expositivo.', 0, 5, 101, 0),
(7, '2019-05-28', 'veracidad wikipedia', 'Todos los artículos de Wikipedia deben tener referencias suficientes (es decir, indicar la fuente de la información) para que el lector pueda comprobar la exactitud, precisión y neutralidad del artículo, y buscar más información sobre el tema. Todo el contenido de Wikipedia debe haber sido publicado en otro lugar (ya que Wikipedia no es una fuente primaria), y por eso siempre es posible para el autor del artículo incluir una referencia.', 0, NULL, 101, 0),
(44, '2019-05-26', 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ullamcorper finibus ligula at tincidunt. Phasellus interdum aliquam ligula, dictum auctor dui malesuada ac. Etiam nec dui faucibus, porta eros a, vulputate arcu. Quisque sollicitudin malesuada tellus, eget accumsan quam bibendum sed. Nunc blandit leo et gravida vestibulum. Nam commodo ultrices mi vitae sodales. Nam fringilla fermentum nisl, a mattis turpis porta in. In dictum quis turpis sed convallis.', 0, NULL, 131, 0),
(58, '2019-05-26', 'Lorem Ipsum 2', 'Integer eleifend nibh et odio finibus, vel hendrerit turpis lacinia. Quisque dolor augue, hendrerit ac felis a, tincidunt sagittis sem. Vivamus porttitor gravida maximus. Ut nisi odio, feugiat sed efficitur sit amet, congue placerat nulla. Vestibulum et tortor libero. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer vel odio ac turpis feugiat scelerisque. Aenean scelerisque malesuada elementum. Mauris volutpat, nunc eu molestie lobortis, erat magna sollicitudin lorem, feugiat elementum urna augue eget tellus. In gravida convallis mauris, id varius est dictum commodo. In varius in nunc sit amet accumsan.', 0, NULL, 131, 0),
(9, '2019-05-28', 'Movidas nº3', 'El Lorem Ipsum fue concebido como un texto de relleno, formateado de una cierta manera para permitir la presentación de elementos gráficos en documentos, sin necesidad de una copia formal. El uso de Lorem Ipsum permite a los diseñadores reunir los diseños y la forma del contenido antes de que el contenido se haya creado, dando al diseño y al proceso de producción más libertad.', 0, NULL, 102, 0),
(14, '2019-05-28', 'Movidas nº3', 'El Lorem Ipsum fue concebido como un texto de relleno, formateado de una cierta manera para permitir la presentación de elementos gráficos en documentos, sin necesidad de una copia formal. El uso de Lorem Ipsum permite a los diseñadores reunir los diseños y la forma del contenido antes de que el contenido se haya creado, dando al diseño y al proceso de producción más libertad.', 0, NULL, 101, 0),
(15, '2019-05-28', 'presentacion', '\"qui dolorem ipsum, quia dolor sit amet consectetur adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem\".\r\n\r\nEsto es reconocible, en parte, como el estándar del Lorem Ipsum de hoy y fue traducido a:', 0, NULL, 102, 0),
(26, '2019-05-28', 'jugar cartas', 'Para otros usos de este término, véase Carta (desambiguación).\r\n\r\nCarta y sobre\r\n\r\nCarta famosa que Albert Einstein escribe al presidente de Estados Unidos Franklin Roosevelt, sugiriendo el proyecto de una bomba atómica. Hacer clic aquí para acceder a la segunda carilla de la carta.\r\nUna carta es un medio de comunicación escrito por un emisor (remitente) y enviado a un receptor (destinatario).\r\n\r\nNormalmente, el nombre y la dirección del destinatario aparecen en el frente del sobre, el nombre y la dirección del remitente aparecen en el reverso del mismo (en el caso de sobres manuscritos) o en el anverso (en los sobres preimpresos).\r\n\r\nExisten cartas con remitente, en las que no está lista o anotada la dirección de quien envía la carta, bien por olvido o por omisión consciente del remitente.\r\n\r\nLa carta puede ser un texto diferente para cada ocasión, ya que el mensaje es siempre distinto. En ese sentido, sólo en parte puede considerarse texto plenamente expositivo.', 0, NULL, 101, 0),
(37, '2019-05-28', 'veracidad wikipedia', 'Todos los artículos de Wikipedia deben tener referencias suficientes (es decir, indicar la fuente de la información) para que el lector pueda comprobar la exactitud, precisión y neutralidad del artículo, y buscar más información sobre el tema. Todo el contenido de Wikipedia debe haber sido publicado en otro lugar (ya que Wikipedia no es una fuente primaria), y por eso siempre es posible para el autor del artículo incluir una referencia.', 0, NULL, 131, 0);

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `date`) VALUES
(1, 'Árbol', '2019-06-04'),
(2, 'Mónstruos', '2019-06-04'),
(3, 'Escenas', '2019-06-04'),
(4, 'Ángeles', '2019-06-04'),
(5, 'Versión', '2019-06-04'),
(6, 'Soy Un Nosotros en el que Falto Yo', '2019-06-04'),
(7, 'Mitología Endógena', '2019-06-04'),
(8, '1º Libreta', '2019-06-04'),
(9, '2º Libreta ', '2019-06-04'),
(10, '3º Libreta', '2019-06-04'),
(11, '4º Libreta', '2019-06-04'),
(12, '5º Libreta', '2019-06-04'),
(13, '6º Libreta', '2019-06-04'),
(14, '7º Libreta', '2019-06-04'),
(15, '8º Libreta', '2019-06-04'),
(16, '9º Libreta', '2019-06-04'),
(17, '10º Libreta', '2019-06-04'),
(18, 'Opiniones', '2019-06-04'),
(19, 'Capítulo del 1º Libro', '2019-06-04');

--
-- Volcado de datos para la tabla `dibujos`
--

INSERT INTO `dibujos` (`id`, `date`, `titulo`, `id_texto`, `is_texto`, `id_categoria`, `img`, `id_padre`, `has_full`, `deleted`) VALUES
(1, '2019-06-02', 'Aurea', NULL, 0, NULL, 'blog_1', 0, '0', 0),
(3, '2019-06-02', 'Árbol', NULL, 0, 1, 'blog_3', 0, '0', 0),
(4, '2019-06-02', 'Algo dentro de tí', NULL, 0, NULL, 'blog_4', 0, '0', 0),
(5, '2019-06-02', 'Lagarto', '6', 0, 2, 'blog_5', 0, '0', 0),
(6, '2019-06-02', 'Luna', NULL, 0, 3, 'blog_6', 0, 'full_luna', 0),
(7, '2019-06-02', 'Maga Naga', NULL, 0, NULL, 'blog_7', 0, '0', 0),
(2, '2019-06-02', 'Arpia y Dragón', '44', 0, NULL, 'blog_2', 0, 'full_arpia\r\n', 0);

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `date`, `nick`, `nombre`, `apellidos`, `rol`, `password`, `email`) VALUES
(3, '2019-05-30 00:00:00', 'dios', 'admin', 'admin', 'admin', 'dios', 'admin@admin.com'),
(4, '2019-05-30 00:00:00', 'aorfo', 'adolfo', 'agustin agustin', 'user', 'pruebacontraseña', 'pruebacontraseña'),
(5, '2019-05-30 00:00:00', 'zow', 'zowac', 'reyes', 'user', 'prueba', 'prueba@prueba.com'),
(6, '2019-05-30 00:00:00', 'lecumsito', 'lecumberri', 'agustin', 'user', 'prueba', 'prueba@prueba'),
(7, '2019-05-30 00:00:00', 'Mac', 'macda', 'integro', ' user', 'prueba', 'prueba@prueba.com\r\n'),
(8, '2019-05-30 00:00:00', 'usuarioL', 'lustro', 'razon', 'user', 'prueba', 'prueba@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
