## **<u>**APP con Modelo Vista Controlador**</u>**



Se va a proceder a crear un CMS utilizando el modelo vista controlador en donde utilizaremos una base de datos (mysql) en la que se administraran los datos de recogida y entrega.

Para el desarrollo de dicha aplicación, haremos uso de los siguientes elementos:

\1. Programación Orientada a Objetos (POO)

\2. Modelo Vista Controlador (MVC)   

\3. Base de datos  (BBDD) porporcionada por MYSQL; para usar dicha BBDDharemos acopio de la aplicación Laragon para hacer la simulacion de la introduccion  y comprobación de los datos de los usuarios y las publicaciones a dicha bbdd.

\4. PHP como lenguaje de programación.

Usaremos un formulario donde se recogerán los datos de los usuarios (Nombre, Apellidos, email,usuario,contraseña...).Para proteger la privacidad de los datos de los usuarios, usaremos una encriptación HASH para las claves.

Para crear los primeros elementos de nuestra BBDD, a través de la consola de laragón en este caso crearemos las siguientes variables:

Primeramente crearemos la BBDD:

CREATE DATABASE cms CHARACTER SET utf8 COLLATE utf8_general_ci;

Creamos un usuario y contraseña de administrador que tenga acceso total a la aplicación:

CREATE USER 'usuario-cms'@'localhost' IDENTIFIED BY 'introduce-la-password';

GRANT INSERT,SELECT,UPDATE,DELETE ON cms.* TO 'usuario-cms'@'localhost';



Tabla de Usuarios: 

| CREATE TABLE `usuarios` ( |                                          |
| ------------------------- | ---------------------------------------- |
|                           | `id` int(3) NOT NULL AUTO_INCREMENT,     |
|                           | `usuario` varchar(16) NOT NULL,          |
|                           | `clave` varchar(64) NOT NULL,            |
|                           | `fecha_acceso` datetime DEFAULT NULL,    |
|                           | `activo` tinyint(1) NOT NULL DEFAULT '0', |
|                           | `usuarios` tinyint(1) NOT NULL DEFAULT '0', |
|                           | `noticias` tinyint(1) NOT NULL DEFAULT '1', |
|                           | PRIMARY KEY (`id`),                      |
|                           | UNIQUE KEY `usuario` (`usuario`),        |
|                           | UNIQUE KEY `id` (`id`)                   |
|                           | ) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8; |

Tabla de Noticias:

| CREATE TABLE `noticias` ( |                                          |
| ------------------------- | ---------------------------------------- |
|                           | `id` int(3) NOT NULL AUTO_INCREMENT,     |
|                           | `titulo` varchar(32) NOT NULL DEFAULT '', |
|                           | `slug` varchar(36) DEFAULT '',           |
|                           | `entradilla` varchar(128) DEFAULT '',    |
|                           | `texto` longtext,                        |
|                           | `activo` tinyint(1) NOT NULL DEFAULT '0', |
|                           | `home` tinyint(1) NOT NULL DEFAULT '0',  |
|                           | `fecha` datetime DEFAULT NULL,           |
|                           | `autor` varchar(64) DEFAULT NULL,        |
|                           | `imagen` varchar(64) DEFAULT NULL,       |
|                           | PRIMARY KEY (`id`),                      |
|                           | UNIQUE KEY `id` (`id`)                   |
|                           | ) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8; |

Los elementos CSS y HTML se han dispuesto conforme al gusto personal y son perfectamente adaptables a otros tipos.
