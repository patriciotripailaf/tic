-- MySQL Script generated by MySQL Workbench
-- 06/21/16 16:46:09
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema tic
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema tic
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `tic` DEFAULT CHARACTER SET utf8 ;
USE `tic` ;

-- -----------------------------------------------------
-- Table `tic`.`jugador`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tic`.`jugador` (
  `idjugador` INT NOT NULL AUTO_INCREMENT,
  `nombre_jugador` VARCHAR(45) NULL,
  `apellido` VARCHAR(45) NULL,
  `rut` VARCHAR(45) NULL,
  `sexo` VARCHAR(45) NULL,
  `usuario` VARCHAR(45) NULL,
  `password` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  `fecha_registro` DATETIME NULL,
  `ultimo_ingreso` DATETIME NULL,
  `status` VARCHAR(45) NULL,
  PRIMARY KEY (`idjugador`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tic`.`socio`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tic`.`socio` (
  `idsocio` INT NOT NULL AUTO_INCREMENT,
  `fecha_inscripcion` DATE NULL,
  `tipo` VARCHAR(45) NULL,
  `posicion` INT NULL,
  `administrador` TINYINT(1) NULL,
  `cuotas_pagadas` INT NULL,
  `jugador_idjugador` INT NOT NULL,
  PRIMARY KEY (`idsocio`),
  INDEX `fk_socio_jugador1_idx` (`jugador_idjugador` ASC),
  CONSTRAINT `fk_socio_jugador1`
    FOREIGN KEY (`jugador_idjugador`)
    REFERENCES `tic`.`jugador` (`idjugador`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tic`.`torneo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tic`.`torneo` (
  `idtorneo` INT NOT NULL AUTO_INCREMENT,
  `nombre_torneo` VARCHAR(45) NULL,
  `fecha_torneo` DATE NULL,
  `direccion` VARCHAR(45) NULL,
  `ganador` VARCHAR(45) NULL,
  PRIMARY KEY (`idtorneo`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tic`.`noticia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tic`.`noticia` (
  `idnoticia` INT NOT NULL,
  `titular` VARCHAR(45) NULL,
  `contenido` VARCHAR(1000) NULL,
  `fecha` DATETIME NULL,
  `autor_idsocio` INT NOT NULL,
  PRIMARY KEY (`idnoticia`),
  INDEX `fk_noticia_socio1_idx` (`autor_idsocio` ASC),
  CONSTRAINT `fk_noticia_socio1`
    FOREIGN KEY (`autor_idsocio`)
    REFERENCES `tic`.`socio` (`idsocio`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tic`.`jugador_has_torneo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tic`.`jugador_has_torneo` (
  `jugador_idjugador` INT NOT NULL,
  `torneo_idtorneo` INT NOT NULL,
  PRIMARY KEY (`jugador_idjugador`, `torneo_idtorneo`),
  INDEX `fk_jugador_has_torneo_torneo1_idx` (`torneo_idtorneo` ASC),
  INDEX `fk_jugador_has_torneo_jugador_idx` (`jugador_idjugador` ASC),
  CONSTRAINT `fk_jugador_has_torneo_jugador`
    FOREIGN KEY (`jugador_idjugador`)
    REFERENCES `tic`.`jugador` (`idjugador`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_jugador_has_torneo_torneo1`
    FOREIGN KEY (`torneo_idtorneo`)
    REFERENCES `tic`.`torneo` (`idtorneo`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tic`.`comentarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tic`.`comentarios` (
  `idcomentarios` INT NOT NULL AUTO_INCREMENT,
  `comentario` VARCHAR(140) NULL,
  `fecha_comentario` DATETIME NULL,
  `jugador_idjugador` INT NOT NULL,
  `noticia_idnoticia` INT NOT NULL,
  PRIMARY KEY (`idcomentarios`),
  INDEX `fk_comentarios_jugador1_idx` (`jugador_idjugador` ASC),
  INDEX `fk_comentarios_noticia1_idx` (`noticia_idnoticia` ASC),
  CONSTRAINT `fk_comentarios_jugador1`
    FOREIGN KEY (`jugador_idjugador`)
    REFERENCES `tic`.`jugador` (`idjugador`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_comentarios_noticia1`
    FOREIGN KEY (`noticia_idnoticia`)
    REFERENCES `tic`.`noticia` (`idnoticia`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `tic`.`jugador`
-- -----------------------------------------------------
START TRANSACTION;
USE `tic`;
INSERT INTO `tic`.`jugador` (`idjugador`, `nombre_jugador`, `apellido`, `rut`, `sexo`, `usuario`, `password`, `email`, `fecha_registro`, `ultimo_ingreso`, `status`) VALUES (1, 'Tomás', 'Sarrás', '101', 'masculino', 'user1', 'pass', 'tomas.sarras@hotmail.com', '2015-01-01', '2016-01-01', 'activo');
INSERT INTO `tic`.`jugador` (`idjugador`, `nombre_jugador`, `apellido`, `rut`, `sexo`, `usuario`, `password`, `email`, `fecha_registro`, `ultimo_ingreso`, `status`) VALUES (2, 'Salvador', 'Abe', '102', 'masculino', 'user2', 'pass', 'salvador.abe@hotmail.com', '2015-02-01', '2016-02-01', 'activo');
INSERT INTO `tic`.`jugador` (`idjugador`, `nombre_jugador`, `apellido`, `rut`, `sexo`, `usuario`, `password`, `email`, `fecha_registro`, `ultimo_ingreso`, `status`) VALUES (3, 'Sebastián', 'Álvarez', '103', 'masculino', 'user3', 'pass', 'sebastian.alvarez@hotmail.com', '2015-03-01 08:00:00', '2016-03-01 08:00:00', 'baneado');
INSERT INTO `tic`.`jugador` (`idjugador`, `nombre_jugador`, `apellido`, `rut`, `sexo`, `usuario`, `password`, `email`, `fecha_registro`, `ultimo_ingreso`, `status`) VALUES (4, 'Franco', 'Moreno', '104', 'masculino', 'user4', 'pass', 'franco.moreno@hotmail.com', '2015-04-01 08:00:00', '2016-04-01 08:00:00', 'activo');
INSERT INTO `tic`.`jugador` (`idjugador`, `nombre_jugador`, `apellido`, `rut`, `sexo`, `usuario`, `password`, `email`, `fecha_registro`, `ultimo_ingreso`, `status`) VALUES (5, 'Diego', 'Larraín', '105', 'masculino', 'user5', 'pass', 'diego.larrain@hotmail.com', '2015-05-01 08:00:00', '2016-05-01 08:00:00', 'activo');
INSERT INTO `tic`.`jugador` (`idjugador`, `nombre_jugador`, `apellido`, `rut`, `sexo`, `usuario`, `password`, `email`, `fecha_registro`, `ultimo_ingreso`, `status`) VALUES (6, 'Nicolás', 'Bravo', '106', 'masculino', 'user6', 'pass', 'nicolas.bravo@hotmail.com', '2015-06-01 08:00:00', '2016-06-01 08:00:00', 'activo');
INSERT INTO `tic`.`jugador` (`idjugador`, `nombre_jugador`, `apellido`, `rut`, `sexo`, `usuario`, `password`, `email`, `fecha_registro`, `ultimo_ingreso`, `status`) VALUES (7, 'Gerardo', 'Cortés', '107', 'masculino', 'user7', 'pass', 'gerardo.cortes@hotmail.com', '2015-07-01 08:00:00', '2016-07-01 08:00:00', 'activo');
INSERT INTO `tic`.`jugador` (`idjugador`, `nombre_jugador`, `apellido`, `rut`, `sexo`, `usuario`, `password`, `email`, `fecha_registro`, `ultimo_ingreso`, `status`) VALUES (8, 'Sebastián', 'Edwards', '108', 'masculino', 'user8', 'pass', 'sebastian.edwards@hotmail.com', '2015-08-01 08:00:00', '2016-08-01 08:00:00', 'baneado');
INSERT INTO `tic`.`jugador` (`idjugador`, `nombre_jugador`, `apellido`, `rut`, `sexo`, `usuario`, `password`, `email`, `fecha_registro`, `ultimo_ingreso`, `status`) VALUES (9, 'Fernando', 'Huerta', '109', 'masculino', 'user9', 'pass', 'fernando.huerta@hotmail.com', '2015-09-01 08:00:00', '2016-09-01 08:00:00', 'baneado');
INSERT INTO `tic`.`jugador` (`idjugador`, `nombre_jugador`, `apellido`, `rut`, `sexo`, `usuario`, `password`, `email`, `fecha_registro`, `ultimo_ingreso`, `status`) VALUES (10, 'Benjamín', 'Soto', '110', 'masculino', 'user10', 'pass', 'benjamin.soto@hotmail.com', '2015-10-01 08:00:00', '2016-10-01 08:00:00', 'baneado');

COMMIT;


-- -----------------------------------------------------
-- Data for table `tic`.`socio`
-- -----------------------------------------------------
START TRANSACTION;
USE `tic`;
INSERT INTO `tic`.`socio` (`idsocio`, `fecha_inscripcion`, `tipo`, `posicion`, `administrador`, `cuotas_pagadas`, `jugador_idjugador`) VALUES (41, '2015-01-01 08:00:00', 'Honorario', 3, TRUE, 0, 1);
INSERT INTO `tic`.`socio` (`idsocio`, `fecha_inscripcion`, `tipo`, `posicion`, `administrador`, `cuotas_pagadas`, `jugador_idjugador`) VALUES (42, '2015-01-01 08:00:00', 'Normal', 2, FALSE, 14, 2);
INSERT INTO `tic`.`socio` (`idsocio`, `fecha_inscripcion`, `tipo`, `posicion`, `administrador`, `cuotas_pagadas`, `jugador_idjugador`) VALUES (43, '2015-01-01 08:00:00', 'Normal', 6, FALSE, 16, 3);
INSERT INTO `tic`.`socio` (`idsocio`, `fecha_inscripcion`, `tipo`, `posicion`, `administrador`, `cuotas_pagadas`, `jugador_idjugador`) VALUES (44, '2015-03-01 08:00:00', 'Honorario', 1, FALSE, 0, 4);
INSERT INTO `tic`.`socio` (`idsocio`, `fecha_inscripcion`, `tipo`, `posicion`, `administrador`, `cuotas_pagadas`, `jugador_idjugador`) VALUES (45, '2015-03-01 08:00:00', 'Normal', 5, FALSE, 14, 5);
INSERT INTO `tic`.`socio` (`idsocio`, `fecha_inscripcion`, `tipo`, `posicion`, `administrador`, `cuotas_pagadas`, `jugador_idjugador`) VALUES (46, '2015-05-03 08:00:00', 'Normal', 4, FALSE, 11, 6);
INSERT INTO `tic`.`socio` (`idsocio`, `fecha_inscripcion`, `tipo`, `posicion`, `administrador`, `cuotas_pagadas`, `jugador_idjugador`) VALUES (47, '2015-05-08 08:00:00', 'Normal', 10, FALSE, 11, 7);
INSERT INTO `tic`.`socio` (`idsocio`, `fecha_inscripcion`, `tipo`, `posicion`, `administrador`, `cuotas_pagadas`, `jugador_idjugador`) VALUES (48, '2015-06-09 08:00:00', 'Normal', 9, FALSE, 6, 8);
INSERT INTO `tic`.`socio` (`idsocio`, `fecha_inscripcion`, `tipo`, `posicion`, `administrador`, `cuotas_pagadas`, `jugador_idjugador`) VALUES (49, '2015-11-10 08:00:00', 'Normal', 8, FALSE, 1, 9);
INSERT INTO `tic`.`socio` (`idsocio`, `fecha_inscripcion`, `tipo`, `posicion`, `administrador`, `cuotas_pagadas`, `jugador_idjugador`) VALUES (50, '2016-01-04 08:00:00', 'Normal', 7, FALSE, 1, 10);

COMMIT;


-- -----------------------------------------------------
-- Data for table `tic`.`torneo`
-- -----------------------------------------------------
START TRANSACTION;
USE `tic`;
INSERT INTO `tic`.`torneo` (`idtorneo`, `nombre_torneo`, `fecha_torneo`, `direccion`, `ganador`) VALUES (11, 'Torneo1', '2016-03-08 08:00:00', 'Juan Moya 123', '1');
INSERT INTO `tic`.`torneo` (`idtorneo`, `nombre_torneo`, `fecha_torneo`, `direccion`, `ganador`) VALUES (12, 'Torneo2', '2016-05-08 08:00:00', 'Juan Moya 123', '1');
INSERT INTO `tic`.`torneo` (`idtorneo`, `nombre_torneo`, `fecha_torneo`, `direccion`, `ganador`) VALUES (13, 'Torneo3', '2016-01-09 08:00:00', 'Juan Moya 123', '3');
INSERT INTO `tic`.`torneo` (`idtorneo`, `nombre_torneo`, `fecha_torneo`, `direccion`, `ganador`) VALUES (14, 'Torneo4', '2016-01-09 08:00:00', 'Rodrigo Perez 222', '5');
INSERT INTO `tic`.`torneo` (`idtorneo`, `nombre_torneo`, `fecha_torneo`, `direccion`, `ganador`) VALUES (15, 'Torneo5', '2015-06-20 08:00:00', 'Rodrigo Perez 222', '4');
INSERT INTO `tic`.`torneo` (`idtorneo`, `nombre_torneo`, `fecha_torneo`, `direccion`, `ganador`) VALUES (16, 'Torneo6', '2015-07-08 08:00:00', 'Beauchef 850', '7');
INSERT INTO `tic`.`torneo` (`idtorneo`, `nombre_torneo`, `fecha_torneo`, `direccion`, `ganador`) VALUES (17, 'Torneo7', '2015-07-08 08:00:00', 'Beauchef 851', '8');
INSERT INTO `tic`.`torneo` (`idtorneo`, `nombre_torneo`, `fecha_torneo`, `direccion`, `ganador`) VALUES (18, 'Torneo8', '2015-02-08 08:00:00', 'Beauchef 850', '9');
INSERT INTO `tic`.`torneo` (`idtorneo`, `nombre_torneo`, `fecha_torneo`, `direccion`, `ganador`) VALUES (19, 'Torneo9', '2014-10-17 08:00:00', 'Beauchef 851', '10');
INSERT INTO `tic`.`torneo` (`idtorneo`, `nombre_torneo`, `fecha_torneo`, `direccion`, `ganador`) VALUES (20, 'Torneo10', '2014-09-15 08:00:00', 'Tupper 123', '1');

COMMIT;


-- -----------------------------------------------------
-- Data for table `tic`.`noticia`
-- -----------------------------------------------------
START TRANSACTION;
USE `tic`;
INSERT INTO `tic`.`noticia` (`idnoticia`, `titular`, `contenido`, `fecha`, `autor_idsocio`) VALUES (71, 'Noticia1', 'contenido1', '2015-01-10 08:00:00', 41);
INSERT INTO `tic`.`noticia` (`idnoticia`, `titular`, `contenido`, `fecha`, `autor_idsocio`) VALUES (72, 'Noticia2', 'contenido2', '2015-02-10 08:00:00', 44);
INSERT INTO `tic`.`noticia` (`idnoticia`, `titular`, `contenido`, `fecha`, `autor_idsocio`) VALUES (73, 'Noticia3', 'contenido3', '2015-03-10 08:00:00', 42);
INSERT INTO `tic`.`noticia` (`idnoticia`, `titular`, `contenido`, `fecha`, `autor_idsocio`) VALUES (74, 'Noticia4', 'contenido4', '2015-04-10 08:00:00', 42);
INSERT INTO `tic`.`noticia` (`idnoticia`, `titular`, `contenido`, `fecha`, `autor_idsocio`) VALUES (75, 'Noticia5', 'contenido5', '2015-05-10 08:00:00', 45);
INSERT INTO `tic`.`noticia` (`idnoticia`, `titular`, `contenido`, `fecha`, `autor_idsocio`) VALUES (76, 'Noticia6', 'contenido6', '2015-06-10 08:00:00', 41);
INSERT INTO `tic`.`noticia` (`idnoticia`, `titular`, `contenido`, `fecha`, `autor_idsocio`) VALUES (77, 'Noticia7', 'contenido7', '2015-07-10 08:00:00', 41);
INSERT INTO `tic`.`noticia` (`idnoticia`, `titular`, `contenido`, `fecha`, `autor_idsocio`) VALUES (78, 'Noticia8', 'contenido8', '2015-08-10 08:00:00', 48);
INSERT INTO `tic`.`noticia` (`idnoticia`, `titular`, `contenido`, `fecha`, `autor_idsocio`) VALUES (79, 'Noticia0', 'contenido9', '2015-09-10 08:00:00', 49);
INSERT INTO `tic`.`noticia` (`idnoticia`, `titular`, `contenido`, `fecha`, `autor_idsocio`) VALUES (80, 'Noticia10', 'contenido10', '2015-10-10 08:00:00', 50);

COMMIT;


-- -----------------------------------------------------
-- Data for table `tic`.`jugador_has_torneo`
-- -----------------------------------------------------
START TRANSACTION;
USE `tic`;
INSERT INTO `tic`.`jugador_has_torneo` (`jugador_idjugador`, `torneo_idtorneo`) VALUES (1, 11);
INSERT INTO `tic`.`jugador_has_torneo` (`jugador_idjugador`, `torneo_idtorneo`) VALUES (2, 11);
INSERT INTO `tic`.`jugador_has_torneo` (`jugador_idjugador`, `torneo_idtorneo`) VALUES (3, 11);
INSERT INTO `tic`.`jugador_has_torneo` (`jugador_idjugador`, `torneo_idtorneo`) VALUES (4, 11);
INSERT INTO `tic`.`jugador_has_torneo` (`jugador_idjugador`, `torneo_idtorneo`) VALUES (5, 11);
INSERT INTO `tic`.`jugador_has_torneo` (`jugador_idjugador`, `torneo_idtorneo`) VALUES (6, 12);
INSERT INTO `tic`.`jugador_has_torneo` (`jugador_idjugador`, `torneo_idtorneo`) VALUES (7, 12);
INSERT INTO `tic`.`jugador_has_torneo` (`jugador_idjugador`, `torneo_idtorneo`) VALUES (8, 12);
INSERT INTO `tic`.`jugador_has_torneo` (`jugador_idjugador`, `torneo_idtorneo`) VALUES (9, 12);
INSERT INTO `tic`.`jugador_has_torneo` (`jugador_idjugador`, `torneo_idtorneo`) VALUES (10, 12);

COMMIT;


-- -----------------------------------------------------
-- Data for table `tic`.`comentarios`
-- -----------------------------------------------------
START TRANSACTION;
USE `tic`;
INSERT INTO `tic`.`comentarios` (`idcomentarios`, `comentario`, `fecha_comentario`, `jugador_idjugador`, `noticia_idnoticia`) VALUES (1, 'buena', '2016-01-01 08:00:00', 1, 71);
INSERT INTO `tic`.`comentarios` (`idcomentarios`, `comentario`, `fecha_comentario`, `jugador_idjugador`, `noticia_idnoticia`) VALUES (2, 'buena', '2016-01-02 08:00:00', 2, 71);
INSERT INTO `tic`.`comentarios` (`idcomentarios`, `comentario`, `fecha_comentario`, `jugador_idjugador`, `noticia_idnoticia`) VALUES (3, 'mala', '2016-01-03 08:00:00', 3, 71);
INSERT INTO `tic`.`comentarios` (`idcomentarios`, `comentario`, `fecha_comentario`, `jugador_idjugador`, `noticia_idnoticia`) VALUES (4, 'mala', '2016-01-04 08:00:00', 4, 72);
INSERT INTO `tic`.`comentarios` (`idcomentarios`, `comentario`, `fecha_comentario`, `jugador_idjugador`, `noticia_idnoticia`) VALUES (5, 'mala', '2016-01-05 08:00:00', 5, 72);

COMMIT;

