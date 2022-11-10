<?php
    
    include("conexion.php");

    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    $name = $_POST["nombre"];
    $email = $_POST["apellido"];
    $course = $_POST["Telefono"];
    $pass = $_POST["Correo"];

    //Primer Paso - Generar la consulta
    $consulta = "INSERT INTO clientes (nombre, apellido, Telefono, Correo) VALUES ('".$name."', '".$email."','".$course."','".$pass."')";

    //Segundo Paso - Prepara la consulta
    $query = $bd->prepare($consulta);

    //Tercer Paso - Ejecutar la consulta
    $query->execute();

    header("Location:cliente.php");

?>
