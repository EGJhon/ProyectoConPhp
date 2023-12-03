/*Desarrollar una  aplicacion en PHP  que me permita   hacer un  buscador  de 
productos de  primera  necesidad .

La  busqueda consiste en  ingresar el codigo del  producto  y   presionar el  boton "buscar"
y automaticamente  va a  buscar  en la tabla de  nombre  Producto cuyos campos esta conformado por : 
idprod, nombprod, precio, fecha  ,  va aparecer una  tabla con el contenido del producto.*/

CREATE DATABASE productos;
USE productos;
CREATE TABLE Producto(
    idprod INT,
    nombprod VARCHAR(50),
    precio FLOAT,
    fecha DATE,
    PRIMARY KEY(idprod) 
);
ALTER TABLE Producto  MODIFY COLUMN idprod INT NOT NULL AUTO_INCREMENT;

