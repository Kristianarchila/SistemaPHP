<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php



$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "productos";
    $conexion = mysqli_connect($servername, $username, $password , "productos");
    
    // Crea la conexión
    $conn = mysqli_connect($servername, $username, $password, "productos");
    
    // Verifica si hay errores de conexión
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

// Obtener los datos del formulario
$username = $_POST["username"];
$password = $_POST["password"];

// Insertar los datos del usuario en la tabla "users"
$sql = "INSERT INTO users (username, password, role)
        VALUES ('$username', '$password', 'user')";

if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}







$conn->close();



?>


<h2>¡Registro exitoso!</h2>
    <p>Tu cuenta ha sido creada exitosamente.</p>
    <a href="login.php" class="btn btn-primary">Iniciar sesión</a>



</body>
</html>