<?php
$limite = 20;
$texto = "tras la supuesta muerte del británico duque de Marlborough en la batalla de Malplaquet, que tuvo lugar en 1709";
function generarResumen($texto, $limite){
    if (strlen($texto) > $limite) {

        return substr($texto, 0, $limite) . "...";
    }
    
    return $texto;
}
?>