-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema EspacoAluno
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `EspacoAluno` ;

-- -----------------------------------------------------
-- Schema EspacoAluno
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `EspacoAluno` DEFAULT CHARACTER SET utf8 ;
USE `EspacoAluno` ;

-- -----------------------------------------------------
-- Table `EspacoAluno`.`registration`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `EspacoAluno`.`registration` (
  `idregistration` INT NOT NULL,
  `name` VARCHAR(255) NOT NULL,
  `sex` VARCHAR(45) NOT NULL,
  `father_name` VARCHAR(45) NULL,
  `mother_name` VARCHAR(45) NULL,
  `birth_date` DATE NOT NULL,
  `birth_city` VARCHAR(100) NOT NULL,
  `birth_UF` VARCHAR(2) NOT NULL,
  `birth_country` VARCHAR(100) NOT NULL,
  `nacionality` VARCHAR(100) NOT NULL,
  `address` VARCHAR(255) NOT NULL,
  `CEP` INT NOT NULL,
  `phone` INT NOT NULL,
  `generalinfo` VARCHAR(255) NOT NULL,
  `RA` INT NOT NULL,
  `career` VARCHAR(255) NOT NULL,
  `campus` VARCHAR(255) NOT NULL,
  `semester` VARCHAR(50) NOT NULL,
  `profilePicture` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`idregistration`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `EspacoAluno`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `EspacoAluno`.`user` (
  `iduser` INT NOT NULL,
  `type` INT NOT NULL,
  `login` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  `registration_idregistration` INT NOT NULL,
  PRIMARY KEY (`iduser`, `registration_idregistration`),
  INDEX `fk_user_registration1_idx` (`registration_idregistration` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `EspacoAluno`.`class`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `EspacoAluno`.`class` (
  `idclass` INT NOT NULL,
  PRIMARY KEY (`idclass`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `EspacoAluno`.`specialRequisitions`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `EspacoAluno`.`specialRequisitions` (
  `idspecialRequisitions` INT NOT NULL,
  `user_iduser` INT NOT NULL,
  `autoService` VARCHAR(255) NULL,
  `teachingPlan` VARCHAR(255) NULL,
  `declarationConsultation` VARCHAR(255) NULL,
  `finances` VARCHAR(255) NULL,
  `references` VARCHAR(255) NULL,
  `informatives` VARCHAR(255) NULL,
  `npj` VARCHAR(255) NULL,
  `orientationGroup` VARCHAR(255) NULL,
  PRIMARY KEY (`idspecialRequisitions`, `user_iduser`),
  INDEX `fk_specialRequisitions_user1_idx` (`user_iduser` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `EspacoAluno`.`messages`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `EspacoAluno`.`messages` (
  `idmessages` INT NOT NULL,
  `class_idclass` INT NOT NULL,
  `title` VARCHAR(255) NOT NULL,
  `body` VARCHAR(500) NOT NULL,
  PRIMARY KEY (`idmessages`, `class_idclass`),
  INDEX `fk_messages_class1_idx` (`class_idclass` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `EspacoAluno`.`archives`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `EspacoAluno`.`archives` (
  `idarchives` INT NOT NULL,
  `class_idclass` INT NOT NULL,
  `name` VARCHAR(255) NOT NULL,
  `url` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`idarchives`, `class_idclass`),
  INDEX `fk_archives_class1_idx` (`class_idclass` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `EspacoAluno`.`discipline`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `EspacoAluno`.`discipline` (
  `iddiscipline` INT NOT NULL,
  `name` VARCHAR(45) NOT NULL,
  `schedule` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`iddiscipline`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `EspacoAluno`.`grades`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `EspacoAluno`.`grades` (
  `idgrades` INT NOT NULL,
  `discipline_iddiscipline` INT NOT NULL,
  `grade` VARCHAR(2) NOT NULL,
  PRIMARY KEY (`idgrades`, `discipline_iddiscipline`),
  INDEX `fk_grades_discipline1_idx` (`discipline_iddiscipline` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `EspacoAluno`.`major`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `EspacoAluno`.`major` (
  `idmajor` INT NOT NULL,
  `discipline_idtable1` INT NOT NULL,
  `name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idmajor`, `discipline_idtable1`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `EspacoAluno`.`user_has_major`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `EspacoAluno`.`user_has_major` (
  `user_iduser` INT NOT NULL,
  `major_idmajor` INT NOT NULL,
  PRIMARY KEY (`user_iduser`, `major_idmajor`),
  INDEX `fk_user_has_major_major1_idx` (`major_idmajor` ASC),
  INDEX `fk_user_has_major_user1_idx` (`user_iduser` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `EspacoAluno`.`major_has_discipline`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `EspacoAluno`.`major_has_discipline` (
  `major_idmajor` INT NOT NULL,
  `major_discipline_idtable1` INT NOT NULL,
  `discipline_iddiscipline` INT NOT NULL,
  PRIMARY KEY (`major_idmajor`, `major_discipline_idtable1`, `discipline_iddiscipline`),
  INDEX `fk_major_has_discipline_discipline1_idx` (`discipline_iddiscipline` ASC),
  INDEX `fk_major_has_discipline_major1_idx` (`major_idmajor` ASC, `major_discipline_idtable1` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `EspacoAluno`.`class_has_discipline`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `EspacoAluno`.`class_has_discipline` (
  `class_idclass` INT NOT NULL,
  `discipline_iddiscipline` INT NOT NULL,
  PRIMARY KEY (`class_idclass`, `discipline_iddiscipline`),
  INDEX `fk_class_has_discipline_discipline1_idx` (`discipline_iddiscipline` ASC),
  INDEX `fk_class_has_discipline_class1_idx` (`class_idclass` ASC))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
