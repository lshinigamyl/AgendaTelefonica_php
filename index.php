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
        <br/>
        <h1 class="modal-title text-center h1">Bienvenido a tu Agenda de Contactos</h1><div id="config"><button class=" btn btn-primary">Configuracion</button></div>
        <br/>
        <table class="table table-hover table-bordered">
            <tr>
                <th class="text-center h2"> Nombre </th> <th class="text-center" > Celular </th> <th class="text-center"> Correo </th> <th class="text-center"> Opciones </th>
            </tr>
            <?php
                    include 'System/Conexion.php';
            ?>
        </table>
        <div id="add"><button>Agregar Contacto</button></div>
        
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>    
    </body>
</html>
