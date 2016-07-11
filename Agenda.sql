CREATE DATABASE AGENDAPHP;
go
CREATE TABLE contacto(
idContacto bigint(12) unsigned not null,
nomContacto varchar(30) not null
);
go
CREATE TABLE dato(
idcontacto bigint(12) NOT NULL,
idtipo tinyint(4) NOT NULL,
numdato tinyint(4) NOT NULL,
Dato varchar(50) NOT NULL
);
go
CREATE TABLE tipo(
idtipo tinyint(3) UNSIGNED NOT NULL,
nomtipo varchar(30) DEFAULT NULL
);
go



INSERT INTO contacto VALUES(160531225920, 'Angelo Ravello Aguado');
INSERT INTO contacto VALUES(160711114915, 'Jose Abelardo Quiñoes');
INSERT INTO contacto VALUES(160711115555, 'Miguel Grau');
go
SELECT * FROM contacto;
go
INSERT INTO dato VALUES(160531225920, 1, 1, '991935770');
INSERT INTO dato VALUES(160531225920, 2, 1, 'angelora26.95@gmail.com');
go
SELECT * FROM dato;
go
INSERT INTO tipo VALUES(1, 'celular');
INSERT INTO tipo VALUES(2, 'Correo');
go
SELECT * FROM tipo;
go
ALTER TABLE `idcontacto`
  ADD PRIMARY KEY (`idContacto`);
go
--
-- Indices de la tabla `iddato`
--

ALTER TABLE `iddato`
  ADD PRIMARY KEY (`numdato`,`idtipo`,`idcontacto`);
go
--
-- Indices de la tabla `idtipo`
--
ALTER TABLE `idtipo`
  ADD PRIMARY KEY (`idtipo`);
go
--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `idtipo`
--
ALTER TABLE `idtipo`
  MODIFY `idtipo` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

go

SELECT DISTINCT c.nomContacto,
	(SELECT t2.datos FROM dato t2 WHERE t2.idContacto = t.idContacto and t2.idDato= t.idDato and t2.idTipo=1) AS Correo ,
	(SELECT t2.datos FROM dato t2 WHERE t2.idContacto = t.idContacto and t2.idDato= t.idDato and t2.idTipo=2) AS Correo 
FROM dato t, contacto c Where t.idContacto=c.idContacto