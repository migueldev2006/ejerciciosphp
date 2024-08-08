
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numero</title>
</head>
<body>
    <h1>Mayor, menor o igual</h1>
    <form action="1.php" method="post">
        Ingrese un numero 
        <input type="number" name="Numero" id="">
        <input type="submit" value="Enviar">

        <?php

        if ($_POST){

            $numero = ($_POST)['Numero'];
            
            if ($numero > 10){
                echo "El $numero es mayor a 10.";
            }
        
            elseif ($numero == 10){
                echo "El $numero es igual a 10.";
            }

            else{
                echo "El $numero es menor a 10.";
            }
        }
        ?>
    </form>    
</body>
</html>