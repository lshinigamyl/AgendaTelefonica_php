<?php
/*
CREATE PROCEDURE GetTipoDato (@id_tipo TinYint,@id_contact BIGINT)
AS
BEGIN
SELECT d.Dato FROM iddato d
WHERE d.idcontacto = @id_contact AND d.idtipo=@id_tipo
END;
 *  */
$server='localhost';
$user='root';
$password='';
$database_name='contactos';
$query='SELECT DISTINCT c.nomContacto, (SELECT t2.dato FROM iddato t2 WHERE t2.idContacto = t.idContacto and t2.idTipo=1) AS Correo , (SELECT t2.dato FROM iddato t2 WHERE t2.idContacto = t.idContacto and t2.idTipo=2) AS Correo FROM iddato t, idcontacto c Where t.idContacto=c.idContacto';
$conexion = mysql_connect($server, $user, $password);
if(!$conexion){
    die('No se conecto'.mysql_error());
}
 //else {
 //   echo 'Te conectaste wiiii';  
mysql_select_db($database_name,$conexion);
//    if(mysql_query($query,$conexion)){
 //       echo 'Se ejecuto el query';
  //  }
//    else {
 //       echo 'No se ejecuto'.mysql_error();
 //   }
//}
$peticion=  mysql_query($query);
while ($row = mysql_fetch_array($peticion)) {
    echo '<tr>';
    echo '<td>'.$row[0].'</td><td>'.$row[1].'</td><td>'.$row[2].'</td><td><a>Eliminar</a><br><a>Modificar</a></td>';
    echo '</tr>';
}
mysql_close($conexion);
?>

