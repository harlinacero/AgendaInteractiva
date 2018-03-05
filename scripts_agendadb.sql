--
-- Base de datos: `agenda_db`
--

CREATE DATABASE agenda_db;
USE menagerie;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `psw` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
	PRIMARY KEY(`id`)
);


INSERT INTO usuarios (`nombre`, `psw`, `email`, `fecha_nacimiento`) VALUES
('Harlin Acero ', md5('123456'), 'harlin@mail.com', '1990-10-11'),
('Fernando Gil',md5('123456'), 'fernando@mail.com', '1974-06-20'),
('Rober Ruiz',md5('123456'), 'rober@mail.com','1983-03-17');