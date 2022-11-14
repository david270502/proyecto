-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema final2
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema final2
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `final2` DEFAULT CHARACTER SET utf8mb4 ;
USE `final2` ;

-- -----------------------------------------------------
-- Table `final2`.`facultad`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `final2`.`facultad` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(60) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `final2`.`escuela`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `final2`.`escuela` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `id_facultad` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `escuela_facultad` (`id_facultad` ASC) ,
  CONSTRAINT `escuela_facultad`
    FOREIGN KEY (`id_facultad`)
    REFERENCES `final2`.`facultad` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `final2`.`cursos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `final2`.`cursos` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `id_escuela` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `cursos_escuela` (`id_escuela` ASC) ,
  CONSTRAINT `cursos_escuela`
    FOREIGN KEY (`id_escuela`)
    REFERENCES `final2`.`escuela` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 5
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `final2`.`matricula`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `final2`.`matricula` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nombres` VARCHAR(45) NOT NULL,
  `apellidos` VARCHAR(45) NOT NULL,
  `dni` VARCHAR(8) NOT NULL,
  `id_facultad` INT(11) NOT NULL,
  `id_escuela` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `matricula_facultad` (`id_facultad` ASC) ,
  INDEX `matricula_escuela` (`id_escuela` ASC) ,
  CONSTRAINT `matricula_escuela`
    FOREIGN KEY (`id_escuela`)
    REFERENCES `final2`.`escuela` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `matricula_facultad`
    FOREIGN KEY (`id_facultad`)
    REFERENCES `final2`.`facultad` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `final2`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `final2`.`usuario` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(120) NOT NULL,
  `password` VARCHAR(120) NOT NULL,
  `tipo` VARCHAR(45) NOT NULL,
  `id_escuela` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `usuario_escuela` (`id_escuela` ASC) ,
  CONSTRAINT `usuario_escuela`
    FOREIGN KEY (`id_escuela`)
    REFERENCES `final2`.`escuela` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
