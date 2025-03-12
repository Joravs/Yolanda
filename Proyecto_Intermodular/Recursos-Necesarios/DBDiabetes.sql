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

INSERT INTO controlGlucosa (idUsuario, fecha) VALUES
(9, '2024-02-01'),
(9, '2024-02-02'),
(9, '2024-02-03'),
(9, '2024-02-04'),
(9, '2024-02-05'),
(9, '2024-02-06'),
(9, '2024-02-07'),
(9, '2024-02-08'),
(9, '2024-02-09'),
(9, '2024-02-10'),
(9, '2024-02-11'),
(9, '2024-02-12'),
(9, '2024-02-13'),
(9, '2024-02-14'),
(9, '2024-02-15'),
(9, '2024-02-16'),
(9, '2024-02-17'),
(9, '2024-02-18'),
(9, '2024-02-19'),
(9, '2024-02-20'),
(9, '2024-02-21'),
(9, '2024-02-22'),
(9, '2024-02-23'),
(9, '2024-02-24'),
(9, '2024-02-25'),
(9, '2024-02-26'),
(9, '2024-02-27'),
(9, '2024-02-28');

