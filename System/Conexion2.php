<?php
/*
CREATE PROCEDURE GetTipoDato (@id_tipo TinYint,@id_contact BIGINT)
AS
BEGIN
SELECT d.Dato FROM iddato d
WHERE d.idcontacto = @id_contact AND d.idtipo=@id_tipo
END;
 *  */
$server='mysql.hostinger.com.ar';
$user='u626888219_dc';
$password='282ANYFIO';
$database_name='u626888219_dc';
$query='SELECT DISTINCT c.nomContacto,
	(SELECT d2.dato FROM dato d2 WHERE d2.idContacto = d.idContacto and d2.numDato= d.numDato and d2.idTipo=1) AS Correo ,
	(SELECT d2.dato FROM dato d2 WHERE d2.idContacto = d.idContacto and d2.numDato= d.numDato and d2.idTipo=2) AS Correo 
FROM dato d, contacto c Where d.idContacto=c.idContacto';
$conexion = mysqli_connect($server, $user, $password);
if(!$conexion){
    die('No se conecto'.mysql_error());
}
 //else {
 //   echo 'Te conectaste wiiii';  
 mysqli_select_db($conexion,$database_name);
//    if(mysql_query($query,$conexion)){
 //       echo 'Se ejecuto el query';
  //  }
//    else {
 //       echo 'No se ejecuto'.mysql_error();
 //   }
//}
$peticion=  mysqli_query($conexion,$query);
while ($row = mysqli_fetch_array($peticion)) {
    echo '<tr>';
    echo '<td>'.$row[0].'</td><td>'.$row[1].'</td><td>'.$row[2].'</td><td><a>Eliminar</a><br><a>Modificar</a></td>';
    echo '</tr>';
}
mysqli_close($conexion);
?>

