<?php

class Cliente{
    //propiedades
    public string $nombreCliente;
    public int $edad;
    public string $nombreVendedor;
    public int $productosComprados;
    public int $numFactura;
    public string $selecProductos;

    public function __construct(){
        $this->nombreCliente = readline("Ingrese el nombre del cliente: ");
        $this->edad = readline("Digite la edad del cliente: ");
        $this->nombreVendedor = readline("Ingrese el nombre del vendedor: ");
        $this->productosComprados = readline("Cantidad de productos comprados: ");
        $this->numFactura = readline("Numero de factura:");
        $this->selecProductos = readline("¿Que productos llevara?: ");
    }

    public function elegir(){
        return "El cliente ".$this->nombreCliente." quien tiene ".$this->edad." años, ha seleccionado los productos: ".$this->selecProductos." para añadirlo al carrito de compra.";
    }
    
    public function pagar(){
        return "El cliente ".$this->nombreCliente." quien tiene ".$this->edad." años, paga 125000 por llevar un total de ".$this->productosComprados .". Quien realiza el registro de  de la compra es ".$this->nombreVendedor.", con el numero de factura ".$this->numFactura;
    }
}

class Empleado extends Cliente{
    public $edadVendedor;
    public $totalFactura;

    public function __construct(){
        parent::__construct();
        $this->edadVendedor = readline("Ingreasa la edad del vendedor: ");
        $this->totalFactura = readline("¿Cual es el total mostrado en la factura?: ");   
    }

    public function registrar(){
        return "El vendedor/La vendedora ".$this->nombreVendedor." tiene ".$this->edadVendedor." años. Realizo el registro de ".$this->productosComprados." producto/s en la factura numero ".$this->numFactura.", el cual arrojo un total de ".$this->totalFactura.". Este registro fue realizado al cliente ".$this->nombreCliente." quien tiene ".$this->edad." años. ";
    }
}