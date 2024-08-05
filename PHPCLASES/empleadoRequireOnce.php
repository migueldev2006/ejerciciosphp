<?php

require_once "empleado.php";
/*
$compra1 = new Cliente();
echo $compra1 -> elegir()."\n";
$compra2 = new Cliente();
echo $compra2 -> pagar();*/ 
$registro = new Empleado();
echo $registro -> registrar();