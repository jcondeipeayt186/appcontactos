CREATE DATABASE  IF NOT EXISTS `contactos` 
USE `contactos`;

CREATE TABLE `persona` (
  `idpersona` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idpersona`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

INSERT INTO `persona` VALUES (1,'julian','conde','julianconde.ipeayt186@gmail.com');

CREATE TABLE `usuario` (
  `USUARIO_ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `NOMBRE` varchar(255) DEFAULT NULL,
  `CONTRASENIA` varchar(255) DEFAULT NULL,
  `TIPO_USUARIO` varchar(45) DEFAULT NULL,
  `DATOS_PERSONA` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`USUARIO_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO `usuario` VALUES (1,'casta','ipeayt186','Adminsitrador','Julián Conde'),
                              (2,'usuario','usuario','Usuario','Usuario Demo');
