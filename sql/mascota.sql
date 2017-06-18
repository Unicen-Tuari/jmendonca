-- Estructura de tabla para la tabla `Mascota`
--

CREATE TABLE IF NOT EXISTS `Mascota` (
  `id_Mascota` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `raza` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Mascota`
--

INSERT INTO `Mascota` (`id_Mascota`, `nombre`, `raza`) VALUES
(1, 'labri', 'labrador'),
(2, 'el ale', 'ovejero aleman'),
(3, 'cabe', 'pitbull');

--
-- Indices de la tabla `Mascota`
--
ALTER TABLE `Mascota`
  ADD PRIMARY KEY (`id_Mascota`);

--
-- AUTO_INCREMENT de la tabla `Mascota`
--
ALTER TABLE `Mascota`
  MODIFY `id_Mascota` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
