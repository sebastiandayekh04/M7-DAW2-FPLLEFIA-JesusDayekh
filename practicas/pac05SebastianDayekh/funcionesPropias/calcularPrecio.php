<?php 
function calcularTotal($precio, $cantidad, $impuesto){
    return $precio * $cantidad - ($precio * $cantidad * $impuesto);
   
    echo calcularTotal(50, 3, 1.21 );

}
?>