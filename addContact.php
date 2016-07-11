<!DOCTYPE html>
<?php
include 'System/VariablesSytem.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>
            <?php
            echo $TituloDePaginaWeb;
            ?>
        </title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link type="text/css" rel="stylesheet" href="css/bootstrap/bootstrap.min.css" >
        <link type="text/css" rel="stylesheet" href="css/personalido/index.css" >
    </head>
    <body>
        <table border="1"style="margin-top: 2%;">
            <thead>
                <tr>
                    <th>Tipo de Dato</th>
                    <th>Dato</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Nombre : </td>
                    <td ><input placeholder="Ingrese Nombre" type="text" name="nombre" style="width: 90%; position: relative;"/></td>
                </tr>
                <tr>
                    <td>Celular : </td>
                    <td><input placeholder="Ingrese Celular" type="" name="celular" /></td>
                </tr>
                <tr>
                    <td>Correo : </td>
                    <td><input placeholder="Ingrese Correo" type="email" name="email" style="width: 90%; position: relative;" /></td>
                </tr>
            
            </tbody>
        </table>
        <div id="add"><button>Agregar Dato</button></div>
        <table id="new">
            <tr>
            <td><div style="float: left; margin-left: 10%; ">
                    <input type="checkbox" name="tipoDato" value="ON" checked="checked"  /><br>
                    <input type="checkbox" name="tipoDato2" value="OFF"/>Otro tipo de dato</div>
            <div style="float: right; margin-right: 10%;" ><select name="tipodeDato" >
            <option>Celular</option>
            <option>Correo</option>
        </select></div>
        </td>
        <td>  <input type="text" name="dato" value="" placeholder="Ingrese Dato" style="width: 90%; position: relative;" /></td>
        </tr>
    </body>
</html>
