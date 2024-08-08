<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h>MIS DATOS PERSONALES</h>  
<form action="post.php" method="post">
    Nombre:
    <input type="text" name="txtNombre" id="">
    </br>

    Apellido:
    <input type="text" name="txtApellido" id="">
    </br>

    Edad:
    <input type="number" name="numberEdad" id="">
    </br>

    Telefono:
    <input type="number" name="numberTelefono" id="">
    </br>

    Estauta:
    <input type="float" name="numberEstatura" id="">
    </br>
    
    <input type="submit" value="Enviar">
    </form>

    <?php

if ($_POST) {
    $nombre =($_POST)['txtNombre'];
    $apellido = ($_POST)['txtApellido'];
    $edad = ($_POST)['numberEdad'];
    $telefono = ($_POST)['numberTelefono'];
    $estatura = ($_POST)['numberEstatura'];
    echo "Me llamo $nombre  $apellido. Tengo $edad años, mi numero de telefono es $telefono y mi estatura es $estatura m.";
}
    ?>
    
</body>
</html>