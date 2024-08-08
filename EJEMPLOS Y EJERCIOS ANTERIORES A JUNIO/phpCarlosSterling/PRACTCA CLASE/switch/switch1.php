<?
$vehiculo = readline("¿Utiliza bicicleta, carro, moto o camion?: ");

/*if ($vehiculo = "carro"){
    $recorrido = intval(readline("¿Cuántos kilometros ha recorrido?: "));
    $operacion = $recorrido * 30;
}
if ($vehiculo = $vehiculo ="moto"){
    $recorrido = intval(readline("¿Cuántos kilometros ha recorrido?: "));
    $operacion = $recorrido * 30;
}
if ($vehiculo = "camion"){
    $recorrido = intval(readline("¿Cuántos kilometros ha recorrido?: "));
    $toneladas = intval(readline("¿Cuantas toneladas transporta?: "));
    $operacion = ($recorrido * 30) + ($toneladas * 25);
}*/

switch ($vehiculo){
    case "bicicleta":
        echo "Usted utiliza bicicleta, por lo tanto debe pagar un importe de 100 soles.";
        break;

    case "moto":
        $recorrido = intval(readline("¿Cuántos kilometros ha recorrido?: "));
        $operacion = $recorrido * 30;

        echo "Usted utiliza moto, por lo tanto debe pagar un importe de $operacion soles.";
        break;
    case "carro";
        $recorrido = intval(readline("¿Cuántos kilometros ha recorrido?: "));
        $operacion = $recorrido * 30;    

        echo "Usted utiliza carro, por lo tanto debe pagar un importe de $operacion soles.";
        break;

    case "camion";
        $recorrido = intval(readline("¿Cuántos kilometros ha recorrido?: "));
        $toneladas = intval(readline("¿Cuantas toneladas transporta?: "));
        $operacion = ($recorrido * 30) + ($toneladas * 25);
        echo "Usted utiliza camion, por lo tanto debe pagar un importe de $operacion soles.";
        break; 

    default:
        echo "Usted no utiliza ninguno de los automoviles  o no posee uno.";
        break;
}