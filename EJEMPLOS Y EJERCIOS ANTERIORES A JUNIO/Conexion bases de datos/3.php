<?php

class Conexion
{
    private $servidor = "localhost";
    private $usuario = "root";
    private $pass = "";
    private $bd = "tecnoparque";
    private $conect;

    public function __construct()
    {
        try {
            $connectionString = "mysql=".$this->servidor.";dbname=".$this->bd.";charset=utf8";
            $this->conect = new PDO($connectionString, $this->usuario, $this->pass);
            $this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            $this->conect = "Error de conexión";
            echo "ERROR: ".$e->getMessage();
        }
    }
}

$conexiondb = new Conexion();
var_dump($conexiondb);