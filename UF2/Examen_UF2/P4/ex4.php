<?php

class Animal
{
    public $nom; //se podria tipear, pero sigue funcionando

    function __construct($nom) //se podria tipear, pero sigue funcionando
    {
        $this->nom = $nom;
    }
    function getNom()
    {
        return $this->nom;
    }
}
$gos = new Animal("Toby");
echo $gos->getNom();

//falta de tipeo y ya, del resto si devuelve los datos
?>