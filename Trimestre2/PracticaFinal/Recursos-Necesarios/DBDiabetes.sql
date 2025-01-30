CREATE DATABASE controlDiabetes;
USE controlDiabetes;

CREATE TABLE usuario (
    idUsuario INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(15),
    apellido VARCHAR(15),
    fechaNac DATE,
    username VARCHAR(15),
    password VARCHAR(25)
);

CREATE TABLE controlGlucosa (
    idUsuario INT,
    fecha DATE,
    lenta BOOLEAN,
    deporte BOOLEAN,
    FOREIGN KEY (idUsuario) REFERENCES usuario(idUsuario),
    PRIMARY KEY (idUsuario, fecha)
);

CREATE TABLE comidas (
    idUsuario INT,
    fecha DATE,
    glucosa1 INT,
    glucosa2 INT,
    racion INT,
    insulina INT,
    tipoComida ENUM('Desayuno', 'Comida', 'Cena'),
    FOREIGN KEY (idUsuario, fecha) REFERENCES controlGlucosa(idUsuario, fecha),
    PRIMARY KEY (idUsuario, fecha, tipoComida)
);

CREATE TABLE hipo (
    idUsuario INT,
    fecha DATE,
    tipoComida ENUM('Desayuno', 'Comida', 'Cena'),
    hora TIME,
    glucosa INT,
    FOREIGN KEY (idUsuario, fecha, tipoComida) REFERENCES comidas(idUsuario, fecha, tipoComida),
    PRIMARY KEY (idUsuario, fecha, tipoComida)
);

CREATE TABLE hiper (
    idUsuario INT,
    fecha DATE,
    tipoComida ENUM('Desayuno', 'Comida', 'Cena'),
    hora TIME,
    glucosa INT,
    correccion INT,
    FOREIGN KEY (idUsuario, fecha, tipoComida) REFERENCES comidas(idUsuario, fecha, tipoComida),
    PRIMARY KEY (idUsuario, fecha, tipoComida)
);