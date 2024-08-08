<?php
$calif = intval(readline("Ingresa una calificación de 1 a 100 :"));
$calfinal = ($calif >= 80)?"Aprobado":(($calif >= 51) ?"Pasaste a medias": (($calif < 50)?"Reprobado":"Reprobado"));
echo "Tu estado es: $calfinal";