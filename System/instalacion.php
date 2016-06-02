<?php
//CREAR UNA TABLA DE FAVORITOS-----------------------------------------------------------
//Conexion---------------------------------
$conexion = sqlite_open('favoritos.db') or die('Ha sido imposible establecer la conexion');
//Crear tabla---------------------------------
$consulta = 
<<<SQL

CREATE TABLE favoritos(

usuario Char(40) Not Null,
contrasena Char(40) Not Null,
titulo Char (40) Not Null,
direccion Char (100) Not Null,
categoria Char (40),
comentario Char (200),
valoracion Int

);

SQL;
//Insertar contenido en la tabla--------------------
$resultado = sqlite_exec($conexion, $consulta);
//Cerrar la conexion---------------------------------
sqlite_close($conexion);
//CONTENIDO DE PRUEBA PARA LA TABLA DE FAVORITOS--------------------------------------
//Establecer
$conexion = sqlite_open('favoritos.db') or die('Ha sido imposible establecer la conexion');
//Preparar
$consulta = 
<<<SQL
INSERT INTO favoritos VALUES ('jocarsa','jocarsa','Google','http://www.google.com','Tecnologia','Este es un buscador muy famoso',10);
INSERT INTO favoritos VALUES ('jocarsa','jocarsa','JOCARSA','http://www.jocarsa.com','Tecnologia','Esta es mi pagina',10);
SQL;
//Insertar
$resultado = sqlite_exec($conexion,$consulta);
//Cerrar
sqlite_close($conexion);
//CREAR UNA TABLA DE USUARIOS------------------------------------------------------------
//Conexion---------------------------------
$conexion = sqlite_open('favoritos.db') or die('Ha sido imposible establecer la conexion');
//Crear tabla---------------------------------
$consulta = 
<<<SQL

CREATE TABLE usuarios(

usuario Char(40) Not Null,
contrasena Char(40) Not Null,
nombre Char(40) Not Null,
apellido Char(100) Not Null,
edad Int,
permisos Int


);

SQL;
//Insertar contenido en la tabla--------------
$resultado = sqlite_exec($conexion, $consulta);
//Cerrar la conexion--------------------------
sqlite_close($conexion);

//CONTENIDO DE PRUEBA PARA LA TABLA DE USUARIOS--------------------------------------
//Establecer
$conexion = sqlite_open('favoritos.db') or die('Ha sido imposible establecer la conexion');
//Preparar
$consulta = 
<<<SQL
INSERT INTO usuarios VALUES ('jocarsa','jocarsa','Jose Vicente','Carratala',32,1);

SQL;
//Insertar
$resultado = sqlite_exec($conexion,$consulta);
//Cerrar
sqlite_close($conexion);


//CREAR UNA TABLA DE LOGS------------------------------------------------------------
//Conexion---------------------------------
$conexion = sqlite_open('favoritos.db') or die('Ha sido imposible establecer la conexion');
//Crear tabla---------------------------------
$consulta = 
<<<SQL

CREATE TABLE logs(

utc Int,
anio Int,
mes Int,
dia Int,
hora Int,
minuto Int,
segundo Int,
ip Char(50),
navegador Char(100),
usuario Char(40),
contrasena Char(40)



);

SQL;
//Insertar contenido en la tabla--------------
$resultado = sqlite_exec($conexion, $consulta);
//Cerrar la conexion--------------------------
sqlite_close($conexion);

//CONTENIDO DE PRUEBA PARA LA TABLA DE USUARIOS--------------------------------------
//Establecer
$conexion = sqlite_open('favoritos.db') or die('Ha sido imposible establecer la conexion');
//Preparar
$consulta = 
<<<SQL
INSERT INTO logs VALUES (000000000,2011,02,07,21,03,00,'127.0.0.1','chrome','jocarsa','jocarsa');

SQL;
//Insertar
$resultado = sqlite_exec($conexion,$consulta);
//Cerrar
sqlite_close($conexion);
?>
