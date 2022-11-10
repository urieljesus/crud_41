<?php
    include("conexion.php");

    //Paso 1.
    $consulta = "SELECT * FROM clientes";

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
        <title>Crear Cliente    </title>
        <meta charset="utf-8">




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
    
        <h1 style="background-color: #00ffd7;">Ingresar Nuevo Cliente  </h1>
        
        <form action="client1.php" method="post">
            <div>Nombre</div>
            <input type="text" name="nombre"><br><br>
            
            <div>Apellido   </div>
            <input type="text" name="apellido"><br><br>
            
            <div>Telefono   </div>
            <input type="text" name="Telefono"><br><br>
            
            <div>Correo Electronico  </div>
            <input type="text" name="Correo"><br><br>
            
            <button>Guardar Usuario del cliente </button>
            
        </form>
    

        <h1>Lista De Clientes    </h1>
        
        <table border="2" class="table table-striped">
            <tr>
                
                <td>Nombre</td>
                <td>Apellido </td>
                <td>Telefono </td>
                <td>Correo Elec.</td>
                <td>Editar</td>
                <td>Borrar</td>
            </tr>
            
            <?php 
                for($x=0; $x < count($usuarios); $x++){
            ?>  
                <tr>
                    
                    <td><?php echo $usuarios[$x]["nombre"]; ?></td>
                    <td><?php echo $usuarios[$x]["apellido"]; ?></td>
                    <td><?php echo $usuarios[$x]["Telefono"]; ?></td>
                    <td><?php echo $usuarios[$x]["Correo"]; ?></td>
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
        
        
    
        <script>
            
            $(".icon-edit").click(function(){
               
                var id = $(this).attr("usid");
                
                window.location = "editar2.php?id=" + id;
                
            });
            
            $(".icon-borrar").click(function(){
                
                var idx = $(this).attr("usid");
                
                if(confirm("Estas seguro qué deseas elimar al usuario?")){ 
                    window.location = "eliminar2.php?id=" + idx; 
                }
                
            });
        
            
            // sintaxis de un GET
            //http://localhost/curso/ver.php?nombre=Diana
        
        </script>










    <script>
        //alert("Hola");
    </script>











    </body>

</html>