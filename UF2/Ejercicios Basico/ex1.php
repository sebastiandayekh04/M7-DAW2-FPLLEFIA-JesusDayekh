<?php  class Llibre{

public string $autor ;
public string $titol ;

        public function descripcio() : String {
            return " El libro es " . $this->titol . " del autor colombiano " . $this->autor . " considerado como una de las mejores obras de la era moderna ";
        }
}

$libro = new Llibre();
$libro -> autor = "Gabriel García Márquez";
$libro -> titol = "Cien años de soledad";

echo $libro->descripcio();
?>