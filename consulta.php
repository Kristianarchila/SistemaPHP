<!DOCTYPE html>
<html>

<script src="https://cdn.tailwindcss.com"></script>


<head>
  <title>Listado de productos</title>
</head>
<body>


<!DOCTYPE html>
<html>
<head>
  <title>Listado de productos</title>
</head>
<body>
  


<div class="flex flex-wrap" >
    <div class="w-full md:w-1/3 p-3" >
    <h1></h1>
  
  <h2 class="text-2xl font-bold mb-4">Crear nuevo producto</h2>

  <div class="grid grid-cols-3 gap-4">
    <div>
      <label class="block text-gray-700 font-bold mb-2" for="nombre">Nombre:</label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="nombre" required>
    </div>
    
    <div>
      <label class="block text-gray-700 font-bold mb-2" for="categoria">Categoría:</label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="categoria" required>
    </div>
    
    <div>
      <label class="block text-gray-700 font-bold mb-2" for="tipo_producto">Tipo de producto:</label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="tipo_producto" required>
    </div>
  </div>
  
  <div class="mb-4">
    <label class="block text-gray-700 font-bold mb-2" for="id_vendedor">ID vendedor:</label>
    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="number" name="id_vendedor" required>
  </div>
  
  <div class="mb-4">
    <label class="block text-gray-700 font-bold mb-2" for="unidades_disponibles">Unidades disponibles:</label>
    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="number" name="unidades_disponibles" required>
  </div>
  
  <button type="submit" name="crear_producto" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Crear producto</button>
</form>
    </div>
  </div>


<div class=class="grid grid-cols-3 grid-rows-5 gap-4">
    <div>
        <h2 class="text-2xl font-bold mb-4">Actualizar producto existente</h2>
<form class="mt-4" method="POST">
  <label class="block text-gray-700 font-bold mb-2" for="id">ID del producto:</label>
  <input class="form-input w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 sm:text-sm" type="number" name="id" required><br>
  
  <label class="block mt-4 font-bold" for="nombre">Nombre:</label>
  <input class="form-input w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 sm:text-sm" type="text" name="nombre" required><br>
  
  <label class="block mt-4 font-bold" for="categoria">Categoría:</label>
  <input class="form-input w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 sm:text-sm" type="text" name="categoria" required><br>
  
  <label class="block mt-4 font-bold" for="tipo_producto">Tipo de producto:</label>
  <input class="form-input w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 sm:text-sm" type="text" name="tipo_producto" required><br>
  
  <label class="block mt-4 font-bold" for="id_vendedor">ID vendedor:</label>
  <input class="form-input w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 sm:text-sm" type="number" name="id_vendedor" required><br>
  
  <label class="block mt-4 font-bold" for="unidades_disponibles">Unidades disponibles:</label>
  <input class="form-input w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 sm:text-sm" type="number" name="unidades_disponibles" required><br>
  
  <button class="mt-4 py-2 px-4 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-blue-200" type="submit" name="actualizar_producto">Actualizar producto</button>
</form></div>
</div>


<div>
    <div><h2 class="text-2xl font-bold mb-4">Eliminar producto existente</h2>
<form method="POST">
  <div class="mb-4">
    <label class="block text-gray-700 font-bold mb-2" for="id">ID del producto:</label>
    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="number" name="id" placeholder="Ingrese el ID del producto a borrar" required>
  </div>

  <div class="mb-4">
    <button type="submit" name="borrar_producto" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
      Borrar producto
    </button>
  </div>
</form>
</div>
</div>






  
  
  
  
  <?php
  // incluir el archivo de conexión
  include('conexionsql.php');

  // verificar si se ha enviado un formulario de crear producto
  if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['crear_producto'])) {
    $nombre = $_POST['nombre'];
    $categoria = $_POST['categoria'];
    $tipo_producto = $_POST['tipo_producto'];
    $id_vendedor = $_POST['id_vendedor'];
    $unidades_disponibles = $_POST['unidades_disponibles'];
    $fecha_creacion = date('Y-m-d H:i:s');
    
    $query = "INSERT INTO productos (nombre, categoria, tipo_producto, id_vendedor, unidades_disponibles, fecha_creacion) VALUES ('$nombre', '$categoria', '$tipo_producto', $id_vendedor, $unidades_disponibles, '$fecha_creacion')";
    
    if (mysqli_query($conexion, $query)) {
      echo '<p>Producto creado exitosamente.</p>';
    } else {
      echo '<p>Error al crear producto: ' . mysqli_error($conexion) . '</p>';
    }
  }
  
  // verificar si se ha enviado un formulario de actualizar producto
  if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['actualizar_producto'])) {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $categoria = $_POST['categoria'];
    $tipo_producto = $_POST['tipo_producto'];
    $id_vendedor = $_POST['id_vendedor'];
    $unidades_disponibles = $_POST['unidades_disponibles'];
    $fecha_actualizacion = date('Y-m-d H:i:s');
    
    $query = "UPDATE productos SET nombre = '$nombre', categoria = '$categoria', tipo_producto = '$tipo_producto', id_vendedor = $id_vendedor, unidades_disponibles = $unidades_disponibles, fecha_actualizacion = '$fecha_actualizacion' WHERE id = $id";
    
    if (mysqli_query($conexion, $query)) {
      echo '<p>Producto actualizado exitosamente.</p>';
    } else {
      echo '<p>Error al actualizar producto: ' . mysqli_error($conexion) . '</p>';
    }
  }
  
  // verificar si se ha enviado un formulario de borrar producto
  if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['borrar_producto'])) {
    $id = $_POST['id'];
    
    $query = "DELETE FROM productos WHERE id = $id";
    
    if (mysqli_query( $conexion, $query      )) {
      echo '<p>Producto borrado exitosamente.</p>';
    } else {
      echo '<p>Error al borrar producto: ' . mysqli_error($conexion) . '</p>';
    }
  }

  // hacer la consulta SQL
  $query = "SELECT * FROM productos";
  $resultado = mysqli_query($conexion, $query);

  // mostrar los resultados en una tabla
  if (mysqli_num_rows($resultado) > 0) {
    echo '<table>
            <thead>
              <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Categoría

                <th>Tipo de producto</th>
                <th>ID vendedor</th>
                <th>Unidades disponibles</th>
                <th>Fecha de creación</th>
                <th>Fecha de actualización</th>
              </tr>
            </thead>
            <tbody>';
    
    while ($fila = mysqli_fetch_array($resultado)) {
      echo '<tr>
              <td>'.$fila['id_producto'].'</td>
              <td>'.$fila['nombre'].'</td>
              <td>'.$fila['categoria'].'</td>
              <td>'.$fila['tipo_producto'].'</td>
              <td>'.$fila['id_vendedor'].'</td>
              <td>'.$fila['unidades_disponibles'].'</td>
              <td>'.$fila['fecha_creacion'].'</td>
              <td>'.$fila['fecha_actualizacion'].'</td>
            </tr>';
    }
    
    echo '</tbody>
          </table>';
  } else {
    echo '<p>No se encontraron productos.</p>';
  }

  
  
  
  
  
  
  
  
  
  
  // cerrar la conexión
  mysqli_close($conexion);
  ?>
  
</body>
</html>
