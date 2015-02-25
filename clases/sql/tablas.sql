CREATE DATABASE tiendadeportes;

USE tiendadeportes;

CREATE TABLE venta (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    fecha VARCHAR(40) NOT NULL,
    hora VARCHAR(10) NOT NULL,
    pago INT NOT NULL,
    direccion VARCHAR(200) NOT NULL,
    nombre VARCHAR(100) NOT NULL
)engine=innodb charset=utf8 collate=utf8_unicode_ci;

CREATE TABLE producto (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(30) NOT NULL,
    precio double NOT NULL,
    foto VARCHAR(100) NOT NULL,
    iva INT NOT NULL
)engine=innodb charset=utf8 collate=utf8_unicode_ci;

CREATE TABLE detalle (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    idventa INT NOT NULL,
    idproducto INT NOT NULL,  
    cantidad INT NOT NULL,
    precio double NOT NULL,  
    iva INT NOT NULL,
    FOREIGN KEY (idventa) REFERENCES venta(id),
    FOREIGN KEY (idproducto) REFERENCES producto(id)
)engine=innodb charset=utf8 collate=utf8_unicode_ci;

CREATE TABLE paypal (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    idventa VARCHAR(40) NOT NULL,
    verificado VARCHAR(10) NOT NULL,
FOREIGN KEY (idventa) REFERENCES venta(id)
)engine=innodb charset=utf8 collate=utf8_unicode_ci;

CREATE TABLE usuario (
    login VARCHAR(30) NOT NULL PRIMARY KEY,
    clave VARCHAR(40) NOT NULL,
    nombre VARCHAR(30) NOT NULL,
    apellidos VARCHAR(60) NOT NULL,
    email VARCHAR(40) NOT NULL,
    fechaalta DATE NOT NULL,
    isactivo TINYINT(1) NOT NULL default 0,
    isroot TINYINT(1) NOT NULL default 0,
    rol ENUM('administrador','usuario') NOT NULL default 'usuario',
    fechalogin DATETIME
)engine=innodb charset=utf8 collate=utf8_unicode_ci;