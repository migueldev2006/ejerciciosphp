<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Licencia</title>
</head>
<body>
    <h1>¿ERES MAYOR DE EDAD PARA CONDUCIR?</h1>
    <form action="4.php" method="post">
        Ingrese su edad 
        <input type="number" name="Edad" id="">  
        <input type="submit" value="Enviar"> 
    </form>

    <?php

    if ($_POST){
        

        $edad = ($_POST) ['Edad'];
        
        
    if ($edad >= 18){
        
        if ($_POST){

            $licencia = 'si';
            

            echo "Puedes conducir.";
        }
        else{
            echo "Debes obtener una licencia de conducir primero.";
        }
        }
    else{
            echo "No puedes coducir.";
        }
    }
    ?>
    
</body>
<body>
    <form action="4.php" method="post">
        ¿Tiene licencia de conducir?
        <input type="checkbox" name="si" id="si">
        <input type="checkbox" name="no" id="si">
    </form>
    <?php

if ($_POST){
    

    $edad = ($_POST) ['Edad'];
    
    
if ($edad >= 18){
    
    if ($_POST){

        $licencia = 'si';
        

        echo "Puedes conducir.";
    }
    else{
        echo "Debes obtener una licencia de conducir primero.";
    }
    }
else{
        echo "No puedes coducir.";
    }
}
?>


</body>
</html>
