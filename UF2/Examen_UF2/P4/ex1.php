<?php

class Cotxe
{
    public $marca; //No esta tipeado el valor, basicamente seria el dato que recibe 
    public $model; //No esta tipeado el valor, basicamente seria el dato que recibe

    function __construct($marca, $model) //deberia de mejor estar tipado, pero no se si seria un error
    {
        $this->marca = $marca;
        $this->model = $model;
    }

    function descripcio() //lo mismo de tipear
    {
        return "Aquest cotxe és un " . $this->marca . " " . $this->model;
    }
}
$cotxe = new Cotxe("Toyota", "Corolla"); // Toyota = Marca y Corolla = Modelo
// No se mostraria ningun mensaje porque no se esta utilizando la funcion realmente

?>