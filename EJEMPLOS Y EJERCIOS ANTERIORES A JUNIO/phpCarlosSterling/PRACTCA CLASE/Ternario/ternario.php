<?php
$camisas = intval(readline("Ingrese el numero de camisas: "));
$valor_compra = $camisas * 15000;
$descuento = ($camisas >= 3)?($total = $valor_compra - ($valor_compra * 0.20)):($total = $valor_compra - ($valor_compra * 0.10));
echo "El valor total  por la compra de $camisas camisas es de $descuento"; 