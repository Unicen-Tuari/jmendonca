-- Estructura de tabla para la tabla `Alimento`
--

CREATE TABLE IF NOT EXISTS `Alimento` (
  `id_Alimento` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Alimento`
--

INSERT INTO `Alimento` (`id_Alimento`, `nombre`, `descripcion`) VALUES
(12, 'Royal Cannin ', 'alimento para cachorros de 1 a 2 kg'),
(13, 'purina ', 'alimento para pesos de 2 a 10 kg'),
(14, 'sabrositos', 'alimento para animales entre 10 y 40 kg');

--
-- Indices de la tabla `Alimento`
--
ALTER TABLE `Alimento`
  ADD PRIMARY KEY (`id_Alimento`);
--

--
-- AUTO_INCREMENT de la tabla `Alimento`
--
ALTER TABLE `Alimento`
  MODIFY `id_Alimento` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
