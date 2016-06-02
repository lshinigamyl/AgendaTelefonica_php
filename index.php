<!DOCTYPE html>
<?php
include 'System/VariablesSytem.php';
?>
<html lang="en">
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
        <?php
            include 'System/Menus.php';
        ?>
        <table>
            <tr>
                <th> Nombre </th><th> Tipo de Dato </th><th> Dato </th><th> Opciones </th><th><button>Modificar</button></th>
            </tr>
            <?php
                    include 'System/Conexion.php';
            ?>
            <tr>
                <form action='crearfavorito.php' method='POST'>
                <td><input type='text' name='nombre'></td>
                <td><input type='text' name='tipoDato'></td>
                <td><select name='categoria'>
                        <option value='salud'>Salud</option>
                        <option value='trabajo'>Trabajo</option>
                        <option value='hobby'>Hobby</option>
                        <option value='personal'>Personal</option>
                        <option value='otros'>Otros</option>
                </td>
                <td><input type='text' name='Dato'></td>
                <td><input type='submit'></td>
            </tr>
        </table>
        
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>    
    </body>
</html>
