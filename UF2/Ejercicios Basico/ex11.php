<?php 

class Cotxe
{
    public string $model;
    public string $marca;


        public function __construct(string $model, string $marca)
        {
        $this->model=$model;
        $this->marca=$marca;
        }

        public function descripcio(): string
        {
            return "La marca del vehiculo es:" . $this->marca . "y su modelo es" . $this->model;;
        }
}

$moto =  new Cotxe("Yamaha", "MT125");
echo $moto->descripcio();
?>