-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema EspaçoAluno
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `EspaçoAluno` ;

-- -----------------------------------------------------
-- Schema EspaçoAluno
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `EspaçoAluno` DEFAULT CHARACTER SET utf8 ;
USE `EspaçoAluno` ;

-- -----------------------------------------------------
-- Table `EspaçoAluno`.`Student`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `EspaçoAluno`.`Student` (
  `ra` INT NOT NULL,
  `name` VARCHAR(45) NOT NULL,
  `sex` VARCHAR(45) NOT NULL,
  `civilState` VARCHAR(45) NOT NULL,
  `fatherName` VARCHAR(45) NOT NULL,
  `motherName` VARCHAR(45) NOT NULL,
  `birthDate` DATE NOT NULL,
  `cityBirth` VARCHAR(45) NOT NULL,
  `estateBirth` VARCHAR(45) NOT NULL,
  `nacionality` VARCHAR(45) NOT NULL,
  `id` VARCHAR(45) NOT NULL,
  `address` VARCHAR(1000) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `phone` VARCHAR(45) NOT NULL,
  `general information` VARCHAR(45) NOT NULL,
  `currentSemester` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`ra`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `EspaçoAluno`.`Message`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `EspaçoAluno`.`Message` (
  `idMessage` INT NOT NULL,
  `title` VARCHAR(255) NOT NULL,
  `body` VARCHAR(3000) NOT NULL,
  `Student_ra` INT NOT NULL,
  PRIMARY KEY (`idMessage`),
  INDEX `fk_Message_Student1_idx` (`Student_ra` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `EspaçoAluno`.`Teacher`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `EspaçoAluno`.`Teacher` (
  `ra` INT NOT NULL,
  `name` VARCHAR(45) NOT NULL,
  `class` VARCHAR(45) NOT NULL,
  `course` VARCHAR(45) NOT NULL,
  `Student_ra` INT NOT NULL,
  PRIMARY KEY (`ra`),
  INDEX `fk_Teacher_Student_idx` (`Student_ra` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `EspaçoAluno`.`Declarations`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `EspaçoAluno`.`Declarations` (
  `registrations` VARCHAR(200) NOT NULL,
  `studentPass` VARCHAR(200) NOT NULL,
  `selectionApproval` VARCHAR(200) NOT NULL,
  `Student_ra` INT NOT NULL,
  INDEX `fk_Declarations_Student1_idx` (`Student_ra` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `EspaçoAluno`.`Consultations`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `EspaçoAluno`.`Consultations` (
  `history` VARCHAR(200) NOT NULL,
  `disciplines` VARCHAR(200) NOT NULL,
  `schedule` VARCHAR(200) NOT NULL,
  `gradesNfrequenci` VARCHAR(200) NOT NULL,
  `studentPass` VARCHAR(200) NOT NULL,
  `curriculum` VARCHAR(200) NOT NULL,
  `Consultationscol` VARCHAR(200) NOT NULL,
  `complementaryActivities` VARCHAR(200) NOT NULL,
  `Student_ra` INT NOT NULL,
  INDEX `fk_Consultations_Student1_idx` (`Student_ra` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `EspaçoAluno`.`Processes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `EspaçoAluno`.`Processes` (
  `idProcesses` INT NOT NULL,
  `title` VARCHAR(255) NOT NULL,
  `body` VARCHAR(3000) NOT NULL,
  `Student_ra` INT NOT NULL,
  PRIMARY KEY (`idProcesses`),
  INDEX `fk_Processes_Student1_idx` (`Student_ra` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `EspaçoAluno`.`Finances`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `EspaçoAluno`.`Finances` (
  `payments` VARCHAR(300) NOT NULL,
  `recipt` VARCHAR(300) NOT NULL,
  `contract` VARCHAR(300) NOT NULL,
  `paymentAntecipation` VARCHAR(300) NOT NULL,
  `Student_ra` INT NOT NULL,
  INDEX `fk_Finances_Student1_idx` (`Student_ra` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `EspaçoAluno`.`Archives`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `EspaçoAluno`.`Archives` (
  `idArchives` INT NOT NULL,
  `path` VARCHAR(255) NOT NULL,
  `Student_ra` INT NOT NULL,
  PRIMARY KEY (`idArchives`),
  INDEX `fk_Archives_Student1_idx` (`Student_ra` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `EspaçoAluno`.`Classes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `EspaçoAluno`.`Classes` (
  `classID` INT NOT NULL,
  `name` VARCHAR(45) NOT NULL,
  `schedule` VARCHAR(45) NOT NULL,
  `Teacher_ra` INT NOT NULL,
  `Student_ra` INT NOT NULL,
  PRIMARY KEY (`classID`),
  INDEX `fk_Classes_Teacher1_idx` (`Teacher_ra` ASC),
  INDEX `fk_Classes_Student1_idx` (`Student_ra` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `EspaçoAluno`.`Suggestion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `EspaçoAluno`.`Suggestion` (
  `suggestionID` INT NOT NULL,
  `title` VARCHAR(255) NOT NULL,
  `body` VARCHAR(500) NOT NULL,
  PRIMARY KEY (`suggestionID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `EspaçoAluno`.`TeachingPlan`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `EspaçoAluno`.`TeachingPlan` (
  `TeachingPlanID` INT NOT NULL,
  `className` VARCHAR(45) NOT NULL,
  `description` VARCHAR(255) NOT NULL,
  `bibliography` VARCHAR(1000) NOT NULL,
  `Student_ra` INT NOT NULL,
  PRIMARY KEY (`TeachingPlanID`),
  INDEX `fk_TeachingPlan_Student1_idx` (`Student_ra` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `EspaçoAluno`.`OrientationGroup`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `EspaçoAluno`.`OrientationGroup` (
  `Student_ra` INT NOT NULL,
  `OrientationGroupcol` INT NOT NULL,
  `name` VARCHAR(500) NOT NULL,
  INDEX `fk_table1_Student1_idx` (`Student_ra` ASC),
  PRIMARY KEY (`OrientationGroupcol`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `EspaçoAluno`.`NPJ`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `EspaçoAluno`.`NPJ` (
  `Student_ra` INT NOT NULL,
  `NPJCode` INT NOT NULL,
  `message` VARCHAR(500) NOT NULL,
  INDEX `fk_table1_Student2_idx` (`Student_ra` ASC),
  PRIMARY KEY (`NPJCode`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `EspaçoAluno`.`AutoService`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `EspaçoAluno`.`AutoService` (
  `Student_ra` INT NOT NULL,
  `autoServiceID` INT NOT NULL,
  `name` VARCHAR(255) NOT NULL,
  `department` VARCHAR(255) NOT NULL,
  `date` DATE NOT NULL,
  `situation` VARCHAR(500) NOT NULL,
  INDEX `fk_table1_Student3_idx` (`Student_ra` ASC),
  PRIMARY KEY (`autoServiceID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `EspaçoAluno`.`Registration`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `EspaçoAluno`.`Registration` (
  `idRegistration` INT NOT NULL,
  `classes` VARCHAR(255) NOT NULL,
  `schedule` VARCHAR(255) NOT NULL,
  `semester` VARCHAR(255) NOT NULL,
  `requirements` VARCHAR(255) NOT NULL,
  `Student_ra` INT NOT NULL,
  PRIMARY KEY (`idRegistration`),
  INDEX `fk_Registration_Student1_idx` (`Student_ra` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `EspaçoAluno`.`Calendar`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `EspaçoAluno`.`Calendar` (
  `idCalendar` INT NOT NULL,
  `date` DATE NOT NULL,
  `events` VARCHAR(45) NOT NULL,
  `Student_ra` INT NOT NULL,
  PRIMARY KEY (`idCalendar`),
  INDEX `fk_Calendar_Student1_idx` (`Student_ra` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `EspaçoAluno`.`News`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `EspaçoAluno`.`News` (
  `idNews` INT NOT NULL,
  `name` VARCHAR(45) NOT NULL,
  `date` DATE NOT NULL,
  `content` VARCHAR(500) NOT NULL,
  `Student_ra` INT NOT NULL,
  PRIMARY KEY (`idNews`),
  INDEX `fk_News_Student1_idx` (`Student_ra` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `EspaçoAluno`.`Events`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `EspaçoAluno`.`Events` (
  `idEvents` INT NOT NULL,
  `name` VARCHAR(45) NOT NULL,
  `period` VARCHAR(45) NOT NULL,
  `state` VARCHAR(45) NOT NULL,
  `Student_ra` INT NOT NULL,
  PRIMARY KEY (`idEvents`),
  INDEX `fk_Events_Student1_idx` (`Student_ra` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `EspaçoAluno`.`Wall`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `EspaçoAluno`.`Wall` (
  `idWall` INT NOT NULL,
  `name` VARCHAR(45) NOT NULL,
  `type` VARCHAR(45) NOT NULL,
  `content` VARCHAR(500) NOT NULL,
  `Student_ra` INT NOT NULL,
  PRIMARY KEY (`idWall`),
  INDEX `fk_Wall_Student1_idx` (`Student_ra` ASC))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
