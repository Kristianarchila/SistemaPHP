<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuarios</title>
</head>
<body>
    <!-- Guardar usuarios -->
<?php

    // Obtener los datos del formulario
    
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $correo = $_POST["correo"];
    $contraseña = $_POST["contraseña"];
    $usuario = $_POST["usuario"];
    $rol = $_POST["rol"];


    if (isset($_POST["nombre"])) {
        $nombre = $_POST["nombre"];
    } else {
        // Handle the error, e.g. by displaying an error message or redirecting to a different page
    }
    
    // Repeat the same for the other keys

    
    
    // Conectar con la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "";

    
    
    // Crear la conexion
    $con = new mysqli($servername, $username, $password, "productos");

    // Use prepared statements to prevent SQL injection attacks
    $stmt = $con->prepare("INSERT INTO usuarios (`nombre`, `apellido`, `correo`, `contraseña`, `usuario`, `rol`) VALUES (?, ?, ?, ?, ?, ?)");

    // Bind the parameters to the statement
    $stmt->bind_param("ssssss", $nombre, $apellido, $correo, $contraseña, $usuario, $rol);

    // Execute the prepared statement
    $result = $stmt->execute();

    
    
    
    
    
    // Validate the result

    
    
    
    if ($result) {
        echo "Registro exitoso";
    } else {
        echo "Error al registrar";
    }

    

    header('Location: pagina_principal.php');
    
    // Close the statement and connection
    $stmt->close();
    $con->close();


?>