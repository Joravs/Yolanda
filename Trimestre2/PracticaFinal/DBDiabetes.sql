CREATE DATABASE ControlGlucosaDB;
USE ControlGlucosaDB;

CREATE TABLE usuario (
    idUsuario INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(25) NOT NULL,
    apellido VARCHAR(25) NOT NULL,
    fechaNac DATE NOT NULL,
    username VARCHAR(25) UNIQUE NOT NULL,
    password VARCHAR(25) NOT NULL
);

CREATE TABLE comidas (
    idComidas INT AUTO_INCREMENT PRIMARY KEY,
    glucosa1 FLOAT NOT NULL,
    glucosa2 FLOAT NOT NULL,
    racion FLOAT NOT NULL,
    insulina FLOAT NOT NULL,
    tipoComida ENUM('Desayuno', 'Comida', 'Cena') NOT NULL
);

CREATE TABLE controlGlucosa (
    idUsuario INT,
    fecha DATE NOT NULL,
    lenta FLOAT NOT NULL,
    deporte BOOLEAN NOT NULL,
    idComidas INT,
    PRIMARY KEY (idUsuario, fecha),
    FOREIGN KEY (idUsuario) REFERENCES usuario(idUsuario) ON DELETE CASCADE,
    FOREIGN KEY (idComidas) REFERENCES comidas(idComidas) ON DELETE SET NULL
);

CREATE TABLE hipo (
    idUsuario INT,
    fecha DATE NOT NULL,
    tipoComida ENUM('Desayuno', 'Comida', 'Cena') NOT NULL,
    hora TIME NOT NULL,
    glucosa FLOAT NOT NULL,
    PRIMARY KEY (idUsuario, fecha, tipoComida, hora),
    FOREIGN KEY (idUsuario, fecha) 
        REFERENCES controlGlucosa(idUsuario, fecha) ON DELETE CASCADE,
    FOREIGN KEY (tipoComida) REFERENCES comidas(tipoComida) ON DELETE CASCADE
);

CREATE TABLE hiper (
    idUsuario INT,
    fecha DATE NOT NULL,
    tipoComida ENUM('Desayuno', 'Comida', 'Cena') NOT NULL,
    hora TIME NOT NULL,
    glucosa FLOAT NOT NULL,
    correccion FLOAT NOT NULL,
    PRIMARY KEY (idUsuario, fecha, tipoComida, hora),
    FOREIGN KEY (idUsuario, fecha) 
        REFERENCES controlGlucosa(idUsuario, fecha) ON DELETE CASCADE,
    FOREIGN KEY (tipoComida) REFERENCES comidas(tipoComida) ON DELETE CASCADE
);
