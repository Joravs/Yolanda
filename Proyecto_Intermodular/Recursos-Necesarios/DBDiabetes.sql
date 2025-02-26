CREATE DATABASE controlDiabetes;
USE controlDiabetes;

CREATE TABLE usuario (
    idUsuario INT AUTO_INCREMENT,
    nombre VARCHAR(25),
    apellido VARCHAR(30),
    fechaNac DATE,
    username VARCHAR(20),
    password VARCHAR(100),
    PRIMARY KEY (idUsuario, username)
);

CREATE TABLE controlGlucosa (
    idUsuario INT,
    fecha DATE,
    lenta BOOLEAN,
    deporte BOOLEAN,
    FOREIGN KEY (idUsuario) REFERENCES usuario(idUsuario) ON DELETE CASCADE ON UPDATE CASCADE,
    PRIMARY KEY (idUsuario, fecha)
);

CREATE TABLE comidas (
    idUsuario INT,
    fecha DATE,
    glucosa1 INT,
    glucosa2 INT,
    racion INT,
    insulina INT,
    tipoComida ENUM('Desayuno', 'Comida', 'Cena','Mediodia','Merienda'),
    FOREIGN KEY (idUsuario, fecha) REFERENCES controlGlucosa(idUsuario, fecha) ON DELETE CASCADE ON UPDATE CASCADE,
    PRIMARY KEY (idUsuario, fecha, tipoComida)
);

CREATE TABLE hipo (
    idUsuario INT,
    fecha DATE,
    tipoComida ENUM('Desayuno', 'Comida', 'Cena','Mediodia','Merienda'),
    hora TIME,
    glucosa INT,
    FOREIGN KEY (idUsuario, fecha, tipoComida) REFERENCES comidas(idUsuario, fecha, tipoComida) ON DELETE CASCADE ON UPDATE CASCADE,
    PRIMARY KEY (idUsuario, fecha, tipoComida)
);

CREATE TABLE hiper (
    idUsuario INT,
    fecha DATE,
    tipoComida ENUM('Desayuno', 'Comida', 'Cena','Mediodia','Merienda'),
    hora TIME,
    glucosa INT,
    correccion INT,
    FOREIGN KEY (idUsuario, fecha, tipoComida) REFERENCES comidas(idUsuario, fecha, tipoComida) ON DELETE CASCADE ON UPDATE CASCADE,
    PRIMARY KEY (idUsuario, fecha, tipoComida)
);

/* Creacion de usuario para uso unico de la base de datos */
CREATE USER 'adminDiabetes'@'%' IDENTIFIED BY 'adminDiabetes';
GRANT ALL ON `controlDiabetes`.* TO 'adminDiabetes'@'%';
FLUSH PRIVILEGES;

INSERT INTO `usuario`(`idUsuario`,`nombre`, `apellido`, `fechaNac`, `username`, `password`) VALUES (0,'','','','adminDiabetes','adminDiabetes');


/*Usuaris Datos Ejemplo*/
INSERT INTO `usuario`(`nombre`, `apellido`, `fechaNac`, `username`, `password`) VALUES ('Jordy','Reyes','2003-08-09','joravs','jordy123');
INSERT INTO `usuario`(`nombre`, `apellido`, `fechaNac`, `username`, `password`) VALUES ('Daniel','Ramos','2004-09-29','danirf','daniel123');

/*Control Glucosa Datos Ejemplo*/

INSERT INTO `controlGlucosa`(`idUsuario`, `fecha`, `lenta`, `deporte`) VALUES (1,'2025-02-11',0,0);
INSERT INTO `controlGlucosa`(`idUsuario`, `fecha`, `lenta`, `deporte`) VALUES (2,'2025-02-11',0,0);
INSERT INTO `controlGlucosa`(`idUsuario`, `fecha`, `lenta`, `deporte`) VALUES (2,'2025-02-10',0,0);
INSERT INTO `controlGlucosa`(`idUsuario`, `fecha`, `lenta`, `deporte`) VALUES (1,'2025-02-10',0,0);

/*Comidas Datos Ejemplo*/

