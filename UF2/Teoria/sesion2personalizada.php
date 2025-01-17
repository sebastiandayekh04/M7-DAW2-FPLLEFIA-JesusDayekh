<?php
class Cotxe
{
    public string $marca;
    public string $model;
    public function descripcio(): string
    {
        return "Aquest cotxe és un " . $this->marca . " " . $this->model . ".";
    }
}


$cotxe1 = new Cotxe();

$cotxe1->marca = "Volvo";
$cotxe1->model = "XC60";

$cotxe2 = new Cotxe();

$cotxe2->marca = "Toyota";

echo $cotxe1->descripcio();
