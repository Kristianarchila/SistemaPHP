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

// Verificar si el usuario y la contraseña coinciden
$sql = "SELECT role FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Inicio de sesión exitoso
    $row = $result->fetch_assoc();
    $role = $row["role"];
    session_start();
    $_SESSION["username"] = $username;
    $_SESSION["role"] = $role;
    header("Location: sinstylo.php"); // Redireccionar al usuario a la página principal
} else {
    // Inicio de sesión fallido
    echo "Usuario o contraseña incorrectos";
}





$conn->close();

?>



</body>
</html>