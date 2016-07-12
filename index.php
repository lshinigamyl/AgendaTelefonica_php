<!DOCTYPE html>
<?php
include 'System/VariablesSytem.php';
include './System/Conexion.php';
    $conexion = new Conecta();
    $conexion->ProcesarConexion();
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
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript"  src="js/bootstrap.min.js"></script>  
    </head>
    <body >
        <br/>
        <h1 class="modal-title text-center h1 btn-primary">Bienvenido a tu Agenda de Contactos</h1><div id="config"><button class=" btn btn-primary">Configuracion</button></div>
        <br/>
        <div class="container" style="    padding-left: 15px;
    padding-right: 15px;">
            <table class="table table-hover table-bordered">
            <tr>
                <th class="text-center h2"> Nombre </th> <th class="text-center h2" > Celular </th> <th class="text-center h2"> Correo </th> <th class="text-center h2"> Opciones </th>
            </tr>
            <?php
                   while ($row = mysqli_fetch_array($conexion->getPeticion())) {
                   echo '<tr>';
                   echo '<td class="text-center">'.$row[0].'</td><td class="text-center">'.$row[1].'</td><td class="text-center">'.$row[2].'</td><td class="text-center"><a>Eliminar</a><br><a>Modificar</a></td>';
                   echo '</tr>';
           }
           $conexion->CerrarConexion();        
           ?>
        </table>
        </div>
        <div id="add"><button>Agregar Contacto</button></div>
          
    </body>
</html>
