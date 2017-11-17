-- MySQL Script generated by MySQL Workbench
-- Wed Nov 15 17:02:02 2017
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema php_bootcamp
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema php_bootcamp
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `php_bootcamp` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ;
USE `php_bootcamp` ;

-- -----------------------------------------------------
-- Table `php_bootcamp`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `php_bootcamp`.`user` (
  `iduser` INT NOT NULL AUTO_INCREMENT,
  `icon` VARCHAR(45) NULL,
  `name` VARCHAR(45) NOT NULL,
  `phone_num` INT NULL,
  `email` VARCHAR(45) NULL,
  `nickname` VARCHAR(45) NOT NULL,
  `pwd` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`iduser`),
  UNIQUE INDEX `phone_num_UNIQUE` (`phone_num` ASC),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC),
  UNIQUE INDEX `nickname_UNIQUE` (`nickname` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `php_bootcamp`.`post`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `php_bootcamp`.`post` (
  `idpost` INT NOT NULL AUTO_INCREMENT,
  `user_iduser` INT NOT NULL,
  `picture` VARCHAR(45) NOT NULL,
  `content` TEXT NULL,
  `date` DATETIME NOT NULL,
  PRIMARY KEY (`idpost`, `user_iduser`),
  INDEX `fk_post_user_idx` (`user_iduser` ASC),
  CONSTRAINT `fk_post_user`
    FOREIGN KEY (`user_iduser`)
    REFERENCES `php_bootcamp`.`user` (`iduser`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `php_bootcamp`.`like`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `php_bootcamp`.`like` (
  `idlike` INT NOT NULL AUTO_INCREMENT,
  `post_idpost` INT NOT NULL,
  `user_iduser` INT NOT NULL,
  `date` DATETIME NOT NULL,
  `click` TINYINT NOT NULL,
  PRIMARY KEY (`idlike`, `post_idpost`, `user_iduser`),
  INDEX `fk_like_post1_idx` (`post_idpost` ASC),
  INDEX `fk_like_user1_idx` (`user_iduser` ASC),
  CONSTRAINT `fk_like_post1`
    FOREIGN KEY (`post_idpost`)
    REFERENCES `php_bootcamp`.`post` (`idpost`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_like_user1`
    FOREIGN KEY (`user_iduser`)
    REFERENCES `php_bootcamp`.`user` (`iduser`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `php_bootcamp`.`comment`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `php_bootcamp`.`comment` (
  `idcomment` INT NOT NULL AUTO_INCREMENT,
  `post_idpost` INT NOT NULL,
  `user_iduser` INT NOT NULL,
  `content` TEXT NOT NULL,
  `date` DATETIME NOT NULL,
  PRIMARY KEY (`idcomment`, `post_idpost`, `user_iduser`),
  INDEX `fk_comment_post1_idx` (`post_idpost` ASC),
  INDEX `fk_comment_user1_idx` (`user_iduser` ASC),
  CONSTRAINT `fk_comment_post1`
    FOREIGN KEY (`post_idpost`)
    REFERENCES `php_bootcamp`.`post` (`idpost`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_comment_user1`
    FOREIGN KEY (`user_iduser`)
    REFERENCES `php_bootcamp`.`user` (`iduser`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
