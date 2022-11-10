<?php

    include("conexion.php");

    //print_r($_GET);

    $id = $_GET["id"];

    $consulta = "SELECT * FROM clientes WHERE id = " . $id;

    $query = $bd->prepare($consulta);
    $query->execute();

    $usuario = $query->fetchAll();

//    echo "<pre>";
//    print_r($usuario);
//    echo "</pre>";

    //echo $usuario[0]["nombre"];

?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Editar Usuario</title>
        <!--  Bootstrap      -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.css">
        
        <style>
             body{
                padding: 20px;
            }
        </style>
        
    </head>
    


    <body>
        
        <h1>Editar Cliente</h1>
        
        <form action="editar_respuesta2.php" method="post">
            <div>Nombre</div>
            <input type="text" name="nombre" value="<?php echo $usuario[0]["nombre"]; ?>"><br><br>
            
            <div>Apellido</div>
            <input type="text" name="apellido" value="<?php echo $usuario[0]["apellido"]; ?>"><br><br>
            
            <div>Telefono</div>
            <input type="text" name="Telefono" value="<?php echo $usuario[0]["Telefono"]; ?>"><br><br>
            
            <div>Correo</div>
            <input type="text" name="Correo" value="<?php echo $usuario[0]["Correo"]; ?>"><br><br>
            
            <input type="hidden" name="id" value="<?php echo $usuario[0]["id"]; ?>">
            
            <button> Modificar Cliente </button>
            
        </form>
    
    </body>
    
</html>




