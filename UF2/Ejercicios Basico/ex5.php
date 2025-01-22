<?php

class Persona
{
    //Propiedades
    public string $nom;
    public int $edat;

    //metodos

    //metodo constructor
    public function __construct(string $nom, int $edat)
    {
        $this->nom = $nom;
        $this->edat = $edat;
    }
    //metodo saludar
    public function saludar(): string
    {
        return "Hola, soc " . $this->nom . " i tinc " . $this->edat . " anys. ";
    }
}

$persona1 = new Persona("Anna", 25);
echo $persona1->saludar();
