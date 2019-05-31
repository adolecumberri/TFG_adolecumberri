-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 31-05-2019 a las 17:25:58
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

INSERT INTO `blogs` (`id`, `date`, `titulo`, `texto`, `id_dibujo`, `id_categoria`, `deleted`) VALUES
(1, '2019-05-26 00:00:00', 'Lorem Ipsum', '\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ullamcorper finibus ligula at tincidunt. Phasellus interdum aliquam ligula, dictum auctor dui malesuada ac. Etiam nec dui faucibus, porta eros a, vulputate arcu. Quisque sollicitudin malesuada tellus, eget accumsan quam bibendum sed. Nunc blandit leo et gravida vestibulum. Nam commodo ultrices mi vitae sodales. Nam fringilla fermentum nisl, a mattis turpis porta in. In dictum quis turpis sed convallis.', NULL, NULL, NULL),
(2, '2019-05-26 00:00:00', 'Lorem Ipsum 2', 'Integer eleifend nibh et odio finibus, vel hendrerit turpis lacinia. Quisque dolor augue, hendrerit ac felis a, tincidunt sagittis sem. Vivamus porttitor gravida maximus. Ut nisi odio, feugiat sed efficitur sit amet, congue placerat nulla. Vestibulum et tortor libero. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer vel odio ac turpis feugiat scelerisque. Aenean scelerisque malesuada elementum. Mauris volutpat, nunc eu molestie lobortis, erat magna sollicitudin lorem, feugiat elementum urna augue eget tellus. In gravida convallis mauris, id varius est dictum commodo. In varius in nunc sit amet accumsan.', NULL, NULL, NULL),
(3, '2019-05-28 00:00:00', 'Movidas nº3', 'El Lorem Ipsum fue concebido como un texto de relleno, formateado de una cierta manera para permitir la presentación de elementos gráficos en documentos, sin necesidad de una copia formal. El uso de Lorem Ipsum permite a los diseñadores reunir los diseños y la forma del contenido antes de que el contenido se haya creado, dando al diseño y al proceso de producción más libertad.', NULL, NULL, NULL),
(4, '2019-05-28 00:00:00', 'Movidas nº3', 'El Lorem Ipsum fue concebido como un texto de relleno, formateado de una cierta manera para permitir la presentación de elementos gráficos en documentos, sin necesidad de una copia formal. El uso de Lorem Ipsum permite a los diseñadores reunir los diseños y la forma del contenido antes de que el contenido se haya creado, dando al diseño y al proceso de producción más libertad.', NULL, NULL, NULL),
(5, '2019-05-28 00:00:00', 'presentacion', '\"qui dolorem ipsum, quia dolor sit amet consectetur adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem\".\r\n\r\nEsto es reconocible, en parte, como el estándar del Lorem Ipsum de hoy y fue traducido a:', NULL, NULL, NULL),
(6, '2019-05-28 00:00:00', 'jugar cartas', 'Para otros usos de este término, véase Carta (desambiguación).\r\n\r\nCarta y sobre\r\n\r\nCarta famosa que Albert Einstein escribe al presidente de Estados Unidos Franklin Roosevelt, sugiriendo el proyecto de una bomba atómica. Hacer clic aquí para acceder a la segunda carilla de la carta.\r\nUna carta es un medio de comunicación escrito por un emisor (remitente) y enviado a un receptor (destinatario).\r\n\r\nNormalmente, el nombre y la dirección del destinatario aparecen en el frente del sobre, el nombre y la dirección del remitente aparecen en el reverso del mismo (en el caso de sobres manuscritos) o en el anverso (en los sobres preimpresos).\r\n\r\nExisten cartas con remitente, en las que no está lista o anotada la dirección de quien envía la carta, bien por olvido o por omisión consciente del remitente.\r\n\r\nLa carta puede ser un texto diferente para cada ocasión, ya que el mensaje es siempre distinto. En ese sentido, sólo en parte puede considerarse texto plenamente expositivo.', NULL, NULL, NULL),
(7, '2019-05-28 00:00:00', 'veracidad wikipedia', 'Todos los artículos de Wikipedia deben tener referencias suficientes (es decir, indicar la fuente de la información) para que el lector pueda comprobar la exactitud, precisión y neutralidad del artículo, y buscar más información sobre el tema. Todo el contenido de Wikipedia debe haber sido publicado en otro lugar (ya que Wikipedia no es una fuente primaria), y por eso siempre es posible para el autor del artículo incluir una referencia.', NULL, NULL, NULL),
(44, '2019-05-26 00:00:00', 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ullamcorper finibus ligula at tincidunt. Phasellus interdum aliquam ligula, dictum auctor dui malesuada ac. Etiam nec dui faucibus, porta eros a, vulputate arcu. Quisque sollicitudin malesuada tellus, eget accumsan quam bibendum sed. Nunc blandit leo et gravida vestibulum. Nam commodo ultrices mi vitae sodales. Nam fringilla fermentum nisl, a mattis turpis porta in. In dictum quis turpis sed convallis.', NULL, NULL, NULL),
(58, '2019-05-26 00:00:00', 'Lorem Ipsum 2', 'Integer eleifend nibh et odio finibus, vel hendrerit turpis lacinia. Quisque dolor augue, hendrerit ac felis a, tincidunt sagittis sem. Vivamus porttitor gravida maximus. Ut nisi odio, feugiat sed efficitur sit amet, congue placerat nulla. Vestibulum et tortor libero. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer vel odio ac turpis feugiat scelerisque. Aenean scelerisque malesuada elementum. Mauris volutpat, nunc eu molestie lobortis, erat magna sollicitudin lorem, feugiat elementum urna augue eget tellus. In gravida convallis mauris, id varius est dictum commodo. In varius in nunc sit amet accumsan.', NULL, NULL, NULL),
(9, '2019-05-28 00:00:00', 'Movidas nº3', 'El Lorem Ipsum fue concebido como un texto de relleno, formateado de una cierta manera para permitir la presentación de elementos gráficos en documentos, sin necesidad de una copia formal. El uso de Lorem Ipsum permite a los diseñadores reunir los diseños y la forma del contenido antes de que el contenido se haya creado, dando al diseño y al proceso de producción más libertad.', NULL, NULL, NULL),
(14, '2019-05-28 00:00:00', 'Movidas nº3', 'El Lorem Ipsum fue concebido como un texto de relleno, formateado de una cierta manera para permitir la presentación de elementos gráficos en documentos, sin necesidad de una copia formal. El uso de Lorem Ipsum permite a los diseñadores reunir los diseños y la forma del contenido antes de que el contenido se haya creado, dando al diseño y al proceso de producción más libertad.', NULL, NULL, NULL),
(15, '2019-05-28 00:00:00', 'presentacion', '\"qui dolorem ipsum, quia dolor sit amet consectetur adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem\".\r\n\r\nEsto es reconocible, en parte, como el estándar del Lorem Ipsum de hoy y fue traducido a:', NULL, NULL, NULL),
(26, '2019-05-28 00:00:00', 'jugar cartas', 'Para otros usos de este término, véase Carta (desambiguación).\r\n\r\nCarta y sobre\r\n\r\nCarta famosa que Albert Einstein escribe al presidente de Estados Unidos Franklin Roosevelt, sugiriendo el proyecto de una bomba atómica. Hacer clic aquí para acceder a la segunda carilla de la carta.\r\nUna carta es un medio de comunicación escrito por un emisor (remitente) y enviado a un receptor (destinatario).\r\n\r\nNormalmente, el nombre y la dirección del destinatario aparecen en el frente del sobre, el nombre y la dirección del remitente aparecen en el reverso del mismo (en el caso de sobres manuscritos) o en el anverso (en los sobres preimpresos).\r\n\r\nExisten cartas con remitente, en las que no está lista o anotada la dirección de quien envía la carta, bien por olvido o por omisión consciente del remitente.\r\n\r\nLa carta puede ser un texto diferente para cada ocasión, ya que el mensaje es siempre distinto. En ese sentido, sólo en parte puede considerarse texto plenamente expositivo.', NULL, NULL, NULL),
(37, '2019-05-28 00:00:00', 'veracidad wikipedia', 'Todos los artículos de Wikipedia deben tener referencias suficientes (es decir, indicar la fuente de la información) para que el lector pueda comprobar la exactitud, precisión y neutralidad del artículo, y buscar más información sobre el tema. Todo el contenido de Wikipedia debe haber sido publicado en otro lugar (ya que Wikipedia no es una fuente primaria), y por eso siempre es posible para el autor del artículo incluir una referencia.', NULL, NULL, NULL);

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
