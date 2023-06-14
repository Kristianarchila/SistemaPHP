<?php
session_start();
?>


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

# variables

    $saludo = "<p> hola mundo  </p>";
    echo($saludo);

$string = "hola mundoo";
$integer = 1;
$float = 1.5 ;
$boolean = True;
$array = ["e","a"];
$null = null;

#los objetos creados a partir de clase


class Carro {
    public $color;

    public $model;
    
    
    public function __construct($color,$model){
        $this->color = $color;
        $this->model = $model;
    }

    public function message(){
        return "<p>Mi carro es ". $this->color . " " . $this->model."</p>";
    }
}

$miCarro = new Carro("Negro","Volvo");
echo($miCarro -> message());



#contantes

define("Pi", "<p>3.14</p>" );
echo(Pi);


#condicionales

$dia = "viernes";
$dinero = true ;
$tiempo = true ;

if (($dia == "viernes") and $dinero and $tiempo){
    echo("<p> hoy se sale</p>");
} else if ($dia == "sabado" or $dinero){
    echo("<p> hoy sbado  se sale</p>");    
} else{
    echo("no se sale");
} 
#SWITCH
$favColor = "rojo";

switch($favColor) {
    case "rojo":
        echo("El color es rojo");
        break;
    case "azul":
        echo("EL color es azul");
        break;
    default:
        echo("El color es ".$favColor);
}
#loops

$cars = ["chevrolet", "nusa"];
for ($i = 0; $i < count($cars); $i++) {
    echo("<p> $cars[$i] </p> ");
}


function saludo ($nombre){
    echo ("<p> $nombre </p>");
}
saludo("kr");




function suma ($nu1, $nu2){
    return  "<p>" .$nu1 + $nu2. "</p>";
}
echo suma(1,2)




?>


<!-- HTML -->
<form action="bienvenida.php" method="post">
            <label for="">Nombre</label>
            <input type="text" name="nombre">
            <input type="submit" value="Enviar">
        </form>

        <a href="get.php?nombre=Juan&apellido=Rodriguez">Ir a ruta GET</a>
                

        #Ruta POST
        #Las rutas POST son aquellas que envían información a través de un formulario
        #Las rutas POST son más seguras porque la información no se envía a través de la URL
#Ruta GET
            #Las rutas GET son aquellas que envían información a través de la URL
            #Las rutas GET son inseguras porque la información se envía a través de la URL
            
            
            #expresiones regulares
            #Las expresiones regulares son patrones que se utilizan para encontrar
            #una cadena de caracteres dentro de otra cadena de caracteres
            $exp = "/Juan/i";

            if(preg_match($exp,"Mi nombre es jUan")){
                echo("<p>Se encontró la cadena</p>");
            } else {
                echo("<p>No se encontró la cadena</p>");
            }

            #Validacion de nombre
$exp = "/^[a-zA-Z ]*$/";
            if(preg_match($exp,"Juan Perez")){
                echo("<p>Se encontró la cadena</p>");
            } else {
                echo("<p>No se encontró la cadena</p>");
            }

            <form action="" method="post">
            <p>Nombre</p>
            <input required type="text" name="nombre">
            <p>Email</p>
            <input required type="email" name="email" id="">
            <input type="submit" value="enviar">
        </form>

        
        <?php
            #Validacion de nombre
            $exp_nombre = "/^[a-zA-Z ]*$/";
            $exp = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.([a-zA-Z]{2,8})$/";

            
            if(preg_match($exp_nombre,$_POST["nombre"]) && preg_match($exp,$_POST["email"])){
                echo "<p>Nombre: ".$_POST["nombre"]."</p>";
                echo "<p>Email: ".$_POST["email"]."</p>";
            } else {
                echo("<p>Hubo un error</p>");
            }
        ?>
        
            </body>
</html>