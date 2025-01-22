<?php

class Llibre
{

    public string $autor;
    public string $titol;
    public int $any;

    public function __construct(string $titul, string $autor, int $any)
    {
        $this->titol = $titul;
        $this->autor = $autor;
        $this->any = $any;
    }

    public function descripcio(): string
    {
        return " El libro es " . $this->titol . " del autor colombiano " . $this->autor . " considerado como una de las mejores obras de la era moderna ";
    }

    public function getAny(): int
    {
        return $this->any;
    }

    public function getAutor(): string
    {
        return "El nombre del autor es " . $this->autor;
    }
}

$lib = new Llibre("Cien años de soledad", "Gabriel García Márquez", 1956);
echo $lib->descripcio();
echo $lib->getAutor();
echo $lib->getAny();


var_dump($lib->descripcio());
var_dump($lib->getAny());
