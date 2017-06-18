-- Estructura de tabla para la tabla `Usuario`
--
CREATE TABLE IF NOT EXISTS `Usuario` (
  `id_Usuario` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
-- Indices de la tabla `Usuario`
--
ALTER TABLE `Usuario`
  ADD PRIMARY KEY (`id_Usuario`);

-- AUTO_INCREMENT de la tabla `Usuario`
--
ALTER TABLE `Usuario`
  MODIFY `id_Usuario` int(11) NOT NULL AUTO_INCREMENT;
