-- MySQL Script generated by MySQL Workbench
-- 03/15/15 16:16:51
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`Admin`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Admin` (
  `idAdmin` INT NOT NULL,
  `Nama` VARCHAR(100) NOT NULL,
  `Username` VARCHAR(45) NOT NULL,
  `Password` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idAdmin`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Mahasiswa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Mahasiswa` (
  `idMahasiswa` INT NOT NULL,
  `Username` VARCHAR(45) NOT NULL,
  `Password` VARCHAR(45) NOT NULL,
  `NamaLengkap` VARCHAR(100) NOT NULL,
  `NamaPanggilan` VARCHAR(15) NOT NULL,
  `JenisKelamin` TINYINT(1) NOT NULL,
  `TempatLahir` VARCHAR(50) NOT NULL,
  `TanggalLahir` DATE NOT NULL,
  `Lembaga` VARCHAR(50) NOT NULL,
  `TahunLulus` MEDIUMINT(5) NOT NULL,
  `Cabang` VARCHAR(50) NULL,
  `AlamatAsal` VARCHAR(200) NOT NULL,
  `AlamatSekarang` VARCHAR(200) NOT NULL,
  `Facebook` VARCHAR(80) NULL,
  `Twitter` VARCHAR(30) NULL,
  `Email` VARCHAR(80) NOT NULL,
  `NoHP` INT(15) NOT NULL,
  `Hobi` VARCHAR(80) NULL,
  `Cita-cita` VARCHAR(45) NULL,
  `Motto` VARCHAR(80) NULL,
  `PrestasiPendidikan` VARCHAR(200) NULL,
  `PrestasiLain` VARCHAR(200) NULL,
  `TempatKuliah` VARCHAR(100) NULL,
  `TempatKerja` VARCHAR(100) NULL,
  `Kesibukan` VARCHAR(200) NULL,
  `NamaOrtu` VARCHAR(100) NULL,
  `PendidikanOrtu` VARCHAR(30) NULL,
  `PekerjaanOrtu` VARCHAR(50) NULL,
  `KontakOrtu` INT(15) NULL,
  `LinkFoto` VARCHAR(50) NULL,
  `TanggalUpdate` DATETIME NULL,
  PRIMARY KEY (`idMahasiswa`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;