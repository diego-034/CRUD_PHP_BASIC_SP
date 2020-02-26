CREATE DATABASE Db_prueba CHARACTER SET utf8 COLLATE utf8_spanish2_ci;
USE Db_prueba;
CREATE TABLE Documento(
    IdDocumento INT NOT NULL  AUTO_INCREMENT PRIMARY KEY,
    TipoDocumento VARCHAR(10));
    ALTER TABLE Documento CONVERT TO CHARACTER SET utf8;

INSERT INTO Documento VALUES('','cc'),('','Ti'),('','Pasaporte'),('','NIT');  
CREATE TABLE Empresa(
    IdEmpresa INT NOT NULL  AUTO_INCREMENT PRIMARY KEY,
    RazonSocial VARCHAR(50),
    IdDocumento INT,
    NDocumento VARCHAR(12),
    Telefono VARCHAR(10),
    Celular VARCHAR(10),
    Correo VARCHAR(50),
    TPersona VARCHAR(10),
    Activo varchar(5),
    FIngreso DATETIME,
    CONSTRAINT fk_EmpresaDocumento FOREIGN KEY(IdDocumento) REFERENCES Documento(IdDocumento));
ALTER TABLE Empresa CONVERT TO CHARACTER SET utf8;
insert into Empresa values ('','RazonSocial',2,'222','222','222','22@2','juridica','si',null);

DROP procedure IF EXISTS `sp_mostrar_datos`;

DELIMITER $$
USE `db_prueba`$$
CREATE PROCEDURE `sp_mostrar_datos` ()
BEGIN
	select IdEmpresa,
			RazonSocial,
			IdDocumento,
			NDocumento,
            Telefono,
            Celular,
            Correo,
            TPersona,
            Activo,
            FIngreso
	from Empresa;
END$$

DELIMITER ;

DROP procedure IF EXISTS `sp_insertar_datos`;

DELIMITER $$
USE `db_prueba`$$
CREATE PROCEDURE `sp_insertar_datos` (in RazonSocial varchar(50),
										in IdDocumento int,
                                        in NDocumento VARCHAR(12),
                                        in Telefono VARCHAR(10),
                                        in Celular VARCHAR(10),
                                        in Correo VARCHAR(50),
                                        in TPersona varchar(10),
                                        in Activo VARCHAR(3),
                                        in FIngreso DATETIME)
BEGIN
	insert into Empresa values ('',RazonSocial,IdDocumento,NDocumento,Telefono,Celular,Correo,TPersona,Activo,FIngreso);
END$$

DELIMITER ;


DROP procedure IF EXISTS `sp_actualizar_datos`;

DELIMITER $$
USE `db_prueba`$$
CREATE PROCEDURE `sp_actualizar_datos` (in RazonSocial varchar(50),
										in IdDocumento int,
                                        in NDocumento VARCHAR(12),
                                        in Telefono VARCHAR(10),
                                         in Celular VARCHAR(10),
                                        in Correo VARCHAR(50),
                                       in TPersona varchar(10),
                                        in Activo VARCHAR(5),
                                        in FIngreso DATETIME,
                                        in IdEmpresa int)
BEGIN
	update Empresa set RazonSocial=RazonSocial,
						IdDocumento=IdDocumento,
						NDocumento=NDocumento,
                        Telefono=Telefono,
                        Celular=Celular,
                        Correo=Correo,
                        TPersona=TPersona,
                        Activo=Activo,
                        FIngreso=FIngreso
				where IdEmpresa=IdEmpresa;
END$$

DELIMITER ;


DROP procedure IF EXISTS `sp_eliminar_datos`;

DELIMITER $$
USE `db_prueba`$$
CREATE PROCEDURE `sp_eliminar_datos` (in IdEmpresa int)
BEGIN
	delete from Empresa 
    where IdEmpresa=IdEmpresa;
END$$

DELIMITER ;

DROP procedure IF EXISTS `sp_obtener_empresa`;

DELIMITER $$
USE `db_prueba`$$
CREATE PROCEDURE `sp_obtener_empresa` (in IdEmpresa int)
BEGIN
	select * from Empresa where IdEmpresa=IdEmpresa;
END$$

DELIMITER ;

