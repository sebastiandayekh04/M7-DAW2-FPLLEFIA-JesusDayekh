<?php 

class persona{
    public string $nombre;
    public int $edad;

    public function __construct(string $nombre, int $edad)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function presentar(){
        return "Yo me llamo" . $this->nombre . " y tengo " . $this->edad;
    }
}

$personaA = new Persona("Ronaldo", 40);
$personaB = new Persona("Michael", 40);

echo $personaA->presentar();
echo $personaB->presentar();
?>