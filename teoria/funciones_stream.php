<?php 
$cadena = "Hola Mundo";
//1.longitud de caracteres --> strlen()

echo strlen($cadena);

//2. strpos

echo strpos($cadena, "mundo");
//3. str_replace
echo str_replace("mundo", "Barcelona", $cadena);
//4. strtolower
echo strtolower($cadena);
//5. strtoupper
echo strtoupper($cadena);
//6.ucfirst
echo ucfirst($cadena);
//7. ucwords
echo ucwords($cadena);
//8. trim
//elimina espacio en blanco al princio y al final de una cadena
$cadena2 = ' pepsi ocacola ';
echo trim($cadena2);
//9. substr()
//obtiene una parte de una cadena
echo substr($cadena2, 4, 4);
//10.implode
echo implode($cadena2);
?>