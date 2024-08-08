
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombre</title>
</head>
<body>
    <h1>NOMBRE</h1>
    <form action="2.php" method="post">
        Ingrese su nombre
        <input type="text" name="txtNombre" id="">
        <input type="submit" value="Enviar">
    </form>
    <?php

    if ($_POST){
        $nombre = ($_POST) ['txtNombre'];
        
        if ($nombre == "Juan"){
            echo "¡Hola $nombre!";
        }

        else{
            echo "Lo siento, no te conozco";
        }
    }
    ?>
</body>
</html>
<?php