INSERT INTO `comidas`(`idUsuario`, `fecha`, `glucosa1`, `glucosa2`, `racion`, `insulina`, `tipoComida`) 
VALUES (1,curdate(),80,90,1,1,'Desayuno');
INSERT INTO `comidas`(`idUsuario`, `fecha`, `glucosa1`, `glucosa2`, `racion`, `insulina`, `tipoComida`) 
VALUES (1,curdate(),80,90,1,1,'Mediodia');
INSERT INTO `comidas`(`idUsuario`, `fecha`, `glucosa1`, `glucosa2`, `racion`, `insulina`, `tipoComida`) 
VALUES (1,curdate(),80,90,1,1,'Comida');
INSERT INTO `comidas`(`idUsuario`, `fecha`, `glucosa1`, `glucosa2`, `racion`, `insulina`, `tipoComida`) 
VALUES (1,curdate(),80,90,1,1,'Merienda');
INSERT INTO `comidas`(`idUsuario`, `fecha`, `glucosa1`, `glucosa2`, `racion`, `insulina`, `tipoComida`) 
VALUES (1,curdate(),80,90,1,1,'Cena');

INSERT INTO `comidas`(`idUsuario`, `fecha`, `glucosa1`, `glucosa2`, `racion`, `insulina`, `tipoComida`) 
VALUES (1,'2025-02-11',80,90,1,1,'Desayuno');
INSERT INTO `comidas`(`idUsuario`, `fecha`, `glucosa1`, `glucosa2`, `racion`, `insulina`, `tipoComida`) 
VALUES (1,'2025-02-11',80,90,1,1,'Mediodia');
INSERT INTO `comidas`(`idUsuario`, `fecha`, `glucosa1`, `glucosa2`, `racion`, `insulina`, `tipoComida`) 
VALUES (1,'2025-02-11',80,90,1,1,'Comida');
INSERT INTO `comidas`(`idUsuario`, `fecha`, `glucosa1`, `glucosa2`, `racion`, `insulina`, `tipoComida`) 
VALUES (1,'2025-02-11',80,90,1,1,'Merienda');
INSERT INTO `comidas`(`idUsuario`, `fecha`, `glucosa1`, `glucosa2`, `racion`, `insulina`, `tipoComida`) 
VALUES (1,'2025-02-11',80,90,1,1,'Cena');

INSERT INTO `comidas`(`idUsuario`, `fecha`, `glucosa1`, `glucosa2`, `racion`, `insulina`, `tipoComida`) 
VALUES (2,'2025-02-10',80,90,1,1,'Desayuno');
INSERT INTO `comidas`(`idUsuario`, `fecha`, `glucosa1`, `glucosa2`, `racion`, `insulina`, `tipoComida`) 
VALUES (2,'2025-02-10',80,90,1,1,'Mediodia');
INSERT INTO `comidas`(`idUsuario`, `fecha`, `glucosa1`, `glucosa2`, `racion`, `insulina`, `tipoComida`) 
VALUES (2,'2025-02-10',80,90,1,1,'Comida');
INSERT INTO `comidas`(`idUsuario`, `fecha`, `glucosa1`, `glucosa2`, `racion`, `insulina`, `tipoComida`) 
VALUES (2,'2025-02-10',80,90,1,1,'Merienda');
INSERT INTO `comidas`(`idUsuario`, `fecha`, `glucosa1`, `glucosa2`, `racion`, `insulina`, `tipoComida`) 
VALUES (2,'2025-02-10',80,90,1,1,'Cena');

INSERT INTO `comidas`(`idUsuario`, `fecha`, `glucosa1`, `glucosa2`, `racion`, `insulina`, `tipoComida`) 
VALUES (2,'2025-02-11',80,90,1,1,'Desayuno');
INSERT INTO `comidas`(`idUsuario`, `fecha`, `glucosa1`, `glucosa2`, `racion`, `insulina`, `tipoComida`) 
VALUES (2,'2025-02-11',80,90,1,1,'Mediodia');
INSERT INTO `comidas`(`idUsuario`, `fecha`, `glucosa1`, `glucosa2`, `racion`, `insulina`, `tipoComida`) 
VALUES (2,'2025-02-11',80,90,1,1,'Comida');
INSERT INTO `comidas`(`idUsuario`, `fecha`, `glucosa1`, `glucosa2`, `racion`, `insulina`, `tipoComida`) 
VALUES (2,'2025-02-11',80,90,1,1,'Merienda');
INSERT INTO `comidas`(`idUsuario`, `fecha`, `glucosa1`, `glucosa2`, `racion`, `insulina`, `tipoComida`) 
VALUES (2,'2025-02-11',80,90,1,1,'Cena');