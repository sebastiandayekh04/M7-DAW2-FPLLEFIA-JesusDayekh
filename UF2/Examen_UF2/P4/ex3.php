<?php

class Calculadora
{
    //No tiene clase constructor que no es recomdable, pero tampoco es fundamental pero no tiene las variables declaradas al inicio y las sumas 
    // tampoco tienen valores, y ps lo obvio de que los datos no se mostraran en ningun lado
    // pa rematar, ni siquiera se usa una instancia de calculadora
    function sumar($a, $b)
    {
        return $a + $b; //Ademas, en vez de usar el $this->, esta usando la variable 
    }
    function restar($a, $b)
    {
        return $a - $b;
    }
}

?>