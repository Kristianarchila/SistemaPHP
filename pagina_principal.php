
    
    
    <!DOCTYPE html>
<html>
<head>
	<title>Mi página web</title>
	<link rel="stylesheet" type="text/css" href="./pagina_principal.css">
</head>
<body>
	
<div class="container">
 

<div class="flex-container">
   <div >
    
   <h2>Registrarse</h2>

<form action="registeer.php" method="post">
  <label for="username">Nombre de usuario:</label>
  <input type="text" id="username" name="username" autocomplete="off">
  <label for="password">Contraseña:</label>
  <input type="password" id="password" name="password" autocomplete="off">
  <input type="submit" value="Registrarse">
</form>

   </div>
   <div ><h2>Iniciar Sesión</h2>
		<form action="loginn.php" method="post" autocomplete="off">
			<label>Nombre de usuario:</label>
			<input type="text" name="username" required><br><br>
			<label>Contraseña:</label>
			<input type="password" name="password" required><br><br>
			<input type="submit" value="Iniciar Sesión">
		</form></div>
</div>










</body>
</html>
