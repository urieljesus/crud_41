<?php
    include("conexion.php");

    //Paso 1.
    $consulta = "SELECT * FROM usuarios";

    //Paso 2.
    $query = $bd->prepare($consulta);

    //Paso 3.
    $query->execute();

    //Paso 4. Traer la información de la cosulta
    $usuarios = $query->fetchAll();

    
//    echo "<pre>";
//    print_r($usuarios);
//    echo "</pre>";

    //echo $usuarios[1]["correo"];
?>

<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Ver Usuarios</title>
        <meta charset="utf-8">
        
        <!--   Jquery     -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        
        <!--  Bootstrap      -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.css">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        
        <style>
            
            body{
                padding: 20px;
            }
            
            tr{
              text-align: center;
            }
            
            .icon-borrar{
                width: 20px;
                cursor: pointer;
            }
            
            .icon-edit{
                width: 30px;
                cursor: pointer;
            }
        </style>
    </head>
    
    <body>
        
        <h1>Lista de Usuarios</h1>
        
        <table border="2" class="table table-striped">
            <tr>
                
                <td>Nombre</td>
                <td>Correo</td>
                <td>Curso</td>
                <td>Contraseña</td>
                <td>Editar</td>
                <td>Borrar</td>
            </tr>
            
            <?php 
                for($x=0; $x < count($usuarios); $x++){
            ?>  
                <tr>
                    
                    <td><?php echo $usuarios[$x]["nombre"]; ?></td>
                    <td><?php echo $usuarios[$x]["correo"]; ?></td>
                    <td><?php echo $usuarios[$x]["curso"]; ?></td>
                    <td><?php echo $usuarios[$x]["pass"]; ?></td>
                    <td>
                            <img class="icon-edit" src="img/edit.png" usid="<?php echo $usuarios[$x]["id"] ?>">
                    </td>
                    <td>
                        <img class="icon-borrar" src="img/delete.png" usid="<?php echo $usuarios[$x]["id"] ?>">
                    </td>
                </tr>
            <?php
                }
            ?>
            
        </table>
        
        <br><br>
        
        <a class="btn btn-primary" href="nuevo.php">Nuevo Usuario</a>
    
        <script>
            
            $(".icon-edit").click(function(){
               
                var id = $(this).attr("usid");
                
                window.location = "editar.php?id=" + id;
                
            });
            
            $(".icon-borrar").click(function(){
                
                var idx = $(this).attr("usid");
                
                if(confirm("Estas seguro qué deseas elimar al usuario?")){ 
                    window.location = "eliminar.php?id=" + idx; 
                }
                
            });
        
            
            // sintaxis de un GET
            //http://localhost/curso/ver.php?nombre=Diana
        
        </script>
    </body>
    
</html>