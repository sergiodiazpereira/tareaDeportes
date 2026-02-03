SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: 'deportes'
--
CREATE DATABASE deportes;
USE  deportes;
-- --------------------------------------------------------


--
-- Estructura de tabla para la tabla Deportes
--

CREATE TABLE Deportes (
  idDeporte 	tinyint unsigned AUTO_INCREMENT PRIMARY KEY,
  nombreDep   	varchar(15) NOT NULL
  ) ENGINE=InnoDB  DEFAULT CHARSET=utf8;
  
--
-- Estructura de tabla para la tabla Usuarios
--

CREATE TABLE Usuarios (
  idUsuario 	smallint unsigned AUTO_INCREMENT PRIMARY KEY,
  nombreUsuario varchar(30) NOT NULL UNIQUE,
  apeNombre 	varchar(60) NOT NULL,
  password 		varchar(255) NOT NULL,
  correo 		varchar(60) NOT NULL,
  telefono		char(9)		 NULL,
  perfil 		ENUM('c', 'u') 	NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE Usuarios_deportes (
	idDeporte 	tinyint unsigned	NOT NULL,
	idUsuario 	smallint unsigned	NOT NULL,
	PRIMARY KEY (idDeporte, idUsuario),
  CONSTRAINT fk_idDeporte FOREIGN KEY (idDeporte) REFERENCES deportes(idDeporte),       -- FALTABAN LAS FOREIGN KEYS DE LA TABLA USUARIO_DEPORTES
  CONSTRAINT fk_idUsuario FOREIGN KEY (idUsuario) REFERENCES usuarios(idUsuario)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO Deportes(nombreDep) VALUES
			('fútbol'),
			('baloncesto'),
			('padel'),
			('tenis de mesa');








------------------------------- SCRIPT PARA CREARLA EN LA BASE DE DATOS DEL HOSTING -------------------------------
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE deportes (
  idDeporte 	tinyint unsigned AUTO_INCREMENT PRIMARY KEY,
  nombreDep   	varchar(15) NOT NULL
  ) ENGINE=InnoDB  DEFAULT CHARSET=utf8;
  
--
-- Estructura de tabla para la tabla Usuarios
--

CREATE TABLE usuarios (
  idUsuario 	smallint unsigned AUTO_INCREMENT PRIMARY KEY,
  nombreUsuario varchar(30) NOT NULL UNIQUE,
  apeNombre 	varchar(60) NOT NULL,
  password 		varchar(255) NOT NULL,
  correo 		varchar(60) NOT NULL,
  telefono		char(9)		 NULL,
  perfil 		ENUM('c', 'u') 	NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE usuarios_deportes (
	idDeporte 	tinyint unsigned	NOT NULL,
	idUsuario 	smallint unsigned	NOT NULL,
	PRIMARY KEY (idDeporte, idUsuario),
  CONSTRAINT fk_idDeporte FOREIGN KEY (idDeporte) REFERENCES deportes(idDeporte),       -- FALTABAN LAS FOREIGN KEYS DE LA TABLA USUARIO_DEPORTES
  CONSTRAINT fk_idUsuario FOREIGN KEY (idUsuario) REFERENCES usuarios(idUsuario)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO deportes(nombreDep) VALUES
			('fútbol'),
			('baloncesto'),
			('padel'),
			('tenis de mesa');