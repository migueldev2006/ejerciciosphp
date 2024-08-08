<?php
$servidor = "localhost";
$usuario = "root";
$pass = "";
$bd = "tecnoparque";

$conexion = new mysqli($servidor, $usuario, $pass, $bd);
if (!$conexion) {
    die("Error, No se ha logrado conectar con la base de datos");
    } else{
        echo"Conexion exitosa";
}
