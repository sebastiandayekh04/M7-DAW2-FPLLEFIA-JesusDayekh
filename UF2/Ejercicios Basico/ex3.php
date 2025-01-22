<?php

class Llibre
{

    public string $autor;
    public string $titol;

    public function __construct(string $titol, string $autor)
    {
        $this->titol = $titol;
        $this->autor = $autor;
    }

    public function descripcio(): String
    {
        return " El libro es " . $this->titol . " del autor colombiano " . $this->autor . " considerado como una de las mejores obras de la era moderna ";
    }
}

$lib = new Llibre("Cien años de soledad", "Gabriel García Márquez");
echo $lib->descripcio();
