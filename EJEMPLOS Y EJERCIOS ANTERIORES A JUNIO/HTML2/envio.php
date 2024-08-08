<?php
function dep($parametro){
    echo "<prev>";
    print_r($parametro);
    echo "</prev>";
}

dep($_GET);
dep($_POST);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--metodo GET-->
    <form action="" method="get">
        
        <label for="Nombre">Nombre</label>
        <input type="text" name="Nombre" id="Nombre" placeholder="Escribe aqui tu nombre">
        <br><hr>

        <label for="Apellido">Apellido</label>
        <input type="text" name="Apellido" id="Apellido" placeholder="Escribe aqui tu apellido">
        <br><hr>

        <label for="Cedula">Cedula</label>
        <input type="number" name="Cedula" id="Cedula" placeholder="Escribe aqui tu numero de cedula">
        <br><hr>
        
        <label for="Telefono">Telefono</label>
        <input type="number" name="Telefono" id="Telefono" placeholder="Escribe aqui el numero de telefono">
        <br><hr>

        <input type="submit" onclick="aceptacionN()" value="Enviar">
    </form>

    
    <script>
        function aceptacionN(){
            alert("registro sus datos exitosamente.")
        }
    </script>
</body>
</html>