<?php 

class CartaUno
{
    private string $palo;
    private string $numero;
    private int $index; 

    public function __construct(string $numero, string $palo, int $index )
    {
        $this->palo = $palo;
        $this->numero = $numero;
        $this->index = $index;
    }

    public function pintar_carta() : string
    {
        return "<img src=\"./images/{$this->numero}_{$this->palo}.png\">";

    }

    public function pintar_carta_link() : string
    {
        return "<a href=\"#\"><img src=\"./images/{$this->numero}_{$this->palo}.png\" class=\"btn-imagen\"></a>";

    }

    public function pintar_carta_girada() : string
    {
        return "<img src=\"./images/carta_girada.png\">";

    }
}
?>