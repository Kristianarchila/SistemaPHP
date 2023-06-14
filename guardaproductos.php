<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="productos.php" method="POST">


<label for="nombre">Nombre</label>
        <input required type="text" name="nombre" id="nombre" placeholder="Nombre del producto">
        <br>
        <label for="categoria">Categoria</label>
        <input required type="text" name="categoria" id="categoria" placeholder="Categoria del producto">
        <br>
        <label for="tipo">Tipo</label>
        
        <select name="tipo_producto" id="tipo_producto" required>
        <option value="fisico">Físico</option>
        <option value="digital">Digital</option>
            </select>
            <br>
        
        <label for ="id_vendedor">Id vendedor</label>
        <input required type="text" name="id_vendedor" id="id_vendedor" placeholder="Id del vendedor">
        <br>
        <label for="unidades_disponibles">Unidades disponibles</label>
        <input required type="text" name="unidades_disponibles" id="unidades_disponibles" placeholder="Unidades disponibles">
        <br>
        <input type="submit" value="Guardar">

        </form>
</body>
</html>