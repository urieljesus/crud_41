<?php
    
    include("conexion.php");

    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    $name = $_POST["nombre"];
    $email = $_POST["apellido"];
    $course = $_POST["Telefono"];
    $pass = $_POST["Correo"];
    $id = $_POST["id"];

    $consulta = "UPDATE clientes SET nombre = '" . $name . "', apellido = '" . $email. "', Telefono = '" . $course . "', Correo = '" . $pass . "' WHERE id = " . $id;

    //echo $consulta;

    $query = $bd->prepare($consulta);

    $query->execute();

    header("Location:cliente.php");

    
?>