<!-- index.html -->
<!DOCTYPE html>
<html>
    <head>
        <title>CSS Template</title>
<link rel="stylesheet" href="./stylo.css">    </head>
<script src="https://cdn.tailwindcss.com"></script>    


<body>
        <section class='FlexContainer'>
            <div><div class="flex flex-wrap" >
    
  
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
</div>
            <div><div class=class="grid grid-cols-3 grid-rows-5 gap-4">
    <div>
        <h2 class="grid grid-cols-3 gap-4"">Actualizar producto existente</h2>
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
</div></div>
            <div><div>
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
  </div></div>
        </section>
    </body>
</html>