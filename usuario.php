<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 
    Realizar un sistema que permita guardar productos (id,nombre,categoria,tipo de producto(fisico o digital)
    id_vendedor,unidades disponibles, fecha de creación, fecha de actualización y usuarios (nombre, apellido, usuario, contraseña, correo,rol(usuario,admin), fecha de creación, fecha de actualización)
    Debe haber una interfaz que me permita realizar cada uno de estos procesos y debe haber al menos 13 productos y 15 usuarios

    -->
    <form action="usuarios.php" method="POST">
        
        <br>
        <label for ="nombre">Nombre</label>
        <input required type ="text" name="nombre" id ="nombre" placeholder = "Nombre del usuario">
        <br>
        <label for ="apellido">Apellido</label>
        <input required type ="text" name="apellido" id ="apellido" placeholder = "Apellido del usuario">
        <br>
        <label for ="usuario">Usuario</label>
        <input required type ="text" name="usuario" id ="usuario" placeholder = "Usuario">
        <br>
        <label for ="contraseña">Contraseña</label>
        <input required type ="text" name="contraseña" id ="contraseña" placeholder = "Contraseña">
        <br>
        <label for ="correo">Correo</label>
        <input required type ="text" name="correo" id ="correo" placeholder = "Correo">
        <br>
        <label for ="rol">Rol</label>
        <input required type ="text" name="rol" id ="rol" placeholder = "Rol">
        <br>
        
       
        <input type="submit" value="Guardar">
    </form>
    


</body>
</html>