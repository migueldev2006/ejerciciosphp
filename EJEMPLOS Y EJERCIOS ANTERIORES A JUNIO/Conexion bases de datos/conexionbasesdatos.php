
<?php
$servidor = "localhost";
$usuario = "root";
$pass = "";
$bd = "tecnoparque";

$conexion = mysqli_connect($servidor, $usuario, $pass, $bd);
if ($conexion->connect_error) {
    die("Error, No se ha conectado").$conexion->connect_error;
    } else{
        echo"Conexion exitosa";
}
