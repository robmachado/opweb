-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema opweb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema opweb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `opweb` DEFAULT CHARACTER SET utf8 ;
USE `opweb` ;

-- -----------------------------------------------------
-- Table `opweb`.`op_extusao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `opweb`.`op_extusao` (
  `ox_id` INT(11) NOT NULL AUTO_INCREMENT,
  `op_id` INT(11) NOT NULL,
  PRIMARY KEY (`ox_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `opweb`.`ops`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `opweb`.`ops` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `prod_cod` VARCHAR(50) NOT NULL,
  `prod_desc` VARCHAR(200) NOT NULL,
  `qtdade` DOUBLE NOT NULL,
  `op_q` BIGINT(20) NOT NULL,
  `prazo` DATETIME NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC))
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `opweb`.`prod_origem`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `opweb`.`prod_origem` (
  `po_id` INT(11) NOT NULL AUTO_INCREMENT,
  `po_cod` INT(11) NOT NULL,
  `po_desc` VARCHAR(200) NOT NULL,
  PRIMARY KEY (`po_id`))
ENGINE = InnoDB
AUTO_INCREMENT = 10
DEFAULT CHARACTER SET = utf8
COMMENT = 'Tabela de códigos de origem da mercadoria';


-- -----------------------------------------------------
-- Table `opweb`.`u_perfil`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `opweb`.`u_perfil` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `perfil_name` (`name` ASC),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `opweb`.`u_resources`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `opweb`.`u_resources` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `resource` VARCHAR(100) NOT NULL,
  `level` VARCHAR(5) NOT NULL,
  `url` VARCHAR(255) NOT NULL,
  `parent` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  UNIQUE INDEX `resource_UNIQUE` (`resource` ASC))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `opweb`.`u_permissions`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `opweb`.`u_permissions` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `permission` TINYINT(3) NOT NULL,
  `u_perfil_id` INT(11) NOT NULL,
  `u_resources_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`, `u_perfil_id`, `u_resources_id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  INDEX `fk_u_permissions_u_perfil1_idx` (`u_perfil_id` ASC),
  INDEX `fk_u_permissions_u_resources1_idx` (`u_resources_id` ASC),
  CONSTRAINT `fk_u_permissions_u_perfil1`
    FOREIGN KEY (`u_perfil_id`)
    REFERENCES `opweb`.`u_perfil` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_u_permissions_u_resources1`
    FOREIGN KEY (`u_resources_id`)
    REFERENCES `opweb`.`u_resources` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `opweb`.`u_users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `opweb`.`u_users` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `status` TINYINT(1) NOT NULL,
  `dateinc` DATETIME NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `u_perfil_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`, `u_perfil_id`),
  UNIQUE INDEX `user_id_UNIQUE` (`id` ASC),
  UNIQUE INDEX `user_name_UNIQUE` (`name` ASC),
  INDEX `fk_u_users_u_perfil_idx` (`u_perfil_id` ASC),
  CONSTRAINT `fk_u_users_u_perfil`
    FOREIGN KEY (`u_perfil_id`)
    REFERENCES `opweb`.`u_perfil` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `opweb`.`unidades`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `opweb`.`unidades` (
  `uni_id` INT(11) NOT NULL AUTO_INCREMENT,
  `uni_nome` VARCHAR(10) NOT NULL,
  `uni_sigla` VARCHAR(10) NOT NULL,
  `uni_desc` VARCHAR(200) NOT NULL,
  PRIMARY KEY (`uni_id`))
ENGINE = InnoDB
AUTO_INCREMENT = 9
DEFAULT CHARACTER SET = utf8
COMMENT = 'Tabelas de unidades';


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
