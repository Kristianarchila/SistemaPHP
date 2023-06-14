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

include('conexionsql.php');

// verificar la conexión
if (!$conexion) {
  echo '<p>Error al conectar con la base de datos: ' . mysqli_connect_error() . '</p>';
  exit;
}


if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {
    $id_producto = $_POST['id_producto'];
    $nombre = $_POST['nombre'];
    $categoria = $_POST['categoria'];
    $tipo_producto = $_POST['tipo_producto'];
    $id_vendedor = $_POST['id_vendedor'];
    $unidades_disponibles = $_POST['unidades_disponibles'];
    $fecha_actualizacion = date('Y-m-d H:i:s');
    
    $query = "UPDATE productos SET nombre = '$nombre', categoria = '$categoria', tipo_producto = '$tipo_producto', id_vendedor = $id_vendedor, unidades_disponibles = $unidades_disponibles, fecha_actualizacion = '$fecha_actualizacion' WHERE id_producto = $id_producto";
    
    if (mysqli_query($conexion, $query)) {
      echo '<p>Producto actualizado exitosamente.</p>';
    } else {
      echo '<p>Error al actualizar producto: ' . mysqli_error($conexion) . '</p>';
    }
  }
    
    
    
    ?>


</body>
</html>