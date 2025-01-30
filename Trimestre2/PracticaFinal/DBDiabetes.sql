CREATE DATABASE diabetes_management;

USE diabetes_management;

CREATE TABLE usuario (
    idUsuario INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(15),
    apellido VARCHAR(15),
    fechaNac DATE,
    username VARCHAR(15),
    password VARCHAR(15)
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
    glucosa1 FLOAT,
    glucosa2 FLOAT,
    racion FLOAT,
    insulina FLOAT,
    tipoComida ENUM('Desayuno', 'Comida', 'Cena'),
    FOREIGN KEY (idUsuario, fecha) REFERENCES controlGlucosa(idUsuario, fecha),
    PRIMARY KEY (idUsuario, fecha, tipoComida)
);

CREATE TABLE hipo (
    idUsuario INT,
    fecha DATE,
    tipoComida ENUM('Desayuno', 'Comida', 'Cena'),
    hora TIME,
    glucosa FLOAT,
    FOREIGN KEY (idUsuario, fecha, tipoComida) REFERENCES comidas(idUsuario, fecha, tipoComida),
    PRIMARY KEY (idUsuario, fecha, tipoComida)
);

CREATE TABLE hiper (
    idUsuario INT,
    fecha DATE,
    tipoComida ENUM('Desayuno', 'Comida', 'Cena'),
    hora TIME,
    glucosa FLOAT,
    correccion FLOAT,
    FOREIGN KEY (idUsuario, fecha, tipoComida) REFERENCES comidas(idUsuario, fecha, tipoComida),
    PRIMARY KEY (idUsuario, fecha, tipoComida)
);
