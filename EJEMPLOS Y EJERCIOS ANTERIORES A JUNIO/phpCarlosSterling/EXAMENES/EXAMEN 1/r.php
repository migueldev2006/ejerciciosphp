<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calficacion</title>
</head>
<body>
    <h1>Calificacon de los estudiantes</h1>
    <form action="r.php" method="post">
        Ingrese la calificación del estudiante
        <input type="number" name="calificacion" id="">
        <input type="submit" value="Enviar">
    </form>

    <?php
    if ($_POST){
        $calificacion = ($_POST)["calificacion"];

        if ($calificacion >= 90 && $calificacion <= 100){
            echo "Excelente";
        }
        elseif ($calificacion >= 80 && $calificacion < 90){
            echo "Buen trabajo";
        }
        elseif ($calificacion >= 70 && $calificacion < 80){
            echo "Satisfactorio";
        }
        elseif ($calificacion < 70 && $calificacion > 0){
            echo "Debes mejorar";
        }
        else{
            if ($calificacion <= 0 || $calificacion > 100){
                echo "Calificacion invalida";
            }

        }
        
    }
    
    ?>
</body>
</html>