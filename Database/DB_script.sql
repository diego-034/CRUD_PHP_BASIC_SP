CREATE DATABASE Db_prueba CHARACTER SET utf8 COLLATE utf8_spanish2_ci;
USE Db_prueba;

CREATE TABLE Empresa(
    IdEmpresa INT NOT NULL  AUTO_INCREMENT PRIMARY KEY,
    RazonSocial VARCHAR(50),
    IdDocumento VARCHAR(10),
    NDocumento VARCHAR(12),
    Telefono VARCHAR(10),
    Celular VARCHAR(10),
    Correo VARCHAR(50),
    TPersona VARCHAR(10),
    Activo varchar(5),
    FIngreso DATETIME);
ALTER TABLE Empresa CONVERT TO CHARACTER SET utf8;

insert into Empresa values ('','RazonSocial','T.I.','222','222','222','22@2','juridica','si',null);

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
										in IdDocumento VARCHAR(10),
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
										in IdDocumento VARCHAR(10),
                                        in NDocumento VARCHAR(12),
                                        in Telefono VARCHAR(10),
                                         in Celular VARCHAR(10),
                                        in Correo VARCHAR(50),
                                       in TPersona varchar(10),
                                        in Activo VARCHAR(5),                                      
                                        in IdEmpresaA int)
BEGIN
	update Empresa set RazonSocial=RazonSocial,
						IdDocumento=IdDocumento,
						NDocumento=NDocumento,
                        Telefono=Telefono,
                        Celular=Celular,
                        Correo=Correo,
                        TPersona=TPersona,
                        Activo=Activo                    
				where IdEmpresa= IdEmpresaA ;
END$$

DELIMITER ;


DROP procedure IF EXISTS `sp_eliminar_datos`;

DELIMITER $$
USE `db_prueba`$$
CREATE PROCEDURE `sp_eliminar_datos` (in IdEmpresaA int)
BEGIN
	delete from Empresa 
    where IdEmpresa = IdEmpresaA;
END$$

DELIMITER ;

DROP procedure IF EXISTS `sp_obtener_empresa`;

DELIMITER $$
USE `db_prueba`$$
CREATE PROCEDURE `sp_obtener_empresa` (in IdEmpresaA int)
BEGIN
	select * from Empresa where IdEmpresa=IdEmpresaA;
END$$

DELIMITER ;

