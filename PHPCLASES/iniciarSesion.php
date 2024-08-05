<?php

require "registroEmpleados.php";

class IniciarSesion extends RegistroDeEmpleados{
    public $salarioEmpleado;
    private string  $contrasena;

    public function __construct(string $nombreEmpleado = '', string $apellidoEmpleado = '', int $edad = 0, string $labor = '', string $email = '', string $pasword = ''){
        parent::__construct($nombreEmpleado, $apellidoEmpleado, $edad, $labor, $email, $pasword );
    }
    public function solicitarDatos(){
    $this->usuario = readline("Ingrese su correo electrónico: ");
    $this->contrasena = readline("Digite su contraseña: ");
    }

    public function IniciarPrograma(){
            $this->solicitarDatos();
            $email = readline("Ingrese su correo email: ");
            $pasword = readline("Digite su contraseña: ");
            if($this->usuario === $email and $this->contrasena === $pasword){
                echo "Iniciando Sesión...."."\n";
                echo "Bienvenido ";
            }
            else{
                echo "Tu usuario o contraseña son incorrectos, intente nuevamente";
            }
        }
    }

function opciones(){
    echo "A que opición desea acceder:"."\n";
    echo "Selecciona 1 para acceder a Registar el usuario: "."\n";
    echo "Selecciona 2 para Iniciar Sesión: "."\n";
    $opcion = readline();
    
    while($opcion == 1){
        $registro1 = new RegistroDeEmpleados();
        echo $registro1-> registarUsuario();
        break;
    }
    while($opcion == 2){
        $inicio = new IniciarSesion();
        echo $inicio-> IniciarPrograma();
        break;
    }
    
}

opciones();