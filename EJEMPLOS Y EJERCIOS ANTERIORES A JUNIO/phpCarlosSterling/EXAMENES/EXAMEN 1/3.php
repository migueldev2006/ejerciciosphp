<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dias de la semana</title>
</head>
<h1>DIAS DE LA SEMANA</h1>
<form action="3.php" method="post">
    Ingrese un numero del 1 al 7 
    <input type="number" name="Numero" id="">
    <input type="submit" value="Enviar">
</form>

<?php

if ($_POST){

    $number = ($_POST) ['Numero'];
    

    if ($number == 1){
        echo "Hoy es Lunes";
    }
    elseif ($number == 2){
        echo "Hoy es Martes";
    }
    elseif ($number == 3){
        echo "Hoy es Miercoles";
    }
    elseif ($number == 4){
        echo "Hoy es Jueves";
    }
    elseif ($number == 5){
        echo "Hoy es Viernes";
    }
    elseif ($number == 6){
        echo "Hoy es Sabado";
    }
    elseif ($number == 7){
        echo "Hoy es Domngo";
    }
    else{
        echo "No hay coincidencias.";
    }
}
?>
<body>
    
</body>
</html>