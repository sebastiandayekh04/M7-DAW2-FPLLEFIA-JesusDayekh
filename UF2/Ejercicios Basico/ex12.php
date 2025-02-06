<?php

class Cotxe
{
    public string $model;
    public string $marca;

    public function __construct(string $model = "Yamaha", string $marca = "MT125")
    {
        $this->model = $model;
        $this->marca = $marca;
    }

    public function descripcio(): string
    {
        return "La marca del vehiculo es:" . $this->marca . " y su modelo es " . $this->model;;
    }
}

$moto3 =  new Cotxe();
echo $moto3->descripcio()."<br/>";

$moto2 =  new Cotxe("YUYYYYYY");
echo $moto2->descripcio()."<br/>";

$moto =  new Cotxe("ASDASD", "ASDASDASDASFASGfg");
echo $moto->descripcio()."<br/>";

$moto->model = "Yamaha";
echo $moto->descripcio()."<br/>";

$moto->marca = "AAAAAAAA";
echo $moto->descripcio()."<br/>";
