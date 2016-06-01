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
            <td>
                <th> Nombre </th><th> Tipo de Dato </th><th> Dato </th><th> Opciones </th>
            </td>
        </table>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>    
    </body>
</html>
