SET FOREIGN_KEY_CHECKS = 0;
DROP TABLE IF EXISTS `modelo`;
DROP TABLE IF EXISTS `generacion`;
DROP TABLE IF EXISTS `grupo`;
DROP TABLE IF EXISTS `subgrupo`;
DROP TABLE IF EXISTS `repuesto`;
DROP TABLE IF EXISTS `marca_repuesto`;
DROP TABLE IF EXISTS `categoria`;
SET FOREIGN_KEY_CHECKS = 1;

CREATE TABLE `modelo` (
    `Codigo` VARCHAR(3) NOT NULL,
    `Modelo` VARCHAR(50) NOT NULL,
    PRIMARY KEY (`Codigo`)
);

CREATE TABLE `generacion` (
    `Codigo` VARCHAR(3) NOT NULL,
    `Generacion` VARCHAR(50) NOT NULL,
    `Ano` VARCHAR(50) NOT NULL,
    `Estado` VARCHAR(10) NOT NULL,
    `FK_modelo` VARCHAR(3) NOT NULL,
    PRIMARY KEY (`Codigo`)
);

CREATE TABLE `grupo` (
    `Codigo` VARCHAR(3) NOT NULL,
    `Grupo` VARCHAR(50) NOT NULL,
    PRIMARY KEY (`Codigo`)
);

CREATE TABLE `subgrupo` (
    `Codigo` VARCHAR(3) NOT NULL,
    `FK_grupo` VARCHAR(3) NOT NULL,
    `Subgrupo` VARCHAR(100) NOT NULL,
    PRIMARY KEY (`Codigo`)
);

CREATE TABLE `repuesto` (
    `CodigoGeneral` VARCHAR(13) NOT NULL,
    `FK_modelo` VARCHAR(3) NOT NULL,
    `FK_generacion` VARCHAR(3) NOT NULL,
    `FK_grupo` VARCHAR(3) NOT NULL,
    `FK_subgrupo` VARCHAR(3) NOT NULL,
    `Codigo` CHAR(3) NOT NULL,
    `FK_marca_repuesto` INT NOT NULL,
    `CodigoMarca` VARCHAR(100),
    `CodigoUniversal` VARCHAR(100),
    `CodigoAlterno` VARCHAR(100),
    `Repuesto` VARCHAR(100) NOT NULL,
    `Peso` DECIMAL(10,2),
    `FK_categoria` INT NOT NULL,
    `Medida` VARCHAR(50),
    `Automatico` BOOLEAN NOT NULL,
    `Manual` BOOLEAN NOT NULL,
    `4X2` BOOLEAN NOT NULL,
    `4X4` BOOLEAN NOT NULL,
    `Gasolina` BOOLEAN NOT NULL,
    `Diesel` BOOLEAN NOT NULL,
    `Electrico` BOOLEAN NOT NULL,
    `Hibrido` BOOLEAN NOT NULL,
    `CaractRep1` VARCHAR(100),
    `CaractRep2` VARCHAR(100),
    `CaractRep3` VARCHAR(100),
    `CaractAuto1` VARCHAR(100),
    `CaractAuto2` VARCHAR(100),
    `CaractAuto3` VARCHAR(100),
    `CantidadMinima` DECIMAL(10,2) NOT NULL,
    `PrecioCosto` DECIMAL(10,2) NOT NULL,
    `PrecioVenta` DECIMAL(10,2) NOT NULL,
    `Utilidad` DECIMAL(10,2) NOT NULL,
    `IVA` DECIMAL(5) NOT NULL,
    PRIMARY KEY (`FK_modelo`, `FK_generacion`, `FK_grupo`, `FK_subgrupo`, `Codigo`)
);

CREATE TABLE `marca_repuesto` (
    `Codigo` INT NOT NULL AUTO_INCREMENT,
    `MarcaRepuesto` VARCHAR(100) NOT NULL,
    PRIMARY KEY (`Codigo`)
);

CREATE TABLE `categoria` (
    `Codigo` INT NOT NULL AUTO_INCREMENT,
    `Categoria` VARCHAR(100) NOT NULL,
    PRIMARY KEY (`Codigo`)
);

ALTER TABLE `generacion` ADD FOREIGN KEY (`FK_modelo`) REFERENCES `modelo`(`Codigo`);
ALTER TABLE `subgrupo` ADD FOREIGN KEY (`FK_grupo`) REFERENCES `grupo`(`Codigo`);
ALTER TABLE `repuesto` ADD FOREIGN KEY (`FK_modelo`) REFERENCES `modelo`(`Codigo`);
ALTER TABLE `repuesto` ADD FOREIGN KEY (`FK_generacion`) REFERENCES `generacion`(`Codigo`);
ALTER TABLE `repuesto` ADD FOREIGN KEY (`FK_grupo`) REFERENCES `grupo`(`Codigo`);
ALTER TABLE `repuesto` ADD FOREIGN KEY (`FK_subgrupo`) REFERENCES `subgrupo`(`Codigo`);
ALTER TABLE `repuesto` ADD FOREIGN KEY (`FK_marca_repuesto`) REFERENCES `marca_repuesto`(`Codigo`);
ALTER TABLE `repuesto` ADD FOREIGN KEY (`FK_categoria`) REFERENCES `categoria`(`Codigo`);