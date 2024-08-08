<?php

if ($_GET) { 
    $nombre =($_GET)['txtNombre'];
    $apellido = ($_GET)['txtApellido'];
    $edad = ($_GET)['numberEdad'];
    $telefono = ($_GET)['numberTelefono'];
    $estatura = ($_GET)['numberEstatura'];
    echo "Me llamo $nombre  $apellido. Tengo $edad años, mi numero de telefono es $telefono y mi estatura es $estatura m.";

}

?>