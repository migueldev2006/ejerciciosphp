<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numeros</title>
</head>
<body>
    <h1>¿LOS NUMEROS SON MAYORES, MENORES O IGUALES A 10?</h1>
    <form action="5.php" method="post">
        Ingrese el primer numero
        <input type="number" name="Numero1" id="">
        Ingrese el segundo numero
        <input type="number" name="Numero2" id="">
        <input type="submit" value="Comparar">
    </form>
    
    <?php

    if ($_POST){
        
        $numero1 = ($_POST) ['Numero1'];
        $numero2 = ($_POST) ['Numero2'];

        if ($numero1 > 10 && $numero2 > 10){
            echo "Ambos numero son mayores que 10.";
        }
        elseif ($numero1 > 10 || $numero2 > 10){
            echo "Solo uno de los numeros es mayor que 10.";
        }
        else{
            echo "Ninguno de los numeros es mayor que 10";
        }

    }
    ?>
</body>
</html>