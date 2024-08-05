<?php

class RegistroDeEmpleados{
    public string $nombre;
    public string $apellido;
    public int $edad;
    public string $cargo;
    protected string $usuario;
    private string $contrasena;

    public function __construct(string $nombreEmpleado = '', string $apellidoEmpleado = '', int $edad = 0, string $labor = '', string $email = '', string $pasword = ''){
        $this->nombre = $nombreEmpleado;        
        $this->apellido = $apellidoEmpleado;        
        $this->edad = $edad;
        $this->cargo = $labor;
        $this->usuario = $email;
        $this->contrasena = $pasword;
    }

    public function registarUsuario():void{
        $nombre =readline("Ingrese el nombre del empleado: ");
        $apellido = readline("Ingrese el apellido del empleado: ");        
        $edad= readline("Digite la edad del empleado: ");
        $cargo = readline("¿Que cargo desempeña?: ");        
        $usuario= readline("Digite su email: ");
        $contrasena= readline("Digite su contraseña: ");
        $email = readline("Ingrese su correo: ");        
        $pasword= readline("Digite su contraseña: ");
        if($usuario === $email  and $contrasena === $pasword){
            echo "Registro exitoso. Bienvendo Sr/a ".$this->nombre;
        }
        else{
            echo "No se ha logrado registrar verifica los datos intentalo de nuevo"."\n";
        }
    }
}


