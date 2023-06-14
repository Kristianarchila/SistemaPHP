<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>productos</title>
</head>
<body>
    <!-- Guardar productos -->
<?php
// obtener los datos del formulario
$nombre = $_POST["nombre"];
$categoria = $_POST["categoria"];
$tipo_producto = $_POST["tipo_producto"];
$id_vendedor = $_POST["id_vendedor"];
$unidades_disponibles = $_POST["unidades_disponibles"];

// Conectar con la base de datos
$servername = "localhost";
$username = "root";
$password = "";

$conexion = mysqli_connect($servername, $username, $password , "productos");

//  Crear la conexion
$con = new mysqli($servername, $username, $password, "productos");

// Use prepared statements to prevent SQL injection attacks
$stmt = $con->prepare("INSERT INTO productos (`nombre`, `categoria`, `tipo_producto`, `id_vendedor`, `unidades_disponibles`) VALUES (?, ?, ?, ?, ?)");

// Bind the parameters to the statement
$stmt->bind_param("sssii", $nombre, $categoria, $tipo_producto, $id_vendedor, $unidades_disponibles);

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

</body>
</html>
