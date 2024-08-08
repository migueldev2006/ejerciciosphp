<?php
/*$usuario = "Luis";

$nombre = readline("Ingrese su nombre para la autenticación: ");

if (!($nombre == $usuario)){
    echo "No se puede acceder, el nombre de usuario es incorrecto.";
}else{
    echo "Bienvenido $nombre,";
    echo "Iniciando sesión...";
}*/

/*$nombre = readline("Ingrese su nombre para la autenticación:");
$usuario = "Luis";
$resultado = (!($nombre == $usuario )?"No se puede acceder, el nombre de usuario es incorrecto":"Bienvenido $nombre. Iniciando sesión...");
echo $resultado;*/
$edad = readline("¿Que edad tienes?: ");
$licencia =0;

$resultado = !($edad >= 18)?(("Eres menor de edad, no puedes conducir")):($edad>=18).($licencia = readline("¿Tiene licencia?:")).$licencia = (!($licencia == "no"))?(("Puedes conducir")):(("No Puedes conducir, Debes adquirir una primero"));
echo $resultado;
