<?
$dia = intval(readline("Ingrese un numero del 1 al 7: "));

switch ($dia){
    case  1:
        echo "El dia de la semana es Lunes";
        break;
    case  2:
        echo "El dia de la semana es Martes";
        break;
    case  3:
        echo "El dia de la semana es Miércoles";
        break;
    case  4:
        echo "El dia de la semana es Jueves";
        break;
    case  5:
        echo "El dia de la semana es Viernes";
        break;
    case  6:
        echo "El dia de la semana es Sabado";
        break;
    case  7:
        echo "El dia de la semana es Domingo";
        break;
    default:
        echo "El dia de la semana es incorrecto.";
        break;
}
?>