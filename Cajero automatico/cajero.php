<?php
while(true){
    echo "Opcion 1 para Consultar saldo"."\n";
    echo "Opcion 2 para Consignar dinero"."\n";
    echo "Opcion 3 para Retirar dinero"."\n";
    echo "Opcion 4 para salir"."\n";

    $opcion = readline("¿A que opcion desea acceder?: ");


if ($opcion == 1){
    function ConsultarSaldo(){
        $totalcuenta = 1525000;
        $clave = 2007;
        $cuenta = readline("Ingrese su numero de cuenta: ");
        $contrasena = readline("Ingrese la constrasena: ");
        if($contrasena == $clave){
            echo "Consultando saldo... "." Estimado usuario usted con numero de cuenta $cuenta, tiene un saldo de $ $totalcuenta."."\n";
            }
            else{
            echo "Contrasena incorrecta, intente de nuevo"."\n";
               // return $cuenta;  
    }
}
    ConsultarSaldo();
}

elseif ($opcion == 2){
    function ConsignarDinero(){
        $totalcuenta = 1525000;
        $contrasena = 2007;
        $cuenta = readline("Ingrese el numero de cuenta: ");
        $clave = readline("Digite la contrasena:");
        if($clave == $contrasena){
            $consignacion = readline("¿Cuanto dinero desea consignar a su cuenta: ");
            $nuevosaldo = $totalcuenta + $consignacion;
            echo "Consultando saldo... "." Estimado usuario usted con numero de cuenta $cuenta. Inicialmente contenia un saldo de $ $totalcuenta, pero con la consignacion de $ $consignacion el nuevo saldo de su cuenta es de $ $nuevosaldo."."\n";
            }
            else{
                echo "Contrasena incorrecta, intente de nuevo";
                //return $cuenta; 
    }
}
    ConsignarDinero();
}

elseif ($opcion == 3){
    function RetirarDinero(){
        $clave = 2007;
        $cuenta = readline("Ingrese su numero de cuenta: ");
        $clave = readline("Digite la contrasena: ");
        if($clave == true){
        $dinero = readline("Ingrese a cantidad de dinero a retirar: ");
        echo "Retiro exitoso "." Estimado usuario usted con numero de cuenta $cuenta, Acaba de hacer un retiro de $ $dinero  pesos."."\n";
        }
        else{
            echo "Contrasena incorrecta, intente de nuevo";
            //return $cuenta;        
        }
    }
    RetirarDinero();
}
else{
    if($opcion == 4){
        echo "Saliendo..."."\n";
        break;
    }
}
}

