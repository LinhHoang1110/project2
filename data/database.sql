-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema vnpProject2
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema vnpProject2
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `vnpProject2` DEFAULT CHARACTER SET utf8 ;
USE `vnpProject2` ;

-- -----------------------------------------------------
-- Table `vnpProject2`.`User`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vnpProject2`.`User` (
  `idUser` INT(11) NOT NULL,
  `fullname` VARCHAR(200) NOT NULL,
  `username` VARCHAR(100) NOT NULL,
  `password` VARCHAR(20) NOT NULL,
  `position` VARCHAR(45) NOT NULL,
  `phone` VARCHAR(45) NOT NULL,
  `dateofbirth` DATE NOT NULL,
  `mail` VARCHAR(200) NOT NULL,
  PRIMARY KEY (`idUser`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `vnpProject2`.`footer`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vnpProject2`.`footer` (
  `id` INT(11) NOT NULL,
  `content` LONGTEXT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `vnpProject2`.`navbar`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vnpProject2`.`navbar` (
  `id` INT(11) NOT NULL,
  `class` INT(11) NOT NULL,
  `subject` LONGTEXT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `vnpProject2`.`post`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vnpProject2`.`post` (
  `idpost` INT(11) NOT NULL,
  `title` VARCHAR(45) NOT NULL,
  `author` VARCHAR(200) NOT NULL,
  `views` INT(11) NULL DEFAULT NULL,
  `likes` INT(11) NULL DEFAULT NULL,
  `content` LONGTEXT NULL DEFAULT NULL,
  `subject` VARCHAR(50) NULL DEFAULT NULL,
  `category` VARCHAR(50) NULL DEFAULT NULL,
  `class` INT(11) NULL DEFAULT NULL,
  `idUser` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`idpost`),
  INDEX `fk_post_1_idx` (`idUser` ASC) VISIBLE,
  CONSTRAINT `fk_post_1`
    FOREIGN KEY (`idUser`)
    REFERENCES `vnpProject2`.`User` (`idUser`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
