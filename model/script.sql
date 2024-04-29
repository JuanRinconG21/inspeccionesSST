-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema bd_inspecciones
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema bd_inspecciones
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `bd_inspecciones` DEFAULT CHARACTER SET utf8 ;
USE `bd_inspecciones` ;

-- -----------------------------------------------------
-- Table `bd_inspecciones`.`Inspecciones`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bd_inspecciones`.`Inspecciones` (
  `idInspecciones` INT NOT NULL AUTO_INCREMENT,
  `fecha` DATE NULL,
  `nombres` NVARCHAR(256) NULL,
  `apellidos` NVARCHAR(256) NULL,
  `modelo` NVARCHAR(256) NULL,
  `placa` NVARCHAR(256) NULL,
  `kilometraje` NVARCHAR(256) NULL,
  `llantas` NVARCHAR(256) NULL,
  `obserllantas` NVARCHAR(256) NULL,
  `frenos` NVARCHAR(256) NULL,
  `obserfrenos` NVARCHAR(256) NULL,
  `luces` NVARCHAR(256) NULL,
  `obserluces` NVARCHAR(256) NULL,
  `liquidos` NVARCHAR(256) NULL,
  `obserliquidos` NVARCHAR(256) NULL,
  `bateria` NVARCHAR(256) NULL,
  `obserbateria` NVARCHAR(256) NULL,
  `cinturones` NVARCHAR(256) NULL,
  `obsercinturones` NVARCHAR(256) NULL,
  `espejos` NVARCHAR(256) NULL,
  `obserespejos` NVARCHAR(256) NULL,
  `pito` NVARCHAR(256) NULL,
  `kit` NVARCHAR(256) NULL,
  `obserkit` NVARCHAR(256) NULL,
  `combustible` NVARCHAR(256) NULL,
  `obsercombustible` NVARCHAR(256) NULL,
  `documentos` NVARCHAR(256) NULL,
  `obserdocumentos` NVARCHAR(256) NULL,
  PRIMARY KEY (`idInspecciones`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
