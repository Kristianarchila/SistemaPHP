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
    // Crea la conexión
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "productos";
    $conexion = mysqli_connect($servername, $username, $password , "productos");
    
    
    
    
    $conn = mysqli_connect($servername, $username, $password, "productos");
    
    // Verifica si hay errores de conexión
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['borrar_producto'])) {
        $id_producto = $_POST['id_producto'];
        
        $query = "DELETE FROM productos WHERE id_producto = $id_producto";
        
        if (mysqli_query($conexion, $query)) {
            echo '<p>Producto borrado exitosamente.</p>';
            header('Location: sinstylo.php'); // redirigir a la página sinstylo.php
            exit(); // asegurarse de que no se siga ejecutando el código
          } else {
            echo '<p>Error al borrar producto: ' . mysqli_error($conexion) . '</p>';
          }
      }
    
    
    ?>
</body>
</html>