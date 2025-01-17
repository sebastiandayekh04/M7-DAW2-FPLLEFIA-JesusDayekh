<?php

class Llibre
{

    public string $autor = "Gabriel García Márquez";
    public string $titol = "Cien años de soledad";

    public function descripcio(): String
    {
        return " El libro es " . $this->titol . " del autor colombiano " . $this->autor . " considerado como una de las mejores obras de la era moderna ";
    }
}

$lib = new Llibre();
echo $lib->descripcio();
