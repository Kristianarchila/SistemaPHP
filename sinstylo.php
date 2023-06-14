<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Document</title>
</head>
<body>
   
<div class="flex flex-wrap justify-between items-start content-start w-90 mx-auto p-20">
  <div class="w-full md:w-1/3 px-4 mb-8 md:mb-0">
    <div class="bg-white rounded-lg shadow-md p-6">
      <h2 class="text-lg font-bold mb-4">Crear nuevo producto</h2>
      <form method="POST" action="logica.php">
        <div class="mb-4">
          <label for="nombre" class="block mb-2 font-bold text-gray-700">Nombre:</label>
          <input type="text" name="nombre" required class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300">
        </div>

        <div class="mb-4">
          <label for="categoria" class="block mb-2 font-bold text-gray-700">Categoría:</label>
          <input type="text" name="categoria" required class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300">
        </div>

        <div class="mb-4">
          <label for="tipo_producto" class="block mb-2 font-bold text-gray-700">Tipo de producto:</label>
          <input type="text" name="tipo_producto" required class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300">
        </div>

        <div class="mb-4">
          <label for="id_vendedor" class="block mb-2 font-bold text-gray-700">ID vendedor:</label>
          <input type="number" name="id_vendedor" required class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300">
        </div>

        <div class="mb-4">
          <label for="unidades_disponibles" class="block mb-2 font-bold text-gray-700">Unidades disponibles:</label>
          <input type="number" name="unidades_disponibles" required class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300">
        </div>

        <button type="submit" name="crear_producto" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-lg">Crear producto</button>
      </form>
    </div>
  </div>

  <div class="actualizar-producto mt-4">
    <h2 class="text-lg font-bold mb-4">Actualizar producto existente</h2>

    <form class="mt-4" method="POST" action="actualizar.php">
      <div class="mb-4">
        <label for="id_producto" class="block font-medium text-gray-700">ID del producto:</label>
        <input type="number" name="id_producto" required class="form-input mt-1 block w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
      </div>

      <div class="mb-4">
        <label for="nombre" class="block font-medium text-gray-700">Nombre:</label>
        <input type="text" name="nombre" required class="form-input mt-1 block w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
      </div>

      <div class="mb-4">
        <label for="categoria" class="block font-medium text-gray-700">Categoría:</label>
        <input type="text" name="categoria" required class="form-input mt-1 block w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
      </div>

      <div class="mb-4">
        <label for="tipo_producto" class="block font-medium text-gray-700">Tipo de producto:</label>
        <input type="text" name="tipo_producto" required class="form-input mt-1 block w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
      </div>

      <div class="mb-4">
        <label for="id_vendedor" class="block font-medium text-gray-700">ID vendedor:</label>
        <input type="number" name="id_vendedor" required class="form-input mt-1 block w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
      </div>

      <div class="mb-4">
        <label for="unidades_disponibles" class="block font-medium text-gray-700">Unidades disponibles:</label>
        <input type="number" name="unidades_disponibles" required class="form-input mt-1 block w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
      </div>

      <button type="submit" name="actualizar_producto" class="w-full bg-indigo-500 text-white py-2 px-4 rounded-md hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Actualizar producto</button>
    </form>
</div>


<div class="borrar-producto">
<h2 class="text-lg font-bold mb-4">Borrar producto</h2>
  <form class="mt-4" method="POST" action="borrar.php">
    <label for="id_producto">ID del producto:</label>
    <input type="number" name="id_producto" class="p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">

    <button type="submit" name="borrar_producto" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mt-4">Borrar producto</button>
  </form>
</div>


<?php
 
 
 // incluir el archivo de conexión
 include('conexionsql.php');
 
 
 
 // hacer la consulta SQL
 $query = "SELECT * FROM productos";
 $resultado = mysqli_query($conexion, $query);

 // mostrar los resultados en una tabla
 if (mysqli_num_rows($resultado) > 0) {
   echo '<table>
           <thead>
             <tr>
               <th>id_producto</th>
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