<?php 

class Saiyayin
{
//primero modificaciones de acceso (siempre publico de momento) protected
//no dejan de ser variables $
//se pueden definir o no (null)
//public $nombre="Goku";
//public $nombre;
public string $nombre = "Goku";
public int $nivel_pelea=1000;

//primer metodo
//siempre mayusculas la primera ej Saludar();
//si queremos usar atributos o metodos de nuestra clase hay que usar el $this->
//podemos tipar la funcion, obligo a devolvrer el tipo que le pongas
public function Saludar() : string //se pone el : pa indicar que devuelva un string
{ 
    return "Hola, mi nombre es" . $this->nombre;
}
//segundo meotod

public function NivelDePelea() : int 
{
   return $this->nombre . "Tiene un nivel de" . $this->nivel_pelea;

}
}
echo $goku->Saludar();
echo '<br>';
echo "Mi nivel de pelea es " . $goku->NivelDePelea();

$objeto1 = new Saiyayin();
var_dump($objeto1);





?>