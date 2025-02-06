<?php

class Persona
{
    public string $nom;
    public int $edat;

    function __construct(string $nom, int $edat)
    {
        $this->nom = $nom;
        $this->edat = $edat;
    }
}
$persona = new Persona("Maria", "30"); //esta pasando un int como un string, no es fatal pero es poco recomendable
echo $persona->edat;


?>