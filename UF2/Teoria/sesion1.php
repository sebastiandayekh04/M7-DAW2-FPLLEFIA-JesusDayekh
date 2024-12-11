<?php 
class Saiyajin {
    public string $nombre = "Goku";
    public string $nombre2 = "Vegeta";
    public int $nivel_pelea = 1000;
    public int $nivel_pelea2 = 1050;
    public function Saludar() : int {
        return "Hola, mi nombre es " . $this->nombre;
    }

    public function NivelDePelea()  {
        return $this->nombre . " tiene un nivel de pelea de " . $this->nivel_pelea;
    }
}

$objeto1 = new Saiyajin();
var_dump($objeto1);
echo $goku->Saludar();
echo '<br>';
echo "Mi nivel de pelea es: " . $goku->NivelDePelea();
$Vegeta = new Saiyajin();
?>
